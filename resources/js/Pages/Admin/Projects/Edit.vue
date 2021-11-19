<template>
    <div style="font-size: 14px">
        <AdminLayout :user="user">
            <div class="container-fluid">
                <div class=" col-12 p-3">
                    <h4 class="text-muted">
                        <i class="fas fa-edit mx-2"></i>
                        Edit Project
                    </h4>
                </div>

                <div class="container">
                    <div >
                        <b-form @submit.prevent="submit" class="d-flex flex-column justify-content-center">
                            
                            <div class="row justify-content-between">
                                <div class="col-12 col-md-5 d-flex flex-column">
                                    <b-form-group label="Project Name" class="col-12 mt-4">
                                        <b-form-input class="" v-model="form.name" placeholder="Enter project name" style="font-size: 14px" required>
                                        </b-form-input>
                                    </b-form-group>

                                    <b-form-group label="Repository Link" class="col-12 mt-4">
                                        <b-form-input class="" v-model="form.repo_path" placeholder="Enter the repository link" style="font-size: 14px">
                                        </b-form-input>
                                    </b-form-group>
                                </div>

                                <b-form-group label="Description" class="col-12 col-md-5 mt-4">
                                    <b-form-textarea rows="4" class="" v-model="form.description" placeholder="Enter project description" style="font-size: 14px" required>
                                    </b-form-textarea>
                                </b-form-group>
                            </div>

                            <div class="row justify-content-between mt-2">
                                

                                <b-form-group label="Live Link" class="col-12 col-md-5 mt-4">
                                    <b-form-input class="" v-model="form.live_path" style="font-size: 14px" placeholder="Enter deployed link">
                                    </b-form-input>
                                </b-form-group>
                            </div>


                            <div class="d-flex flex-column justify-content-between mt-2">
                                <b-form-group label="Additional Note" class="col-12 col-md-5 mt-4">
                                    <b-form-input class="" v-model="form.note" style="font-size: 14px" placeholder="Note...">
                                    </b-form-input>
                                </b-form-group>

                                <b-form-group class="col-12 col-md-5 mt-4" label="Thumbnail" label-cols-sm="2">
                                    <b-form-file accept="image/jpeg, image/png, image/gif" v-model="form.image" id="file-default"></b-form-file>
                                </b-form-group>
                            </div>

                            <div class="col-12 col-md-5 mt-5">
                                <b-button style="background-color: rgba(47,54,95); font-size: 14px" class="border-0 p-2 px-3" @click="addTechnology()">
                                    <i class="fas fa-plus mx-1" />
                                    Add Technology
                                </b-button>
                                <span id="error" class="d-none" style="color: #b72020">* Please add atleast one technology</span>

                                <table class="table table-responsive table-striped" style="font-size: 14px">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(tech, key) in form.technologies" :key="key">
                                            <div class="d-flex flex-row justify-content-between">
                                                <b-form-input class="rounded-0" style="font-size: 14px" v-model="tech.name" placeholder="Technology name..." required>
                                                </b-form-input>

                                                <span class="p-2" @click="removeTech(key)">
                                                    <i class="fas fa-trash mx-1" />
                                                </span>
                                            </div>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-12 mt-5" style="text-align: left">
                                <b-button :href="route('admin.projects')" class="text-white border-0 p-2 px-3 mx-2" 
                                        style="background-color: rgba(47,54,95)">
                                    <i class="fas fa-save mx-1" />
                                    Go Back
                                </b-button>

                                <b-button type="submit" class="text-white border-0 p-2 px-3" 
                                        style="background-color: rgba(47,54,95)">
                                    <i class="fas fa-save mx-1" />
                                    Save
                                </b-button>
                            </div>
                        </b-form>
                    </div>
                </div>
            </div>
        </AdminLayout>
    </div>
</template>

<script>
import AdminLayout from '../../../Shared/AdminLayout.vue'
export default {
    name: 'Create',
    components: {
        AdminLayout,
    },
    data() {
        return {
            showAddProjectModal: false,
            form: this.$inertia.form({
                id: this.project.id,
                name: this.project.name,
                description: this.project.description,
                repo_path: this.project.repo_path,
                live_path: this.project.live_path,
                note: this.project.note,
                technologies: this.project.technologies,
                image: null,
            }),
        }
    },
    props: {
        user: Object,
        project: Object,
    },
    methods: {
        submit() {
            if (this.form.technologies.length > 0) {
                this.form.post(this.route('admin.projects.update', this.project.id));
            }
            else {
                document.getElementById('error').classList.remove('d-none');
                document.getElementById('error').classList.add('d-flex');

            }
        },
        addTechnology() {
            this.form.technologies.push({id: null, name: ''});
        },
        removeTech(key) {
            this.form.technologies.splice(key, 1);
        }
    }
}
</script>
<style scoped>
</style>

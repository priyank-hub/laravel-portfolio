<template>
    <div>
        <AdminLayout :user="user">
            <div class="container-fluid">
                <div class=" col-12 p-3">
                    <h4 class="text-muted">
                        <i class="fas fa-code-branch mx-2"></i>
                        Create Project
                    </h4>
                </div>

                <div class="container">
                    <div >
                        <b-form @submit.prevent="submit" class="d-flex flex-column justify-content-center">
                            <b-form-group label="Project Name" class="col-12 col-md-5 mt-5">
                                <b-form-input class="" v-model="form.name" placeholder="Enter project name" required>
                                </b-form-input>
                            </b-form-group>
                            
                            <b-form-group label="Description" class="col-12 col-md-6 mt-4">
                                <b-form-textarea rows="4" class="" v-model="form.description" placeholder="Enter project description" required>
                                </b-form-textarea>
                            </b-form-group>

                            <b-form-group label="Technologies Used" class="col-12 col-md-5 mt-4">
                                <b-form-input class="" v-model="form.name" placeholder="Enter project name" required>
                                </b-form-input>
                            </b-form-group>

                            <div class="col-12" style="text-align: right">
                                <b-button type="submit" class="text-white border-0 p-2 px-3" 
                                    style="background-color: rgba(47,54,95)">
                                    <i class="fas fa-plus mx-1" />
                                    Create
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
                name: null,
                description: null,

            }),
        }
    },
    props: {
        user: Object,
    },
    methods: {
        submit() {
            console.log(this.form);
        }
    }
}
</script>
<style scoped>
</style>

<template>
    <div>
        <AdminLayout :user="user">
            <div class="container-fluid">
                <div class=" col-12 p-3">
                    <h4 class="text-muted">
                        <i class="fas fa-code-branch mx-2"></i>
                        My Projects
                    </h4>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="">
                                <table class="table table-responsive table-striped bg-white">
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Description</th>
                                        <th>Tech-Stack</th>
                                        <th>Image</th>
                                        <th>Repository</th>
                                        <th>Preview</th>
                                        <th>Note</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-12" style="text-align: right">
                            <b-button :href="route('admin.projects.create')" class="text-white border-0 p-2 px-4" 
                                style="background-color: rgba(47,54,95)">
                                <i class="fas fa-plus mx-2" />
                                Create Project
                            </b-button>
                        </div>
                    </div>
                </div>
            </div>
        </AdminLayout>
    </div>
</template>

<script>
import AdminLayout from '../../../Shared/AdminLayout.vue'
export default {
    name: 'Projects',
    components: {
        AdminLayout,
    },
    data() {
        return {
        }
    },
    props: {
        user: Object,
    }
}
</script>
<style scoped>
</style>

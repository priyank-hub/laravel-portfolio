<template>
    <div>
        <AdminLayout :user="user">
            <div class="container-fluid">
                <div class="p-3">
                    <h4 class="text-muted">
                        <i class="fas fa-envelope-open mx-2"></i>
                        Feedback
                    </h4>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-responsive table-striped bg-white">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(feedback, key) in feedbacks" :key="key" style="font-size: 13px">
                                        <td>{{ feedback.name }}</td>
                                        <td>
                                            {{ feedback.email }}
                                        </td>
                                        <td>
                                            {{ feedback.subject }}
                                        </td>
                                        <td>
                                            {{ feedback.message }}
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
    name: 'Feedback',
    components: {
        AdminLayout,
    },
    props: {
        user: Object,
        feedbacks: Array,
    }
}
</script>
<style scoped>
</style>

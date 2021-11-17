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
            </div>
        </AdminLayout>
    </div>
</template>

<script>
import AdminLayout from '../../Shared/AdminLayout.vue'
export default {
    name: 'Feedback',
    components: {
        AdminLayout,
    },
    props: {
        user: Object,
    }
}
</script>
<style scoped>
</style>

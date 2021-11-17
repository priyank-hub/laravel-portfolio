<template>
    <div>
        <AdminLayout :user="user">
            <div class="container-fluid">
                <div class="p-3">
                    <h4 class="text-muted">
                        <i class="fas fa-chart-line mx-2"></i>
                        Analytics
                    </h4>
                </div>
            </div>
        </AdminLayout>
    </div>
</template>

<script>
import AdminLayout from '../../Shared/AdminLayout.vue'
export default {
    name: 'Analytics',
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

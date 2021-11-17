<template>
    <div>
        <AdminLayout :user="user">
            <div class="container">
                <div class="p-3">
                    <h4 class="text-muted">
                        <i class="fas fa-user mx-2"></i>
                        Profile
                    </h4>
                </div>
            </div>
        </AdminLayout>
    </div>
</template>

<script>
import AdminLayout from '../../Shared/AdminLayout.vue'
export default {
    name: 'Profile',
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

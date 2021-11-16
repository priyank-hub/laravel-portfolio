<template>
    <div>
        <AdminLayout>
            <div class="p-3" style="background-color: #ededed;">
                <div class="row justify-content-between">
                    <div class="col-6 col-md-4">
                        <span class="text-muted px-3">Dashboard</span>
                    </div>
                    <div class="col-6 col-md-4" style="text-align: right">
                        <span class="text-dark">{{ user.name }}</span>
                        <i class="fas fa-chevron-down mx-2"></i>
                    </div>
                </div>
            </div>
            <b-button :href="route('admin.logout')">
                Logout
            </b-button>
        </AdminLayout>
    </div>
</template>

<script>
import AdminLayout from '../../Shared/AdminLayout.vue'
export default {
    name: 'Home',
    components: {
        AdminLayout,
    },
    props: {
        user: Object,
    }
}
</script>

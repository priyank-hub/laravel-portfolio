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

                        <!-- <b-dropdown id="dropdown-1" class="m-md-2">
                            <template #button-content>
                                <div>
                                    <span class="text-dark">{{ user.name }}</span>
                                    <i class="fas fa-chevron-down mx-2"></i>
                                </div>
                            </template>
                            <b-dropdown-item>First Action</b-dropdown-item>
                            <b-dropdown-item>Second Action</b-dropdown-item>
                            <b-dropdown-item>Third Action</b-dropdown-item>
                            <b-dropdown-divider></b-dropdown-divider>
                            <b-dropdown-item active>Active action</b-dropdown-item>
                            <b-dropdown-item disabled>Disabled action</b-dropdown-item>
                        </b-dropdown> -->
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

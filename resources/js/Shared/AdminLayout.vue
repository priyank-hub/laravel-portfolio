<template>
    <div>
        <div class="navButton" @click="toggleSidebar()">
            <div class="position-relative">
                <i class="fas fa-bars"></i>
            </div>
        </div>

        <nav class="sidebar side" id="sidebar">
            <div class="logo p-2">
                <h1 style="margin-top: 5px">PP</h1>
            </div>

            <div class="nav flex-column p-4" id="nav-content">
                <ul class="navbar-nav navigation flex-column">
                    <li class="nav-item" :class=" isUrl('/analytics') ? 'active' : ''">
                        <a class="nav-link p-3 rounded" :href="this.route('admin.analytics')">
                            <i class="fas fa-chart-line mx-2"></i>
                            <span class="title">Analytics</span>
                        </a>
                    </li>
                    <li class="nav-item" :class="isUrl('/feedback') ? 'active' : ''">
                        <a class="nav-link p-3 rounded" :href="this.route('admin.feedback')">
                            <i class="fas fa-envelope-open mx-2"></i>
                            <span class="title">Feedbacks</span>
                        </a>
                    </li>
                    <li class="nav-item" :class=" isUrl('/projects') ? 'active' : ''">
                        <a class="nav-link p-3 rounded" :href="this.route('admin.projects')">
                            <i class="fas fa-code-branch mx-2"></i>
                            <span class="title">Projects</span>
                        </a>
                    </li>
                    <li class="nav-item" :class=" isUrl('/profile') ? 'active' : ''">
                        <a class="nav-link p-3 rounded" :href="this.route('admin.profile')">
                            <i class="fas fa-user mx-2"></i>
                            <span class="title">Profile</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="slot">
            <div class="container-fluid">
                <div class="row justify-content-between p-3" style="background-color: #ededed;">
                    <div class="col-6 col-md-4">
                        <h6 class="text-muted" style="margin-top: 10px; font-weight: 200">Dashboard</h6>
                    </div>
                    <div class="col-6 col-md-4" style="text-align: right">
                        <b-dropdown id="dropdown-1" variant="light" class="" right no-caret>
                            <template #button-content class="" style="background-color: transparent">
                                <span class="text-dark mx-2">{{ user.name }}</span>
                            </template>
                            <b-dropdown-item :href="route('home')" target="_blank">
                                Portfolio
                            </b-dropdown-item>
                            
                            <b-dropdown-item :href="route('admin.logout')">
                                Logout
                            </b-dropdown-item>
                        </b-dropdown>
                    </div>
                </div>
            </div>

            <slot />
        </div>
    </div>
</template>
<script>
export default {
    name: 'AdminLayout',
    props: {
        user: Object,
    },
    components: {

    },
    watch: {
        '$page.flash': {
            handler() {},
            deep: true,
        },
    },
    methods: {
        isUrl(...urls) {
            let currentUrl = this.$page.url;
            if (urls[0] === '') {
                return currentUrl === ''
            }

            return urls.filter(url => currentUrl.startsWith(url)).length
        },

        toggleSidebar() {
            let t = document.getElementById('sidebar');
            t.classList.toggle('sideMenuShow');
        },

        hideSidebar() {
            let t = document.getElementById('sidebar');
            t.classList.toggle('sideMenuShow');
        }
    }
}
</script>
<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    .sidebar {
        /* width: 200px;
        left: 0;
        top: 0;
        bottom: 0;
        position: fixed;
        background-color: rgba(47,54,95);
        transform: translateZ(0); */

        width: 200px;
        height: 100vh;
        position: fixed;
        z-index: 10;    
        background-color: rgba(47,54,95);
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        /* justify-content: space-between; */
        transition: 0.5s;
    }

    .sideMenuShow {
        left: 0 !important; 
        width: 200px;
    }

    .navButton {
        cursor: pointer;
        position: fixed;
        height: 30px;
        width: 35px;
        padding: 10px;
        top: 10px;
        right: 25px;
        z-index: 20;
        display: none;
    }

    @media (min-width: 992px) {
    }

    @media (max-width: 990px) {
        .navButton {
            display: block;
        }

        .sidebar {
            left: -200px;
            justify-content: space-between;
        }

        .slot {
            width: 100% !important;
            margin-left: 0px !important;
        }

    }

    /* .slot {
        margin-left: 200px;
    } */

    .slot {
        width: calc(100% - 200px);
        margin-left: 200px;
        font-family: 'Poppins';
    }

    .side {
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        /* justify-content: space-between; */
    }

    .logo {
        font-family: 'Poppins';
        /* font-size: 30px; */
        color: #fff;
        text-align: center;
        align-items: center;
        background-color: #0b0c2e;
    }

    .nav-link {
        display: block;
        position: relative;
        color: #fff !important;
    }

    .nav-link:hover {
        box-shadow: 0 14px 28px rgb(0 0 0 / 20%);
        background-color: #0b0c2e;
        color: #fff !important;
    }

    .active {
        box-shadow: 0 14px 28px rgb(0 0 0 / 20%);
        background-color: #0b0c2e;
    }

    ul li {
        margin-top: 20px;
    }
</style>
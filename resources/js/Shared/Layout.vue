<template>
    <div>

        <!-- navButton -->
        <div class="navButton" @click="toggleSidebar()">
            <div class="position-relative">
                <i class="fas fa-bars"></i>
            </div>
        </div>

        <!-- navigation bar -->
        <nav class="nav_wrapper" id="nav_wrapper">
            <div class="logo p-3">
                PP
            </div>
            
            <div class="nav flex-column p-4" id="nav-content">
                <ul class="navbar-nav navigation flex-column">
                    <li class="nav-item" @click="hideSidebar()">
                        <a class="nav-link py-3 rounded" href="#intro">
                            <i class="fas fa-home"></i>
                            <span class="title">Home</span>
                        </a>
                    </li>
                    <li class="nav-item" @click="hideSidebar()">
                        <a class="nav-link py-3 rounded" href="#about">
                            <i class="fas fa-user"></i>
                            <div class="title">About</div>
                        </a>
                    </li>
                    <li class="nav-item" @click="hideSidebar()">
                        <a class="nav-link py-3 rounded" href="#skills">
                            <i class="fas fa-code"></i>
                            <div class="title">Skills</div>
                        </a>
                    </li>
                    <li class="nav-item" @click="hideSidebar()">
                        <a class="nav-link py-3 rounded" href="#works">
                            <i class="fas fa-code-branch"></i>
                            <div class="title">Works</div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="nav-item m-3" @click="hideSidebar()">
                <a class="nav-link py-3 rounded" href="#contact">
                    <i class="fas fa-address-card"></i>
                    <div class="title">
                        Contact
                    </div>
                </a>
            </div>
        </nav>

        <!-- main content -->
        <div class="slot">
            <Introduction id="intro"/>
            <AboutMe id="about"/>
            <Skills id="skills" />
            <Works id="works"/>
            <Contact id="contact"/>
        </div>
    </div>
</template>
<script>
import Introduction from '../Pages/Introduction.vue'
import AboutMe from '../Pages/AboutMe.vue'
import Skills from '../Pages/Skills.vue'
import Works from '../Pages/Works.vue'
import Contact from '../Pages/Contact.vue'

export default {
    name: 'Layout',
    props: {

    },
    components: {
        Introduction,
        AboutMe,
        Skills,
        Works,
        Contact,
    },
    data() {
        return {
            hover: false,
            flag: 0,
        }
    },
    methods: {
        toggleSidebar() {
            let t = document.getElementById('nav_wrapper');
            t.classList.toggle('sideMenuShow');
        },

        hideSidebar() {
            let t = document.getElementById('nav_wrapper');
            t.classList.toggle('sideMenuShow');
        }
    }
}
</script>
<style scoped>
    .nav_wrapper {
        width: 100px;
        height: 100vh;
        position: fixed;
        z-index: 10;    
        background-color: #942fe9;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        transition: 0.5s;
    }

    .sideMenuShow {
        left: 0 !important; 
        width: 200px;
    }

    @media (min-width: 992px) {
        .nav_wrapper:hover {
            width: 200px;
        }
    }

    @media (max-width: 990px) {
        .nav_wrapper {
            left: -200px;
            justify-content: space-between;
        }

        .slot {
            width: 100% !important;
            margin-left: 0px !important;
        }

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

    @media (max-width: 990px){
        .navButton {
            display: block;
        }

        .title {
            display: block !important;
            margin-top: 10px !important;
            font-size: 13px !important;
        }
    }

    .nav-link {
        display: block;
        position: relative;
        color: #fff !important;
    }

    .nav-link:hover {
        box-shadow: 0 14px 28px rgb(0 0 0 / 20%);
        background-color: #9D69E5;
        color: #fff !important;
    }

    .nav_wrapper:hover .title {
        display: block;
        font-size: 14px;
    }


    .logo {
        font-family: 'Poppins';
        font-size: 40px;
        color: #fff;
        text-align: center;
        background-color: #782fb5;
    }

    .title {
        display: none;
    }

    .active a{
        color: white !important;
    }

    .slot {
        width: calc(100% - 80px);
        margin-left: 80px;
    }
</style>
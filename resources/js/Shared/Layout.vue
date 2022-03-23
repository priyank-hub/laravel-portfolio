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
            <Link class="logo p-3 text-white" :href="this.route('home')">
                PP
            </Link>
            
            <div class="nav flex-column p-4" id="nav-content">
                <ul class="navbar-nav navigation flex-column">
                    <li class="nav-item" @click="hideSidebar()">
                        <Link class="nav-link py-3 rounded" :href="this.route('home')">
                            <i class="fas fa-home"></i>
                            <span class="title">Home</span>
                        </Link>
                    </li>
                    <li class="nav-item" @click="hideSidebar()">
                        <Link class="nav-link py-3 rounded" :href="this.route('about')">
                            <i class="fas fa-user"></i>
                            <div class="title">About</div>
                        </Link>
                    </li>
                    <li class="nav-item" @click="hideSidebar()">
                        <Link class="nav-link py-3 rounded" :href="this.route('skills')">
                            <i class="fas fa-code"></i>
                            <div class="title">Skills</div>
                        </Link>
                    </li>
                    <li class="nav-item" @click="hideSidebar()">
                        <Link class="nav-link py-3 rounded" :href="this.route('works')">
                            <i class="fas fa-code-branch"></i>
                            <div class="title">Works</div>
                        </Link>
                    </li>
                </ul>
            </div>

            <div class="nav-item m-3" @click="hideSidebar()">
                <a class="nav-link py-3 rounded" :href="this.route('contact')">
                    <i class="fas fa-address-card"></i>
                    <div class="title">
                        Contact
                    </div>
                </a>
            </div>
        </nav>
        <div class="slot">
            <div class="mx-4 mx-md-5">
                <div class="pt-5" style="text-align: left">
                    <span style="font-family: 'Dancing Script', cursive; font-size: 14px">
                        <span><</span> <span>body</span> <span>></span>
                    </span>
                </div>
            </div>

            <transition name="slide-fade">
                <slot />
            </transition>

            <div class="mx-4 mx-md-5">
                <div class="pb-5" style="text-align: left">
                    <span style="font-family: 'Dancing Script', cursive; font-size: 14px">
                        <span></</span> <span>body</span> <span>></span>
                    </span>
                </div>
            </div>
        </div>

        <div style="position: fixed; bottom: 30px; right: 30px" v-if="this.$page.url !== '/contact'">
            <div class="mt-5" style="margin-left: auto; text-align: right">
                <Link class="border-0 p-3" :href="goToPage()"
                            style="background-color: #8444df; border-radius: 50%">
                    <span class="">
                        <img src="/assets/right-chevron.png" style="height: 17px" class="" alt="">
                    </span>
                </Link>
            </div>
        </div>
    </div>
</template>
<script>
// import Flash from './Flash.vue'
import { Link } from '@inertiajs/inertia-vue'

export default {
    name: 'Layout',
    props: {

    },
    components: {
        Link
    },
    mounted() {
        console.log(this.$page.props);
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
        },
        goToPage() {
            if (this.$page.url === '/') {
                return this.route('about');
            }
            else if (this.$page.url === '/about') {
                return this.route('skills');
            }
            else if (this.$page.url === '/skills') {
                return this.route('works');
            }
            else if (this.$page.url === '/works') {
                return this.route('contact');
            }
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
    .success {
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 15px 25px;
        min-width: 300px;
        overflow: hidden;
        font-size: 14px;
        color: #3c763d;
        background: #dff0d8;
        border-radius: 5px;
        border-left: 6px solid #3c763d;
    }

    .error {
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 15px 20px;
        min-width: 300px;
        overflow: hidden;
        font-size: 14px;
        color: #a94442;
        background: #f2dede;
        border-radius: 5px;
        border-left: 6px solid #a94442;
    }

    /* .v-enter-active,
    .v-leave-active {
        transition: opacity 0.5s ease;
    }

    .v-enter-from,
    .v-leave-to {
        opacity: 0;
    } */

    .slide-fade-enter-active {
        transition: all .3s ease;
    }
    .slide-fade-leave-active {
        /* opacity: 0.5; */
        transition: all .45s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    }
    .slide-fade-enter, .slide-fade-leave-to {
        transform: translateX(-15%);
        opacity: 0;
    }
</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
#app {
  font-family: 'Poppins';
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  background: #f7f7f7;
}
.bg-intro {
    background-image: url('/assets/background.svg');
    background-position: center top;
    background-size: 100% auto; 
    background-repeat: no-repeat;
}
/* Header */
.menu-link {
    font-weight: 600;
    cursor: pointer;
}
button:focus {
  outline: none !important;
  box-shadow: none !important;
}

a {
  color: #0000008c !important;
  text-decoration: none !important;
}
a:hover {
  color: #222 !important;
}

.nav_wrapper a:hover {
    color: #fff !important;
}

a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background-image: linear-gradient(90deg,#833ab4,#fd1d1d 50%,#fcb045);;
  opacity: 0;
  transition: opacity 300ms, transform 300ms;
}
a {
  display: block;
  position: relative;
  padding: 0.2em 0;
}
span a::after {
  opacity: 1;
  transform: scale(0);
  transform-origin: center;
}
span a:hover::after,
span a:focus::after{
  transform: scale(1);
}

.introduction {
    margin-top: 3rem ;
    margin-bottom: 3rem ;
  }
@media (max-width: 768px) {

  .introduction {
    margin-top: 20px ;
    margin-bottom: 20px ;
  }
}
</style>
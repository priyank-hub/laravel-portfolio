<template>
    <div>
        <div class="container cont" style="min-height: 100vh">
            <div class="border-bottom col-12 head" style="">
                <span style="letter-spacing: 2px">
                    <span style="font-size: 30px; color: #942fe9;">
                        <i class="fas fa-code mx-1" style="transform: rotate(90deg)"></i>
                    </span>
                    <span style="font-size: 16px">KILLS</span>
                    <span class="mx-3">&</span>
                    <span style="font-size: 30px; color: #942fe9;">
                        <i class="fa-solid fa-e"></i>
                    </span>
                    <span style="font-size: 16px">
                        XPERIENCE
                    </span>
                </span>
            </div>
            
            <div class="col-12">
                <div class="row align-items-center">
                    <div class="col-12 col-md-12 col-lg-8 my-3">
                        <b-card title="" sub-title="" class="border-0 p-4 cards" style="border-radius: 30px; background-color: transparent">
                            <div class="container px-0">
                                <div class="skill-grid">
                                    <div class="border d-flex flex-column skill p-2 d-none" v-for="skill in skills" :key="skill.url">
                                        <b-link :href="skill.website" class="row" target="_blank">
                                            <span class="col-12">
                                                <img :src="skill.url" alt="" style="height: 35px">
                                            </span>
                                            <span class="col-12 py-1 pb-2" style="font-size: 12px; color: #222">
                                                {{ skill.name }}
                                            </span>
                                        </b-link>
                                    </div>
                                </div>
                            </div>
                        </b-card>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-12 py-3">
                                    <b-card title="" sub-title="" class="skill border-0 p-2 px-1 cards d-none" style="border-radius: 20px; background-color: #fff">
                                        <b-card-title>
                                            <div class="border-bottom pb-1" style="text-align: left">
                                                <span class="text-dark" style="font-size: 16px; font-weight: 700">
                                                    Frontend developer
                                                </span>
                                            </div>
                                        </b-card-title>
                                        <div class="text-left text-muted mt-3">
                                            <span style="font-size: 14px">Taliup</span><br>
                                            <span style="font-size: 12px" class="">
                                                July 2021 - Present
                                            </span>
                                            <div class="mt-3">
                                                <span style="font-size: 13px">
                                                    An all-in-one order and pay solution for Canadian Restaurants, Hotels, and Retail merchants.
                                                </span>
                                            </div>
                                        </div>
                                    </b-card>
                                </div>
                                <div class="col-12 col-md-6 col-lg-12 py-1">
                                    <b-card title="" sub-title="" class="skill border-0 p-2 px-3 cards d-none" style="border-radius: 20px; background-color: #fff">
                                        <b-card-title>
                                            <div class="border-bottom pb-1" style="text-align: left">
                                                <span class="text-dark" style="font-size: 16px; font-weight: 700">
                                                    Full stack developer
                                                </span>
                                            </div>
                                        </b-card-title>
                                        <div class="text-left text-muted mt-3">
                                            <span style="font-size: 14px">Codepaper</span><br>
                                            <span style="font-size: 12px" class="">
                                                Jan 2020 - May 2021
                                            </span>
                                            <div class="mt-3">
                                                <span style="font-size: 13px">
                                                    Codepaper offers you a one in all solution for all your tech needs.
                                                    Adds value to businesses through their custom software development.
                                                </span>
                                            </div>
                                        </div>
                                    </b-card>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="position: fixed; bottom: 20px; right: 30px">
                <div class="mt-5" style="margin-left: auto; text-align: right">
                    <Link class="border-0 p-3" :href="this.route('works')"
                                style="background-color: #8444df; border-radius: 50%">
                        <span class="">
                            <img src="/assets/right-chevron.png" style="height: 17px" class="" alt="">
                        </span>
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Layout from '../Shared/Layout.vue'
import { Link } from '@inertiajs/inertia-vue'
export default {
    name: 'Skills',
    props: {

    },
    components: {
        Link,
    },
    layout: Layout,
    data() {
        return {
            skills: [
                {
                    url: '/assets/skills/html.svg',
                    name: 'HTML', 
                    website: 'https://www.w3schools.com/html/'
                },
                {
                    url: '/assets/skills/css.png',
                    name: 'CSS',
                    website: 'https://www.w3schools.com/css/'
                },
                {
                    url: '/assets/skills/js.png',
                    name: 'Javascript',
                    website: 'https://www.w3schools.com/js/DEFAULT.asp'
                },
                {
                    url: '/assets/skills/laravel.svg',
                    name: 'Laravel',
                    website: 'https://laravel.com/'
                },
                {
                    url: '/assets/skills/sass.svg',
                    name: 'Sass',
                    website: 'https://sass-lang.com/'
                },
                {
                    url: '/assets/skills/vue.svg',
                    name: 'Vue',
                    website: 'https://vuejs.org/'
                },
                {
                    url: '/assets/skills/react.svg',
                    name: 'React',
                    website: 'https://reactjs.org/'
                },
                {
                    url: '/assets/skills/flutter.svg',
                    name: 'Flutter',
                    website: 'https://flutter.dev/'
                },
                {
                    url: '/assets/skills/java.svg',
                    name: 'Java',
                    website: 'https://www.java.com/en/'
                },
                {
                    url: '/assets/skills/git.png',
                    name: 'Git',
                    website: 'https://git-scm.com/'
                },
                {
                    url: '/assets/skills/dbms.png',
                    name: 'DBMS',
                    website: 'https://www.javatpoint.com/dbms-tutorial'
                },
                {
                    url: '/assets/skills/c++.png',
                    name: 'C++',
                    website: 'https://www.cplusplus.com/'
                },
                {
                    url: '/assets/skills/springboot.svg',
                    name: 'Spring',
                    website: 'https://spring.io/'
                },
                {
                    url: '/assets/skills/c.png',
                    name: 'C',
                    website: 'https://www.tutorialspoint.com/cprogramming/index.htm'
                }
            ]
        }
    },
    mounted() {
        console.log('mounted');
        let skills = document.querySelectorAll('.skill')
        let i = 0;
        skills.forEach(skill => {
            setTimeout(function() {
                skill.classList.remove('d-none');
                skill.classList.add("zoomIn");
            },100 * i);
            i++;
        });
    },
    methods: {

    }
}
</script>
<style scoped>
.head {
    text-align: left; 
    /* margin-bottom: 90px; */
}

.cont {
    display: flex;
    flex-direction: column;
    padding-top: 50px;
    align-items: center;
    position: relative;
}

.skill {
    border-radius: 15px;
    border: none !important;
    box-shadow: 0px 10px 10px rgb(0 0 0 / 5%);
    cursor: pointer;
    transition: 0.3s;
    background-color: #fff;
    /* transition:  2s ease-in; */
}

.skill:hover {
    transform: translateY(-15%);
}

.skill-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
    grid-column-gap: 60px;
    grid-row-gap: 50px;
}

@media (max-width: 767px) {
    .skill-grid {
        row-gap: 15px;
        -webkit-column-gap: 15px;
        column-gap: 15px;
    }

    .cards {
        background-color: transparent;
    }

    .head {
        /* margin-bottom: 50px; */
    }

    .cont {
        padding-top: 15px !important;
    }
}

@keyframes zoomIn {
  from {
    opacity: 0;
    transform: scale3d(0.3, 0.3, 0.3);
  }

  50% {
    opacity: 1;
  }
}

.zoomIn {
  animation-name: zoomIn;
  animation-duration: 1s;
  animation-iteration-count: 1;
}

.text-left {
    text-align: left;
}
</style>

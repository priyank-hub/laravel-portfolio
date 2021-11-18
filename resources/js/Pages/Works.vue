<template>
    <div class="container cont" style="min-height: 100vh">
        <div class="border-bottom col-12 head" style="">
            <span style="letter-spacing: 2px">
                <span style="font-size: 30px; color: #942fe9;">
                    <i class="fas fa-code-branch mx-1"></i>
                </span>
                <span style="font-size: 16px">ORKS</span>
            </span>
        </div>
        
        <div class="col-12">
            <b-card title="" sub-title="" class="border-0 p-4 cards" style="border-radius: 30px">
                <div class="d-flex flex-column">

                    <div class="col-12 container my-4" v-for="work in works" :key="work">
                        <div class="border row work p-2">
                            <div class="col-12 col-md-5 my-3">
                                <img :src="work.img" alt="" width="100%" style="border-radius: 20px">
                            </div>
                            <div class="col-12 col-md-7 my-3" style="color: black; text-align: left">
                                <div>
                                    <h5 class="border-bottom" style="letter-spacing: 1px">
                                        {{ work.name.toUpperCase() }}
                                    </h5>
                                </div>
                                <div>
                                    <span class="" style="font-size: 16px; letter-spacing: 1px">Tech Stack: </span>
                                    <span class="" style="letter-spacing: 2px; color: #942fe9;">
                                        {{ work.tech }}
                                    </span>
                                </div>
                                <div class="mt-2">
                                    <ul>
                                        <li v-for="des in work.desc" :key="des" class="my-3">
                                            <span style="font-size: 15px;">
                                                {{ des }}
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex flex-row mt-3">
                                    <div class="col-6 text-center">
                                        <b-link :href="work.git" target="_blank" style="font-weight: 700; color: #942fe9 !important; text-decoration: underline !important">
                                            Repository
                                        </b-link>
                                    </div>
                                    <div v-if="work.live" class="col-6 text-center">
                                        <b-link :href="work.live" target="_blank" style="font-weight: 700; color: #942fe9 !important; text-decoration: underline !important">
                                            Preview
                                        </b-link>
                                    </div>
                                </div>
                            </div>
                            <div v-if="work.note" class="note" style="text-align: left">
                                <span style="font-size: 12px">
                                    *{{ work.note }}
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </b-card>
        </div>
    </div>
</template>
<script>
import Layout from '../Shared/Layout.vue'
export default {
    name: 'Works',
    props: {

    },
    layout: Layout,
    components: {

    },
    data() {
        return{
            works: [
                {
                    name: 'Bluesphere Project',
                    img: 'assets/works/bluesphere.png',
                    tech: 'Vue, PHP Laravel, MySql, Blade',
                    desc: [
                        'This project is comprises of two sides, admin and user. (Multi Auth System in Laravel Framework)',
                        'Mainly focuses on the Lead Management System where admin can post leads for their users based on their package type.',
                        'Supports Subscription, Authentication, Admin Analytics such as functions.'
                    ],
                    git: 'https://github.com/sagar1708/BlueSphere_Project',
                    note: null,
                },
                {
                    name: 'Bookstore Project',
                    img: 'assets/works/bookstore.png',
                    tech: 'React, REST API, Java Spring Framework',
                    desc: [
                        'This project consists of a backend built in Java Spring boot and UI is rendered using React framework.',
                        'Built REST API for this project in Java and used IBM db2 for database.',
                        'Supports Cart, Checkout and Payment functionalities.'
                    ],
                    git: 'https://github.com/priyank-hub/Charizard-4413-FrontEnd',
                    live: 'https://charizard-4413-front-end.vercel.app/',
                    note: 'All functionalities won\'t work now as the IBM db2 was just for trial version.',
                },
                {
                    name: 'WeatherInfo',
                    img: 'assets/works/weatherinfo.png',
                    tech: 'HTML, CSS, Javascript, OpenWeatherMap API',
                    desc: [
                        'My first Independant project to test my skills in Javascript especially',
                        'Weatherinfo is a web application designed to keep track of live weather forecast in any city around the world using the OpenWeatherMap API',
                        'Uses basic HTML, Javascript and touch of CSS'
                    ],
                    git: 'https://github.com/priyank-hub/weatherinfo',
                    live: 'https://priyank-hub.github.io/weatherinfo/event.html',
                    note: 'It wont be a fully responsive website, works well in laptops',
                },

            ]
        }
    },
    methods: {

    }
}

</script>
<style scoped>
    .cont {
        display: flex;
        flex-direction: column;
        padding-top: 50px;
        align-items: center;
        position: relative;
    }

    .head {
        text-align: left; 
        margin-bottom: 20px;
    }

    .work {
        border-radius: 15px;
        /* border: none !important; */
        box-shadow: 0px 10px 10px rgb(0 0 0 / 10%);
        transition: 0.3s;
        background-color: #fff;
    }

    @media (max-width: 767px) {
       .cards {
            padding: 0px !important;
            background-color: transparent;
        }

        .cont {
            padding-top: 15px !important;
        }
    }
</style>
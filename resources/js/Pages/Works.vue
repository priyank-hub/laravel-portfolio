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
            <b-card title="" sub-title="" class="border-0 p-4 cards bg-transparent" style="border-radius: 30px">
                <div class="d-flex flex-column">
                    <div style="text-align: left">
                        <span style="font-size: 22px">
                            Projects
                        </span>
                        <span class="text-muted" style="font-size: 12px">
                            I've worked on
                        </span>
                    </div>
                    <v-app class="">
                        <v-container>
                            <div class="row justify-content-around">
                                <div class="col-12 col-md-5 col-lg-5" v-for="work in projects" :key="work.id">
                                    <v-card
                                        class="works d-none"
                                        max-width="500"
                                        elevation="4"
                                    >
                                        <v-img v-if="work.image_path"
                                        :src="`/storage/${work.image_path}`"
                                        height="200px"
                                        ></v-img>

                                        <v-img v-else
                                        src="assets/works/no-preview.png"
                                        height="200px"
                                        ></v-img>

                                        <v-card-title>
                                            {{ work.name }}
                                        </v-card-title>

                                        <v-card-subtitle>
                                            
                                        </v-card-subtitle>

                                        <v-card-actions class="py-3">
                                            <v-btn
                                            text
                                            color="indigo lighten-1"
                                            class="text-white"
                                            v-if="work.repo_path"
                                            :href="work.repo_path"
                                            target="_blank"
                                            >
                                                <v-icon left>
                                                    mdi-code-tags
                                                </v-icon>
                                                Repo
                                            </v-btn>

                                            <v-btn
                                            text
                                            color="indigo lighten-1"
                                            class="text-white mx-4"
                                            v-if="work.live_path"
                                            :href="work.live_path"
                                            target="_blank"
                                            >
                                                <v-icon left>
                                                    mdi-eye
                                                </v-icon>
                                                Preview
                                            </v-btn>

                                            <v-spacer></v-spacer>

                                            <v-btn
                                            class="mx-2"
                                            fab
                                            dark
                                            small
                                            
                                            v-b-toggle="'work' + work.id"
                                            color="indigo more"
                                            >
                                                <v-icon dark>
                                                    mdi-plus
                                                </v-icon>
                                            </v-btn>
                                        </v-card-actions>

                                        <b-collapse :id="'work' + work.id">
                                            <v-expand-transition>
                                                <div class="px-4 pb-4" style="text-align: left">
                                                    <v-divider></v-divider>
                                                    <ul class="" style="text-align: left">
                                                        <li v-for="(desc, key) in work.description.split('.')" v-if="key != work.description.split('.').length - 1" :key="key" class="my-3" style="list-style-type: none">
                                                            <span style="font-size: 15px;">
                                                                {{ desc }}.
                                                            </span>
                                                        </li>
                                                    </ul>

                                                    <!-- {{ work.description.split('.') }} -->
                                                    
                                                    <div v-if="work.note" class="my-3" style="text-align: left">
                                                        <span style="font-size: 12px">  
                                                            *{{ work.note }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </v-expand-transition>
                                        </b-collapse>
                                    </v-card>
                                </div>
                            </div>
                        </v-container>
                    </v-app>
                </div>
            </b-card>
        </div>

        <div class="col-12">
            <b-card title="" sub-title="" class="border-0 p-4 cards bg-transparent" style="border-radius: 30px">
                <div class="d-flex flex-column">
                    <div style="text-align: left; position: sticky; top: 0px">
                        <span style="font-size: 22px">
                            UI Components
                        </span>
                        <span class="text-muted" style="font-size: 12px">
                            You can take a look at.
                        </span>
                    </div>
                    <v-app class="">
                        <v-container>
                            <div class="row justify-content-around work-cards" style="">
                                <div class="col-12 col-md-5 col-lg-5 mt-3" v-for="work in uicomponents" :key="work.id">
                                    <v-card
                                        class="works d-none"
                                        max-width="500"
                                        elevation="4"
                                    >
                                        <v-img v-if="work.image_path"
                                        :src="work.image_path"
                                        height="200px"
                                        ></v-img>

                                        <v-img v-else
                                        src=""
                                        height="200"
                                        ></v-img>

                                        <v-card-title>
                                            {{ work.name }}
                                        </v-card-title>

                                        <v-card-subtitle>
                                            
                                        </v-card-subtitle>

                                        <v-card-actions class="py-3">
                                            <v-btn
                                            text
                                            color="indigo lighten-1"
                                            class="text-white"
                                            v-if="work.repo_path"
                                            :href="work.repo_path"
                                            target="_blank"
                                            >
                                                <v-icon left>
                                                    mdi-code-tags
                                                </v-icon>
                                                Repo
                                            </v-btn>

                                            <v-btn
                                            text
                                            color="indigo lighten-1"
                                            class="text-white mx-4"
                                            v-if="work.live_path"
                                            :href="work.live_path"
                                            target="_blank"
                                            >
                                                <v-icon left>
                                                    mdi-eye
                                                </v-icon>
                                                Preview
                                            </v-btn>

                                            <v-spacer></v-spacer>

                                            <v-btn
                                            class="mx-2"
                                            fab
                                            dark
                                            small
                                            
                                            v-b-toggle="'ui' + work.id"
                                            color="indigo more"
                                            >
                                                <v-icon dark>
                                                    mdi-plus
                                                </v-icon>
                                            </v-btn>
                                        </v-card-actions>

                                        <b-collapse :id="'ui' + work.id">
                                            <v-expand-transition>
                                                <div class="px-4 pb-4" style="text-align: left">
                                                    <v-divider></v-divider>
                                                    <ul class="" style="text-align: left">
                                                        <li v-for="(desc, key) in work.description" :key="key" class="my-3" style="list-style-type: none">
                                                            <span style="font-size: 15px;">
                                                                {{ desc }}
                                                            </span>
                                                        </li>
                                                    </ul>

                                                    <!-- {{ work.description.split('.') }} -->
                                                    
                                                    <div v-if="work.note" class="my-3" style="text-align: left">
                                                        <span style="font-size: 12px">  
                                                            *{{ work.note }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </v-expand-transition>
                                        </b-collapse>
                                    </v-card>
                                </div>
                            </div>
                        </v-container>
                    </v-app>
                </div>
            </b-card>
        </div>
    </div>
</template>
<script>
import Layout from '../Shared/Layout.vue'
import '@mdi/font/css/materialdesignicons.css'
import 'vuetify/dist/vuetify.min.css'

export default {
    name: 'Works',
    props: {
        projects: Array,
    },
    layout: Layout,
    components: {

    },
    data() {
        return{
            descriptions: [],
            index: 0,
            uicomponents: [
                {
                    id: 1,
                    image_path: '/assets/works/nft.png',
                    name: 'NFT Preview Card',
                    repo_path: 'https://github.com/priyank-hub/NFT_Preview_Card',
                    live_path: 'https://lucid-gates-2f9285.netlify.app/',
                    description: [

                    ],
                    note: '',
                },
                {                    
                    id: 2,
                    image_path: '/assets/works/gitfinder.png',
                    name: 'GitFinder',
                    repo_path: 'https://github.com/priyank-hub/github_users_search',
                    live_path: 'https://githubbfinderr.netlify.app/',
                    description: [

                    ],
                    note: '',
                },
                {
                    id: 3,
                    image_path: '/assets/works/products.png',
                    name: 'Product Page',
                    repo_path: 'https://github.com/priyank-hub/e-commerce-product-page',
                    live_path: 'https://priceless-feynman-3c8537.netlify.app/',
                    description: [

                    ],
                    note: '',
                },
                {
                    id: 4,
                    image_path: '/assets/works/countries.png',
                    name: 'REST API Countries',
                    repo_path: 'https://github.com/priyank-hub/REST_countries_API',
                    live_path: 'https://gifted-lewin-d7829b.netlify.app/#/',
                    description: [

                    ],
                    note: '',
                }
            ],
            show: false,
        }
    },
    mounted() {
        this.projects.forEach(project => {
            let arr = project.description.split('.');
            this.descriptions[project.id] = arr;
            this.index += 1;
        });
        
        console.log('projects', this.descriptions);

        let skills = document.querySelectorAll('.works')
        let i = 0;
        skills.forEach(skill => {
            setTimeout(function() {
                skill.classList.remove('d-none');
                skill.classList.add("zoomIn");
            },300 * i);
            i++;
        });
    },
    methods: {
        reserve () {
            this.loading = true

            setTimeout(() => (this.loading = false), 2000)
        },
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

    .works {
        transition: 0.3s;
        border-radius: 20px;
    }

    @media (max-width: 767px) {
       .cards {
            padding: 0px !important;
            background-color: transparent;
        }

        .cont {
            padding-top: 15px !important;
        }

        #app {
            background-color: transparent !important;
        }

        .card-body {
            padding: 0px !important;
        }

        .more {
            box-shadow: 0px 10px 10px rgb(0 0 0 / 10%) !important;
        }

        .work-cards{
            display: flex;
            flex-direction: row !important;
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
</style>
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

                    <div class="d-none col-12 container my-4" v-for="work in projects" :key="work.id">
                        <div class="border row work p-2">
                            <div class="col-12 col-md-5 my-3">
                                <img v-if="work.image_path" :src="`/storage/${work.image_path}`" alt="" width="100%" style="border-radius: 20px">
                                <img v-else src="assets/works/no-preview.png" alt="" width="100%" style="border-radius: 20px">
                            </div>
                            <div class="col-12 col-md-7 my-3" style="color: black; text-align: left">
                                <div>
                                    <h5 class="border-bottom" style="letter-spacing: 1px">
                                        {{ work.name.toUpperCase() }}
                                    </h5>
                                </div>
                                <div>
                                    <span class="" style="font-size: 16px; letter-spacing: 0px">Tech Stack </span>
                                    <span class="" v-for="(tech, key) in work.technologies" :key="key" style="letter-spacing: 0px; color: #942fe9;">
                                        <span v-if="key != work.technologies.length - 1">
                                            {{ tech.name }},  
                                        </span>
                                        <span v-else>
                                            {{ tech.name }}
                                        </span>
                                    </span>
                                </div>
                                <div class="mt-2">
                                    <ul>
                                        <li v-for="(desc, key) in descriptions[work.id]" :key="key" v-if="key != descriptions[work.id].length - 1" class="my-3">
                                            <span style="font-size: 15px;">
                                                {{ desc }}
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex flex-row mt-3">
                                    <div v-if="work.repo_path" class="col-6 text-center">
                                        <b-link :href="work.repo_path" target="_blank" style="font-weight: 700; color: #942fe9 !important; text-decoration: underline !important">
                                            Repository
                                        </b-link>
                                    </div>
                                    <div v-if="work.live_path" class="col-6 text-center">
                                        <b-link :href="work.live_path" target="_blank" style="font-weight: 700; color: #942fe9 !important; text-decoration: underline !important">
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

                    <v-app class="">
                        <v-container>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6" v-for="work in projects" :key="work.id">
                                    <v-card
                                        class=""
                                        max-width="500"
                                        elevation="11"
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
                                                    <div class="px-4 pb-4">
                                                        <v-divider></v-divider>
<!-- 
                                                        <span v-for="(desc, key) in descriptions[work.id]" :key="key" v-if="key != descriptions[work.id].length - 1">
                                                            {{ desc }}
                                                        </span> -->
                                                        <ul class="" style="text-align: left">
                                                            <li v-for="(desc, key) in descriptions[work.id]" :key="key" v-if="key != descriptions[work.id].length - 1" class="my-3" style="list-style-type: none">
                                                                <span style="font-size: 15px;">
                                                                    {{ desc }}.
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        
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
    created() {
        console.log(this.projects);
        this.projects.forEach(project => {
            let arr = project.description.split('.');
            this.descriptions[project.id] = arr;
            this.index += 1;
        });
    },
    data() {
        return{
            descriptions: [],
            index: 0,

            show: false,
        }
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
    }

    #app {
        background-color: #fff;
    }
</style>
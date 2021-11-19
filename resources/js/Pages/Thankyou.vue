<template>
    <div class="container cont">
        <div class="col-12">
            <b-card title="" sub-title="" class="border-0 p-4 cards" style="border-radius: 30px">
                <div class="container">
                    <b-form @submit.prevent="submit" class="" style="text-align: center">
                        <h6>
                            <span style="color: #942fe9; font-size: 55px">
                                THANK YOU 
                            </span><br />
                            for contacting me!
                        </h6>

                        <div class="mt-5">
                            <span style="font-size: 15px">
                                I'll get back to you as soon as possible.
                            </span>
                            <br><br>
                            <div class="my-4">
                                <div class="row justify-content-center">
                                    <div class="col-3 col-md-2 col-lg-1">
                                        <b-button variant="" class="social bg-white border-0 rounded-circle" href="https://www.linkedin.com/in/priyank9/" target="_blank">
                                            <i class="fab fa-linkedin-in" style="color: #fff"></i>
                                        </b-button>
                                    </div>

                                    <div class="col-3 col-md-2 col-lg-1">
                                        <b-button variant="" class="social bg-white border-0 rounded-circle" href="https://github.com/priyank-hub" target="_blank">
                                            <i class="fab fa-github" style="color: #fff"></i>
                                        </b-button>
                                    </div>

                                    <div class="col-3 col-md-2 col-lg-1">
                                        <b-button variant="" class="social bg-white border-0 rounded-circle" href="https://www.facebook.com/profile.php?id=100005557957435" target="_blank">
                                            <i class="fab fa-facebook" style="color: #fff"></i>
                                        </b-button>
                                    </div>

                                    <div class="col-3 col-md-2 col-lg-1">
                                        <b-button variant="" class="social bg-white border-0 rounded-circle" href="https://www.instagram.com/patel.prynk/" target="_blank">
                                            <i class="fab fa-instagram" style="color: #fff"></i>
                                        </b-button>
                                    </div>                                
                                </div>
                            </div>
                            <span class="" style="font-size: 15px">
                                In case if its important, please give me a ping on my email
                                <br>
                                <span style="font-weight: 700">patelpriyank177@gmail.com</span>
                            </span>
                            <br><br>
                            <b-button type="submit" class="send border-0 text-white">
                                <span class="" style="font-size: 14px; letter-spacing: 2px">
                                    Go Home
                                </span>
                            </b-button>
                        </div>
                    </b-form>
                </div>
            </b-card>
        </div>
    </div>
</template>

<script>
import Layout from '../Shared/Layout.vue'
export default {
    name: 'Contact',
    props: {},
    layout: Layout,
    data() {
        return {
            resp: null,
        }
    },
    components: {

    },
    methods: {
        submit() {    
            this.$inertia.get(this.route('home'));
        }
    },

}
</script>
<style scoped>
    .cont {
        display: flex;
        flex-direction: column;
        padding-top: 70px;
        align-items: center;
        justify-content: center;
        position: relative;
        min-height: 100vh;
    }

    .head {
        text-align: left; 
        margin-bottom: 90px;
    }

    @media (max-width: 767px) {
        .cont {
            padding-top: 75px !important;
        }
        .head {
            margin-bottom: 50px;
        }

        .send{
            box-shadow: 0px 14px 28px rgb(0 0 0 / 10%);
        }

        .social{
            box-shadow: 0px 14px 28px rgb(0 0 0 / 10%);
        }
    }

    .send:hover {
        box-shadow: 0 14px 28px rgb(0 0 0 / 20%);
        color: #fff !important;
    }

    .send {
        background-color: #8444df; 
        border-radius: 30px; 
        padding: 13px 35px;
    }

    .social:hover {
        box-shadow: 0 14px 28px rgb(0 0 0 / 20%);
    }

    .social {
        background-color: #8444df !important;
        padding: 15px;
    }
</style>
<template>
    <div class="container cont">
        <div class="mb-3 mx-4 mx-md-0 w-100 text-muted" style="text-align: left">
            <span style="font-family: 'Dancing Script', cursive; font-weight: 500; font-size: 19px" class="mx-3 mx-md-0">
                <span>&lt;</span> <span>section</span> <span>></span>
            </span>
        </div>

        <div class="border-bottom col-12 head" style="">
            <span style="letter-spacing: 2px">
                <span style="font-size: 30px; color: #942fe9;">
                    <i class="fas fa-phone mx-1"></i>
                </span>
                <span style="font-size: 16px">ONTACT</span>
            </span>
        </div>

        <div class="col-12">
            <b-card title="" sub-title="" class="border-0 p-4 cards" style="border-radius: 30px">
                <div class="container">
                    <div class="mb-3 mx-md-0 w-100 text-muted" style="text-align: left">
                        <span style="font-family: 'Dancing Script', cursive; font-weight: 500; font-size: 19px" class="mx-3 mx-md-0">
                            <span>&lt;</span> <span>form</span> <span>></span>
                        </span>
                    </div>

                    <b-form @submit.prevent="submit" class="" style="text-align: left">
                        <div class="row justify-content-between">
                            <b-form-group label="Name" class="col-12 col-md-5 mt-4">
                                <b-form-input id="name" class="" v-model="form.name" placeholder="Your Name" style="border: 1px solid #e6e6e6" required>
                                </b-form-input>
                            </b-form-group>

                            <b-form-group label="Email" class="col-12 col-md-5 mt-4">
                                <b-form-input class="" v-model="form.email" placeholder="Your Email" style="border: 1px solid #e6e6e6" required>
                                </b-form-input>
                            </b-form-group>
                        </div>

                        <b-form-group label="Subject" class="col-12 col-md-12 mt-4">
                            <b-form-input class="" v-model="form.subject" placeholder="Subject (Optional)" style="border: 1px solid #e6e6e6">
                            </b-form-input>
                        </b-form-group>

                        <b-form-group label="Message" class="col-12 mt-4">
                            <b-form-textarea rows="4" class="" v-model="form.message" placeholder="Your Message" style="border: 1px solid #e6e6e6" required>
                            </b-form-textarea>
                        </b-form-group>

                        <div class="mt-5" style="text-align: center">
                            <b-button type="submit" class="send border-0 text-white">
                                <span class="" style="font-size: 14px; letter-spacing: 2px">
                                    SEND
                                </span>
                            </b-button>
                        </div>
                    </b-form>

                    <div class="my-3 mx-md-0 w-100 text-muted" style="text-align: right">
                        <span style="font-family: 'Dancing Script', cursive; font-weight: 500; font-size: 19px" class="mx-3 mx-md-0">
                            <span>&lt;/</span> <span>form</span> <span>></span>
                        </span>
                    </div>

                </div>
            </b-card>
        </div>

        <div class="my-3 mx-3 mx-md-0 w-100 text-muted" style="text-align: left">
            <span style="font-family: 'Dancing Script', cursive; font-weight: 500; font-size: 19px" class="mx-3 mx-md-0">
                <span>&lt;/</span> <span>section</span> <span>></span>
            </span>
        </div>
    </div>
</template>

<script>
import Layout from '../Shared/Layout.vue'
import axios from 'axios';
export default {
    name: 'Contact',
    props: {

    },
    layout: Layout,
    data() {
        return {
            resp: null,
            form: this.$inertia.form({
                name: null,
                email: null,
                subject: null,
                message: null,
            })
        }
    },
    components: {

    },
    methods: {
        async submit() {
            // await axios.post(this.route('admin.feedback.store', this.form))
            //     .then(response => {
            //         if (response.data.status == 200) {
                        
            //         }
            //     });
            
            // console.log(this.resp);
            // if (this.resp == 200) {
            //     window.location.href = '/'
            // }
            this.form.post(this.route('admin.feedback.store'));
        }
    },

}
</script>
<style scoped>
    .cont {
        display: flex;
        flex-direction: column;
        padding-top: 50px;
        align-items: center;
        position: relative;
        min-height: 100vh;
    }

    .head {
        text-align: left; 
        margin-bottom: 30px;
    }

    @media (max-width: 767px) {
        .cont {
            padding-top: 15px !important;
        }
        .head {
            margin-bottom: 20px;
        }

        .send{
            box-shadow: 0px 14px 28px rgb(0 0 0 / 10%);
        }

        .cards {
            padding: 0px !important;
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
</style>
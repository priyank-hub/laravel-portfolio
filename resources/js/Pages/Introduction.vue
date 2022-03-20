<template>
    <Layout>
        <div class="container cont" style="min-height: 100vh">
            <div class="d-flex flex-column" style="margin-top: 30px;">
                <div class="col-12 text-center">
                    <span class="text"> I'M A </span>
                    <div class="main-text" >
                        <span id="main-title">
                            {{ this.title.toUpperCase() }}
                        </span>
                    </div>
        
                    <div class="container" style="line-height: 2rem">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10">
                                A 
                                <span style="color: #8444df; font-weight: 700">    
                                    FRONT END 
                                </span>
                                web developer is responsible for implementing visual and interactive elements that users engage with 
                                through their web browser when using a web application. They are usually supported by back-end web developers, 
                                who are responsible for server-side application logic and integration of the work front-end developers do.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-2">
                    <div class="container">
                        <div class="row" style="justify-content: center">
                            <div class="col-12 col-md-3 mt-3">
                                <b-button class="resume border-0 text-white" href="assets/resume.pdf" target="_blank"
                                            style="background-color: #8444df; border-radius: 30px; padding: 13px 35px">
                                    <span class="" style="font-size: 14px; letter-spacing: 2px">
                                        My Resume
                                    </span>
                                </b-button>
                            </div>
                            <div class="col-12 col-md-6 mt-4">
                                <div class="row justify-content-center">
                                    <div class="col-3 col-md-2">
                                        <b-button variant="" class="social p-2 px-3 bg-white border-0 rounded" href="https://www.linkedin.com/in/priyank9/" target="_blank">
                                            <i class="fab fa-linkedin-in" style="color: #942fe9"></i>
                                        </b-button>
                                    </div>

                                    <div class="col-3 col-md-2">
                                        <b-button variant="" class="social p-2 px-3 bg-white border-0 rounded" href="https://github.com/priyank-hub" target="_blank">
                                            <i class="fab fa-github" style="color: #942fe9"></i>
                                        </b-button>
                                    </div>

                                    <div class="col-3 col-md-2">
                                        <b-button variant="" class="social p-2 px-3 bg-white border-0 rounded" href="https://www.facebook.com/profile.php?id=100005557957435" target="_blank">
                                            <i class="fab fa-facebook" style="color: #942fe9"></i>
                                        </b-button>
                                    </div>

                                    <div class="col-3 col-md-2">
                                        <b-button variant="" class="social p-2 px-3 bg-white border-0 rounded" href="https://www.instagram.com/patel.prynk/" target="_blank">
                                            <i class="fab fa-instagram" style="color: #942fe9"></i>
                                        </b-button>
                                    </div>                                
                                </div>
                            </div>
                            <!-- <div class="col-12 mt-5" style="margin-left: auto; text-align: right">
                                <a class="border-0" :href="this.route('about')"
                                            style="background-color: transparent">
                                    <span style="font-size: 13px; letter-spacing: 2px; border-bottom: 2px solid #8444df" class="text-dark p-1">
                                        About Me
                                    </span>
                                    <span class="mx-1">
                                        <img src="/assets/right-chevron.png" style="height: 12px" alt="">
                                    </span>
                                </a>
                            </div> -->
                        </div>

                        <div style="position: fixed; bottom: 20px; right: 30px">
                            <div class="mt-5" style="margin-left: auto; text-align: right">
                                <a class="border-0 p-3" :href="this.route('about')"
                                            style="background-color: #8444df; border-radius: 50%">
                                    <span class="">
                                        <img src="/assets/right-chevron.png" style="height: 17px" class="" alt="">
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </Layout>
</template>
<script>
import Layout from '../Shared/Layout.vue'
export default {
    name: "Introduction",
    props: {
    },
    components: {
        Layout,
    },
    data() {
        return {
            title: '',
            titles: ['FrontEnd Developer', 'Designer'],
            index: 0,
        }
    },
    mounted() {
        setInterval(() => {
            let i = this.index == 0 ? 1 : 0;
            this.title = this.titles[i];
            this.index = this.index == 0 ? 1 : 0;
        }, 1700);        
    },
    methods: {
        to() {
            this.$emit('scrollTo', 'about');
        },
    }
}
</script>
<style scoped>
.cont {
    display: flex;
    align-items: center;
}

.social:hover {
    box-shadow: 0 14px 28px rgb(0 0 0 / 20%);
}

.text {
    font-weight: 700;
    font-size: 18px;
    color: #222;
    letter-spacing: 5px;
}

.main-text {
    font-size: 80px;
    font-weight: 800;
    margin-top: 20px;
    margin-bottom: 20px;
    background-image: linear-gradient(90deg,#995ac4,#e74a4a 50%,#f1ac4a);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.center {
    position: absolute;
    top: 24%;
}

@media (max-width: 768px) {
    .main-text {
        font-size: 40px;
        min-height: 120px;
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .more-button {
        background-color: black !important;
        color: white !important;
    }
    .more-button .icon {
        display: inline-block !important;
        animation: fadeInLeft !important;
        animation-duration: 0.5s !important;
        animation-iteration-count: infinite !important;
    }

    .social{
        box-shadow: 0px 4px 6px rgb(134 151 168 / 10%);
    }

    .resume{
        box-shadow: 0px 14px 28px rgb(0 0 0 / 10%);
    }
}

.resume:hover {
    box-shadow: 0 14px 28px rgb(0 0 0 / 20%);
    color: #fff !important;
}


@keyframes fadeInLeft {
  from {
    opacity: 0;
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    transform: none;
  }
}

</style>

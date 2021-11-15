<template>
        <div class="container section-cont">
            <div class="border-bottom" style="text-align: left; margin-bottom: 90px">
                <span style="letter-spacing: 2px">
                    <span style="font-size: 30px; color: #942fe9">
                        <i class="fas fa-user mx-2" style="color: #942fe9"></i>
                    </span>
                    <span style="font-size: 16px">BOUT ME</span>
                </span>
            </div>
            <div class="">
                <div class="cards mx-3">
                    <b-card img-top class="border-0" style="border-radius: 30px">
                        <div class="img-wrap">
                            <img src="/assets/user.png" class="card-img-top" alt="">
                        </div>
                        <b-card-text class="my-3 py-2">
                            <span class="name">
                                Priyank Patel
                            </span>
                            <div class="mt-1">
                                <div class="info mt-2" style="">
                                    <p class="">
                                        I'm a front-end web developer with a background in computer science and software design. 
                                        My 2 years of IT experience has given me a strong foundation for web development and building complex 
                                        solutions. Recently, I graduated from York University, Toronto in Computer Science major. 
                                        I am passionate about coding and solving problems through code, 
                                        and I am excited to work alongside other amazing programmers and learn so much more!
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-lg-4 p-3 icon">
                                        <div class="row">
                                            <div class="col-12 col-md-2 sym">
                                                <i class="fas fa-phone phone"></i>
                                            </div>
                                            <div class="col-12 col-md-10 text">
                                                <span class="number"> 
                                                    +1 6479210250
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-lg-4 p-3 icon">
                                        <div class="row">
                                            <div class="col-12 col-md-2 sym">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="col-12 col-md-10 text">
                                                <span class="number"> 
                                                    Toronto, Ontario
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-lg-4 p-3 icon">
                                        <div class="row">
                                            <div class="col-12 col-md-2 sym">
                                                <i class="fas fa-graduation-cap"></i>
                                            </div>
                                            <div class="col-12 col-md-10 text">
                                                <span class="number"> 
                                                    April 2021
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                <!-- </div> -->
                                <!-- <div class="row"> -->
                                    <div class="col-6 col-md-12 col-lg-4 p-3 icon">
                                        <div class="row">
                                            <div class="col-12 col-md-2 sym">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="col-12 col-md-10 text">
                                                <span class="number"> 
                                                    patelpriyank177@gmail.com
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-lg-4 p-3 icon">
                                        <div class="row">
                                            <div class="col-12 col-md-2 sym">
                                                <i class="fas fa-suitcase"></i>
                                            </div>
                                            <div class="col-12 col-md-10 text">
                                                <span class="number"> 
                                                    2 Years Experience
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-lg-4 p-3 icon">
                                        <div class="row">
                                            <div class="col-12 col-md-2 sym">
                                                <i class="far fa-calendar-check"></i>
                                            </div>
                                            <div class="col-12 col-md-10 text">
                                                <span class="number"> 
                                                    23 Years Old
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <b-button variant="" v-b-modal.hire-modal class="more-button rounded-0 p-2 px-4 my-4">
                                    <span class="browse">
                                        HIRE ME
                                    </span>
                                    <i class="fas fa-arrow-right icon mx-2"></i>
                                </b-button>
                            </div>
                        </b-card-text>
                    </b-card>
                </div>
            </div>

            <b-modal id="hire-modal" hide-footer centered fade>
                <template #modal-header="{ close }">
                    <h3 class="m-0">HIRE ME</h3>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                        @click="close()"
                    >
                        <i class="fas fa-lg fa-times" />
                    </button>
                </template>
            </b-modal>


            <!-- <div class="modal fade" id="hire-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="m-0">Hire Me</h3>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                            @click="close()"
                        >
                            <i class="fas fa-lg fa-times" />
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>Are you sure you want to delete this contact?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" id="deleteNo" data-dismiss="modal">No</button>
                        <button type="button" class="btn btn-primary" id="deleteOk">Yes</button>
                    </div>
                    </div>
                </div>
                </div> -->
        </div>
</template>
<script>
export default {
    name: "AboutMe",
    components: {
    },
    data() {
        return {
            showHireModal: false,
        }
    }
}
</script>
<style scoped>
.section-cont {
    padding-top: 47px;
    margin-bottom: 100px;
    position: relative;
    min-height: 100vh;
}

.card-img-top {
    width: 140px;
    height: 140px;
    border-radius: 50%;
    object-fit: cover;
    background-color: #fff;
    /* box-shadow: 0 0 8px 2px #c1c1c1; */
}

.img-wrap {
    margin-top: -90px;
    z-index: 100;
}

.name {
    font-size: 45px;
    font-weight: 600;
}

.title {
    color: #989898;
    font-size: 20px;
    font-weight: 600;
}

.phone {
    transform: rotate(0deg);
}

.number {
    font-weight: 600;
    letter-spacing: 1px;
}

.more-button {
    border: 2px solid black;
    font-weight: 600;
    font-size: 14px;
    background-color: transparent;
    color: black;
}

.more-button .icon {
    display: none;
} 

.more-button:hover {
    color: white;
    background-color: black;
    border: 2px solid black;
}

.more-button:hover .icon {
    display: inline-block;
    animation: fadeInLeft;
    animation-duration: 0.5s;
    animation-iteration-count: infinite;
}

.sym {
    text-align: right;
}

.text {
    text-align: left;;
}

button.close {
    background:transparent;
    border: 0; 
}

.close:not(:disabled):not(.disabled):focus, .close:not(:disabled):not(.disabled):hover  {
    opacity: 0.75;
}

.modal-header .close {
    padding: 1rem;
    margin: -1rem -1rem -1rem auto;
}

@media (max-width: 768px) {
    .section-cont {
        margin-bottom: 30px;
    }
    .name {
        font-size: 40px;
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

    .cards {
        margin: 0px !important;
    }
    
    .info {
        text-align: center !important;
        line-height: 1.8rem !important;
        padding: 0px !important;
    }

    .icon {
        text-align: center !important;
    }

    .sym {
        text-align: center !important;
    }

    .text {
        text-align: center !important;
    }
}

.info {
    line-height: 2rem;
    text-align: center;
    padding: 10px;
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

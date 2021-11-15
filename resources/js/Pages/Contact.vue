<template>
    <div class="container cont">
        <div class="border-bottom col-12 head" style="">
            <span style="letter-spacing: 2px">
                <span style="font-size: 30px; color: #942fe9;">
                    <i class="fas fa-phone mx-1"></i>
                </span>
                <span style="font-size: 16px">ONTACT</span>
            </span>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Contact',
    props: {

    },
    components: {

    },
    methods: {

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
        margin-bottom: 90px;
    }

    @media (max-width: 767px) {
        .cont {
            padding-top: 15px !important;
        }
        .head {
            margin-bottom: 50px;
        }
    }
</style>
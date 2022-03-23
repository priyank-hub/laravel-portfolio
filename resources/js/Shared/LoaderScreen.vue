<template>
    <div class="loader-bg">
        <div id="loader">
            <!-- <b-spinner small label="Small Spinner"></b-spinner> -->
        </div>
    </div>
</template>
<style scoped>
    .loader-bg {
        position: fixed;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        z-index: 9998;
        background-color: rgb(0 0 0 / 28%);
    }
    /* Center the loader */
    #loader {
        position: absolute;
        left: 50%;
        top: 50%;
        z-index: 9999;
        width: 150px;
        height: 150px;
        margin: -75px 0 0 -75px;
        border: 8px solid #f3f3f3;
        border-radius: 50%;
        border-top: 8px solid #a264e0;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 1s linear infinite;
        animation: spin 1s linear infinite;
    }
    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    /* Add animation to "page content" */
    .animate-bottom {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 1s;
        animation-name: animatebottom;
        animation-duration: 1s
    }
    @-webkit-keyframes animatebottom {
        from { bottom:-100px; opacity:0 } 
        to { bottom:0px; opacity:1 }
    }
    @keyframes animatebottom { 
        from{ bottom:-100px; opacity:0 } 
        to{ bottom:0; opacity:1 }
    }
    #myDiv {
        display: none;
        text-align: center;
    }
    .background-purple {
        background-color: rgb(144, 83, 161);
    }
</style>
<script>
    export default {
        name: 'LoaderScreen'
    }
</script>
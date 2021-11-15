<template>
    <div>
        <Layout />
    </div>
</template>

<script>
import Layout from '../Shared/Layout.vue'
export default {
    components: {
        Layout,
    },
    props: {

    },
};
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
#app {
  font-family: 'Poppins';
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  background: #f7f7f7;
}
.bg-intro {
    background-image: url('/assets/background.svg');
    background-position: center top;
    background-size: 100% auto; 
    background-repeat: no-repeat;
}
/* Header */
.menu-link {
    font-weight: 600;
    cursor: pointer;
}
button:focus {
  outline: none !important;
  box-shadow: none !important;
}

a {
  color: #0000008c !important;
  text-decoration: none !important;
}
a:hover {
  color: #222 !important;
}
a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background-image: linear-gradient(90deg,#833ab4,#fd1d1d 50%,#fcb045);;
  opacity: 0;
  transition: opacity 300ms, transform 300ms;
}
a {
  display: block;
  position: relative;
  padding: 0.2em 0;
}
span a::after {
  opacity: 1;
  transform: scale(0);
  transform-origin: center;
}
span a:hover::after,
span a:focus::after{
  transform: scale(1);
}

.introduction {
    margin-top: 3rem ;
    margin-bottom: 3rem ;
  }
@media (max-width: 768px) {

  .introduction {
    margin-top: 20px ;
    margin-bottom: 20px ;
  }
}
</style>
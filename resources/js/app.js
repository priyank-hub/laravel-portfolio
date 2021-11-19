// require('./bootstrap');

// import Vue from 'vue'
// import { createInertiaApp } from '@inertiajs/inertia-vue'


// import { InertiaProgress } from "@inertiajs/progress";
 
// Vue.config.productionTip = false

// InertiaProgress.init()

// Vue.prototype.$route = (...args) => Route(...args).url()

// const app = document.getElementById('app')
// const pages = require.context('./', true, /\.vue$/i)

// pages
//     .keys()
//     .map((key) =>
//         Vue.component(key.split('/').pop().split('.')[0], pages(key).default),
//     )

// createInertiaApp({
//   resolve: name => require(`./Pages/${name}`),
//   setup({ el, app, props }) {
//       new Vue({
//           render: h => h(app, props),
//       }).$mount(el)
//   },
// })

import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import Route from '../../vendor/tightenco/ziggy/src/js/route.js'

import { SidebarPlugin } from 'bootstrap-vue'
Vue.use(SidebarPlugin)

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

Vue.mixin({ methods: { route: window.route } })

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props }) {
    new Vue({
      render: h => h(App, props),
    }).$mount(el)
  },
})
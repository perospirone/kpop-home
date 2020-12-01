/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = require('vue');

import VueRouter from 'vue-router'

Vue.use(VueRouter)

import { BootstrapVue, BootstrapVueIcons } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue)
Vue.use(BootstrapVueIcons)

import 'vue-awesome/icons'

import Icon from 'vue-awesome/components/Icon'

Vue.component('v-icon', Icon)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('editor', require('./components/EditorVue2.vue').default);

// Pages
let indexPage = Vue.component('index-page', require('./pages/index-page.vue').default);
let homePage  = Vue.component('home-page', require('./pages/home-page.vue').default);
let writePost = Vue.component('write-post', require('./pages/write-post.vue').default);
let postPage  = Vue.component('post-page', require('./pages/post-page.vue').default);
let profilePage = Vue.component('profile-page', require('./pages/profile-page.vue').default);
let settingsPage = Vue.component('settings-page', require('./pages/settings-page.vue').default);


import router from './routes'

const app = new Vue({
  router
}).$mount('#app')

// Now the app has started!

/*
const app = new Vue({
  el: '#app',
});*/

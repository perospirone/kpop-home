import Vue from 'vue'

import VueRouter from 'vue-router'

Vue.use(VueRouter)

// Pages
/*let indexPage = Vue.component('index-page', require('./pages/index-page.vue').default);
let homePage  = Vue.component('home-page', require('./pages/home-page.vue').default);
let writePost = Vue.component('write-post', require('./pages/write-post.vue').default);
let postPage  = Vue.component('post-page', require('./pages/post-page.vue').default);
let profilePage = Vue.component('profile-page', require('./pages/profile-page.vue').default);
let settingsPage = Vue.component('settings-page', require('./pages/settings-page.vue').default);
*/
import indexPage from './pages/index-page.vue'
import homePage from './pages/home-page.vue'

const Foo = { template: '<div>foo</div>' }

const routes = [
  { path: '/', component: indexPage },
  { path: '/home', component: homePage }
]


const router = new VueRouter({
  routes
})

export default router;

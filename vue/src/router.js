import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import film from './views/film.vue'
import serie from './views/serie.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/film',
      name: 'film',
      component: film
    },
    {
      path: '/serie',
      name: 'serie',
      component: serie
    }
  ]
})

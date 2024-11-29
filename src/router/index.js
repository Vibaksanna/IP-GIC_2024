// src/router/index.js

import { createRouter, createWebHistory } from 'vue-router';
import HomeVue from '@/views/HomeVue.vue';

const routes = [
 
 
];

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes:[
    {
      path:"/",
      component:HomeVue,
    }
  ]
});

export default router;

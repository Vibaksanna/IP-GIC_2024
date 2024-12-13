// import { createRouter, createWebHistory } from 'vue-router';
// import Page1 from '../views/Page1.vue';
// import Page2 from '../views/Page2.vue';
// import Page3 from '../views/Page3.vue';
// import Section from '../views/Section.vue';

// const routes = [
//   {
//     path: '/page1',
//     component: Page1,
//     children: [
//       { path: 'section1', component: Section },
//       { path: 'section2', component: Section },
//       { path: 'section3', component: Section },
//       { path: 'section4', component: Section },
//     ],
//   },
//   {
//     path: '/page2',
//     component: Page2,
//     children: [
//       { path: 'section1', component: Section },
//       { path: 'section2', component: Section },
//       { path: 'section3', component: Section },
//       { path: 'section4', component: Section },
//     ],
//   },
//   {
//     path: '/page3',
//     component: Page3,
//     children: [
//       { path: 'section1', component: Section },
//       { path: 'section2', component: Section },
//       { path: 'section3', component: Section },
//       { path: 'section4', component: Section },
//     ],
//   },
// ];

// const router = createRouter({
//   history: createWebHistory(),
//   routes,
// });

// export default router;

import { createRouter, createWebHistory } from 'vue-router';
import PageView from '../views/PageView.vue';
import SectionView from '../views/SectionView.vue';

const routes = [
  {
    path: '/:page',
    component: PageView,
    children: [
      {
        path: ':section',
        component: SectionView,
      },
    ],
  },
  {
    path: '/',
    redirect: '/page1', // Default route
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;


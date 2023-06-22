// require('./bootstrap');

// import { createApp, h } from 'vue';
// import { createInertiaApp } from '@inertiajs/inertia-vue3';
// import { InertiaProgress } from '@inertiajs/progress';
// // import {Breadcrumbs} from '@/Components/Breadcrumbs.vue';


// const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

// createInertiaApp({
//     title: (title) => `${title} - ${appName}`,
//     resolve: (name) => require(`./Pages/${name}.vue`),
//     setup({ el, app, props, plugin }) {
//         return createApp({ render: () => h(app, props) })
//             .use(plugin)
//             .mixin({ methods: { route } })
//             .mount(el);
//     },
// });

// InertiaProgress.init({ color: '#054232', delay: 0 });


require('./bootstrap')

import { createApp } from 'vue'
import Publish from './components/Publish'
import Functions from './components/Functions'
import Gallery from './components/Gallery'

const app = createApp({})

app.component('v-publish', Publish)
app.component('v-functions', Functions)
app.component('v-gallery', Gallery)

app.mount('#app')

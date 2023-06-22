<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3';
    import { createIcons, icons } from "lucide";

    export default defineComponent({
        components: {
            Link,
        },
        props: ['href', 'active'],
        mounted(){
            (function () {
    "use strict";

    // Lucide Icons
    createIcons({
        icons,
        "stroke-width": 1.5,
        nameAttr: "data-lucide",
    });
    window.lucide = {
        createIcons: createIcons,
        icons: icons,
    };
})();

        },
        computed: {
            classes() {
                return this.active
                    ? 'side-menu--active'
                    : 'relative flex flex-row items-center h-11 focus:outline-none dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent  dark:hover:border-gray-800 pr-6'
            }
        }
    })
</script>

<template>
<Head title="Цены" />
<div>
    <table class="w-full newtable" id="price_table">
        <thead class="text-l font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">
                    Имя
                </th>
                <th scope="col" class="px-4 py-3">
                    Описание
                </th>
                <th scope="col" class="px-4 py-3">
                    Тип
                </th>
                <th scope="col" class="px-4 py-3">
                    <span class="sr-only">Редактировать</span>
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700">
            <tr v-for="price in prices" class="hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                    {{price.name}}
                </td>
                <td class="px-4 py-3">
                    {{price.description}}
                </td>
                <td class="px-4 py-3">

                    {{price.type}}
                </td>
                <td class="px-4 py-3">

                    <Link :href="route('price.detail', price.id)" class="edit flex items-center mr-3 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="edit" data-lucide="edit" class="lucide lucide-edit w-4 h-4 mr-1">
                        <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                    Изменить
                    </Link>
                </td>
            </tr>

            <!-- More people... -->
        </tbody>
    </table>
</div>
</template>

<style scoped>
</style>

<script>
import {
    defineComponent
} from 'vue';
import JetNavLink from '@/Jetstream/NavLink.vue'
import {
    Head,
    Link
} from '@inertiajs/inertia-vue3';
export default defineComponent({
    components: {
        Head,
        JetNavLink,
        Link
    },

    props: {
        prices: Object
    }
})
</script>

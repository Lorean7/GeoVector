<template>
<Head title="Товары" />
<div>
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start mb-6">

        <div class="xl:flex sm:mr-auto">
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <input v-model="search" id="searchTable" type="text" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Поиск...">
            </div>
        </div>
        <div class="flex mt-5 sm:mt-0">
            <button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="printer" data-lucide="printer" class="lucide lucide-printer w-4 h-4 mr-2">
                    <polyline points="6 9 6 2 18 2 18 9"></polyline>
                    <path d="M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2"></path>
                    <rect x="6" y="14" width="12" height="8"></rect>
                </svg> Печать </button>
            <div class="dropdown w-1/2 sm:w-auto" style="position: relative;">
                <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="file-text" data-lucide="file-text" class="lucide lucide-file-text w-4 h-4 mr-2">
                        <path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <line x1="10" y1="9" x2="8" y2="9"></line>
                    </svg> Экспорт <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down w-4 h-4 ml-auto sm:ml-2">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg> </button>
                <div class="dropdown-menu w-40" id="_odkqynqj4" data-popper-placement="bottom-end" style="position: absolute; left: auto; top: 0px; margin: 0px; right: 0px; bottom: auto; transform: translate(0px, 38px);">
                    <ul class="dropdown-content">
                        <li>
                            <a id="tabulator-export-csv" href="javascript:;" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="file-text" data-lucide="file-text" class="lucide lucide-file-text w-4 h-4 mr-2">
                                    <path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <line x1="10" y1="9" x2="8" y2="9"></line>
                                </svg> Экспорт CSV </a>
                        </li>
                        <li>
                            <a id="tabulator-export-xlsx" href="javascript:;" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="file-text" data-lucide="file-text" class="lucide lucide-file-text w-4 h-4 mr-2">
                                    <path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <line x1="10" y1="9" x2="8" y2="9"></line>
                                </svg> Export XLSX </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <table class="w-full newtable product_table" id="product_table">
        <thead class="text-l font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">
                    Имя
                </th>
                <th scope="col" class="px-4 py-3">
                    Артикул
                </th>
                <th scope="col" class="px-4 py-3">
                    Вес
                </th>
                <th scope="col" class="px-4 py-3">
                    Себестоимость
                </th>
                <th scope="col" class="px-4 py-3">
                    На складе
                </th>
                <th scope="col" class="px-4 py-3">
                    <span class="sr-only">Редактировать</span>
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700">
            <tr v-for="product in products" class="hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                    {{product.name}}
                </td>
                <td class="px-4 py-3">
                    {{product.sku}}
                </td>
                <td class="px-4 py-3">
                    {{product.weight}}
                </td>
                <td class="px-4 py-3 text-sm text-gray-500">
                    {{product.cost}}
                </td>
                <td class="px-4 py-3">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full text-white bg-success">
                        {{product.instock}}
                    </span>
                </td>
                <td class="px-4 py-3">

                    <Link :href="route('product.detail', product.id)" class="edit flex items-center mr-3 cursor-pointer">
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
import $ from 'jquery'
import '@/datatables.min.js';

import {
    Head,
    Link
} from '@inertiajs/inertia-vue3';
export default defineComponent({
    components: {
        Head,
        Link
    },

    props: {
        products: Object
    },
    data() {
        return {
            search: ''
        }
    },
    beforeMount() {

    },
    mounted() {
        var table = $('#product_table').DataTable({
            stateSave: true,
            language: {
                paginate: {
                    previous: '<svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>',
                    next: '<svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20"><path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>'
                }
            },
        });
        var self = this
        $('#searchTable').on('keyup click', function () {
            table.search(self.search).draw();
            // console.log(self.search)
        });
    }
})
</script>
<style scope>
#product_table_length,#product_table_filter{
  display:none
}


</style>

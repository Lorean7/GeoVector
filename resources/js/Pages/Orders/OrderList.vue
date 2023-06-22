<template>
<table class="w-full newtable" id="orders_table">
    <thead class="text-l font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-4 py-3">
                ID
            </th>
            <th scope="col" class="px-4 py-3">
                Клиент
            </th>
            <th scope="col" class="px-4 py-3">
                Заказ
            </th>
            <th scope="col" class="px-4 py-3">
                Стоимость
            </th>

            <th scope="col" class="px-4 py-3">
                Комментарий
            </th>
            <th scope="col" class="px-4 py-3">
                Действия
            </th>
            <th scope="col" class="px-4 py-3">
                Скрыть
            </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y dark:divide-gray-700">
        <template v-for="order in orders.data">
        <tr v-if="!NextDate(order.to_date)" class="group text-white bg-success td_info">
                <td colspan="7" class="px-4 py-3 text-center">{{order.to_date}}</td>
            </tr>
            <tr class="hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400" >
                <td class="px-4 py-3">
                     {{order.id}}
                </td>
                <td class="px-4 py-3">
                    <div class="flex items-center">
                        <div class="ml-0">
                            <div class="text-sm font-medium text-gray-900">
                            <Link class="edit flex items-center mr-3 cursor-pointer" :href="route('client.detail', order.client_id)">
                                {{ClienInfo(order.client_id).name}}
                                 </Link>
                            </div>
                            <div class="text-sm text-gray-500">
                                {{ClienInfo(order.client_id).adress}}
                            </div>
                            <div class="text-sm text-gray-500"><a href="tel:+7{{ClienInfo(order.client_id).phone}}">{{ClienInfo(order.client_id).phone}}</a></div>
                        </div>
                    </div>
                </td>
                <td class="px-4 py-3">
                    <div class="text-sm text-gray-900" v-for="item in OrderItems(order.id)">{{item.name}} - {{item.quantity}}*{{item.price}} - {{item.total_price}} </div>

                </td>
                <td class="px-4 py-3">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        {{order.total}} руб
                    </span>
                </td>
                <td class="px-4 py-3">
                    {{order.comment}}
                </td>
                <td class="px-4 py-3">
                    <!-- <Link :href="route('order.detail', order.id)" class="text-indigo-600 hover:text-indigo-900"> -->
                    <div class="tabulator-cell" role="gridcell" tabulator-field="actions" title="">
                        <div class="flex  items-center">
                            <AddOrder :client_name="ClienInfo(order.client_id).adress" :edit_order="order" :edit="true" />
                            <DeliteOrder :order_id="order.id" />
                        </div>
                    </div>
                    <div class="tabulator-cell" role="gridcell" tabulator-field="actions" title="">

                        <div class="flex  items-center" v-if="ClienInfo(order.client_id).type == 1">
                            <PrintT12 :order="order" :companies="companies" :clients="clients" :items="OrderItems(order.id)" />
                            <PrintSchet :order="order" :companies="companies" :clients="clients" :items="OrderItems(order.id)" />
                        </div>
                    </div>

                </td>
                <td class="px-4 py-3">
                    {{order.total}}
                </td>
            </tr>

        </template>

        <!-- More people... -->
    </tbody>
</table>
<div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
    <nav class="w-full sm:w-auto sm:mr-auto">
        <ul class="pagination">
            <li v-for="link in orders.links" class="page-item" :class="{'active':link.active}">
                <jet-nav-link :href="link.url" class="page-link">
                    <template v-if="link.label.indexOf('Previous') != -1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-left" class="lucide lucide-chevron-left w-4 h-4" data-lucide="chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </template>
                    <template v-else-if="link.label.indexOf('Next') != -1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-right" class="lucide lucide-chevron-right w-4 h-4" data-lucide="chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </template>
                    <template v-else>
                        {{link.label}}
                    </template>

                </jet-nav-link>
            </li>
        </ul>
    </nav>
    <select class="w-20 form-select box mt-3 sm:mt-0">
        <option>10</option>
        <option>25</option>
        <option>35</option>
        <option>50</option>
    </select>
</div>
<template v-for="link in orders.links">

</template>
</template>

<script>
import {
    defineComponent
} from 'vue'
import {
    Head,
    Link
} from '@inertiajs/inertia-vue3';
import $ from 'jquery';
import '@/datatables.min.js';
import AddOrder from '@/Components/AddOrder/Index.vue'
import DeliteOrder from '@/Components/AddOrder/DeliteOrder.vue'
import PrintT12 from '@/Components/PrintT12.vue'
import PrintSchet from '@/Components/PrintSchet.vue'
import JetNavLink from '@/Jetstream/NavLink.vue'

// import AppLayout from '@/Layouts/AppLayout.vue'
// import Welcome from '@/Jetstream/Welcome.vue'
// import List from '@/Pages/Clients/List.vue'

export default defineComponent({
    components: {
        AddOrder,
        DeliteOrder,
        PrintT12,
        PrintSchet,
        JetNavLink,
        Link
    },
    props: {
        orders: Object,
        order_items: Object,
        clients: Object,
        companies: Object
    },
    data() {
        return {
            table: '',
            prevkey: ''
        }
    },
    mounted() {
    },
    beforeUpdate() {
        this.table.destroy()
    },
    updated() {
    },

    methods: {
        ClienInfo(id) {
            return this.clients.filter((client) => client.id == id)[0]
        },
        OrderItems(id) {
            return this.order_items.filter((item) => item.order_id == id)
        },
        NextDate(room) {

            if (this.prevkey == room) {
                this.prevkey = room
                return true
            } else {
                this.prevkey = room
                return false
            }
        }
    },
})
</script>

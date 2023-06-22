<template>
<Head title="Заказы" />
<app-layout head="Заказы">
    <div class="mt-4">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Заказы
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <AddOrder />
                <!-- <div class="dropdown ml-auto sm:ml-0">
                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="file-plus" class="w-4 h-4 mr-2"></i> New Category </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="users" class="w-4 h-4 mr-2"></i> New Group </a>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="intro-y box p-5 mt-5">
        <OrderList :orders="orders" :order_items="order_items" :clients="clients" :companies="companies" />
        </div>
    </div>
</app-layout>
</template>

<script>
import {
    defineComponent
} from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
// import Welcome from '@/Jetstream/Welcome.vue'
import AddOrder from '@/Components/AddOrder/Index.vue'
import OrderList from '@/Pages/Orders/OrderList.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';

export default defineComponent({
    components: {
        AppLayout,
        // Welcome,
        AddOrder,
        OrderList,
        Head
    },
    props: {
        orders: Object,
        order_items: Object,
        clients: Object,
        companies: Object
    },
})
</script>

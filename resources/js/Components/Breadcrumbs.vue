<template>
<nav aria-label="breadcrumb" class=" mr-auto hidden sm:flex">
    <ol class="breadcrumb">
        <li v-if="route().current('dashboard')" class="breadcrumb-item active" ></li>
        <li v-else class="breadcrumb-item" ><Link :href="route('dashboard')">Обзор</Link></li>

        <li v-if="route().current('orders')" class="breadcrumb-item active" aria-current="page">Заказы</li>

        <li v-if="route().current('clients')" class="breadcrumb-item active" aria-current="page">Клиенты</li>
        <li v-if="route().current('client.detail')" class="breadcrumb-item" aria-current="page"><Link :href="route('clients')">Клиенты</Link></li>

        <li v-if="route().current('products')" class="breadcrumb-item active" aria-current="page">Товары</li>
        <li v-if="route().current('product.detail')" class="breadcrumb-item" aria-current="page"><Link :href="route('products')">Товары</Link></li>

        <li v-if="route().current('prices')" class="breadcrumb-item active" aria-current="page">Цены</li>
        <li v-if="route().current('price.detail')" class="breadcrumb-item" aria-current="page"><Link :href="route('prices')">Цены</Link></li>

        <li v-if="route().current('config.companies')" class="breadcrumb-item active" aria-current="page">Компании</li>
        <li v-if="route().current('config.company')" class="breadcrumb-item" aria-current="page"><Link :href="route('config.companies')">Компании</Link></li>

        
    </ol>
</nav>
</template>

<script>
import {
    defineComponent
} from 'vue'
import { Link } from '@inertiajs/inertia-vue3';
export default defineComponent({
    components: {
        Link
    },
    props: {

    },
})
</script>

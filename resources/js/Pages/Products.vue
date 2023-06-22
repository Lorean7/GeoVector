<template>
<Head title="Товары" />
<app-layout title="Клиенты">
    <div class="mt-4 mx-4">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Продукция
            </h2>
            <Link :href="route('product.new')"><button class="btn btn-primary shadow-md mr-2">Добавить</button></Link>
        </div>
    </div>

    <div class="intro-y box p-5 mt-5">
        <list class="mt-10 sm:mt-0" :products="products" />
    </div>
</app-layout>
</template>

<script>
import {
    defineComponent
} from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import Welcome from '@/Jetstream/Welcome.vue'
import List from '@/Pages/Products/List.vue'
import Add from '@/Pages/Products/Add.vue'
import {
    Head,
    Link
} from '@inertiajs/inertia-vue3';
export default defineComponent({
    components: {
        AppLayout,
        Welcome,
        List,
        Head,
        Add,
        Link
    },
    props: {
        products: Object
    }
})
</script>

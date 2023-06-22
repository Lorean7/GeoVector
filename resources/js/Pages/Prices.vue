<template>
<Head title="Цены" />
<app-layout title="Цены">
    <div class="mt-4 mx-4">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Типы цен на продукцию
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <Add />
            </div>
        </div>
    </div>
    <div class="intro-y box p-5 mt-5">
        <list class="mt-10 sm:mt-0" :prices="prices" />
    </div>

</app-layout>
</template>

<script>
import {
    defineComponent
} from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import Welcome from '@/Jetstream/Welcome.vue'
import List from '@/Pages/Prices/List.vue'
import Add from '@/Pages//Prices/Add.vue'

export default defineComponent({
    components: {
        AppLayout,
        Welcome,
        List,
        Add
    },
    props: {
        prices: Object
    }
})
</script>

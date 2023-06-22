<template>
<Head title="Клиенты" />
<app-layout title="Клиенты">
    <div class="mt-4 mx-4">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Клиенты
            </h2>
            <AddClient
            :vip = "vip"
            />
        </div>
    </div>

    <div class="intro-y box p-5 mt-5">
        <list class="mt-10 sm:mt-0" :clients="clients" :vip="vip" />
    </div>

</app-layout>
</template>

<script>
import {
    defineComponent
} from 'vue'
import {
    Head,
    Link
} from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue'
import Welcome from '@/Jetstream/Welcome.vue'
import List from '@/Pages/Clients/List.vue'
import AddClient from '@/Pages/Clients/AddClient.vue'

export default defineComponent({
    components: {
        AppLayout,
        Welcome,
        List,
        Head,
        Link,
        AddClient
    },
    props: {
        clients: Object,
        vip: Object
    },
    methods: {
        addUser() {
            this.form.post(route('client.edit'), {
                preserveScroll: true,
                onSuccess: () => this.closeModal(),
                onError: () => this.$refs.name.focus(),

            })
        }
    },
})
</script>

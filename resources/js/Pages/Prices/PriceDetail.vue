<template>
<Head title="Цены" />
<app-layout title="Редактировать цену">
    <div class="mt-4 mx-4">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Редактировать "{{price.name}}"
            </h2>

        </div>
    </div>
    <div class="intro-y box p-5 mt-5">
        <div v-if="$page.props.flash.message" class="alert">
            {{ $page.props.flash.message }}
        </div>
        <table class="w-full newtable">
            <thead class="text-l font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-3">
                        Имя
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Артикул
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Себестоимость
                    </th>
                    <th scope="col" class="px-4 py-3">
                        {{price.name}}
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

                        {{product.cost}}

                    </td>

                    <td class="px-4 py-3 ">
                        <jet-input type="text" class="mt-1 block w-3/4" placeholder="Цена" ref="name" v-model="form.id[product.id]" />
                        <jet-input-error :message="form.errors.name" class="mt-2" />
                    </td>
                    <td class="px-4 py-3 ">
                        <i v-if="form.id[product.id] != getPrice(product.id)&&!$page.props.flash.message" @click="edit" id="tosave" class="fas fa-save text-pending"></i>
                    </td>
                </tr>
                <!-- More people... -->
            </tbody>
        </table>
        <div class="px-4 py-3 text-right sm:px-6">
            <Link :href="route('prices')" class="inline-flex justify-center btn btn-outline-primary  mr-1 mb-2">
            Назад в список цен
            </Link>
        </div>
    </div>

</app-layout>
</template>

<script>
import {
    defineComponent
} from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetInputError from '@/Jetstream/InputError.vue'
import Add from '@/Pages//Prices/Add.vue'
import {
    Head,
    Link
} from '@inertiajs/inertia-vue3';

export default defineComponent({
    components: {
        JetInput,
        JetInputError,
        AppLayout,
        Head,
        Link,
        Add
    },

    props: {
        price: Object,
        products: Object,
        product_price: Object
    },
    data() {
        return {
            form: this.$inertia.form({
                id: [],
                id_price: this.price.id
            })
        }
    },
    mounted() {
        this.product_price.forEach((element) => {
            this.form.id[element.product_id] = element.value
            if(element.value == ''){
                this.form.id[element.product_id] = 0
            }

        })
    },
    methods: {
        edit() {
            this.form.post(route('price.edit'), {
                preserveScroll: true,
                onSuccess: () => {
                    var self = this;
                    setTimeout(function () {
                        self.$page.props.flash.message = ''
                    }, 2000);
                },
                onError: () => this.$refs.name.focus(),

            })
        },
        test() {
            console.log(this.form.id)
        },
        getPrice(id) {
            let price = ''
            this.product_price.forEach((element) => {
                if (element.product_id == id) {
                    price = element.value
                }
            })
            return price
        }
    },
})
</script>

<style>
#tosave {
    font-size: 24px;
    cursor: pointer
}
</style>

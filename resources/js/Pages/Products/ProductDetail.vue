<template>
<Head title="Добавить новый продукт" />
<app-layout title="Dashboard">
    <div class="mt-4 mx-4">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Добавить новый продукт
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">

            </div>
        </div>
        <div class="intro-y box p-5 mt-5">
            <div class="grid grid-cols-6 gap-6 pb-5">
                <div class="col-span-6 sm:col-span-2">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">Название</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="name" v-model="form.name" />
                    <jet-input-error :message="form.errors.name" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <label for="sku" class="block text-sm font-medium text-gray-700">Артикул</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="sku" v-model="form.sku" />
                    <jet-input-error :message="form.errors.sku" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <label for="weight" class="block text-sm font-medium text-gray-700">Вес</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="weight" v-model="form.weight" />
                    <jet-input-error :message="form.errors.weight" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <label for="cost" class="block text-sm font-medium text-gray-700">Себестоимость</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="cost" v-model="form.cost" />
                    <jet-input-error :message="form.errors.cost" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <label for="instock" class="block text-sm font-medium text-gray-700">На складе</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="instock" v-model="form.instock" />
                    <jet-input-error :message="form.errors.instock" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-6">
                    <h2 class="text-lg font-medium mr-auto">Цены</h2>
                    <table class="w-full newtable">
                        <thead class="text-l font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">
                                    Тип цены
                                </th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700">
                            <tr v-for="price in prices" class="hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    {{price.name}}
                                </td>
                                <td class="px-4 py-3">
                                    <jet-input type="text" class="mt-1 block w-full" ref="instock" v-model="form.prices[price.id]" />
                                </td>

                            </tr>
                            <!-- More people... -->
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">

                <div class="flex sm:ml-auto mt-5 sm:mt-0">
                    <Link :href="route('config.companies')"><button class="btn btn-secondary w-20 ml-auto">Отмена</button></Link>
                    <button class="btn btn-primary w-30 ml-2" @click="editProduct">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
</app-layout>
<!-- BEGIN: Notification Content -->

<div id="success-notification-content" class="toastify-content hidden flex"> <i class="text-success" data-lucide="check-circle"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium">Сохранено!</div>
        <div class="text-slate-500 mt-1">{{ $page.props.flash.message }}</div>
    </div>
</div> <!-- END: Notification Content -->
</template>

<style scoped>
</style>

<script>
import {
    defineComponent
} from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetInputError from '@/Jetstream/InputError.vue'
import {
    Head,
    Link
} from '@inertiajs/inertia-vue3';
import Toastify from "toastify-js";

export default defineComponent({
    components: {
        JetInput,
        JetInputError,
        AppLayout,
        Head,
        Link,
        Toastify
    },

    props: {
        product: Object,
        prices: {},
        product_prices: Object
    },
    data() {
        return {
            form: this.$inertia.form({
                id: this.product.id,
                name: this.product.name,
                sku: this.product.sku,
                weight: this.product.weight,
                cost: this.product.cost,
                instock: this.product.instock,
                prices: [],
            })
        }
    },
    mounted() {
        this.$nextTick(function () {
            this.product_prices.forEach((element) => {
                this.form.prices[element.price_id] = element.value
                // console.log(element)
            })
            if ($page.props.flash.message) {
                this.allgood()
            }
        })
    },
    methods: {
        editProduct() {
            this.form.post(route('product.edit'), {
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
        allgood() {
            Toastify({
                node: $("#success-notification-content").clone().removeClass("hidden")[0],
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
            }).showToast();
        }
    }
})
</script>
<style scope>

</style>

<template>
<Head title="Цены" />
<app-layout title="Редактировать клиента">
    <div class="mt-4 mx-4">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Редактировать клиента "{{client.name}}"
            </h2>

        </div>
        <div class="intro-y box p-5 mt-5">
           <!-- <div v-if="$page.props.flash.message" class="alert">
                {{ $page.props.flash.message }}
            </div>!-->
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-2">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">Имя</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="name" v-model="form.name" />
                    <jet-input-error :message="form.errors.name" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <label for="Instagram" class="block text-sm font-medium text-gray-700">Instagram</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="instagram" v-model="form.instagram" />
                    <jet-input-error :message="form.errors.instagram" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <label for="country" class="block text-sm font-medium text-gray-700">Скидка</label>
                    <select v-model="form.vip" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option v-for="price in vip" :value="price.id">{{price.name}}</option>
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-1">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Телефон</label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm"> +7</span>
                        <input type="text" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" v-model="form.phone">
                    </div>
                    <jet-input-error :message="form.errors.phone" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="adress" class="block text-sm font-medium text-gray-700">Адрес</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="adress" v-model="form.adress" />
                    <jet-input-error :message="form.errors.adress" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <label for="adress2" class="block text-sm font-medium text-gray-700">Дополнительный адрес</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="adress2" v-model="form.adress2" />
                    <jet-input-error :message="form.errors.adress2" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-1">
                    <label for="country" class="block text-sm font-medium text-gray-700">Тип клиента</label>
                    <select v-model="form.type" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="0">Физ.Лицо</option>
                        <option value="1">Юр.Лицо</option>
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-1">
                    <label for="country" class="block text-sm font-medium text-gray-700">Тип компании</label>
                    <select v-model="form.company_type" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="ООО">ООО</option>
                        <option value="ИП">ИП</option>
                        <option value="ЗАО">ЗАО</option>
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <label for="adress" class="block text-sm font-medium text-gray-700">ИНН</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="company_inn" v-model="form.company_inn" />
                    <jet-input-error :message="form.errors.company_inn" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <label for="adress" class="block text-sm font-medium text-gray-700">ОКПО</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="company_okpo" v-model="form.company_okpo" />
                    <jet-input-error :message="form.errors.company_okpo" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <label for="adress" class="block text-sm font-medium text-gray-700">Название компании</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="company_name" v-model="form.company_name" />
                    <jet-input-error :message="form.errors.company_name" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <label for="adress" class="block text-sm font-medium text-gray-700">Юридический адрес</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="company_adress" v-model="form.company_adress" />
                    <jet-input-error :message="form.errors.company_adress" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <label for="adress" class="block text-sm font-medium text-gray-700">КПП</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="company_kpp" v-model="form.company_kpp" />
                    <jet-input-error :message="form.errors.company_kpp" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-1">
                    <label for="adress" class="block text-sm font-medium text-gray-700">Номер договора</label>
                    <div class="flex">
                        <jet-input type="text" class="mt-1 block w-full" ref="date_start" v-model="form.dogovor" />
                        <jet-input-error :message="form.errors.date_start" class="mt-2" />
                    </div>
                </div>
                <div class="col-span-6 sm:col-span-1">
                    <label for="adress" class="block text-sm font-medium text-gray-700">Начало договора</label>
                    <litepie-datepicker as-single :formatter="formatter" v-model="form.date_start"></litepie-datepicker>

                </div>
                <div class="col-span-6 sm:col-span-1">
                    <label for="country" class="block text-sm font-medium text-gray-700">Отпускаем в граммах?</label>
                    <select v-model="form.gramm" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="0">Нет</option>
                        <option value="1">Да</option>
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="adress" class="block text-sm font-medium text-gray-700">Комментарий</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="comment" v-model="form.comment" />
                    <jet-input-error :message="form.errors.comment" class="mt-2" />
                </div>
            </div>
            <div class="px-4 py-3 text-right sm:px-6 pt-8">
                <Link :href="route('clients')" class="inline-flex justify-center btn btn-outline-primary  mr-1 mb-2">
                Назад в список клиентов
                </Link>
                <button @click="editUser" type="submit" class="inline-flex justify-center btn btn-primary w-24 mr-1 mb-2">Сохранить</button>

            </div>
        </div>
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Заказы клиента "{{client.name}}"
            </h2>
        </div>
        <div class="intro-y box p-5 mt-5">
        <table class="w-full newtable" id="orders_table">
    <thead class="text-l font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-4 py-3">
                ID
            </th>
            <th scope="col" class="px-4 py-3">
                Дата
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

        </tr>
    </thead>
    <tbody class="bg-white divide-y dark:divide-gray-700">
        <template v-for="order in orders.data">

            <tr class="hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400" >
                <td class="px-4 py-3">
                     {{order.id}}
                </td>
                <td class="px-4 py-3">
                     {{order.to_date}}
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

                    <div class="tabulator-cell" role="gridcell" tabulator-field="actions" title="">

                        <div class="flex  items-center" v-if="client.type == 1">
                            <!--<PrintT12 :order="order" :companies="companies" :clients="clients" :items="OrderItems(order.id)" />
                            <PrintSchet :order="order" :companies="companies" :clients="clients" :items="OrderItems(order.id)" />!-->
                        </div>
                    </div>

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
        </div>

    </div>

</app-layout>
<!-- BEGIN: Notification Content -->
<div v-if="$page.props.flash.message == 'Данные клиента измененены'" id="success-notification-content" class="toastify-content hidden flex"> <i class="text-success" data-lucide="check-circle"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium" >Сохранено!</div>
        <div class="text-slate-500 mt-1">{{ $page.props.flash.message }}</div>
    </div>
</div>
<div v-else id="success-notification-content" class="toastify-content hidden flex"> <i class="text-danger" data-lucide="x-circle"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium" >Ошибка!</div>
        <div class="text-slate-500 mt-1">{{ $page.props.flash.message }}</div>
    </div>
</div>

<!-- END: Notification Content -->
</template>

<script>
import {
    defineComponent
} from 'vue'
import JetActionSection from '@/Jetstream/ActionSection.vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import JetDialogModal from '@/Jetstream/DialogModal.vue'
import JetDangerButton from '@/Jetstream/DangerButton.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetInputError from '@/Jetstream/InputError.vue'
import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'
import LitepieDatepicker from 'litepie-datepicker';
import Toastify from "toastify-js";
import PrintT12 from '@/Components/PrintT12.vue'
import PrintSchet from '@/Components/PrintSchet.vue'
import {
    Link
} from '@inertiajs/inertia-vue3';

export default defineComponent({
    components: {
        LitepieDatepicker,
        JetActionSection,
        JetDangerButton,
        JetDialogModal,
        JetInput,
        JetInputError,
        JetSecondaryButton,
        AppLayout,
        Link,
        Toastify,
        PrintT12,
        PrintSchet
    },
    props: {
        client: Object,
        vip: Object,
        orders: Object,
        order_items: Object
    },
    data() {
        return {
            confirmingUserDeletion: false,
            dateValue: '',
            formatter: {
                date: 'DD.MM.YYYY',
                month: 'MMM'
            },
            form: this.$inertia.form({
                id: this.client.id,
                name: this.client.name,
                phone: this.client.phone,
                instagram: this.client.instagram,
                adress: this.client.adress,
                adress2: this.client.adress2,
                vip: this.client.vip,
                type: this.client.type,
                company_type: this.client.company_type,
                company_inn: this.client.company_inn,
                company_okpo: this.client.company_okpo,
                company_name: this.client.company_name,
                company_adress: this.client.company_adress,
                company_kpp: this.client.company_kpp,
                dogovor: this.client.dogovor,
                date_start: this.client.date_start,
                gramm: this.client.gramm,
                comment: this.client.comment
            })
        }
    },
    methods: {
        editUser() {
            this.form.post(route('client.edit'), {
                preserveScroll: true,
                onSuccess: () => this.allgood(),
            })
        },
        allgood(){
            Toastify({ node: $("#success-notification-content") .clone() .removeClass("hidden")[0], duration: 3000, newWindow: true, close: true, gravity: "top", position: "right", stopOnFocus: true, }).showToast();
        },
        OrderItems(id) {
            return this.order_items.filter((item) => item.order_id == id)
        },
        // NextDate(room) {

        //     if (this.prevkey == room) {
        //         this.prevkey = room
        //         return true
        //     } else {
        //         this.prevkey = room
        //         return false
        //     }
        // }
    },
})
</script>

<style scoped>

</style>

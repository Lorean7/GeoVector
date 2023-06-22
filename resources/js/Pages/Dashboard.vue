<template>
<app-layout title="Dashboard">
    <!--<div class="flex justify-start flex-col md:flex-row gap-2 mt-5">
        <button type="button" class="btn py-3 btn-primary w-full md:w-52">Сегодня</button>
        <button type="button" class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-full md:w-52">Завтра</button>
        <button type="button" class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-full md:w-52">Послезавтра</button>
    </div>!-->
    <div class="grid">
    <div class="col-span-12 xl:col-span-9 2xl:col-span-9 z-10 order-last">
            <!--<div class="mt-6 -mb-6 intro-y">
                <div class="alert alert-dismissible show box bg-primary text-white flex items-center mb-6" role="alert">
                    <span>
                        Аналитическая область дашборда.
                        <Link :href="route('orders')" class="rounded-md bg-white bg-opacity-20 dark:bg-darkmode-300 hover:bg-opacity-30 py-0.5 px-2 -my-3 ml-2">
                        Перейти в заказы
                        </Link>

                    </span>
                    <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button>
                </div>
            </div>!-->
            <div class="mt-14 mb-3 grid grid-cols-12 sm:gap-10 intro-y">
                <div class="col-span-12 sm:col-span-6 md:col-span-4 py-6 sm:pl-5 md:pl-0 lg:pl-5 relative text-center sm:text-left">
                    <div class="absolute pt-0.5 2xl:pt-0 mt-5 2xl:mt-6 top-0 right-0 dropdown">
                        <a class="dropdown-toggle block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i> </a>
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Отчет за день </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Отчет за месяц</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-sm 2xl:text-base font-medium -mb-1"> Привет Сергей, <span class="text-slate-600 dark:text-slate-300 font-normal">С возвращением!</span> </div>
                    <div class="text-base 2xl:text-lg justify-center sm:justify-start flex items-center text-slate-600 dark:text-slate-300 leading-3 mt-14 2xl:mt-24"> Выручка за день <i data-lucide="alert-circle" class="tooltip w-5 h-5 ml-1.5 mt-0.5" title="Total value of your sales: $158.409.416"></i> </div>
                    <div class="2xl:flex mt-5 mb-3">
                        <div class="flex items-center justify-center sm:justify-start">
                            <div class="relative text-2xl 2xl:text-3xl font-medium leading-6"> {{total}} руб</div>
                            <!--<a class="text-slate-500 ml-4 2xl:ml-16" href=""> <i data-lucide="refresh-ccw" class="w-4 h-4"></i> </a>!-->
                        </div>
                        <div class="mt-5 2xl:flex 2xl:justify-center 2xl:mt-0 2xl:-ml-20 2xl:w-14 2xl:flex-none 2xl:pl-2.5">
                            <div class="font-medium inline-flex bg-success text-white rounded-full px-2 py-1 text-xs 2xl:text-sm 2xl:p-0 2xl:text-success 2xl:bg-transparent 2xl:flex items-center tooltip cursor-pointer 2xl:justify-center" title="49% Higher than last month"> 49% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                        </div>
                    </div>
                    <div class="text-slate-500">С момента последнего заказа прошло 15 мин</div>
                    <div class="2xl:text-base text-slate-600 dark:text-slate-300 mt-6 -mb-1"> Чистый доход <a href="" class="underline decoration-dotted underline-offset-4 text-primary dark:text-slate-400">&#8381{{total}}</a> </div>
                    <div class="mt-14 2xl:mt-24 dropdown">
                        <button class="dropdown-toggle btn btn-rounded-primary w-44 2xl:w-52 px-4 relative justify-start" aria-expanded="false" data-tw-toggle="dropdown">
                            Скачать отчет
                            <span class="w-8 h-8 absolute flex justify-center items-center right-0 top-0 bottom-0 my-auto ml-auto mr-1"> <i data-lucide="chevron-down" class="w-4 h-4"></i> </span>
                        </button>
                        <div class="dropdown-menu w-44 2xl:w-52">
                            <ul class="dropdown-content">
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Отчет за месяц</a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Отчет за день </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row-start-2 md:row-start-auto col-span-12 md:col-span-4 py-6 border-black border-opacity-10 border-t md:border-t-0 md:border-l md:border-r border-dashed px-10 sm:px-28 md:px-5 -mx-5">
                    <div class="flex flex-wrap items-center">
                        <div class="flex items-center w-full sm:w-auto justify-center sm:justify-start mr-auto mb-5 2xl:mb-0">
                            <div class="w-2 h-2 bg-primary rounded-full -mt-4"></div>
                            <div class="ml-3.5">
                                <div class="relative text-xl 2xl:text-2xl font-medium leading-6 2xl:leading-5 pl-3.5 2xl:pl-4"> <span class="absolute text-base 2xl:text-xl top-0 left-0 2xl:-mt-1.5">&#8381</span> {{dataMonth}} </div>
                                <div class="text-slate-500 mt-2">Текущий месяц</div>
                            </div>
                        </div>
                        <!--<select class="form-select bg-transparent border-black border-opacity-10 dark:border-darkmode-400 dark:bg-transparent mx-auto sm:mx-0 py-1.5 px-3 w-auto -mt-2">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="custom-date">Custom Date</option>
                        </select>!-->
                    </div>
                    <div class="mt-10 text-slate-600 dark:text-slate-300">Сумма приходов за текущий месяц.</div>
                    <div class="mt-6">
                        <div class="h-[290px]">
                            <canvas id="report-bar-chart-1"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4 py-6 border-black border-opacity-10 border-t sm:border-t-0 border-l md:border-l-0 border-dashed -ml-4 pl-4 md:ml-0 md:pl-0">
                    <ul class=" nav nav-pills w-3/4 2xl:w-4/6 bg-slate-200 dark:bg-black/10 rounded-md mx-auto p-1 " role="tablist">
                        <li id="active-users-tab" class="nav-item flex-1" role="presentation">
                            <button class="nav-link w-full py-1.5 px-2 active" data-tw-toggle="pill" data-tw-target="#active-users" type="button" role="tab" aria-controls="active-users" aria-selected="true"> Active </button>
                        </li>
                        <li id="inactive-users-tab" class="nav-item flex-1" role="presentation">
                            <button class="nav-link w-full py-1.5 px-2" data-tw-toggle="pill" data-tw-target="#inactive-users" type="button" role="tab" aria-selected="false"> Inactive </button>
                        </li>
                    </ul>
                    <div class="tab-content mt-6">
                        <div class="tab-pane active" id="active-users" role="tabpanel" aria-labelledby="active-users-tab">
                            <div class="relative mt-8">
                                <div class="h-[215px]">
                                    <canvas id="report-donut-chart-3"></canvas>
                                </div>
                                <div class="flex flex-col justify-center items-center absolute w-full h-full top-0 left-0">
                                    <div class="text-xl 2xl:text-2xl font-medium">2.501</div>
                                    <div class="text-slate-500 mt-0.5">Active Users</div>
                                </div>
                            </div>
                            <div class="mx-auto w-10/12 2xl:w-2/3 mt-8">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                    <span class="truncate">17 - 30 Years old</span> <span class="font-medium ml-auto">62%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                    <span class="truncate">31 - 50 Years old</span> <span class="font-medium ml-auto">33%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                    <span class="truncate">>= 50 Years old</span> <span class="font-medium ml-auto">10%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="col-span-12 grid grid-cols-12">
        <div class="col-span-12 mt-6" v-if="Object.keys(forout['points']).length<2">
            <div class="intro-y block sm:flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Заказов на сегодня нет
                </h2>
            </div>
        </div>
        <div class="col-span-12 mt-6" v-if="Object.keys(forout['points']).length>1">
            <div class="intro-y block sm:flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Заказы на сегодня
                </h2>
                <div class="flex items-center sm:ml-auto mt-3 invisible sm:visible">
                    <button class="btn box flex items-center text-slate-600 dark:text-slate-300"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="file-text" data-lucide="file-text" class="lucide lucide-file-text hidden sm:block w-4 h-4 mr-2">
                            <path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <line x1="10" y1="9" x2="8" y2="9"></line>
                        </svg> Экспорт в Excel </button>
                    <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="file-text" data-lucide="file-text" class="lucide lucide-file-text hidden sm:block w-4 h-4 mr-2">
                            <path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <line x1="10" y1="9" x2="8" y2="9"></line>
                        </svg> Экспорт в PDF </button>
                </div>
            </div>
            <div class="intro-y overflow-auto lg:overflow-hidden mt-0">
                <table class="table table-report sm:mt-2 newtable">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">№</th>
                            <th class="whitespace-nowrap">Клиент</th>
                            <th class="whitespace-nowrap">Заказ</th>
                            <th class="text-center whitespace-nowrap">Стоимость</th>
                            <th class="text-center whitespace-nowrap">Комментарий заказа</th>
                            <th class="text-center whitespace-nowrap">Комментарий клиента</th>
                            <th class="text-center whitespace-nowrap">Действия</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="intro-x" v-for="order in orders" :class="{'tere':order.status==1}">
                            <td class="td_info">
                                <div class="lg:table hidden">
                                    {{order.id}}
                                </div>

                                <div class="sm:hidden">
                                    Заказ_ {{order.id}}. {{order.total}} руб
                                </div>
                            </td>
                            <td class="td_client">
                                <div class="ml-0">
                                    <div class="text-sm font-medium text-gray-900 td_client_name">
                                        <Link class="edit flex items-center mr-3 cursor-pointer" :href="route('client.detail', order.client_id)">
                                        {{ClienInfo(order.client_id).name}}
                                        </Link>
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{ClienInfo(order.client_id).adress}}
                                    </div>
                                    <div class="text-sm text-gray-500"><a :href="'tel:+7'+ClienInfo(order.client_id).phone.replace(/\D/g,'')">{{ClienInfo(order.client_id).phone}}</a></div>
                                </div>
                            </td>
                            <td>
                                <div class="text-sm text-gray-900" v-for="item in OrderItems(order.id)">{{item.name}} - {{item.quantity}}*{{item.price}} - {{item.total_price}} </div>
                            </td>
                            <td class="text-center lg:table-cell hidden"> {{order.total}} руб</td>
                            <td>
                                {{order.comment}}
                            </td>
                            <td>{{ClienInfo(order.client_id).comment}}</td>
                            <td class="w-30">
                                <div class="tabulator-cell" role="gridcell" tabulator-field="actions" title="">

                                    <div class="flex  items-center">
                                        <AddOrder :client_name="ClienInfo(order.client_id).adress" :edit_order="order" :edit="true" />
                                        <ProcessOrder :order_id="order.id" />
                                    </div>
                                </div>
                                <div class="flex  items-center" v-if="ClienInfo(order.client_id).type == 1">
                                    <PrintT12 :order="order" :companies="companies" :clients="clients" :items="OrderItems(order.id)" />
                                    <PrintSchet :order="order" :companies="companies" :clients="clients" :items="OrderItems(order.id)" />
                                </div>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <div class="col-span-12 grid grid-cols-12 gap-6" v-if="Object.keys(forout['points']).length>1">
        <!-- BEGIN: Official Store -->
        <div class="col-span-12 xl:col-span-8 mt-6">
            <div class="intro-y block sm:flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Карта маршрута доставки
                </h2>
            </div>
            <div class="intro-y box p-5 mt-12 sm:mt-5">
                <div id="FulPath">Рассчет маршрута...</div>
                <div class=" mt-5 bg-slate-200 rounded-md">
                    <div id="status">
                        <img src="">
                        <span id="error"></span>
                    </div>
                    <div id="results">
                        <div id="map">
                        </div>
                        <div id="route">

                            <ol class="list"></ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Official Store -->
        <!-- BEGIN: Weekly Best Sellers -->
        <div class="col-span-12 xl:col-span-4 mt-6">
            <div class="intro-y flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Список пунктов доставки
                </h2>
            </div>
            <div class="mt-5">
                <div id="PathRoad">

                </div>
                <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">Загрузить больше</a>
            </div>
        </div>
        <!-- END: Weekly Best Sellers -->
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
import ProcessOrder from '@/Components/AddOrder/ProcessOrder.vue'
import PrintT12 from '@/Components/PrintT12.vue'
import PrintSchet from '@/Components/PrintSchet.vue'
import {
    Link
} from '@inertiajs/inertia-vue3';
export default defineComponent({
    components: {
        AppLayout,
        // Welcome,
        AddOrder,
        OrderList,
        PrintSchet,
        PrintT12,
        Link,
        ProcessOrder,

    },
    props: {
        orders: Object,
        order_items: Object,
        clients: Object,
        companies: Object,
        forout: Array,
        total: Number,
        dataByDay:Array,
        daysInPeriod:Array,
        dataMonth:Number
    },
    data() {
        return {

        }
    },
    mounted() {
        this.maprout()
        if ($("#report-bar-chart-1").length) {
            var _ctx4 = $("#report-bar-chart-1")[0].getContext("2d");
            var _myChart = new Chart(_ctx4, {
                type: "bar",
                data: {
                    labels: this.daysInPeriod,
                    datasets: [{
                        label: "Доход за день",
                        barThickness: 8,
                        maxBarThickness: 6,
                        data: this.dataByDay,
                        backgroundColor: "rgba(6,78,59,0.9)"
                    }, ]
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        x: {
                            ticks: {
                                font: {
                                    size: 11
                                },
                                color: "rgba(100, 116, 139, 0.8)"
                            },
                            grid: {
                                display: false,
                                drawBorder: false
                            }
                        },
                        y: {
                            ticks: {
                                display: false
                            },
                            grid: {
                                color: "rgba(203, 213, 225, 1)",
                                borderDash: [2, 2],
                                drawBorder: false
                            }
                        }
                    }
                }
            });
        }
    },
    methods: {
        ClienInfo(id) {
            return this.clients.filter((client) => client.id == id)[0]
        },
        OrderItems(id) {
            return this.order_items.filter((item) => item.order_id == id)
        },
        maprout() {
            var points = this.forout['points']
            var times = this.forout['times']
            // console.log(this.forout['points'])
            function init() {

                var Distances = new DistanceFinder(points); // объект для поиска расстояний между точками маршрута
                Distances.findDistances().onComplete(function (data) { // функция, которая будет вызвана когда придут все данные от Яндекса

                    // параметры алгоритма оптимизации
                    var params = {
                        coolingFactor: 0.99, // лучше не менять
                        temperatureEnd: 0.00000001, // температура конца алгоритма, можно изменять в пределах 0.01 до 0.00000001, влияет на "упорство" в поиске локального оптимума
                        iterations: 20
                    }; // к-во итераций, чем больше - тем с большей вероятностью найдется наилучший результат, но при этом увеличивается врема работы алгоритма. Оптимальные значения - от 10 до 20

                    var Optimizer = new RouteOptimizer(data, params);
                    var optimal = Optimizer.getOptimal(); // получение оптимального маршрута
                    var topRoutes = Optimizer.getTopRoutes(); // лучший + альтернативные маршруты
                    // console.log(points)
                    var Mapper = new RouteMapper(points, times, data, optimal, topRoutes);
                    Mapper.mapRoute(); // отображение маршрута на карте
                });
            }
            // Когда скрипт карт загрузился - запускаем программу
            // if(points.length >1){
            ymaps.ready(init);
            // }

        }
    },
})
</script>

<style>
.tere {
    opacity: 0.5 !important
}
</style>

<template #content>
<div>
    <h2>Дата</h2>

    <div :class="[todate == today ? 'active' : '']" class="date_btn mb-1 grid  gap-6 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2" @click="ChooseDate(0)">
        Сегодня
    </div>
    <div :class="[todate == tomorrow ? 'active' : '']" class="date_btn mb-1 grid gap-6 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2" @click="ChooseDate(-1)">
        Завтра
    </div>
    <div :class="[todate != tomorrow&&todate != today ? 'active' : '']" id="date" class="date_btn mb-1 grid gap-6 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2">
        {{todate}}
    </div>
    <h2>Время</h2>
    <div :class="[totime == 'Не важно' ? 'active' : '']" id="date" class="date_btn mb-1 grid gap-6 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2" @click="ChooseTime('Не важно')">
        Не важно
    </div>
    <div :class="[totime == 'До обеда' ? 'active' : '']" id="date" class="date_btn mb-1 grid gap-6 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2" @click="ChooseTime('До обеда')">
        До обеда
    </div>
    <div :class="[totime == 'После обеда' ? 'active' : '']" id="date" class="date_btn mb-1 grid gap-6 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2" @click="ChooseTime('После обеда')">
        После обеда
    </div>
    <div :class="[totime == 'Вечером' ? 'active' : '']" id="date" class="date_btn mb-1 grid gap-6 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2" @click="ChooseTime('Вечером')">
        Вечером
    </div>

</div>
</template>

<script>
    import { defineComponent } from 'vue'
    // import Product from '@/Components/AddOrder/Product.vue'

    export default defineComponent({
        components: {
            // Product
        },
        props:{
            order:{}
        },
        data() {
            return {
                todate: 'Выберите дату',
                totime: '',
                today: '',
                tomorrow: ''
            }
        },
        mounted(){
            this.today = moment().subtract(0, 'days').format('YYYY-MM-DD')
            this.tomorrow = moment().subtract(-1, 'days').format('YYYY-MM-DD')
            let self = this
            function boom(self, start) {
                self.todate = start.format('YYYY-MM-DD');
                self.SendDate()
            }
            $('#date').daterangepicker({
            opens: 'left',
            singleDatePicker: true,
            locale: {
                "format": "YYYY-MM-DD",
                "separator": " - ",
                "applyLabel": "Подвердить",
                "cancelLabel": "Отмена",
                "fromLabel": "С",
                "toLabel": "До",
                "customRangeLabel": "Произвольно",
                "weekLabel": "Н",
                "daysOfWeek": [
                    "Вс",
                    "Пн",
                    "Вт",
                    "Ср",
                    "Чт",
                    "Пт",
                    "Сб"
                ],
                "monthNames": [
                    "Январь",
                    "Февраль",
                    "Март",
                    "Апрель",
                    "Май",
                    "Июнь",
                    "Июль",
                    "Август",
                    "Сентябрь",
                    "Октябрь",
                    "Ноябрь",
                    "Декабрь"
                ],
                "firstDay": 1
            }
            }, function(start, end, label) {
                // console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                boom(self, start)
            });
            if (this.order.date!='') {
                this.todate = this.order.date
            }
            if (this.order.time!='') {
                this.totime = this.order.time
            }
        },
        watch:{

        },
        methods: {
            ChooseDate(e){
                this.todate = moment().subtract(e, 'days').format('YYYY-MM-DD')
                this.SendDate()
            },
            ChooseTime(e){
                this.totime = e
                this.SendDate()
            },
            SendDate(){
                this.$emit('Date', {
                        date:  this.todate,
                        time:  this.totime
                })
            }


        },
    })
</script>
<style scope>
.date_btn{
    cursor:pointer
}
.date_btn.active{
    background:#DC2626
}

</style>

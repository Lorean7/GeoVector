<template>
<a class="edit flex items-center mr-3 cursor-pointer p-2" @click="print">
    <i data-lucide="clipboard" class="w-4 h-4 mr-1"></i> Счет
</a>
<div id="inprint" :class="'schet_'+order.id">
    <div id="logo_schet"><img class="logo_schet" src="/images/logo_mini.png" alt=""></div>
    <br>
    <table width="100%" cellpadding="2" cellspacing="2" class="invoice_bank_rekv">
        <tr>
            <td colspan="2" rowspan="2" style="min-height:13mm; width: 105mm;">
                <table width="100%" border="0" cellpadding="0" cellspacing="0" style="height: 13mm;">
                    <tr>
                        <td valign="top">
                            <div class="ip_bank">{{CompanyInfo(order.company_id).bank_name}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td valign="bottom" style="height: 3mm;">
                            <div style="font-size:10pt;"> Банк получателя </div>
                        </td>
                    </tr>
                </table>
            </td>
            <td style="min-height:7mm;height:auto; width: 25mm;">
                <div>БИK</div>
            </td>
            <td rowspan="2" style="vertical-align: top; width: 60mm;">
                <div style=" height: 7mm; line-height: 7mm; vertical-align: middle;" class="ip_bik">{{CompanyInfo(order.company_id).bank_bik}}</div>
                <div class="ip_ks">{{CompanyInfo(order.company_id).bank_ks}}</div>
            </td>
        </tr>
        <tr>
            <td style="width: 25mm;">
                <div>Сч. №</div>
            </td>
        </tr>
        <tr>
            <td style="min-height:6mm; height:auto; width: 50mm;">
                <div>ИНН <span class="ip_inn">{{CompanyInfo(order.company_id).inn}}</span></div>
            </td>
            <td style="min-height:6mm; height:auto; width: 55mm;">
                <div>КПП 0</div>
            </td>
            <td rowspan="2" style="min-height:19mm; height:auto; vertical-align: top; width: 25mm;">
                <div>Сч. № </div>
            </td>
            <td rowspan="2" style="min-height:19mm; height:auto; vertical-align: top; width: 60mm;">
                <div><span class="ip_rs">{{CompanyInfo(order.company_id).bank_rs}}</span></div>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="min-height:13mm; height:auto;">

                <table border="0" cellpadding="0" cellspacing="0" style="height: 13mm; width: 105mm;">
                    <tr>
                        <td valign="top">
                            <div class="ip_name">{{CompanyInfo(order.company_id).company_type}} {{CompanyInfo(order.company_id).name}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td valign="bottom" style="height: 3mm;">
                            <div style="font-size: 10pt;">Получатель</div>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
    <br />


    <div style="font-weight: bold; font-size: 16pt; padding-left:5px;">
        Счет на оплату № <span class="s_id">{{order.id}}</span> от <span class="s_date">{{order.to_date}}</span> г.</div>
<br />
    <hr>
    <br />
    <br />

    <table width="100%" border="0">
        <tr>
            <td style="width: 30mm;">
                <div style=" padding-left:2px;">Поставщик: </div>
            </td>
            <td>
                <div style="font-weight:bold;  padding-left:2px;">
                    <span class="ip_name">{{CompanyInfo(order.company_id).company_type}} {{CompanyInfo(order.company_id).name}}</span>, ИНН <span class="ip_inn">{{CompanyInfo(order.company_id).inn}}</span>, КПП 0 </div>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td style="width: 30mm;">
                <div style=" padding-left:2px;">Покупатель: </div>
            </td>
            <td>
                <div style="font-weight:bold;  padding-left:2px;">
                    <span class="company_type"></span> <span class="company_name">{{ClienInfo(order.client_id).company_type}} {{ClienInfo(order.client_id).company_name}}</span>, ИНН <span class="company_inn">{{ClienInfo(order.client_id).company_inn}}</span>, КПП <span class="company_kpp">{{ClienInfo(order.client_id).company_kpp}}</span>,
                    <br>
                    <span class="company_adress">{{ClienInfo(order.client_id).company_adress}}</span>
                </div>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td style="width: 30mm;">
                <div style=" padding-left:2px;">Комментарий: </div>
            </td>
            <td>
                <div style="font-weight:bold;  padding-left:2px;">
                    Счет выставлен на основании договора №<span class="dogovor">{{ClienInfo(order.client_id).dogovor}}</span>

                </div>
            </td>
        </tr>
    </table>
    <br>

    <table class="invoice_items" width="100%" cellpadding="2" cellspacing="2">
        <thead>
            <tr>
                <th style="width:13mm;">№</th>

                <th>Товар</th>
                <th style="width:20mm;">Кол-во</th>
                <th style="width:17mm;">Ед.</th>
                <th style="width:27mm;">Цена</th>
                <th style="width:27mm;">Сумма</th>
            </tr>
        </thead>
        <tbody class="tbody">
            <tr v-for="(item,index) in items"><td>{{index+1}}</td><td>{{item.name}}</td><td><span v-if="ClienInfo(order.client_id).gramm == 1&&item.product_id != 33">{{item.weight/1000*item.quantity}}</span><span v-else>{{item.quantity}}</span></td><td><span v-if="ClienInfo(order.client_id).gramm == 1&&item.product_id != 33">кг</span><span v-else>шт</span></td><td><span v-if="ClienInfo(order.client_id).gramm == 1&&item.product_id != 33">{{Math.round(item.price/item.weight*1000)}}</span><span v-else>{{item.price}}</span></td><td>{{item.total_price}}</td></tr>
        </tbody>
    </table>

    <table border="0" width="100%" cellpadding="1" cellspacing="1">
        <tr>
            <td></td>
            <td style="width:27mm; font-weight:bold;  text-align:right;">Итого:</td>
            <td style="width:27mm; font-weight:bold;  text-align:right;"><span class="itogo">{{order.total}}</span> ₽</td>
        </tr>
        <tr>
            <td></td>
            <td style="width:27mm; font-weight:bold;  text-align:right;">НДС:</td>
            <td style="width:27mm; font-weight:bold;  text-align:right;">0 ₽</td>
        </tr>
        <tr>
            <td></td>
            <td style="width:57mm; font-weight:bold;  text-align:right;">Всего к оплате :</td>
            <td style="width:27mm; font-weight:bold;  text-align:right;"><span class="itogo">{{order.total}}</span> ₽</td>
        </tr>
    </table>

    <br />
    <div>
        Всего наименований <span class="total">{{intToWords(items.length)}}</span>, на сумму <span class="itogo">{{order.total}}</span>,00 рублей.<br />
        <div class="bold"><span class="itogo_rus">{{intToWords(order.total)}}</span> рублей 00 копеек</div>
    </div>
    <br /><br />

    <div style="width:800px;text-align:left;font-size:10pt;">Счет действителен к оплате в течение десяти дней.</div>
    <hr color="black">
    <br />

    <div>Руководитель ______________________ (Морозов С.А.)</div>
    <br />

    <div style="width: 85mm;text-align:center;">М.П.</div>
    <br />
</div>
</template>

<script>
import {
    defineComponent
} from 'vue'

// import AddOrder from '@/Components/PrintSchet.vue'

export default defineComponent({
    components: {
        // AppLayout,
        // // Welcome,
        // AddOrder,
        // OrderList
    },
    props: {
        companies: Object,
        order: Object,
        clients: Object,
        items: Object
    },
    data() {
        return {
            test: 'print'
        }
    },
    mounted() {
        // this.order.to_date = moment(this.order.to_date).format('DD.MM.YYYY')//Включить чтобы все даты на хрен стали одного формата. Какого хуя спрашивается....
    },
    methods: {
        print() {
            $('#print').html()
            let content = $('.schet_' + this.order.id).html()
            $('#print').html(content + '<style>@page { size: 21cm 29.7cm;margin: 10mm 10mm 10mm 10mm;}</style>')
            window.print();
        },
        CompanyInfo(id) {
            return this.companies.filter((item) => item.id == id)[0]
        },
        ClienInfo(id) {
            return this.clients.filter((client) => client.id == id)[0]
        },
        intToWords(int, names) {
            var result = [];
            if (typeof int === 'number') {
                int = int.toString();
            } else if (typeof int !== 'string') {
                int = '';
            }
            if (!(names instanceof Array) || (typeof names[0] !== 'string') || (typeof names[1] !== 'string') || (typeof names[2] !== 'string')) {
                names = null;
            }
            if (int.length && !/[^0-9]/.test(int)) {
                var selectName = function (number, names) {
                    return names[((parseInt(number) % 100 > 4) && (parseInt(number) % 100 < 20)) ? 2 : [2, 0, 1, 1, 1, 2][Math.min(parseInt(number) % 10, 5)]];
                };
                var name = null;
                var zero = 'ноль';
                if (int === '0') {
                    result.push(zero);
                } else {
                    var from0To2 = [zero, 'одна', 'две'];
                    var from0To19 = [
                        zero, 'один', 'два', 'три', 'четыре',
                        'пять', 'шесть', 'семь', 'восемь', 'девять',
                        'десять', 'одиннадцать', 'двенадцать', 'тринадцать', 'четырнадцать',
                        'пятнадцать', 'шестнадцать', 'семнадцать', 'восемнадцать', 'девятнадцать'
                    ];
                    var tens = [
                        'десять', 'двадцать', 'тридцать', 'сорок', 'пятьдесят',
                        'шестьдесят', 'семьдесят', 'восемьдесят', 'девяносто'
                    ];
                    var hundreds = [
                        'сто', 'двести', 'триста', 'четыреста', 'пятьсот',
                        'шестьсот', 'семьсот', 'восемьсот', 'девятьсот'
                    ];
                    var thousands = [
                        ['тысяча', 'тысячи', 'тысяч'],
                        ['миллион', 'миллиона', 'миллионов'],
                        ['миллиард', 'миллиарда', 'миллиардов'],
                        ['триллион', 'триллиона', 'триллионов'],
                        ['квадриллион', 'квадриллиона', 'квадриллионов'],
                        ['квинтиллион', 'квинтиллиона', 'квинтиллионов'],
                        ['секстиллион', 'секстиллиона', 'секстиллионов'],
                        ['септиллион', 'септиллиона', 'септиллионов'],
                        ['октиллион', 'октиллиона', 'октиллионов'],
                        ['нониллион', 'нониллиона', 'нониллионов'],
                        ['дециллион', 'дециллиона', 'дециллионов']
                    ];
                    var unknown = '{неизвестно}';
                    var numberParts = int.replace(/(?=(\d{3})+(?!\d))/g, ' ').split(' ');
                    var i = numberParts.length - 1;
                    for (var j in numberParts) {
                        var numberPart = parseInt(numberParts[j]);
                        if (numberPart) {
                            var numberPartResult = [];
                            var hundred = Math.floor(numberPart / 100);
                            if (hundred) {
                                numberPartResult.push(hundreds[hundred - 1]);
                                numberPart -= hundred * 100;
                            }
                            if (numberPart > 19) {
                                var ten = Math.floor(numberPart / 10);
                                numberPartResult.push(tens[ten - 1]);
                                numberPart -= ten * 10;
                            }
                            if (numberPart) {
                                numberPartResult.push(((i === 1) && ([1, 2].indexOf(numberPart) !== -1)) ? from0To2[numberPart] : from0To19[numberPart]);
                            }
                            if (thousands[i - 1] !== undefined) {
                                numberPartResult.push(selectName(numberParts[j], thousands[i - 1]));
                            } else if (i !== 0) {
                                numberPartResult.push(unknown);
                            } else if (names) {
                                name = selectName(numberParts[j], names);
                            }
                            result.push(numberPartResult.join(' '));
                        }
                        i--;
                    }
                    if (!result.length) {
                        result.push(zero);
                    }
                }
                if (!name && names) {
                    name = selectName(0, names);
                }
                if (name) {
                    result.push(name);
                }
            }
            return result.join(' ');
        }
    },
})
</script>

<style scope>
#inprint{
    display:none;
}
 #logo_schet {
        text-align: right;
        width:100%;
        height:75px;
    }
    .logo_schet {
        width: 70px;
        float:right
    }
    table.invoice_bank_rekv {
        border-collapse: collapse;
        border: 1px solid;
    }
    table.invoice_bank_rekv>tbody>tr>td,
    table.invoice_bank_rekv>tr>td {
        border: 1px solid;
    }
    table.invoice_items {
        border: 2px solid;
        border-collapse: collapse;
    }
    table.invoice_items td,
    table.invoice_items th {
        border: 1px solid;
    }
    .bold{
        font-weight:bold
    }
</style>

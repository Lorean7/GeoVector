<template>
<a class="flex items-center mr-3 cursor-pointer p-2" @click="print">
    <i data-lucide="check-square" class="w-4 h-4 mr-1"></i>
    Накладная
</a>
<div id="inprint" :class="'t12_'+order.id">
<table class="torg12" border="0" cellspacing="0" cellpadding="0" style="margin-left:.4pt;border-collapse:collapse">
            <tbody><tr>
             <td style="border:none;padding:0cm 0cm 0cm 0cm" width="3"></td>
             <td width="979" colspan="22" rowspan="2" valign="top" style="width:734.4pt;
             padding:0cm 2.85pt .85pt 2.85pt">
             <p class="MsoSignature" align="right" style="text-align:right">Унифицированная
             форма № ТОРГ-12<br>
             Утверждена постановлением Госкомстата<br>
             России от 25.12.98 № 132</p>
             </td>
             <td width="67" valign="bottom" style="width:50.6pt;border:none;border-bottom:
             solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">&nbsp;</h1>
             </td>
            </tr>
            <tr style="height:7.1pt">
             <td style="border:none;padding:0cm 0cm 0cm 0cm" width="3"></td>
             <td width="67" valign="bottom" style="width:50.6pt;border:solid black 1.0pt;
             border-top:none;padding:0cm 2.85pt .85pt 2.85pt;height:7.1pt">
             <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">Код</h1>
             </td>
            </tr>
            <tr>
             <td style="border:none;padding:0cm 0cm 0cm 0cm" width="3"></td>
             <td width="896" colspan="18" rowspan="2" valign="bottom" style="width:671.9pt;
             border:none;border-bottom:solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" style="margin-left:0cm;text-indent:0cm">
             <span class="t12_ip">
             {{CompanyInfo(order.company_id).company_type}} {{CompanyInfo(order.company_id).name}},
             ИНН: {{CompanyInfo(order.company_id).inn}},
             Адрес: {{CompanyInfo(order.company_id).adress}},
             р/c: {{CompanyInfo(order.company_id).bank_rs}},
             Банк: {{CompanyInfo(order.company_id).bank_name}},
             БИК: {{CompanyInfo(order.company_id).bank_bik}},
             корр/с: {{CompanyInfo(order.company_id).bank_ks}}

             </span></h1>
             </td>
             <td width="83" colspan="4" valign="bottom" style="width:62.5pt;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="right" style="margin-left:0cm;text-align:right;text-indent:0cm">Форма
             по ОКУД</h1>
             </td>
             <td width="67" valign="bottom" style="width:50.6pt;border-top:solid black 2.25pt;border-left:
             solid black 2.25pt;border-bottom:solid black 1.0pt;border-right:solid black 2.25pt;
             padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">0330212</h1>
             </td>
            </tr>
            <tr>
             <td style="border:none;padding:0cm 0cm 0cm 0cm" width="3"></td>
             <td width="30" colspan="2" valign="bottom" style="width:22.5pt;border:none;
             border-bottom:solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="right" style="margin-left:0cm;text-align:right;text-indent:0cm">&nbsp;</h1>
             </td>
             <td width="53" colspan="2" valign="bottom" style="width:40.0pt;border:none;
             border-bottom:solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="right" style="margin-left:0cm;text-align:right;text-indent:0cm">по
             ОКПО</h1>
             </td>
             <td width="67" valign="bottom" style="width:50.6pt;border-top:none;border-left:
             solid black 2.25pt;border-bottom:solid black 1.0pt;border-right:solid black 2.25pt;
             padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm"><span class="t12_okpo_ip">{{CompanyInfo(order.company_id).okpo}}</span></h1>
             </td>
            </tr>
            <tr>
             <td style="border:none;padding:0cm 0cm 0cm 0cm" width="3"></td>
             <td width="979" colspan="22" valign="bottom" style="width:734.4pt;border:none;
             border-bottom:solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt">
             <p class="MsoSignature" align="center" style="text-align:center">(организация-грузоотправитель,
             адрес, телефон, факс, банковские реквизиты)</p>
             <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
             </td>
             <td width="67" valign="bottom" style="width:50.6pt;border-top:none;border-left:
             solid black 2.25pt;border-bottom:solid black 1.0pt;border-right:solid black 2.25pt;
             padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">&nbsp;</h1>
             </td>
            </tr>
            <tr>
             <td style="border:none;padding:0cm 0cm 0cm 0cm" width="3"></td>
             <td width="979" colspan="22" valign="top" style="width:734.4pt;padding:0cm 2.85pt .85pt 2.85pt">
             <p class="MsoSignature" align="center" style="text-align:center">(структурное
             подразделение)</p>
             <h1 class="t12" align="right" style="margin-left:0cm;text-align:right;text-indent:0cm">Вид деятельности
             по ОКДП</h1>
             </td>
             <td width="67" valign="bottom" style="width:50.6pt;border-top:none;border-left:
             solid black 2.25pt;border-bottom:solid black 1.0pt;border-right:solid black 2.25pt;
             padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">&nbsp;</h1>
             </td>
            </tr>
            <tr>
             <td style="border:none;padding:0cm 0cm 0cm 0cm" width="3"></td>
             <td width="68" colspan="2" valign="bottom" style="width:51.25pt;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" style="margin-left:0cm;text-indent:0cm">Грузополучатель</h1>
             </td>
             <td width="858" colspan="18" valign="bottom" style="width:643.15pt;border:none;
             border-bottom:solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" style="margin-left:0cm;text-indent:0cm">
             <span class="t12_ooo">
                {{ClienInfo(order.client_id).company_type}} {{ClienInfo(order.client_id).company_name}},
                ИНН: {{ClienInfo(order.client_id).company_inn}},
                КПП: {{ClienInfo(order.client_id).company_kpp}},
                Юридический адрес: {{ClienInfo(order.client_id).company_adress}}

             </span></h1>
             </td>
             <td width="53" colspan="2" valign="bottom" style="width:40.0pt;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="right" style="margin-left:0cm;text-align:right;text-indent:0cm">по
             ОКПО</h1>
             </td>
             <td width="67" valign="bottom" style="width:50.6pt;border-top:none;border-left:
             solid black 2.25pt;border-bottom:solid black 1.0pt;border-right:solid black 2.25pt;
             padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm"><span class="t12_okpo_ooo">{{ClienInfo(order.client_id).company_okpo}}</span></h1>
             </td>
            </tr>
            <tr>
             <td style="border:none;padding:0cm 0cm 0cm 0cm" width="3"></td>
             <td width="68" colspan="2" valign="bottom" style="width:51.25pt;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" style="margin-left:0cm;text-indent:0cm">Поставщик</h1>
             </td>
             <td width="858" colspan="18" valign="bottom" style="width:643.15pt;border:none;
             border-bottom:solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt">
             <p class="MsoSignature" align="center" style="text-align:center">(организация,
             адрес, телефон, факс, банковские реквизиты)</p>
             <h1 class="t12" style="margin-left:0cm;text-indent:0cm"><span class="t12_ip">
             {{CompanyInfo(order.company_id).company_type}} {{CompanyInfo(order.company_id).name}},
             ИНН: {{CompanyInfo(order.company_id).inn}},
             Адрес: {{CompanyInfo(order.company_id).adress}},
             р/c: {{CompanyInfo(order.company_id).bank_rs}},
             Банк: {{CompanyInfo(order.company_id).bank_name}},
             БИК: {{CompanyInfo(order.company_id).bank_bik}},
             корр/с: {{CompanyInfo(order.company_id).bank_ks}}
             </span></h1>
             </td>
             <td width="53" colspan="2" valign="bottom" style="width:40.0pt;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="right" style="margin-left:0cm;text-align:right;text-indent:0cm">по
             ОКПО</h1>
             </td>
             <td width="67" valign="bottom" style="width:50.6pt;border-top:none;border-left:
             solid black 2.25pt;border-bottom:solid black 1.0pt;border-right:solid black 2.25pt;
             padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm"><span class="t12_okpo_ip">{{CompanyInfo(order.company_id).okpo}}</span></h1>
             </td>
            </tr>
            <tr>
             <td style="border:none;padding:0cm 0cm 0cm 0cm" width="3"></td>
             <td width="68" colspan="2" valign="bottom" style="width:51.25pt;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" style="margin-left:0cm;text-indent:0cm">Плательщик</h1>
             </td>
             <td width="858" colspan="18" valign="bottom" style="width:643.15pt;border:none;
             border-bottom:solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt">
             <p class="MsoSignature" align="center" style="text-align:center">(организация,
             адрес, телефон, факс, банковские реквизиты)</p>
             <h1 class="t12" style="margin-left:0cm;text-indent:0cm"><span class="t12_ooo">
              {{ClienInfo(order.client_id).company_type}} {{ClienInfo(order.client_id).company_name}},
                ИНН: {{ClienInfo(order.client_id).company_inn}},
                КПП: {{ClienInfo(order.client_id).company_kpp}},
                Юридический адрес: {{ClienInfo(order.client_id).company_adress}}

             </span></h1>
             </td>
             <td width="53" colspan="2" valign="bottom" style="width:40.0pt;border:none;
             border-bottom:solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="right" style="margin-left:0cm;text-align:right;text-indent:0cm">по
             ОКПО</h1>
             </td>
             <td width="67" valign="bottom" style="width:50.6pt;border-top:none;border-left:
             solid black 2.25pt;border-bottom:solid black 1.0pt;border-right:solid black 2.25pt;
             padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm"><span class="t12_okpo_ooo">{{ClienInfo(order.client_id).company_okpo}}</span></h1>
             </td>
            </tr>
            <tr>
             <td style="border:none;padding:0cm 0cm 0cm 0cm" width="3"></td>
             <td width="68" colspan="2" valign="bottom" style="width:51.25pt;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" style="margin-left:0cm;text-indent:0cm">Основание</h1>
             </td>
             <td width="858" colspan="18" valign="top" style="width:643.15pt;border:none;
             border-bottom:solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt">
             <p class="MsoSignature" align="center" style="text-align:center">(организация,
             адрес, телефон, факс, банковские реквизиты)</p>
             <h1 class="t12" style="margin-left:0cm;text-indent:0cm">Договор № <span class="е12_dogovor">{{ClienInfo(order.client_id).dogovor}}</span> </h1>
             </td>
             <td width="53" colspan="2" valign="bottom" style="width:40.0pt;border-top:none;
             border-left:solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:
             none;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="right" style="margin-left:0cm;text-align:right;text-indent:0cm">номер</h1>
             </td>
             <td width="67" valign="bottom" style="width:50.6pt;border-top:none;border-left:
             solid black 2.25pt;border-bottom:solid black 1.0pt;border-right:solid black 2.25pt;
             padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">&nbsp;</h1>
             </td>
            </tr>
            <tr>
             <td style="border:none;padding:0cm 0cm 0cm 0cm" width="3"></td>
             <td width="68" colspan="2" valign="top" style="width:51.25pt;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
             </td>
             <td width="858" colspan="18" valign="top" style="width:643.15pt;padding:0cm 2.85pt .85pt 2.85pt">
             <p class="MsoSignature" align="center" style="text-align:center">(договор,
             заказ-наряд)</p>
             </td>
             <td width="53" colspan="2" valign="bottom" style="width:40.0pt;border-top:none;
             border-left:solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:
             none;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="right" style="margin-left:0cm;text-align:right;text-indent:0cm">дата</h1>
             </td>
             <td width="67" valign="bottom" style="width:50.6pt;border-top:none;border-left:
             solid black 2.25pt;border-bottom:solid black 1.0pt;border-right:solid black 2.25pt;
             padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">&nbsp;</h1>
             </td>
            </tr>
            <tr>
             <td style="border:none;padding:0cm 0cm 0cm 0cm" width="3"></td>
             <td width="926" colspan="20" valign="bottom" style="width:694.4pt;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="right" style="margin-left:0cm;text-align:right;text-indent:0cm">Транспортная
             накладная</h1>
             </td>
             <td width="53" colspan="2" valign="bottom" style="width:40.0pt;border-top:none;
             border-left:solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:
             none;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="right" style="margin-left:0cm;text-align:right;text-indent:0cm">номер</h1>
             </td>
             <td width="67" valign="bottom" style="width:50.6pt;border-top:none;border-left:
             solid black 2.25pt;border-bottom:solid black 1.0pt;border-right:solid black 2.25pt;
             padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">&nbsp;</h1>
             </td>
            </tr>
            <tr>
             <td style="border:none;padding:0cm 0cm 0cm 0cm" width="3"></td>
             <td width="926" colspan="20" valign="top" style="width:694.4pt;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
             </td>
             <td width="53" colspan="2" valign="bottom" style="width:40.0pt;border-top:none;
             border-left:solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:
             none;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="right" style="margin-left:0cm;text-align:right;text-indent:0cm">дата</h1>
             </td>
             <td width="67" valign="bottom" style="width:50.6pt;border-top:none;border-left:
             solid black 2.25pt;border-bottom:solid black 1.0pt;border-right:solid black 2.25pt;
             padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">&nbsp;</h1>
             </td>
            </tr>
            <tr>
             <td style="border:none;padding:0cm 0cm 0cm 0cm" width="3"></td>
             <td width="979" colspan="22" valign="bottom" style="width:734.4pt;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="right" style="margin-left:0cm;text-align:right;text-indent:0cm">Вид
             операции</h1>
             </td>
             <td width="67" valign="bottom" style="width:50.6pt;border:solid black 2.25pt;
             border-top:none;padding:0cm 2.85pt .85pt 2.85pt">
             <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">&nbsp;</h1>
             </td>
            </tr>
            <tr>
             <td style="border:none;padding:0cm 0cm 0cm 0cm" width="3"></td>
             <td width="438" colspan="4" valign="top" style="width:328.75pt;padding:2.75pt 2.75pt 2.75pt 2.75pt">
             <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
             </td>
             <td width="174" colspan="5" valign="bottom" style="width:130.65pt;border:solid black 1.0pt;
             border-right:none;padding:2.75pt 2.75pt 2.75pt 2.75pt">
             <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">Номер
             документа</h1>
             </td>
             <td width="173" colspan="6" valign="bottom" style="width:129.5pt;border:solid black 1.0pt;
             padding:2.75pt 2.75pt 2.75pt 2.75pt">
             <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">Дата
             составления</h1>
             </td>
             <td width="261" colspan="8" valign="top" style="width:196.1pt;padding:2.75pt 2.75pt 2.75pt 2.75pt">
             <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
             </td>
            </tr>
            <tr>
             <td style="border:none" width="3"></td>
             <td width="438" colspan="4" valign="top" style="width:328.75pt;padding:2.75pt 2.75pt 2.75pt 2.75pt">
             <p class="MsoTitle" align="right" style="text-align:right">ТОВАРНАЯ НАКЛАДНАЯ</p>
             </td>
             <td width="174" colspan="5" valign="top" style="
             width:130.65pt;
             border-top: solid black 2.25pt;
             border-left:solid black 2.25pt;
             border-bottom:solid black 2.25pt;
             border-right:
             none;
             /* padding:2.75pt 2.75pt 2.75pt 2.75pt */
             ">
             <p class="MsoTitle"><span class="t12_id">{{order.id}}</span></p>
             </td>
             <td width="173" colspan="6" valign="top" style="
             width:129.5pt;
             border-top: solid black 2.25pt;
             border-left:solid black 1.0pt;
             border-bottom:solid black 2.25pt;
             border-right:
             solid black 2.25pt;
             /* padding:2.75pt 2.75pt 2.75pt 2.75pt; */
             ">
             <p class="MsoTitle"><span class="t12_date">{{order.to_date}}</span></p>
             </td>
             <td width="261" colspan="8" valign="top" style="width:196.1pt;padding:2.75pt 2.75pt 2.75pt 2.75pt">
             <p class="MsoTitle">&nbsp;</p>
             </td>
            </tr>
            </tbody>
            <tbody><tr><td style="height: 5pt"></td></tr></tbody>
            <tbody>
             <tr style="page-break-inside:avoid">
              <td width="35" colspan="2" rowspan="2" style="width:26.6pt;border:solid black 1.0pt;padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">Но-
              мер<br>
              по по- рядку</h2>
              </td>
              <td width="488" colspan="5" style="width:366.15pt;border:solid black 1.0pt;
              border-right:none;padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">Товар</h2>
              </td>
              <td width="68" colspan="2" style="width:51.1pt;border:solid black 1.0pt;
              border-right:none;padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">Единица</h2>
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">измерения</h2>
              </td>
              <td width="34" colspan="2" rowspan="2" style="width:25.25pt;border:solid black 1.0pt;
              border-right:none;padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">Вид
              упаков- ки</h2>
              </td>
              <td width="60" colspan="2" style="width:45.0pt;border:solid black 1.0pt;padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">Количество</h2>
              </td>
              <td width="30" rowspan="2" style="width:22.5pt;border:solid black 1.0pt;padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">Масса
              брутто</h2>
              </td>
              <td width="45" rowspan="2" style="width:34.1pt;border:solid black 1.0pt;padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">Количест-
              во</h2>
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">(масса
              нетто)</h2>
              </td>
              <td width="61" colspan="2" rowspan="2" style="width:45.65pt;border:solid black 1.0pt;padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">Цена,</h2>
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">руб.
              коп.</h2>
              </td>
              <td width="65" rowspan="2" style="width:49.1pt;border:solid black 1.0pt;padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">Сумма
              без учета НДС, руб. коп.</h2>
              </td>
              <td width="94" colspan="4" style="width:70.25pt;border:solid black 1.0pt;
              padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">НДС</h2>
              </td>
              <td width="69" colspan="2" rowspan="2" style="width:51.55pt;border:solid black 1.0pt;padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">Сумма
              с учетом НДС,</h2>
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">руб.
              коп.</h2>
              </td>
             </tr>
             <tr style="page-break-inside:avoid">
              <td width="468" colspan="4" style="width:351.15pt;border-top:none;border-left:
              solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:none;
              padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">наименование,
              характеристика, сорт, артикул товара</h2>
              </td>
              <td width="20" style="width:15.0pt;border-top:none;border-left:solid black 1.0pt;
              border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">код</h2>
              </td>
              <td width="37" style="width:27.95pt;border-top:none;border-left:solid black 1.0pt;
              border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">наиме-
              нование</h2>
              </td>
              <td width="31" style="width:23.15pt;border-top:none;border-left:solid black 1.0pt;
              border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">код
              по ОКЕИ</h2>
              </td>
              <td width="35" style="width:25.9pt;border-top:none;border-left:solid black 1.0pt;
              border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">в
              одном месте</h2>
              </td>
              <td width="25" style="width:19.1pt;border-top:none;border-left:solid black 1.0pt;
              border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">мест,
              штук</h2>
              </td>
              <td width="34" colspan="2" style="width:25.25pt;border-top:none;border-left:
              solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:none;
              padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">ставка,
              %</h2>
              </td>
              <td width="60" colspan="2" style="width:45.0pt;border-top:none;border-left:solid black 1.0pt;
              border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">сумма,</h2>
              <h2 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:0cm">руб.
              коп.</h2>
              </td>
             </tr>
             <tr style="page-break-inside:avoid">
              <td width="35" colspan="2" style="width:26.6pt;border-top:none;border-left:solid black 1.0pt;
              border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
              <p class="MsoSignature" align="center" style="text-align:center">1</p>
              </td>
              <td width="468" colspan="4" style="width:351.15pt;border-top:none;border-left:
              solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:none;
              padding:.85pt .85pt .85pt .85pt">
              <p class="MsoSignature" align="center" style="text-align:center">2</p>
              </td>
              <td width="20" style="width:15.0pt;border-top:none;border-left:solid black 1.0pt;
              border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
              <p class="MsoSignature" align="center" style="text-align:center">3</p>
              </td>
              <td width="37" style="width:27.95pt;border-top:none;border-left:solid black 1.0pt;
              border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
              <p class="MsoSignature" align="center" style="text-align:center">4</p>
              </td>
              <td width="31" style="width:23.15pt;border-top:none;border-left:solid black 1.0pt;
              border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
              <p class="MsoSignature" align="center" style="text-align:center">5</p>
              </td>
              <td width="34" colspan="2" style="width:25.25pt;border-top:none;border-left:
              solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:none;
              padding:.85pt .85pt .85pt .85pt">
              <p class="MsoSignature" align="center" style="text-align:center">6</p>
              </td>
              <td width="35" style="width:25.9pt;border-top:none;border-left:solid black 1.0pt;
              border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
              <p class="MsoSignature" align="center" style="text-align:center">7</p>
              </td>
              <td width="25" style="width:19.1pt;border-top:none;border-left:solid black 1.0pt;
              border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
              <p class="MsoSignature" align="center" style="text-align:center">8</p>
              </td>
              <td width="30" style="width:22.5pt;border-top:none;border-left:solid black 1.0pt;
              border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
              <p class="MsoSignature" align="center" style="text-align:center">9</p>
              </td>
              <td width="45" style="width:34.1pt;border-top:none;border-left:solid black 1.0pt;
              border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
              <p class="MsoSignature" align="center" style="text-align:center">10</p>
              </td>
              <td width="61" colspan="2" style="width:45.65pt;border-top:none;border-left:
              solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:none;
              padding:.85pt .85pt .85pt .85pt">
              <p class="MsoSignature" align="center" style="text-align:center">11</p>
              </td>
              <td width="65" style="width:49.1pt;border-top:none;border-left:solid black 1.0pt;
              border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
              <p class="MsoSignature" align="center" style="text-align:center">12</p>
              </td>
              <td width="34" colspan="2" style="width:25.25pt;border-top:none;border-left:
              solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:none;
              padding:.85pt .85pt .85pt .85pt">
              <p class="MsoSignature" align="center" style="text-align:center">13</p>
              </td>
              <td width="60" colspan="2" style="width:45.0pt;border-top:none;border-left:solid black 1.0pt;
              border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
              <p class="MsoSignature" align="center" style="text-align:center">14</p>
              </td>
              <td width="69" colspan="2" style="width:51.55pt;border:solid black 1.0pt;
              border-top:none;padding:.85pt .85pt .85pt .85pt">
              <p class="MsoSignature" align="center" style="text-align:center">15</p>
              </td>
             </tr>
            </tbody>
            <tbody class="tbody_t12">
                <tr v-for="(item, index) in items" style="page-break-inside:avoid"> <td width="35" colspan="2" style="width:26.6pt;border-top:none;border-left:solid black 1.0pt; border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt"> <p class="a1" align="center" style="text-align:center"><span lang="EN-US">{{index+1}}</span></p> </td> <td width="468" colspan="4" valign="top" style="width:351.15pt;border-top:none; border-left:solid black 1.0pt;border-bottom:solid black 1.0pt;border-right: none;padding:.85pt .85pt .85pt .85pt"> <p class="a1">{{item.name}}</p> </td> <td width="20" style="width:15.0pt;border-top:none;border-left:solid black 1.0pt; border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt"> <p class="a1" align="center" style="text-align:center">&nbsp;</p> </td> <td width="37" style="width:27.95pt;border-top:none;border-left:solid black 1.0pt; border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt"> <p class="a1" align="center" style="text-align:center"><span v-if="ClienInfo(order.client_id).gramm == 1&&item.product_id != 33">кг</span><span v-else>шт</span></p> </td> <td width="31" style="width:23.15pt;border-top:none;border-left:solid black 1.0pt; border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt"> <p class="a1" align="center" style="text-align:center">—</p> </td> <td width="34" colspan="2" style="width:25.25pt;border-top:none;border-left:solid black 1.0pt; border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt"> <p class="a1" align="center" style="text-align:center">&nbsp;</p> </td> <td width="35" style="width:25.9pt;border-top:none;border-left:solid black 1.0pt; border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt"> <p class="a1" align="center" style="text-align:center">&nbsp;</p> </td> <td width="25" style="width:19.1pt;border-top:none;border-left:solid black 1.0pt; border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt"> <p class="a1" align="center" style="text-align:center">&nbsp;</p> </td> <td width="30" style="width:22.5pt;border-top:none;border-left:solid black 1.0pt; border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt"> <p class="a1" align="center" style="text-align:center">&nbsp;</p> </td> <td width="45" style="width:34.1pt;border-top:none;border-left:solid black 1.0pt; border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt"> <p class="a1" align="center" style="text-align:center"><span v-if="ClienInfo(order.client_id).gramm == 1&&item.product_id != 33">{{item.weight/1000*item.quantity}}</span><span v-else>{{item.quantity}}</span></p> </td> <td width="61" colspan="2" style="width:45.65pt;border-top:none;border-left:solid black 1.0pt; border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt"> <p class="a1" align="right" style="text-align:right"><span v-if="ClienInfo(order.client_id).gramm == 1&&item.product_id != 33">{{Math.round(item.price/item.weight*1000)}}</span><span v-else>{{item.price}}</span></p> </td> <td width="65" style="width:49.1pt;border-top:none;border-left:solid black 1.0pt; border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt"> <p class="a1" align="right" style="text-align:right">{{item.total_price}},00</p> </td> <td width="34" colspan="2" style="width:25.25pt;border-top:none;border-left:solid black 1.0pt; border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt"> <p class="a1" align="center" style="text-align:center">&nbsp;</p> </td> <td width="60" colspan="2" style="width:45.0pt;border-top:none;border-left:solid black 1.0pt; border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt"> <p class="a1" align="right" style="text-align:right"><span lang="EN-US">&nbsp;</span></p> </td> <td width="69" colspan="2" style="width:51.55pt;border:solid black 1.0pt; border-top:none;padding:.85pt .85pt .85pt .85pt"> <p class="a1" align="right" style="text-align:right">{{item.total_price}},00</p> </td></tr>
            </tbody>
            <tbody>

            <tr style="page-break-inside:avoid">
             <td width="660" colspan="12" style="width:495.0pt;border-top:none;border-left:
             solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:none;
             padding:.85pt .85pt .85pt .85pt">
             <p class="a1" align="right" style="text-align:right">Всего по накладной</p>
             </td>
             <td width="25" style="width:19.1pt;border-top:none;border-left:solid black 1.0pt;
             border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
             <p class="a1" align="center" style="text-align:center"></p>
             </td>
             <td width="30" style="width:22.5pt;border-top:none;border-left:solid black 1.0pt;
             border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
             <p class="a1" align="center" style="text-align:center">&nbsp;</p>
             </td>
             <td width="45" style="width:34.1pt;border-top:none;border-left:solid black 1.0pt;
             border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
             <p class="a1" align="center" style="text-align:center"><span class="t12_total"></span></p>
             </td>
             <td width="61" colspan="2" style="width:45.65pt;border-top:none;border-left:solid black 1.0pt;
             border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
             <p class="a1" align="center" style="text-align:center">Х</p>
             </td>
             <td width="65" style="width:49.1pt;border-top:none;border-left:solid black 1.0pt;
             border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
             <p class="a1" align="right" style="text-align:right"><span class="t12_itogo"></span></p>
             </td>
             <td width="34" colspan="2" style="width:25.25pt;border-top:none;border-left:solid black 1.0pt;
             border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
             <p class="a1" align="center" style="text-align:center">Х</p>
             </td>
             <td width="60" colspan="2" style="width:45.0pt;border-top:none;border-left:solid black 1.0pt;
             border-bottom:solid black 1.0pt;border-right:none;padding:.85pt .85pt .85pt .85pt">
             <p class="a1" align="right" style="text-align:center">—</p>
             </td>
             <td width="69" colspan="2" style="width:51.55pt;border:solid black 1.0pt;
             border-top:none;padding:.85pt .85pt .85pt .85pt">
             <p class="a1" align="right" style="text-align:right"><span class="t12_itogo">{{order.total}},00</span></p>
             </td>
            </tr>
            <tr style="page-break-inside:avoid">
             <td width="1050" colspan="24" style="width:787.25pt;padding:0cm 0cm 0cm 0cm">
             <table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
              <tbody><tr style="page-break-inside:avoid">
               <td width="1050" style="width:787.25pt;padding:0cm 0cm 0cm 0cm">
               <table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
                <tbody><tr>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="38"></td>
                 <td width="200" colspan="4" valign="bottom" style="width:150.0pt;padding:2.85pt 2.85pt 0cm 2.85pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">Товарная накладная имеет
                 приложение на</h1>
                 </td>
                 <td width="382" colspan="13" valign="bottom" style="width:286.25pt;border:none;
                 border-bottom:solid black 1.0pt;padding:2.85pt 2.85pt 0cm 2.85pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="427" colspan="7" valign="bottom" style="width:320.5pt;padding:2.85pt 2.85pt 0cm 2.85pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">листах</h1>
                 </td>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="1"></td>
                </tr>
                <tr>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="38"></td>
                 <td width="60" valign="bottom" style="width:45.25pt;padding:2.85pt 2.85pt 0cm 2.85pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">и содержит</h1>
                 </td>
                 <td width="521" colspan="16" valign="bottom" style="width:391.0pt;border:none;
                 border-bottom:solid black 1.0pt;padding:2.85pt 2.85pt 0cm 2.85pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm"><span class="t12_total_rus">{{intToWords(items.length)}}</span></h1>
                 </td>
                 <td width="427" colspan="7" valign="bottom" style="width:320.5pt;padding:2.85pt 2.85pt 0cm 2.85pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">порядковых номеров записей</h1>
                 </td>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="1"></td>
                </tr>
                <tr>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="38"></td>
                 <td width="60" valign="top" style="width:45.25pt;padding:2.85pt 2.85pt 0cm 2.85pt">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="521" colspan="16" valign="top" style="width:391.0pt;padding:2.85pt 2.85pt 0cm 2.85pt">
                 <p class="MsoSignature" align="center" style="text-align:center">(прописью)</p>
                 </td>
                 <td width="427" colspan="7" valign="top" style="width:320.5pt;padding:2.85pt 2.85pt 0cm 2.85pt">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td style="border:none;border-bottom:solid black 2.25pt;padding:0cm 0cm 0cm 0cm" width="1"></td>
                </tr>
                <tr>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="38"></td>
                 <td width="60" valign="top" style="width:45.1pt;padding:0cm 2.85pt .85pt 2.85pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="269" colspan="8" valign="top" style="width:201.85pt;padding:0cm 2.85pt .85pt 2.85pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="113" colspan="2" valign="top" style="width:84.6pt;padding:0cm 2.85pt .85pt 2.85pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">Масса груза (нетто)</h1>
                 </td>
                 <td width="389" colspan="9" valign="top" style="width:291.6pt;border:none;
                 border-bottom:solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="11" colspan="2" valign="top" style="width:7.95pt;padding:0cm 2.85pt .85pt 2.85pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="169" colspan="3" valign="top" style="width:126.4pt;border:solid black 2.25pt;
                 border-bottom:solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                </tr>
                <tr>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="38"></td>
                 <td width="60" valign="top" style="width:45.1pt;padding:0cm 2.85pt .85pt 2.85pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">Всего мест</h1>
                 </td>
                 <td width="269" colspan="8" valign="top" style="width:201.85pt;border:none;
                 border-bottom:solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="113" colspan="2" valign="top" style="width:84.6pt;padding:0cm 2.85pt .85pt 2.85pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">Масса груза (брутто)</h1>
                 </td>
                 <td width="389" colspan="9" valign="top" style="width:291.6pt;border:none;
                 border-bottom:solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt">
                 <p class="MsoSignature" align="center" style="text-align:center">(прописью)</p>
                 </td>
                 <td width="11" colspan="2" valign="top" style="width:7.95pt;padding:0cm 2.85pt .85pt 2.85pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="169" colspan="3" valign="top" style="width:126.4pt;border:solid black 2.25pt;
                 border-top:none;padding:0cm 2.85pt .85pt 2.85pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                </tr>
                <tr>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="38"></td>
                 <td width="60" valign="top" style="width:45.1pt;padding:0cm 2.85pt .85pt 2.85pt">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="269" colspan="8" valign="top" style="width:201.85pt;padding:0cm 2.85pt .85pt 2.85pt">
                 <p class="MsoSignature" align="center" style="text-align:center">(прописью)</p>
                 </td>
                 <td width="113" colspan="2" valign="top" style="width:84.6pt;padding:0cm 2.85pt .85pt 2.85pt">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="389" colspan="9" valign="top" style="width:291.6pt;padding:0cm 2.85pt .85pt 2.85pt">
                 <p class="MsoSignature" align="center" style="text-align:center">(прописью)</p>
                 </td>
                 <td width="11" colspan="2" valign="top" style="width:7.95pt;padding:0cm 2.85pt .85pt 2.85pt">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="169" colspan="3" valign="top" style="width:126.4pt;padding:0cm 2.85pt .85pt 2.85pt">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                </tr>
                <tr>
                 <td width="216" colspan="4" valign="top" style="width:161.7pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">Приложение (паспорта,
                 сертификаты и т.п.) на</h1>
                 </td>
                 <td width="170" colspan="7" valign="top" style="width:127.5pt;border:none;
                 border-bottom:solid black 1.0pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="94" valign="top" style="width:70.8pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">листах</h1>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="7" valign="top" style="width:5.35pt;border:none;border-left:solid black 1.0pt;
                 padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="99" colspan="3" valign="top" style="width:73.95pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">По доверенности №</h1>
                 </td>
                 <td width="453" colspan="8" valign="top" style="width:339.8pt;border:none;
                 border-bottom:solid black 1.0pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="1"></td>
                </tr>
                <tr>
                 <td width="216" colspan="4" valign="top" style="width:161.7pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="170" colspan="7" valign="top" style="width:127.5pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(прописью)</p>
                 </td>
                 <td width="94" valign="top" style="width:70.8pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="7" valign="top" style="width:5.35pt;border:none;border-left:solid black 1.0pt;
                 padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="99" colspan="3" valign="top" style="width:73.95pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="453" colspan="8" valign="top" style="width:339.8pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(номер,
                 дата)</p>
                 </td>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="1"></td>
                </tr>
                <tr>
                 <td width="114" colspan="3" rowspan="2" valign="top" style="width:85.2pt;
                 padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">Всего отпущено на сумму</h1>
                 </td>
                 <td width="366" colspan="9" valign="top" style="width:274.8pt;border:none;
                 border-bottom:solid black 1.0pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm"><span class="t12_itogo_rus">{{intToWords(order.total)}}</span></h1>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="7" valign="top" style="width:5.35pt;border:none;border-left:solid black 1.0pt;
                 padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="49" valign="top" style="width:36.95pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">выданной</h1>
                 </td>
                 <td width="502" colspan="10" valign="top" style="width:376.8pt;border:none;
                 border-bottom:solid black 1.0pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="1"></td>
                </tr>
                <tr>
                 <td width="366" colspan="9" valign="top" style="width:274.8pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(прописью)</p>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="7" valign="top" style="width:5.35pt;border:none;border-left:solid black 1.0pt;
                 padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="49" valign="top" style="width:36.95pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="502" colspan="10" valign="top" style="width:376.8pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(кем, кому
                 (организация, должность, фамилия, и., о.))</p>
                 </td>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="1"></td>
                </tr>
                <tr>
                 <td width="114" colspan="3" valign="bottom" style="width:85.2pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">Отпуск груза разрешил</h1>
                 </td>
                 <td width="129" colspan="3" valign="bottom" style="width:96.4pt;border:none;
                 border-bottom:solid black 1.0pt;padding:0cm">
                 <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:
                 0cm"><span class="t12_ip_small"></span></h1>
                 </td>
                 <td width="7" valign="bottom" style="width:5.35pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="91" valign="bottom" style="width:68.05pt;border:none;border-bottom:
                 solid black 1.0pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="8" valign="bottom" style="width:5.9pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="132" colspan="3" valign="bottom" style="width:99.1pt;border:none;
                 border-bottom:solid black 1.0pt;padding:0cm">
                 <h1 class="t12 __web-inspector-hide-shortcut__" align="center" style="margin-left:0cm;text-align:center;text-indent:
                 0cm">{{CompanyInfo(order.company_id).name}}</h1>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="7" valign="top" style="width:5.35pt;border:none;border-left:solid black 1.0pt;
                 padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="49" valign="top" style="width:36.95pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="502" colspan="10" valign="top" style="width:376.8pt;border:none;
                 border-bottom:solid black 1.0pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="1"></td>
                </tr>
                <tr>
                 <td width="114" colspan="3" valign="top" style="width:85.2pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="129" colspan="3" valign="top" style="width:96.4pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(должность)</p>
                 </td>
                 <td width="7" valign="top" style="width:5.35pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="91" valign="top" style="width:68.05pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(подпись)</p>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="132" colspan="3" valign="top" style="width:99.1pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(расшифровка
                 подписи)</p>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="7" valign="top" style="width:5.35pt;border:none;border-left:solid black 1.0pt;
                 padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="49" valign="top" style="width:36.95pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="502" colspan="10" valign="top" style="width:376.8pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="1"></td>
                </tr>
                <tr>
                 <td width="242" colspan="6" valign="bottom" style="width:181.6pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">Главный (старший) бухгалтер</h1>
                 </td>
                 <td width="7" valign="bottom" style="width:5.35pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="91" valign="bottom" style="width:68.05pt;border:none;border-bottom:
                 solid black 1.0pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="8" valign="bottom" style="width:5.9pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="132" colspan="3" valign="bottom" style="width:99.1pt;border:none;
                 border-bottom:solid black 1.0pt;padding:0cm">
                 <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:
                 0cm">&nbsp;</h1>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="7" valign="top" style="width:5.35pt;border:none;border-left:solid black 1.0pt;
                 padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="79" colspan="2" valign="top" style="width:59.45pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">Груз принял</h1>
                 </td>
                 <td width="178" colspan="3" valign="top" style="width:133.4pt;border:none;
                 border-bottom:solid black 1.0pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="117" colspan="2" valign="top" style="width:87.85pt;border:none;
                 border-bottom:solid black 1.0pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="7" colspan="2" valign="top" style="width:5.35pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="162" valign="top" style="width:121.8pt;border:none;border-bottom:
                 solid black 1.0pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="1"></td>
                </tr>
                <tr>
                 <td width="242" colspan="6" valign="top" style="width:181.6pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="7" valign="top" style="width:5.35pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="91" valign="top" style="width:68.05pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(подпись)</p>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="132" colspan="3" valign="top" style="width:99.1pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(расшифровка
                 подписи)</p>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="7" valign="top" style="width:5.35pt;border:none;border-left:solid black 1.0pt;
                 padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="79" colspan="2" valign="top" style="width:59.45pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="178" colspan="3" valign="top" style="width:133.4pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(должность)</p>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="117" colspan="2" valign="top" style="width:87.85pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(подпись)</p>
                 </td>
                 <td width="7" colspan="2" valign="top" style="width:5.35pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="162" valign="top" style="width:121.8pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(расшифровка
                 подписи)</p>
                 </td>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="1"></td>
                </tr>
                <tr>
                 <td width="114" colspan="3" valign="bottom" style="width:85.2pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">Отпуск груза произвел</h1>
                 </td>
                 <td width="129" colspan="3" valign="bottom" style="width:96.4pt;border:none;
                 border-bottom:solid black 1.0pt;padding:0cm">
                 <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:
                 0cm"><span class="t12_ip_small"></span></h1>
                 </td>
                 <td width="7" valign="bottom" style="width:5.35pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="91" valign="bottom" style="width:68.05pt;border:none;border-bottom:
                 solid black 1.0pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="8" valign="bottom" style="width:5.9pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="132" colspan="3" valign="bottom" style="width:99.1pt;border:none;
                 border-bottom:solid black 1.0pt;padding:0cm">
                 <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:
                 0cm">{{CompanyInfo(order.company_id).name}}</h1>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="7" valign="top" style="width:5.35pt;border:none;border-left:solid black 1.0pt;
                 padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="79" colspan="2" rowspan="2" valign="top" style="width:59.45pt;
                 padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">Груз получил грузополучатель</h1>
                 </td>
                 <td width="178" colspan="3" valign="top" style="width:133.4pt;border:none;
                 border-bottom:solid black 1.0pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="117" colspan="2" valign="top" style="width:87.85pt;border:none;
                 border-bottom:solid black 1.0pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="7" colspan="2" valign="top" style="width:5.35pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="162" valign="top" style="width:121.8pt;border:none;border-bottom:
                 solid black 1.0pt;padding:0cm">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="1"></td>
                </tr>
                <tr>
                 <td width="114" colspan="3" valign="top" style="width:85.2pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="129" colspan="3" valign="top" style="width:96.4pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(должность)</p>
                 </td>
                 <td width="7" valign="top" style="width:5.35pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="91" valign="top" style="width:68.05pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(подпись)</p>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="132" colspan="3" valign="top" style="width:99.1pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(расшифровка
                 подписи)</p>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="7" valign="top" style="width:5.35pt;border:none;border-left:solid black 1.0pt;
                 padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="178" colspan="3" valign="top" style="width:133.4pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(должность)</p>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="117" colspan="2" valign="top" style="width:87.85pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(подпись)</p>
                 </td>
                 <td width="7" colspan="2" valign="top" style="width:5.35pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">&nbsp;</p>
                 </td>
                 <td width="162" valign="top" style="width:121.8pt;padding:0cm">
                 <p class="MsoSignature" align="center" style="text-align:center">(расшифровка
                 подписи)</p>
                 </td>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="1"></td>
                </tr>
                <tr style="height:7.95pt">
                 <td width="114" colspan="3" valign="top" style="width:85.2pt;padding:0cm;
                 height:7.95pt">
                 <h1 class="t12" align="right" style="margin-left:0cm;text-align:right;text-indent:0cm">М.П.</h1>
                 </td>
                 <td width="366" colspan="9" valign="top" style="width:274.8pt;padding:0cm;
                 height:7.95pt">
                 <table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="margin-left:1.0cm;border-collapse:collapse">
                  <tbody><tr style="height:5.75pt">
                   <td width="12" valign="bottom" style="width:8.65pt;padding:0cm 2.85pt .85pt 2.85pt;
                   height:5.75pt">
                   <h1 class="t12">"</h1>
                   </td>
                   <td width="30" valign="bottom" style="width:22.5pt;border:none;border-bottom:
                   solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt;height:5.75pt">
                   <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:
                   0cm"><span class="t12_den">{{order.to_date.toString().slice(-2)}}</span></h1>
                   </td>
                   <td width="19" valign="bottom" style="width:14.35pt;padding:0cm 2.85pt .85pt 2.85pt;
                   height:5.75pt">
                   <h1 class="t12">"</h1>
                   </td>
                   <td width="98" valign="bottom" style="width:73.4pt;border:none;border-bottom:
                   solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt;height:5.75pt">
                   <h1 class="t12" align="center" style="text-align:center"><span class="t12_mesyac">{{order.to_date.toString().slice(5, -3)}}</span></h1>
                   </td>
                   <td width="11" valign="bottom" style="width:8.05pt;padding:0cm 2.85pt .85pt 2.85pt;
                   height:5.75pt">
                   <h1 class="t12">&nbsp;</h1>
                   </td>
                   <td width="35" valign="bottom" style="width:26.0pt;border:none;border-bottom:
                   solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt;height:5.75pt">
                   <h1 class="t12" align="center" style="text-align:center"><span class="t12_god">{{order.to_date.toString().slice(0,-6)}}</span></h1>
                   </td>
                   <td width="30" valign="bottom" style="width:22.8pt;padding:0cm 2.85pt .85pt 2.85pt;
                   height:5.75pt">
                   <h1 class="t12">года</h1>
                   </td>
                  </tr>
                 </tbody></table>
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm"></h1>
                 </td>
                 <td width="8" valign="top" style="width:5.9pt;padding:0cm;
                 height:7.95pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="7" valign="top" style="width:5.35pt;border:none;border-left:solid black 1.0pt;
                 padding:0cm;height:7.95pt">
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                 </td>
                 <td width="99" colspan="3" valign="top" style="width:73.95pt;padding:0cm;
                 height:7.95pt">
                 <h1 class="t12" align="right" style="margin-left:0cm;text-align:right;text-indent:0cm">М.П.</h1>
                 </td>
                 <td width="453" colspan="8" valign="top" style="width:339.8pt;padding:0cm;
                 height:7.95pt">
                 <table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="margin-left:1.0cm;border-collapse:collapse">
                  <tbody><tr style="height:5.5pt">
                   <td width="12" valign="bottom" style="width:9.0pt;padding:0cm 2.85pt .85pt 2.85pt;
                   height:5.5pt">
                   <h1 class="t12" align="right" style="margin-left:0cm;text-align:right;text-indent:
                   0cm">"</h1>
                   </td>
                   <td width="30" valign="bottom" style="width:22.5pt;border:none;border-bottom:
                   solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt;height:5.5pt">
                   <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:
                   0cm">&nbsp;</h1>
                   </td>
                   <td width="19" valign="bottom" style="width:14.0pt;padding:0cm 2.85pt .85pt 2.85pt;
                   height:5.5pt">
                   <h1 class="t12" style="margin-left:0cm;text-indent:0cm">"</h1>
                   </td>
                   <td width="121" valign="bottom" style="width:90.5pt;border:none;border-bottom:
                   solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt;height:5.5pt">
                   <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:
                   0cm">&nbsp;</h1>
                   </td>
                   <td width="19" valign="bottom" style="width:14.0pt;padding:0cm 2.85pt .85pt 2.85pt;
                   height:5.5pt">
                   <h1 class="t12" style="margin-left:0cm;text-indent:0cm">&nbsp;</h1>
                   </td>
                   <td width="38" valign="bottom" style="width:28.5pt;border:none;border-bottom:
                   solid black 1.0pt;padding:0cm 2.85pt .85pt 2.85pt;height:5.5pt">
                   <h1 class="t12" align="center" style="margin-left:0cm;text-align:center;text-indent:
                   0cm">&nbsp;</h1>
                   </td>
                   <td width="31" valign="bottom" style="width:23.05pt;padding:0cm 2.85pt .85pt 2.85pt;
                   height:5.5pt">
                   <h1 class="t12" style="margin-left:0cm;text-indent:0cm">года</h1>
                   </td>
                  </tr>
                 </tbody></table>
                 <h1 class="t12" style="margin-left:0cm;text-indent:0cm"></h1>
                 </td>
                 <td style="border:none;padding:0cm 0cm 0cm 0cm" width="1"></td>
                </tr>
                <tr height="0">
                 <td width="17" style="border:none"></td>
                 <td width="60" style="border:none"></td>
                 <td width="8" style="border:none"></td>
                 <td width="64" style="border:none"></td>
                 <td width="13" style="border:none"></td>
                 <td width="3" style="border:none"></td>
                 <td width="5" style="border:none"></td>
                 <td width="59" style="border:none"></td>
                 <td width="5" style="border:none"></td>
                 <td width="9" style="border:none"></td>
                 <td width="10" style="border:none"></td>
                 <td width="68" style="border:none"></td>
                 <td width="5" style="border:none"></td>
                 <td width="5" style="border:none"></td>
                 <td width="59" style="border:none"></td>
                 <td width="28" style="border:none"></td>
                 <td width="15" style="border:none"></td>
                 <td width="15" style="border:none"></td>
                 <td width="74" style="border:none"></td>
                 <td width="6" style="border:none"></td>
                 <td width="64" style="border:none"></td>
                 <td width="8" style="border:none"></td>
                 <td width="2" style="border:none"></td>
                 <td width="3" style="border:none"></td>
                 <td width="102" style="border:none"></td>
                 <td width="1" style="border:none"></td>
                </tr>
               </tbody></table>
               <h1 class="t12" style="margin-left:0cm;text-indent:0cm"></h1>
               </td>
              </tr>
             </tbody></table>
             <p class="a1" align="center" style="text-align:center"></p>
             </td>
            </tr>
            <tr height="0">
             <td width="1" style="border:none"></td>
             <td width="34" style="border:none"></td>
             <td width="38" style="border:none"></td>
             <td width="19" style="border:none"></td>
             <td width="132" style="border:none"></td>
             <td width="23" style="border:none"></td>
             <td width="18" style="border:none"></td>
             <td width="35" style="border:none"></td>
             <td width="29" style="border:none"></td>
             <td width="24" style="border:none"></td>
             <td width="9" style="border:none"></td>
             <td width="31" style="border:none"></td>
             <td width="23" style="border:none"></td>
             <td width="30" style="border:none"></td>
             <td width="44" style="border:none"></td>
             <td width="19" style="border:none"></td>
             <td width="19" style="border:none"></td>
             <td width="42" style="border:none"></td>
             <td width="10" style="border:none"></td>
             <td width="21" style="border:none"></td>
             <td width="7" style="border:none"></td>
             <td width="42" style="border:none"></td>
             <td width="2" style="border:none"></td>
             <td width="56" style="border:none"></td>
            </tr>
           </tbody></table>
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
        companies:Object,
        order:Object,
        clients:Object,
        items:Object
    },
    data() {
        return {
          test:'print'
        }
    },
    mounted() {

    },
    methods: {
        print(){
            $('#print').html()
            let content = $('.t12_'+this.order.id).html()
            $('#print').html(content+'<style>@page { size:  29.7cm 21cm; margin: 10mm 10mm 10mm 10mm; }</style>')
            window.print();
        },
        // ClienInfo(id) {
        //     return this.clients.filter((client) => client.id == id)[0]
        // },
        // OrderItems(id) {
        //     return this.order_items.filter((item) => item.order_id == id)
        // },
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
            var selectName = function(number, names) {
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
.torg12{
    font-size: 10px
}
.MsoTitle{
    margin: 0cm;
        margin-bottom: .0001pt;
        text-align: center;
        page-break-after: avoid;
        font-size: 10.0pt;
        font-family: "Times New Roman", serif;
        font-weight: bold;
}
p.MsoSignature,
    li.MsoSignature,
    div.MsoSignature {
        margin: 0cm;
        margin-bottom: .0001pt;
        font-size: 5.0pt;
        font-family: "Times New Roman", serif;
    }
</style>

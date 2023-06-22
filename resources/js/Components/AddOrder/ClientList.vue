<template #content>
<div >
        <div class="group relative rounded-md dark:bg-slate-700 dark:highlight-white/10 dark:focus-within:bg-transparent">
    <svg width="20" height="20" fill="currentColor" class="absolute left-3 top-1/2 -mt-2.5 text-slate-400 pointer-events-none group-focus-within:text-blue-500 dark:text-slate-500">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path></svg>
    <input  v-model="search"  type="text" aria-label="Filter projects" placeholder="Filter projects..." class="appearance-none w-full text-sm leading-6 bg-transparent text-slate-900 placeholder:text-slate-400 rounded-md py-2 pl-10 ring-1 ring-slate-200 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:text-slate-100 dark:placeholder:text-slate-500 dark:ring-0 dark:focus:ring-2"></div>
    <input  v-model="hidsearch" id="searchTable" type="text" class="hidden">
    <table class="min-w-full divide-y divide-gray-200" id="clients_table">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Имя
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Контакты
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Выбрать</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr v-for="client in clients">
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">

                  <div class="ml-0">
                     <div class="text-sm font-medium text-gray-900 hidden">
                      #{{client.id}}#
                    </div>
                    <div class="text-sm font-medium text-gray-900">
                      {{client.name}}
                    </div>
                    <div class="text-sm text-gray-500">
                      {{client.instagram}}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{client.adress}}</div>
                <div class="text-sm text-gray-500"><a href="tel:+7{{client.phone}}">{{client.phone}}</a></div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <button @click="choose(client.id, client.adress, client.name)" type="button" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition"> Выбрать </button>
              </td>
            </tr>

            <!-- More people... -->
          </tbody>
        </table>
</div>
</template>

<script>
    import { defineComponent } from 'vue'
    import '@/datatables.min.js';
    // import Product from '@/Components/AddOrder/Product.vue'

    export default defineComponent({
        components: {
            // Product
        },
        props:{
            clients: Object,
            order: Object,
            cursearch: Number
        },
        data() {
            return {
                hidsearch: '',
                search:'',
                client:{
                    id: '',
                    adress: ''
                }
            }
        },
        mounted(){
            if (Object.keys(this.order.client).length !=0) {
                this.hidsearch = '#'+this.order.client.id+'#'
            }

            var table =  $('#clients_table').DataTable({
                autoWidth: false,
                "columns": [
                    { "width": "30%" },
                    { "width": "30%" },
                   { "width": "30%" }
                ],
                // initComplete: function () {
                //     var api = this.api();
                //     api.$('td').click(function () {
                //         api.search(this.innerHTML).draw();
                //     });
                // },

                }
            );
            // this.search = this.order.client.id
            var self = this
            $('#searchTable').on( 'keyup click', function () {

              table.search(self.hidsearch).draw();
            //   console.log(self.search)
            });
            $('#searchTable').click()
            // this.hidsearch = 'Кликните для выбора другого клиента'
        },
        watch:{
            search(){
                this.hidsearch = this.search
                $('#searchTable').click()
            }
        },
        methods: {
            choose(id,adress, name){
                this.client.id = id
                this.client.adress = adress
                this.hidsearch = '#'+id+'#'
                // this.search = name
                this.$emit('Client', {
                        id:  id,
                        adress: adress
                })
                $('#searchTable').click()
            }
        },
    })
</script>
<style scope>
#clients_table_length,#clients_table_filter{
  display:none
}
</style>

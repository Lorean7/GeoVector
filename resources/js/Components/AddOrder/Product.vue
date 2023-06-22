<template #content>
<div :class="{ active: data.count > 0 }" class="item_btn mb-1 grid grid-cols-12 gap-6 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2">
    <div class="col-span-6 sm:col-span-9 product-name" > {{product.name}}</div>
    <div class="col-span-6 sm:col-span-3 product-count">
        <i class="fas fa-chevron-square-left" @click="minus"></i>
        <span class="item_count" v-if="product.count">{{product.count}}</span>
        <span class="item_count" v-else>{{data.count}}</span>
        <i class="fas fa-chevron-square-right" @click="plus"></i>
    </div>
</div>
    <!-- {{order.items[1]}} -->
    <!-- {{test}} -->
</template>

<script>
    import { defineComponent } from 'vue'


    export default defineComponent({
        components: {

        },
        props:{
            product: Object,
            order: Object
        },
        data() {
            return {
               data:{
                   id:'',
                   count:'0'
               }
            }
        },
        mounted(){
            if(this.order.items[this.product.id]!=null){
                // let key =
                this.data.count = this.order.items[this.product.id]
            }

            // this.data.count = order.count
         },
        methods: {
            minus(){
               if(this.data.count>0){
                this.data.count--
                // this.product.count = this.data.count
                this.$emit('OrderId', {
                        id:  this.product.id,
                        count: this.data.count
                })
               }

           },
           plus(){
                this.data.count++
                // this.product.count = this.data.count
                this.$emit('OrderId', {
                        id:  this.product.id,
                        count: this.data.count
                })

           }

        },
    })
</script>
<style scop>
.col-span-6{
    cursor:pointer
}
.item_count{
    -webkit-user-select: none;
    /* user-select -- это нестандартное свойство */

    -moz-user-select: none;
    /* поэтому нужны префиксы */

    -ms-user-select: none;
}
.item_btn{
    cursor:pointer
}
.item_btn.active{
    background:#DC2626
}
</style>

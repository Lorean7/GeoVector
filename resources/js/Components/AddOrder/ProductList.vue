<template #content>
<div >
<template v-for="product in products">
            <Product
            :product="product"
            :order="order"
            @OrderId="OrderId2"
            />
            </template>
        </div>


</template>

<script>
    import { defineComponent } from 'vue'
    import Product from '@/Components/AddOrder/Product.vue'

    export default defineComponent({
        components: {
            Product
        },
        props:{
            order: Object,
            products: Object
        },
        data() {
            return {
                test:''
            }
        },


        methods: {
            OrderId2(dt){
                // alert(dt.id+' '+dt.count)
                this.$emit('OrderId', {
                        id:  dt.id,
                        count: dt.count
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

</style>

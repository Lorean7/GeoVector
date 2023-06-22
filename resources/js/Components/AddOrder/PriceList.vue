<template #content>
<div>
    <div :class="{ active: id===0 }" class="price_btn mb-1 grid grid-cols-12 gap-6 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2">
        <div class="col-span-6 sm:col-span-12 product-name" @click="personal"> Персональная</div>
    </div>
    <div v-for="price in prices" :class="{ active: id==price.id }" @click="choose(price.id)" class="price_btn mb-1 grid grid-cols-12 gap-6 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2">
        <Price
        :price="price"
        @PriceId="priceid"
        />
    </div>

</div>
</template>

<script>
    import { defineComponent } from 'vue'
    import Price from '@/Components/AddOrder/Price.vue'

    export default defineComponent({
        components: {
            Price
        },
        props:{
            prices: Object,
            order: Object
        },
        data() {
            return {
                id: 'dis'
            }
        },
        mounted(){
            this.id = this.order.price
        },
        methods: {
            priceid(postdata){
                this.$emit('PriceId', {
                        id:  postdata.id,
                })
                this.id = postdata.id
            },
            personal(){
                this.$emit('PriceId', {
                        id:  0
                })
                this.id = 0
            },
            choose(gid){
                this.$emit('PriceId', {
                        id:  gid,
                })
                this.id = gid
            }
        },
    })
</script>
<style scop>
.price_btn{
    cursor:pointer
}
.price_btn.active{
    background:#DC2626
}

</style>

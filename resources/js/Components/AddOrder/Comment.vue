<template #content>
<div>

    <textarea  v-model="comment" id="" type="text" class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md shadow-sm mt-1 block w-full" @change='SendData'></textarea>

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
                comment:''
            }
        },
        mounted(){
            
            
            if (this.order.comment!='') {
                this.comment = this.order.comment
            }
        },
        watch:{
           
        },
        methods: {
            SendData(){
                this.$emit('Comment', {
                        comment:  this.comment
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

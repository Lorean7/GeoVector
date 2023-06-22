<template #content>
    <div class="col-span-6 sm:col-span-12 product-name"> {{price.name}}</div>
</template>

<script>
    import { defineComponent } from 'vue'


    export default defineComponent({
        components: {

        },
        props:{
            price: Object
        },
        data() {
            return {
               id: ''
            }
        },
        methods: {

        },
    })
</script>
<style scop>

.item_count{
    -webkit-user-select: none;
    /* user-select -- это нестандартное свойство */

    -moz-user-select: none;
    /* поэтому нужны префиксы */

    -ms-user-select: none;
}
</style>

<template>
<div v-if="!edit">
    <button class="btn btn-primary shadow-md mr-2" @click="confirmUserDeletion">Добавить новый заказ</button>

    <!-- <a href="#" class="flex items-center mr-4 hover:text-blue-100" @click="confirmUserDeletion">
                  <span class="inline-flex mr-1">
<i class="fas fa-layer-plus"></i>        </span>
                  Добавить
                  </a>

    <div v-if="$page.props.flash.message" class="alert">
                            {{ $page.props.flash.message }}
                        </div> -->
</div>
<div v-else>
    <a class="edit flex items-center mr-3 cursor-pointer p-2" @click="confirmUserDeletion">
        <i data-lucide="edit" class="w-4 h-4 mr-1"></i> Изменить
    </a>
    <!-- <i class="fa fa-edit" @click="confirmUserDeletion"></i> -->
</div>

<!-- Delete Account Confirmation Modal -->
<jet-dialog-modal :show="confirmingUserDeletion" @close="closeModal" maxWidth="3xl">
    <template #title>
        Добавить заказ
    </template>

    <template #content>
        <div class="pages-wrap">
            <div v-if="page==1" class="h-full overflow-y-auto">
                <ProductList :products="products" :order="order" @OrderId="OrderId3" />
            </div>
            <div v-if="page==2" class="h-full">
                <PriceList :prices="prices" :order="order" @PriceId="priceid" />
            </div>
            <div v-if="page==3" class="h-full overflow-y-auto">
                <ClientList :clients="clients" :order="order" @Client="client" />
            </div>
            <div v-if="page==4" class="h-full">
                <Date :order="order" @Date="date" />
            </div>
            <div v-if="page==5" class="h-full">
                <Comment :order="order" @Comment="comment" />
            </div>
        </div>
        <div class="pt-5">
            <jet-secondary-button @click="back" :disabled="page==1" width="w-1/2">
                Назад
            </jet-secondary-button>
            <jet-secondary-button @click="forward" :disabled="page==5" width="w-1/2">
                Вперед
            </jet-secondary-button>
        </div>
        <!-- {{edit_order}} - {{order}} -->
    </template>

    <template #footer>
        <jet-secondary-button @click="closeModal">
            Отмена
        </jet-secondary-button>

        <jet-danger-button class="ml-2" :class="{ 'opacity-25': form.processing }" :disabled="form.processing||!allowsend" @click="save">
            <span v-if="!edit">Добавить заказ</span>
            <span v-else>Изменить заказ</span>
        </jet-danger-button>
    </template>
</jet-dialog-modal>
</template>

<script>
import {
    defineComponent
} from 'vue'
import JetActionSection from '@/Jetstream/ActionSection.vue'
import JetDialogModal from '@/Jetstream/DialogModal.vue'
import JetDangerButton from '@/Jetstream/DangerButton.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetInputError from '@/Jetstream/InputError.vue'
import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'
import ProductList from '@/Components/AddOrder/ProductList.vue'
import PriceList from '@/Components/AddOrder/PriceList.vue'
import ClientList from '@/Components/AddOrder/ClientList.vue'
import Date from '@/Components/AddOrder/Date.vue'
import Comment from '@/Components/AddOrder/Comment.vue'

export default defineComponent({
    components: {
        JetActionSection,
        JetDangerButton,
        JetDialogModal,
        JetInput,
        JetInputError,
        JetSecondaryButton,
        ProductList,
        PriceList,
        ClientList,
        Date,
        Comment
    },
    props: {
        edit: {
            default: false
        },
        edit_order: Object,
        modal_id: {
            default: 1
        },
        client_name: String
    },

    data() {
        return {
            confirmingUserDeletion: false,
            page: '1',
            order: {
                client: {},
                items: {},
                price: '',
                date: '',
                time: '',
                comment: ''
            },
            allowsend: false,
            form: this.$inertia.form({
                id: '',
                client_id: '',
                order_json: '',
                to_date: '',
                to_time: '',
                price_id: '',
                total: '',
                comment: ''
            }),
            products: '',
            prices: '',
            clients: '',
            companies:''
        }
    },
    mounted() {

        if (this.edit_order) {
            this.order.client.id = this.edit_order.client_id
            this.order.client.adress = this.client_adress
            this.order.items = JSON.parse(this.edit_order.order_json)
            this.order.price = this.edit_order.price_id
            this.order.date = this.edit_order.to_date
            this.order.time = this.edit_order.to_time
            this.order.comment = this.edit_order.comment
            this.form.id = this.edit_order.id
        }
    },
    updated() {
        this.$nextTick(function () {
            if (this.edit_order) {
                this.order.client.id = this.edit_order.client_id
                this.order.client.adress = this.client_adress
                this.order.items = JSON.parse(this.edit_order.order_json)
                this.order.price = this.edit_order.price_id
                this.order.date = this.edit_order.to_date
                this.order.time = this.edit_order.to_time
                this.order.comment = this.edit_order.comment
                this.form.id = this.edit_order.id
            }
        })
    },
    methods: {
        save() {
            this.form.client_id = this.order.client
            this.form.order_json = this.order.items
            this.form.to_date = this.order.date
            this.form.to_time = this.order.time
            this.form.price_id = this.order.price
            this.form.comment = this.order.comment
            this.form.post(route('order.add'), {
                preserveScroll: true,
                onSuccess: (res) => {
                    // console.log(res)
                    this.closeModal()
                    var self = this;

                    setTimeout(function () {
                        self.$page.props.flash.message = ''
                    }, 2000);
                    this.page = 1
                    this.order.client = {}
                    this.order.items = {}
                    this.order.price = 'dis'
                    this.order.date = ''
                    this.order.time = ''
                    this.order.comment = ''
                    this.allowsend = false
                },
                onError: () => this.$refs.name.focus(),

            })

        },
        confirmUserDeletion() {
            this.FreshData()
            this.confirmingUserDeletion = true;
            // this.GoorNot()
            // setTimeout(() => this.$refs.name.focus(), 250)
        },
        priceid(postdata) {
            this.order.price = postdata.id
            this.GoorNot()
            this.page++
        },
        client(postdata) {
            var client = this.order.client
            client.id = postdata.id,
                client.adress = postdata.adress
            this.GoorNot()
            this.page++
        },
        date(postdata) {
            this.order.date = postdata.date,
                this.order.time = postdata.time
            this.GoorNot()
        },
        comment(postdata) {
            this.order.comment = postdata.comment
        },
        GoorNot() {
            for (var key in this.order) {
                if (key == 'items' || key == 'client' || key == 'price'|| key == 'date') {
                    if (key == 'items' || key == 'client') {

                        if (Object.keys(this.order[key]).length == 0) {
                            this.allowsend = false
                            break;
                        }
                    } else {
                        if (this.order[key].length == 0) {
                            // console.log(key + ' - ' + this.order[key])
                            this.allowsend = false
                            break;
                        }
                    }
                }
                this.allowsend = true
            }
            // if(Object.keys(this.order.items).length != 0){
            //    this.allowsend = true
            // }
            // this.allowsend = true
        },
        // addUser() {
        //     this.form.post(route('product.add'), {
        //         preserveScroll: true,
        //         onSuccess: () => this.closeModal(),
        //         onError: () => this.$refs.name.focus(),
        //         onFinish: () => this.form.reset(),
        //     })
        // },

        closeModal() {
            this.confirmingUserDeletion = false

            this.form.reset()
        },
        forward() {
            this.page++
        },
        back() {
            this.page--
        },
        OrderId3(dt) {
            // alert(dt.id)
            // if (dt.count == 0) {
            // [dt.id]
            // this.order.items.splice(dt.id-1, 1);
            // }
            // else{
            this.order.items[dt.id] = dt.count
            // }

            this.GoorNot()
        },
        FreshData() {
            axios.get(route('products.get'))
                .then(res => {
                    this.products = res.data
                    // this.order.items = res.data
                    // this.test = res
                })
            axios.get(route('prices.get'))
                .then(res => {
                    this.prices = res.data
                    // this.test = res
                })
            axios.get(route('clients.get'))
                .then(res => {
                    this.clients = res.data
                    // this.test = res
                })
            axios.get(route('config.companies.get'))
                .then(res => {
                    this.companies = res.data
                    // this.test = res
                })
        }

    },
})
</script>

<template>
    <div class="col-12 ">
        <!-- <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Галерея продуктов </label> -->
        <textarea name="dop1" style="display: none;" type="text" placeholder="Добавить описание к фотографии">{{ output }}</textarea>
        <div v-for="(input, index) in inputs" :key="index" class="mt-20">
            <div class="contact-form d-flex lg:flex-column">
                <div class="relative shrink-0">
                    <img class="" style="width:300px" :src="'https://www.aquazond.ru/storage/'+input.image" alt="image">
                    <div class="absolute-full-center d-flex justify-end py-20 px-20">
                        <a href="#" class="d-flex justify-center items-center bg-white size-40 rounded-8 shadow-1">
                            <i class="icon-bin text-16"></i>
                        </a>
                    </div>
                </div>
                <div class="w-1/1 ml-30 lg:ml-0 lg:mt-20">
                    <div class="form-upload col-12">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Добавьте файл изображения, описание и его порядок</label>
                        <div class="form-upload__wrap">
                            <input type="file" placeholder="" @change="(e) => loadfile(e, index)">
                        </div>
                    </div>
                    <p class="mt-10">Изображение в галерее интерфейса. Желательное разрешение: шириной от 1200 пикселей; .jpg или
                        .png. Для того, чтобы галерея хорошо смотрелась, желательно фото добавлять с одинаковым соотношением сторон</p>
                    <div class="form-upload col-12 form-upload__wrap">
                        <input type="text" placeholder="Добавить описание к фотографии" class="mt-10" v-model="input.value"
                            @change="processInputs">
                        <button type="button" class="button -dark-3 text-white mt-10" @click="removeInput(index)">Удалить
                            из галереи</button>
                            
                    </div>
                    <input type="text" placeholder="Порядок" class="mt-10" v-model="input.order"
                            @change="processInputs">
                </div>
            </div>
        </div>
        <div class="mt-20">
            <button type="button" class="button -sm py-15 -purple-3 text-purple-1 fw-500" @click="addInput">Добавить
                +</button>
        </div>
    </div>
</template>
  
<script>
export default {
    components: {},
    props: {
        databd: {
            type: Array,
        }
        // id: 0,
    },
    data() {
        return {
            inputs: [{ "value": "", "image": "uploads/no-image.png","order": "" }],
            output: [],
        };
    },
    mounted() {
        this.output = this.databd
        if (this.databd.length >0) {
            this.inputs = this.databd
        }

    },
    methods: {
        addInput() {
            this.inputs.push({
                value: '',
                image: 'uploads/no-image.png',
                order: ''
            });
        },
        removeInput(index) {
            this.inputs.splice(index, 1);
        },
        processInputs() {
            this.output = this.inputs;
            // console.log(this.output);
        },
        loadfile(e,index) {
            this.output = this.inputs;
            // var files = e.target.files || e.dataTransfer.files;
            let file = e.target.files[0];
            let formData = new FormData();
                formData.append('img', file);
            // this.inputs[index].image = e.target.files[0];
            axios
                .post("/admin/loadimage", formData, {
                    headers: {
                        "Content-type": "multipart/form-data"
                    },
                })
                .then((res) => {
                    this.inputs[index].image = res.data
                    // this.src ='https://www.aquazond.ru/storage/'
                    // console.log(res.data);
                })
                .catch((error) => { });
        }

    },
};
</script>
  
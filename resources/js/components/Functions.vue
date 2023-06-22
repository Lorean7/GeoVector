<template>
  <div class="col-12 ">
    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Описание функции </label>
    <textarea style="display: none;" name="functions" type="text" placeholder="Добавить описание функции продукта" 
      >{{output}}</textarea>
    <div v-for="(input, index) in inputs" :key="index" class="form-upload__wrap">
      <div class="form-upload col-12">
        <input type="text" placeholder="Добавить описание функции продукта" class="mt-10"
          v-model="input.value" @change="processInputs"> 
        <button type="button" class="button -dark-3 text-white mt-10" @click="removeInput(index)">Удалить поле</button>
      </div>
    </div>
    <div class="mt-20">
      <button type="button" class="button -sm py-15 -purple-3 text-purple-1 fw-500" @click="addInput">Добавить +</button>
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
      // functions: 'asd',
      inputs: [{ "value": "" }],
      output: [],

    };
  },
  mounted() {
    this.output = this.databd
    // console.log(this.databd);
    if (this.databd.length >0) {
      this.inputs = this.databd
    }
    
  },
  methods: {
    addInput() {
      this.inputs.push({
        value: '',
      });
    },
    removeInput(index) {
      this.inputs.splice(index, 1);
    },
    processInputs() {
      this.output = this.inputs;
      // console.log(this.output);
    }

  },
};
</script>

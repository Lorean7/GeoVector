<template>
  <div class="form-switch pr-10">
    <div class="switch" data-switch=".js-switch-content">
      <input
        name="publish"
        type="checkbox"
        @change="onChange($event)"
        v-model="form.publish"
      />
      <span class="switch__slider"></span>
    </div>
  </div>
</template>

<script>
export default {
  components: {},
  props: {
    check: false,
    id: 0,
  },
  data() {
    return {
      form: {
        publish: false,
        ispublish: true,
      },
    };
  },
  mounted() {
    if (this.check == 1) {
      this.form.publish = true;
    }
  },
  methods: {
    onChange(event) {
      axios
        .put("/admin/product/" + this.id, this.form, {
          headers: {
            "Content-type": "application/json",
          },
        })
        .then((res) => {
          if (res.data == 1) {
            this.form.publish = true;
          }
          else{
            this.form.publish = false
          }
          // console.log();
        })
        .catch((error) => {});
    },
  },
};
</script>

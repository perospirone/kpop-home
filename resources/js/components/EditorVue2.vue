<template>
  <div id="app">
    <vue-editor v-model="content"></vue-editor>

    <textarea name="content" id="conteudo" cols="30" rows="10" v-model="content"></textarea>
  </div>
</template>

<script>
import { VueEditor } from "vue2-editor";

export default {
  components: {
    VueEditor
  },

  data() {
    return {
      content: "<h1>Faça seu post incrivel</h1>"
    };
  }
};
</script>

<style scoped>
textarea {
  visibility: hidden;
  width: 0;
  height: 0;
}
</style>


<template>
  <div id="app">
    <vue-editor v-model="content"></vue-editor>


  <textarea name="content" id="conteudo" cols="30" rows="10" v-model="content"></textarea>
  </div>
</template>

<style>
textarea {
  visibility: hidden;
}
</style>

<script>
import { VueEditor } from "vue2-editor";

export default {
  components: {
    VueEditor
  },

  data() {
    return {
      content: "<h1>Some initial content</h1>"
    };
  }
};
</script>

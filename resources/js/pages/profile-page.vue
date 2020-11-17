<template>
  <div class="mainContainer">
    <Header></Header>
    <main class="">
      <div class="marrom"></div>

    </main>

  </div>
</template>

<script>
import Posts from '../components/Posts.vue'
import Header from '../components/Header.vue'

export default {
  components: {
    'Posts': Posts,
    'Header': Header
  }
}

</script>

<style scoped>
main {
  margin: 0 !important;
  width: 100%;
  height: 85vh;
}

.marrom {
  width: 100%;
  height: 120px;
  background: #4d4d4d;
}
</style>

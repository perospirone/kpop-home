<template>
  <div class="app">
    <Post></Post>
  </div>
</template>

<script>
import Post from './Post.vue';

export default {
  components: {
    'Post': Post
  }
};


</script>

<style scoped>
.app {
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
}
</style>

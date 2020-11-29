<template>
  <div class="posts">
    <Post v-for="post in posts" :id="post.id" :username_author="post.username_author" :name_author="post.name_author" :date="2020" :title="post.title" :likes="post.num_likes" :like="false" :content="post.content"></Post>
  </div> 
</template>

<script>
import Post from './Post.vue';

export default {
  components: {
    'Post': Post
  },
  props: {
    posts: Array
  }
};

</script>

<style scoped>
.posts {
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
}
</style>

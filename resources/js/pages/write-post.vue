<template>
  <div class="write-post mainContainer">
    <header>
      <div class="maxWidth divF">
        <div class="top-bar">
          <div class="text-top">
            <span>Write a new post</span>
          </div>

          <div class="edit-preview">
            <b-button variant="light">Edit</b-button>
            <b-button variant="light">Preview</b-button>
          </div>
        </div> 

      </div>
      <div class="close">
        <a href="#">
          <b-icon icon="x" style="width: 30px; height: 30px;"></b-icon>
        </a>
      </div>
    </header>

  </div>
</template>

<script>
import Editor from '../components/EditorVue2.vue';

export default {
  components: {
    'Editor': Editor
  }
}


</script>

<style scoped>
.write-post {

}

header {
  display: flex;
  justify-content: space-between;
  height: 56px;
}

.top-bar {
  width: 886px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.divF {
  width: 1200px;
}

.edit-preview button {
  background: transparent;
  border: 0;
}

.edit-preview button:hover {
  color: #3b49df;
  background-color: #e2e6ea;
  border-color: #dae0e5;
}




.close {
  float: right;
  text-shadow: 0 1px 0 #fff;

  padding-left: 8px;
  padding-right: 8px;
  position: absolute;
  right: 0.5rem;
  top: 0.5rem;
  margin-top: 6px;
  margin-right: 4px;
}

.close a {
  /* color: rgb(54, 61, 68);  #08090a */
  color: #08090a;
  padding: 0.5rem;
}

.close a:hover {
  background: rgba(0, 0, 0, 0.035);
}

</style>

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

    <main>
      <form action="#" method="POST" enctype="multipart/form-data">
        <div class="write">
          <div class="text-padding">
            <button type="button" class="cover-imagebtn">
              Add a cover image
              <input name="cover-image" accept="image/*" type="file">
            </button>

            <div class="title">
              <input name="title" placeholder="New post title here..." required="">
            </div>
          </div>
        </div>
      </form>
    </main>

    

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

main {
  display: grid;
  max-width: 1280px;
  height: 500px;
  padding-left: 16px;
  padding-right: 16px;
  margin: 0 auto;
  grid-template-columns: 2fr 1fr;
  gap: 0 1rem;
  background: #eef0f1;
}

.write {
  background: white;
  margin-left: 50px;
  border-radius: 5px;
  box-shadow: rgba(8, 9, 10, 0.1) 0px 0px 0px 1px;
  overflow-y: scroll;
  height: 80vh;
}

.text-padding {
  padding: 32px 64px;
}

.cover-imagebtn {
  background: white;
  box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 3px 0px;
  border: 2px solid;
  border-color: rgba(8, 9, 10, 0.2);
  padding: 6px 14px;
  border-radius: 5px;
  text-align: center;
  margin-bottom: 20px;
}

.title {
  margin-bottom: 8px;
}

.title input {
  height: 60px;
  font-size: 3rem !important;
  font-weight: 800;
  color: #ACB3B9;
  border: 0;
}

</style>

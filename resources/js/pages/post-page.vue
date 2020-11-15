<template>
  <div class="post-page mainContainer">
    <Header></Header>
    
    <main class="mainFlex maxWidth">
      <div class="column1 box">
        <a class="like">
          <b-icon style="width: 24px; height: 24px;" icon="heart-fill"></b-icon>
          <span>1</span>
        </a>
      </div>
      <div class="column2 box"></div>
      <div class="column3"></div>
    </main>

  </div>

</template>

<script>
import Header from '../components/Header.vue';

export default {
  components: {
    'Header': Header
  }
}

</script>

<style>
.column1 {
  margin-left: -20px;
  width: 64px;
  margin-right: 10px;
  background-color: transparent;
  display: flex;
  flex-direction: column;
  text-align: center;
  padding: 10px;
  padding-top: 20px;
}

.like {
  width: 100%;
  height: 61px !important;
  cursor: pointer;
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 8px;
  color: rgb(54, 61, 68);
  border-radius: 5px;

}

.like:hover {
  color: rgb(54, 61, 68);
  text-decoration: none;
  background: #e2e4e5;
}

.like span {
  color: rgb(77, 87, 96);
  margin-top: 5px;
  font-size: 14px;
}


/*
.like b-icon {
  align-self: center;
}

.like svg {
  align-self: center;
}

.center-align {
  align-self: center;
} */
</style>

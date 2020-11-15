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
      <div class="column2 box">a</div>
      <div class="column3">a</div>
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

<style> /*
.column1, .column2 {
  height: 80vh;
  background-color: white;
}
*/

.column1 {
	flex-basis: 64px; /* depois compara se fica melhor assim ou com 200px */
	flex-grow: 0;
	background: #eef0f1;

  margin-left: -20px;
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
.column2 {
  width: 881px;
  padding: 0;
}

.column3 {
  width: 325px;
}*/


.column2 {
	flex-basis: 811px;
	flex-grow: 1;
	flex-shrink: 0;
  background: white;
}

.column3 {
	width: 325px;
  margin-left: 10px;
  background: transparent;
}

</style>

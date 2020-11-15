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
      <div class="column2 box">
        <img class="cover-image" src="https://res.cloudinary.com/difh39tam/image/upload/v1605470083/y1iyjari22p63tsmvaa6.jpg">

        <div class="description">
          <h1>das</h1>

          <div>
            <!-- adicionar a foto do criador do post aqui depois -->
            <a class="profile" href="#">
              <img src="https://res.cloudinary.com/difh39tam/image/upload/v1605470083/y1iyjari22p63tsmvaa6.jpg">
              Daniel de Sá
            </a>
            <time>
              22/10/2020 22:28:56
            </time>
          </div>
        </div>

        <div class="content">
          <h1>Some initial content</h1>
        </div>

      </div>
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
	background: transparent;
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

.column2 {
	flex-basis: 811px;
	flex-grow: 1;
	flex-shrink: 0;
  background: white;
  padding: 0;
  height: 80vh;
}

.column2 .cover-image {
  width: 100%;
  height: 338px;
  border-radius: 5px 5px 0 0;
}

.description {
  padding: 32px 64px 0 64px;
  background: white;
}

.description h1 {
  margin-bottom: 16px;
  color :rgb(8, 9, 10);
  font-size: 48px;
  font-weight: 800;
}

.description div {
  color: rgb(100, 112, 125);
  display: flex;
  align-items: center;
}

.description a {
  /* margin-right: 16px; */
  font-size: 16px;
  color: rgb(32, 36, 40);
  align-items: center;
  text-align: center;
}
/* .description span {
  padding: 8px;
  align-items: center;
} */

.profile img {
  width:  2rem;
  height: 2rem;
  border-radius: 100%;
  margin-right: 8px;
}

.description time {
  color: rgb(100, 112, 125);
  font-size: 14px;
  padding: 8px;
}

.content {
  width: 100%;
  padding: 32px 64px;
  background: white;
}





.column3 {
  flex-basis: 325px;
  margin-left: 10px;
  background: transparent;
}

</style>

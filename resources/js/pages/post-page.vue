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
      <div class="column3">
        <div class="creator-profile">
          <div class="black"></div>
          <a href="http://kpophome.herokuapp.com/profile/danitw">
            <span class="img-profile">
              <img src="http://kpophome.herokuapp.com/">
            </span>
            <span class="name-creator">Daniel de Sá</span>
          </a>

          <div class="biography">

          </div>

          <!-- <div class="follow">
            <button class="btn btn-primary write-post">
            Follow
            </button>
            </div> -->

            <div class="user-details">
              <ul>


                <li>
                  <div class="key">Localização</div>
                  <div class="value">São Paulo, Brasil</div>
                </li>

                <li>
                  <div class="key">Entrou no dia</div>
                  <div class="value last">19/10/2020 21:30:00</div>
                </li>

              </ul>
            </div>

        </div>
      </div>
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

<style scoped> /*
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
  height: 100vh;
  border-radius: 5px; 
}

.creator-profile {
  background-color: rgb(249, 250, 250);
  border-bottom: 1px solid #c5c5c5;
  border-radius: 5px;
}

.black {
  background: black;
  width: 100%;
  height: 30px;
  border-radius: 5px 5px 0 0;
}

.creator-profile a:hover {
  color: rgb(50, 62, 190);
  text-decoration: none;
}

.img-profile {
  border-radius: 100%;
  width: 48px;
  height: 48px;
  margin-left: 20px;
  border-bottom: 1px solid #c5c5c5;
}

.img-profile img {
  border-radius: 100%;
  width: 48px;
  height: 48px;
  margin-top: -15px;
  border-bottom: 1px solid #c5c5c5;
}

.name-creator {
  margin-left: 5px;
  color: rgb(32, 36, 40);
  font-size: 18px;
  /* font-weight: 700; */
}

.name-creator:hover {
  color: rgb(50, 62, 190);
}

.biography {
  padding: 16px;
  color: rgb(77, 87, 96);
  font-size: 16px;
}

.follow {
  padding: 16px;
  padding-top: 0;
}

.follow button {
  width: 100%;
}

.user-details {
  padding: 16px;
  padding-top: 0;
  color: rgb(32, 36, 40);
  font-size: 16px;
}

.user-details ul {
  padding: 0;
  list-style-type: none;
  margin: 0;
}

.user-details ul li {
  color: rgb(32, 36, 40);
  font-size: 16px;
}

.user-details ul li .key {
  font-size: 12px;
  color: rgb(100, 112, 125);
  text-transform: uppercase;
  /* font-weight: 700; */
}

.user-details ul li .value {
  color: rgb(32, 36, 40);
  font-size: 16px;
  margin-bottom: 15px;
}

.last {
  margin-bottom: 0 !important;
}

</style>

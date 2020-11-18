<template>
  <div class="mainContainer">
    <Header></Header>
    <main class="">
      <div class="marrom"></div>
      <div class="profile">
        <b-button variant="primary" class="settings">Settings</b-button>
        <div class="descr">
          <img src="https://res.cloudinary.com/difh39tam/image/upload/v1605733095/sils8zykftlznqklc1i0.jpg" width="150" height="150">
          <h1>Daniel de Sá</h1>
          <p>Já foi apunhalado por uma pluma?</p>

          <div class="infos">
            <span class="info-local">
              <v-icon name="map-marker-alt" scale="1"></v-icon>
              São Paulo, Brasil
            </span>

            <span class="info-create">
              <v-icon name="birthday-cake"></v-icon>
              Entrou em 2020-10-19 21:30:00
            </span>
          </div>
        </div>

        <div class="status">
          <div>
            <strong>Status</strong>
            <p>Em você</p>
          </div>
        </div>
      </div>

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

.profile {
  display: flex;
  position: relative;
  flex-direction: column;
  align-items: center;
  width: 95%;
  margin: 0 auto;
  margin-top: 0px;
  margin-top: -50px;
  background: white;
  /*box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
  box-shadow: 0 0 0 1px rgba(8, 9, 10, 0.1);
  */
  border: 1px solid #d3d3d3;
  border-radius: 5px;
  z-index: 13;
  padding: 64px 16px 16px 16px;
}

.profile .settings {
  position: absolute;
  top: 0;
  right: 0;
  margin-top: 15px;
  margin-right: 15px;
}

.descr {
  width: 100%;
  display: flex;
  flex-direction: column;
  /* justify-content: center; */
  align-items: center;
  padding: 24px;
  padding-top: 0 !important;
}

.descr img {
  width: 150px;
  height: 150px;

  border-radius: 100%;
  margin-top: -100px;
  margin-bottom: 20px;
}

.descr h1 {
  color: rgb(8, 9, 10);
  font-size: 30px;
  /* font-weight: 800; */
  margin-bottom: 8px;
}

.descr p {
  font-size: 16px;
  color: rgb(32, 36, 40);
  margin-bottom: 16px;
}

.descr .infos {
  color: rgb(100, 112, 125);
  margin-bottom: 8px;
}

.descr .infos span {
  padding: 4px 12px 4px 12px;
}

.descr .infos .info-local svg {
  width: 15px;
  height: 20px;
  margin-right: 8px;
}

.descr .infos .info-local {
  font-size: 14px;
}

.descr .infos .info-create {
  font-size: 14px;
}

.descr .infos .info-create svg {
  width: 15px;
  height: 20px;
  margin-right: 8px;
}

.descr .infos .icon-twitter {
  font-size: 14px;
}

.descr .infos .icon-twitter i {
  font-size: 20px;
}

.status {
  width: 100%;
  height: 93px; /* 93px ou 83px ou slá */
  margin: 0 auto;
  border-top: 1px solid #eef0f1;
  padding: 12px;
  text-align: center;
  /* display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  align-content: center;
  justify-content: center;*/
}

.status div {
  padding: 12px;
  text-align: center;
}

.status div strong {
  font-size: 85%;
  font-weight: 500;
  color: #64707d;
}

.status div p {
  margin: 0;
  color: rgb(8, 9, 10);
  font-size: 16px;
}

</style>

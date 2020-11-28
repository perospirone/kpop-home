<template>
  <div class="mainContainer">
    <Header></Header>
    <main class="mainFlex maxWidth">
      <header>
        <h1>Settings for <a href="https://www.kpophome.com.br/profile/danitw">@danitw</a></h1>
      </header>

      <div>
        <div class="sidebar-left">
          <nav>
            <a href="#" active="">Profile</a>
            <a href="#">UX</a>
            <a href="#">Integrations</a>
            <a href="#">Notifications</a>
            <a href="#">Organization</a>
            <a href="#">Billing</a>
            <a href="#">Account</a>
            <a href="#">Misc</a>
          </nav>
        </div>
        <div class="content">
          <form action="https://www.kpophome.com.br/settings" method="post" enctype="multipart/form-data">
            <div class="field">

            <label for="email">Email</label>
            <input type="email" placeholder="youremail@gmail.com" value="twz3xc21@gmail.com" name="email">
            </div>
            <div class="field">
              <label for="username">Username</label>
              <input type="text" placeholder="danitw" value="danitw" name="username">
            </div>

            <div class="field">
              <label for="name">Name</label>
              <input type="text" placeholder="Daniel" value="Daniel de Sá" name="name">
            </div>

            <div class="field-photo">
              <label for="photo">Profile Image</label>
              <div>
                <span><img src="https://res.cloudinary.com/difh39tam/image/upload/v1605733095/sils8zykftlznqklc1i0.jpg"></span>
                <input class="photo" name="photo" accept="image/*" type="file">
              </div>
            </div>

            <!-- <div class="field">
              <label for="fandom">Fandom</label>
              <input type="text" placeholder="" name="fandom">
              </div> -->

              <div class="field">
                <label for="bio">Bio</label>
                <textarea maxlength="200" rows="3" type="text" name="bio">Já foi apunhalado por uma pluma?</textarea>
              </div>

              <div class="field">
                <label for="status">Status</label>
                <input type="text" placeholder="No que você esta pensando agora?" value="Em você" name="status">
              </div>

              <div class="field">
                <label for="pais">Pais</label>
                <input type="text" placeholder="Brasil" value="Brasil" name="pais">
              </div>

              <div class="field">
                <label for="estado">Estado</label>
                <input type="text" placeholder="São Paulo" value="São Paulo" name="estado">
              </div>

              <div class="field">
                <label for="twitter_user">Twitter User</label>
                <input type="text" placeholder="@youruser" value="@danitw16" name="twitter_user">
              </div>

              <div class="field">
                <label for="fandom">Fandom</label>
                <input type="text" placeholder="army" value="Blink" name="fandom">
              </div>

              <div class="field">
                <label for="stan">Stan</label>
                <input type="text" placeholder="" value="Jennie" name="stan">
              </div>

              <div class="field">
                <label for="ultimate">Ultimate</label>
                <input type="text" placeholder="jennie" value="Jennie" name="ultimate">
              </div>

              <div class="field">
                <label for="bias">Bias</label>
                <input type="text" placeholder="" value="Jennie" name="bias">
              </div>
              <button type="submit" class="btn btn-primary write-post">
                Save
              </button>
          </form>

        </div>

      </div>
    </main>
  </div>

</template>

<script>
import Header from '../components/Header.vue'

export default {
  components: {
    'Header': Header
  }
};

</script>

<style scoped>

main {
  margin-top: 0;
  flex-direction: column;
}

main header {
  background: transparent;
  border: 0;
  font-size: 1rem;
  width: 100%;
  max-width: 1024px;
  margin: 0 auto;
  padding: 1rem;
  display: grid;
  grid-gap: 1rem;
  grid-template-columns: 1fr;
}

main header h1 {
  display: block;
  font-size: 2em;
  margin-block-start: 0.67em;
  margin-block-end: 0.67em;
  margin-inline-start: 0px;
  margin-inline-end: 0px;
  font-weight: bold;
}

main header h1 a, main header h1 a:hover {
  color: #3b49df;
  text-decoration: none;
}

main div {
  font-size: 1rem;
  width: 100%;
  max-width: 1024px;
  margin: 0 auto;
  display: grid;
  grid-gap: 1rem;
  grid-template-columns: 240px 1fr;
  padding: 1rem;
}

.sidebar-left {
  display: flex;
  padding: 0;
}

.sidebar-left nav {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100%;
}

.sidebar-left nav a {
  padding: 8px;
  border-radius: 5px;
  font-size: 16px;
  color: rgb(32, 36, 40);
}

.sidebar-left nav a:hover {
  text-decoration: none;
  color: #323ebe;
  background: rgba(8, 9, 10, 0.05);
}

.sidebar-left nav a:active {
  background: #fff;
}

.content {
  display: grid;
  grid-template-columns: 1fr;
  padding: 24px;
  background: white;
  border-radius: 5px;
  border: 1px solid rgba(8, 9, 10, 0.1);
}

.content form {
  width: 100% !important;
}

.field {
  display: flex;
  flex-direction: column;
  padding: 0;
  font-size: 1rem;
  margin-bottom: 25px;
}

.field label, .field-photo label {
  margin: 0;
  color: rgb(32, 36, 40);
  font-weight: bold;
}

.field input {
  color: rgb(8, 9, 10);
  padding: 7px 8px;
  margin-top: -7px;
  border-radius: 5px;
  background-color: rgb(249, 250, 250);
  border: 1px solid rgb(181, 189, 196);
}

.field-photo {
  display: flex;
  padding: 0;
  /* flex-direction: row; */
  flex-flow: column;
  margin-bottom: 25px;
}

.field-photo div {
  display: flex;
  padding: 0;
  align-items: center;
}

.field-photo div span {
  height: 48px;
}

.field-photo div span img {
  border-radius: 100%;
  width: 100%;
  height: 48px;
  display: inline-block;
  vertical-align: bottom;
}

.field-photo div span {
  border-radius: 100%;
}

.field-photo div input {
  width: 100%;
  padding: 12px;
  background-color: rgb(249, 250, 250);
  border-radius: 5px;
  box-shadow: rgba(8, 9, 10, 0.05) 0px 0px 0px 1px;
}

.field textarea {
  margin-top: -8px;
  width: 100%;
  height: 160px;
  border-radius: 5px;
  border: 1px solid rgb(181, 189, 196);
  background: rgb(249, 250, 250);
  padding: 7px 8px 7px 8px;
}

</style>

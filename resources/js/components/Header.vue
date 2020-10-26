<template>
  <header>
    <div class="topBarContainer maxWidth">
      <div class="flexDiv">
        <a class="logo" href="#">
          <img src="https://res.cloudinary.com/difh39tam/image/upload/v1603493966/lehn5xc5gpcwko8rjndt.png">
        </a>

        <div class="searchBox">
          <form action="#" method="GET">
            <input type="text" name="" value="" placeholder="Pesquisar">
          </form>
        </div>
      </div>

      <div class="topRight">
        <a href="#" class="writePost">
          <b-button variant="primary">Write a post</b-button> 
        </a>
        <b-icon icon="bell" style="width: 23px; height: 23px;"></b-icon>
        <div class="menu-profile">
          <a class="linkProfile" @click="toogle">
            <img src="dasdsa">
          </a>

          <div class="menu-drop" v-if="active">
            <a class="item-drop" href="#">Profile</a>
            <a class="item-drop logout" href="#">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  data () {
    return {
      active: false
    }
  },
  methods: {
    toogle () {
      this.active = !this.active
    }
  },
  components: {
  }
}
</script>

<style scoped>
  header {
    width: 100%;
    background: white;
    border-bottom: 1px solid #c5c5c5; 
  }

  header div {
    height: 56px;
  }

  .logo {
    display: inline-block;
    margin: 10px;
  }

  .logo img {
    width: 71px;
    height: 45px;
  }

  .searchBox {
    display: inline-block;
    height: 40px;
  }

  .searchBox input {
    width: 400px;
    padding: 5px;
    height: 40px;
    border: 1px solid #d3d3d3;
    color: #3b3b3b;
    border-radius: 5px;

  }

  .topRight {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-basis: 200px;
  }

  .topRight .writePost {
    /* margin-right: 10px;*/
  }

  .menu-profile {
    display: flex;
    position: relative;
    align-items: center;
  }

  .menu-profile .linkProfile {
    width:  32px;
    height: 32px;
    cursor: pointer;
    color: rgb(8, 9, 10);
  }

  .menu-profile .linkProfile:hover {
  }

  .menu-profile a img {
    width: 100%;
    height: 100%;
    border-radius: 100%
  }

  .menu-drop {
    position: absolute;
    width: 158px;
    height: 95px;
    background: white;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: .25rem;
    padding-top: 8px;
    padding-bottom: 8px;
    z-index: 1000;
    

    will-change: transform;
    top: 5px;
    /* left: 50px; */
    /*right: auto;
    bottom: auto;*/
    transform: translate3d(-65px, 44px, 0px);
  }

  .item-drop {
    display: block;
    width: 100%;
    padding: .25rem 1.5rem;
    font-weight: 400;
    color: #212529;
    background-color: transparent;
    border: 0;
  }

  .item-drop:hover {
    text-decoration: none;
    background: #F8F9FA;
  }

  .logout {
    margin-top: 10px;
    border-top: 1px solid #D2D6DB;
  }



</style>

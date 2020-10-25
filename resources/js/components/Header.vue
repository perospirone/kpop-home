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
          <a>
            <img src="dasdsa">
          </a>

        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
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
    align-items: center;
    flex-basis: 200px;
  }

  .topRight .writePost {
    margin-right: 10px; 
  }

  .menu {
    height: 100%;
  }

  .menu a {
    margin: 0 auto;
  }



</style>

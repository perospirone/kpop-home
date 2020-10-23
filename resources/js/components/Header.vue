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

      </div>
    </div>
  </header>

</template>

<script>
export default {

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
    justify-content: space-around;
    flex-basis: 200px;
  }


</style>

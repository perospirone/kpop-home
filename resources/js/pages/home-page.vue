<template>
  <div class="mainContainer">
    <Header></Header>
    <main class="mainFlex maxWidth">
    	<div class="column1 box">
    		<a class="sidebar-profile" href="#">
    			<div>
    				<h4>Daniel de Sá</h4>
    				<small>@danitw</small>
    			</div>
    		</a>
    	</div>

    	<div class="column2 box">
        <header>
          <h2>Posts</h2>

          <nav>
            <a href="#">Feed</a>
            <a href="#">Week</a>
            <a href="#">Month</a>
            <a href="#">Year</a>
            <a href="#">Infinity</a>
            <a href="#">Latest</a>
          </nav>
        </header>

        <Posts></Posts>
      </div>

    	<div class="column3 box"></div>
    </main>
  </div>
</template>

<script>
import Header from '../components/Header.vue'
import Posts from '../components/Posts.vue'

export default {
  components: {
    'Header': Header,
    'Posts': Posts
  }
};


</script>

<style scoped>
.column1 {
	flex-basis: auto; /* depois compara se fica melhor assim ou com 200px */
	flex-grow: 0;
	background: #eef0f1;
}

.column2 {
	flex-basis: 600px;
	flex-grow: 1;
	flex-shrink: 0;
}

.column3 {
	width: 325px;
  margin-left: 10px;
  background: transparent;
}

.sidebar-profile {
  display: flex;
  font-size: 16px;
  align-items: center;
  margin-bottom: 8px;
  box-sizing: border-box;
  color: rgb(32, 36, 40);
  border-radius: 3px;
  cursor: pointer;
  padding: 8px;
}

.sidebar-profile:hover {
  background: #E2E4E5;
  text-decoration: none;
}

.sidebar-profile div {
  padding-left: 8px;
  color: rgb(32, 36, 40);
  flex-basis: auto;
  flex-grow: 1;
  flex-shrink: 1;
}

.sidebar-profile div h4 {
  color: rgba(10, 10, 10, 0.9);
  font-size: 16px;
  margin: 0;
}

.sidebar-profile div small {
  font-size: 80%;
  color: rgb(100, 112, 125);
}

.column2 header {
  background: #eef0f1;
  display: flex;
  justify-content: space-between;
  border: 0;
  padding-bottom: 8px;
}

.column2 header h2 {
  color: rgb(8, 9, 10);
  font-size: 18px;
  margin: 0;
}

.column2 header nav a {
  text-decoration: none;
  padding: 8px;
  font-size: 16px;
  text-align: center;
  color: rgb(54, 61, 68);
  margin: 0 4px;
}


.column2 header nav a:hover {
  text-decoration: none;
  color: #3b49df;
  background: #e2e4e5;
}

</style>

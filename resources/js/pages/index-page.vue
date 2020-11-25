<template>
  <div class="mainContainer">
    <Header></Header>
    <main class="mainFlex maxWidth">
      <div class="column1 box">
        <div class="sidebar">
          <nav class="nav-sidebar">
            <a href="#"><v-icon name="sign"></v-icon>Sign In/Up</a>
          </nav>
        </div>
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
import Header from '../components/Header-no-login.vue'
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
  flex-basis: 200px; /* depois compara se fica melhor assim ou com 200px */
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

.nav-sidebar {
  margin-bottom: 1.5rem;
}

.nav-sidebar a {
  display: flex;
  align-items: center;
  border-radius: 5px;
  width: 100%;
  padding: 0.5rem;
  color: rgb(32, 36, 40);
  font-weight: 700;
}


.nav-sidebar a:hover {
  text-decoration: none;
  color: rgb(50, 62, 190);
  background: rgba(0, 0, 0, 0.035);
}

.nav-sidebar a svg {
  width: 20px;
  height: 20px;
  margin-right: 0.5rem;
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
  font-size: 20px;
  margin: 0;
  font-weight: 700;
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

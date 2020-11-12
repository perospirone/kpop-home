<template>
  <div class="post">
    <div class="details-post">
      <div class="autor-post">
        <a href="#" class="name">Daniel de Sá</a>
        <br>
        <a href="#" class="date">22/10/2020 22:28:56</a>
      </div>
      <div class="title-post">
        <h2>
          <a href="#">
           das 
          </a>
        </h2>

        <div class="reactions">
          <div class="react">
            <a class="like" onclick="handleLike(1, 4)">
              <b-icon icon="heart-fill" style="width: 14px; height: 14px; margin-right: 6px"></b-icon>
              <span>1</span> likes
            </a>
          </div>
          <div class="react2"></div>
        </div>
      </div>
    </div> 
  </div>
</template>

<script>
</script>

<style scoped>
.post {
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  width: 100%;
  /* height: 500px; */
  margin-bottom: 0.5rem;
  border: 1px solid #c5c5c5 !important;
  /* border-radius: 10px; */
}

.post .details-post {
  flex-grow: 1;
  padding: 20px;
  background: white;
}

.post .details-post .autor-post {
  display: block;
  margin-bottom: 8px;
}

.post .details-post .autor-post .name {
  font-size: 14px;
  color: rgb(77, 87, 96);
  text-decoration: none;
  padding: 8px;
  text-align: center;
  margin: 0 4px;
}

.post .details-post .autor-post .name:hover {
  background: 0;
  color: rgb(8, 9, 10);
}

.post .details-post .autor-post .date {
  font-size: 12px;
  color: rgb(100, 112, 125);
  text-decoration: none;
  padding: 8px;
  text-align: center;
  margin: 0 4px;
}

.post .details-post .autor-post .date:hover {
  background: 0;
  color: rgb(8, 9, 10);
}

.post .details-post .title-post {
  padding-left: 20px;
}

.post .details-post .title-post h2 {
  margin-bottom: 8px;
  text-decoration: none;
}

.post .details-post .title-post h2 a {
  color: rgb(8, 9, 10);
  font-size: 30px;
  padding: 4px;
  margin-right: 4px;
  margin-left: 4px;
}
.post .details-post .title-post h2 a:hover {
  text-decoration: none;
  background: #e2e4e5;
}

.post .details-post .title-post .reactions {
  display: flex;
  justify-content: space-between;
}

.post .details-post .title-post .reactions .react .like {
  padding-top: 4px;
  padding-left: 8px;
  padding-bottom: 4px;
  padding-right: 12px;
  margin-right: 4px;
  margin-left: 4px;

  font-size: 16px;
  color: rgb(54, 61, 68);
  cursor: pointer;
  text-align: center;
}

.post .details-post .title-post .reactions .react .like:hover {
  text-decoration: none;
  background: #e2e4e5;
}

</style>

const handleLike = async () => {
  fetch('http://127.0.0.1:8000/posts/1', {
    method: 'POST',
    //body: 'click'
  })
  .then(resp => {
    console.log(resp)
  })
  
}

window.localStorage.setItem('user', id)
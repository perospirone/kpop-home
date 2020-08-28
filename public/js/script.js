let httpRequest;

if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    httpRequest = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
    httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
}

function handleLike(idUser, idPost) {
	/*httpRequest.onreadystatechange = (req) => {
		console.log(req)

	}*/

	httpRequest.open('POST', `http://127.0.0.1:8000/posts/${idPost}`, false);
	httpRequest.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
	httpRequest.send({ idUser: idUser });
}
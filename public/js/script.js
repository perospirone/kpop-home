let httpRequest;

if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    httpRequest = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
    httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
}

function handleLike(idUser, idPost) {
	/*alert(idUser);
	alert(idPost);*/


	httpRequest.onreadystatechange = (req) => {
		console.log(req)

	}

	httpRequest.open('POST', `http://127.0.0.1:8000/posts/${idPost}`, false);
	httpRequest.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));

	// httpRequest.send(`idUser=${idUser}`);
	httpRequest.send({ idUser: idUser });
}

// Esquece de definir depois não 
// httpRequest.onreadystatechange = nameOfTheFunction; || httpRequest.onreadystatechange = () => {};



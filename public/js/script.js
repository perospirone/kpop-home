let httpRequest;

let url = 'http://kpophome.herokuapp.com'

if (window.XMLHttpRequest) { // Mozilla, Safari, ...
	httpRequest = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
	httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
}

function handleLike(idUser, idPost) {
	httpRequest.onreadystatechange = (req) => {

		if(httpRequest.status == 200) {

			let likes = document.getElementById(`like${idPost}`);
			let icone = document.getElementById(`heart${idPost}`);

			document.getElementById(`like${idPost}`).innerHTML = Number(likes.innerHTML) + 1;
			icone.className = 'fas fa-heart';
		}
	}

	httpRequest.open('POST', `${url}/posts/${idPost}`, false);
	httpRequest.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
	httpRequest.send({ idUser: idUser });
}

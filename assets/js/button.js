function increaseBtnOnclick() {

	document.getElementById("cantitate").value = Number(document.getElementById("cantitate").value) + 1;
}

function decreaseBtnOnclick() {
if(document.getElementById("cantitate").value >0)
	document.getElementById("cantitate").value = Number(document.getElementById("cantitate").value) - 1;
}
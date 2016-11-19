with(document.recuperar1){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && correo.value==""){
			ok=false;
			alert("Ingrese su correo");
			correo.focus();
		}
		if(ok && correo.value){ 
			submit(); 
		}
	}
}

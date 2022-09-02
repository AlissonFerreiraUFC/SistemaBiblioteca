
	var controle = 1;
	function adicionarCampo(){
		controle++;
		console.log(controle);
		document.getElementById('adicionar').insertAdjacentHTML('beforeend','<div class= "inputBox"><input type="number" name="telefone'+ controle +' id="telefone'+ controle +' class="inputUser" required><label for="telefone">Telefone '+ controle +'</label></div>');
	}

<?php require_once('model/header.php'); ?>

	<main class="sb-Main">

		<header class="sc-MobileHeader">Bem Vindo(a) a Gigatec</header>
		
		<br>

		<div class="sc-Wrapper sc-HomePage-customCreations-test">
			<section class="sc-HomePage-customCreations">
				<div class="text-center">
					<h2 class="sc-HomePage-customCreations-title">Camisetas para Empresas</h2>

					<form class="retrieve-FieldLayout sb-Form" action="Email_FaleConosco.php" method="post">
					  <div class="sb-Form-group retrieve-FieldLayout-inputField">
					    <input type="text" name="txtNomeC"  placeholder="Nome Completo" class="mar10" required="">
					    
					    <input type="email" name="txtEmailC" placeholder="E-Mail do Contato" class="mar10" required="">
					    
					    <input type="text" name="txtFoneC" id="txtFoneC" minlength="14" maxlength="15" placeholder="Telefone do Contato" class="mar10" required="">

					    <input type="number" name="txtQuantidadeC" placeholder="Quantidade" class="mar10" required="">

					    <select name="txtEventoC" class="mar10" required="">
					    	<option>Selecione o Tipo de Evento</option>
					    	<option>Uso Empresarial</option>
					    	<option>Formaturas</option>
					    	<option>Evento Esportivo</option>
					    	<option>Eventos Corporativo</option>
					    </select>

					    <textarea name="txtDescricaoC" placeholder="Observações" class="mar10" rows="3"></textarea>
					  </div>
					  <div class="sb-Form-group sb-Form-group--buttons retrieve-FieldLayout-button">
					    <button name="button" type="submit" class="sb-Btn sb-Btn--block">Enviar Mensagem</button>
					  </div>
					</form>
				</div>
			</section>
		</div>

		<?php require_once('model/middle.php'); ?>
	</main>

<?php require_once('model/footer.php'); ?>

<script type="text/javascript">
	/* Máscaras ER */
	function mascara(o,f){
		v_obj=o
		v_fun=f
		setTimeout("execmascara()",1)
	}
	function execmascara(){
		v_obj.value=v_fun(v_obj.value)
	}
	function mcpf(v){
	    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
        v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
	    return v;
	}
	function id( el ){
		return document.getElementById( el );
	}
	window.onload = function(){
		id('txtFoneC').onkeyup = function(){
			mascara( this, mcpf );
		}
	}
</script>
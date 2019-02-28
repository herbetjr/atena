@extends('site')

@section('conteudo')
<section class="equipe quem-somos" > 

	<div class="row-fluid cabecalho" style="text-align: center;">
	<img src="imagens/logo.png" style="width: 15%;"/>
	<h2>Área de Acesso</h2>
</div>
<center>
	<form method="get" action="http://www.google.com" style="width: 50%;">

		<input type="text" name="usuario"  placeholder="Informe usuário"  class="form-control"  required="" autofocus=""  ><br>
		<input type="password" id="senha" name="senha" maxlength="8" class="form-control"  placeholder="Senha" required=""><br>
		<input class="btn btn-default" type="submit" name="botao" value="Acessar" >
	</form><br>
</center>
</section>

@stop
@extends('site')

@section('conteudo')
<section class="quem-somos" > 
	<div class="row simbolos" style="background: rgba(0,0,0,0.3); overflow: hidden; text-align: center; padding: 50px 0px 50px 0px; color: white; font-family: atena;">


		
		<div class="col-sm-4 img1">
			<img src="imagens/marketing.png" class="" style="width: 50%;">
			<p>Marketing Digital</p>
		</div>
		<div class="col-sm-4 img2">
			<img src="imagens/design.png" class="" style="width: 50%;">
			<p>Design</p>
		</div>
		<div class="col-sm-4 img3">
			<img src="imagens/desenvolvimento.png" class="" style="width: 50%;">
			<p>Desenvolvimento Web</p>
		</div>


	</div>

	<style type="text/css">
	.img1{
		animation-name: a;
		animation-duration: 10s;
		animation-iteration-count: infinite;
	}
		.img2{
		animation-name: b;
		animation-duration: 10s;
		animation-iteration-count: infinite;
		animation-delay: 5s;
	}

	.img3{
		animation-name: c;
		animation-duration: 10s;
		animation-iteration-count: infinite;
		animation-delay: 12.5s;
	}


	@keyframes a {

		0%   {opacity: 1.0;}
		50%{ opacity: 0.1;}
		100%{opacity: 1.0; }
	}

	@keyframes b {

		0%   {opacity: 1.0;}
		50%{ opacity: 0.1;}
		100%{opacity: 1.0; }
	}
		@keyframes c {

		0%   {opacity: 1.0;}
		50%{ opacity: 0.1;}
		100%{opacity: 1.0; }
	}





</style>
</section>
@stop
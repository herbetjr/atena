<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <title>ATENA SOLUCÕES CRIATIVAS</title>
    <meta http-equiv="cache-control"   content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body >
    <header class="container-fluid">
        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="imagens/logo-branca.png" style="width: 200px;">
            </div>
            <div class="col-sm-8">
                <nav class="navbar navbar-expand-md justify-content-center  ">
                  <!-- Brand -->


                  <!-- Toggler/collapsibe Button -->
                  <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" >
                    <i class="material-icons" style="font-size: 30px;">menu</i>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                    <ul class="navbar-nav text-center">
                      <li class="nav-item">
                        <a class="nav-link scroll" href="#quem-somos" >QUEM SOMOS</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="#">NOSSO TIME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#">SERVIÇOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CASE</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#">CLIENTES</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTATO</a>
                    </li> 
                </ul>
            </div> 
        </nav>
    </div>
</div>


</header>
<section class="banner container-fluid">
    <div style="text-align: center; padding-top: 230px; color: white; width: 500px; max-width: 75%; margin: 0 auto;">
        <h1 style="box-shadow: 1px 1px 30px gray;text-shadow: 4px 4px 10px black; font-size: 50px; border: 4px solid  white; padding: 20px 0px 20px 0px; background-color: rgba(0,0,0,0.5);">Solucões criativas</h1>
    </div>

</section>
<section class="quem-somos container-fluid" id="quem-somos" > 
    <div class="row">

        <div class="col-sm-12 " style="text-align: justify;">
            <p class="text-center mt-4"><img src="imagens/templo.png" width="90px;"></p>
            <h1 style="width: 300px; text-align: center; margin: 10px  auto; border-radius: 5px; border-top: 2px solid black;">QUEM SOMOS</h1>

            Com nome inspirado na  Atena, deusa da sabedoria e artes, pertencente a mitologia grega. A Startup Atena- Soluções Criativas busca enfrentar cada desafio proposto por nossos clientes de maneira criativa e rápida para entregar os melhores resultados possíveis.<br> <br>

            Trabalhamos com Desenvolvimento web, Publicidade, Web design e Marketing Digital, conciliando comprometimento e seriedade com capacitação e evolução tecnológica, buscando como princípio fundamental a satisfação do cliente.
            <br><br>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-4">
                 <b>Nossa Missão</b> <br>

                 Permitir às pessoas e empresas incorporar a tecnologia ao seu negócio. <br><br>
             </div>
             <div class="col-sm-4">
                 <b>Nossa Visão</b> <br>

                 Disponibilizar às pessoas e empresas sites e sistemas de alta qualidade com ótimo custo benefício. <br><br>
             </div>
             <div class="col-sm-4">

                <b>Nossos Valores</b> <br>
                Agilidade- Transparência- Design- Inovação- Confiança
            </div>
        </div>
    </div>
</div>
</section>




<script type="text/javascript">
    jQuery(document).ready(function($) { 
        $(".scroll").click(function(){        

            $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
        });
    });
</script>

</body>
</html>
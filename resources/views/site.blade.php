<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <title>ATENA SOLUCÕES CRIATIVAS</title>
    <meta http-equiv="cache-control"   content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/site.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b8ee1ffafc2c34e96e83756/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7528568613140030",
    enable_page_level_ads: true
  });
</script>
</head>

<body class="galaxia" >
    <!-- navbar-fixed-top -->
    <nav class="menu  row" style="background-color: rgba(0,0,0,0.5); padding-bottom: 0px;">
      <div class="col-sm-1 marca " style="text-align: center;">

        <a href="home">ATENA</a>
        
    </div>

    <div class="col-sm-11 " >

        <ul>
           <li> <a href="home">HOME</a></li>
           <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">A ATENA
                <span class="caret"></span></a>
                <ul class="dropdown-menu" style="font-size: 18px;">
                    <li> <a style="color: black;" href="{{url('quemsomos')}}">    QUEM SOMOS</a> </li> 
                    <li><a style="color: black;" href="{{url('equipe')}}">   NOSSA EQUIPE</a></li>
                </ul>
            </li>

            <li><a href="{{url('case')}}">CASE</a></li>
            <li> <a href="{{url('clientes')}}">CLIENTES</a></li>
             <!--<li> <a href="/home">CONTATO</a></li>-->
           <!-- <li><a href="{{url('/login')}}" >ÁREA DE CLIENTE</a></li> -->

        </ul> 


    </div>


</nav>

@yield('conteudo')


<footer style="background: rgba(0,0,0,0.5); overflow: hidden; color: white; font-family: atena; text-align: center; height: 300px; padding-top: 20px; ">
    <div class="row">
        <div class="col-sm-4">
           <img src="imagens/icon/facebook.png" style="width: 30px;"> <img src="imagens/icon/insta.png" style="width: 30px;"> @atenagencia
        </div>
        <div class="col-sm-4">
            <img src="imagens/icon/email.png" style="width: 30px;"> atenasolucescriativas@gmail.com
        </div>
        <div class="col-sm-4">
           <img src="imagens/icon/tel.png" style="width: 20px;"> (74) 98811-4876 | 74 98852-6642
        </div>
        
    </div>
</footer>

</body>
</html>
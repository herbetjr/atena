jQuery(document).ready(function($) { 

    $('#btntopo').hide();
    var contador = $("#contador").offset().top;

    $(document).scroll(function(){
      var posicaoScroll = $(document).scrollTop(); 
      if(posicaoScroll >= 600){
        $('#btntopo').show();
    }else if(posicaoScroll <= 600){
        $('#btntopo').hide();
    };

  

}); 

     
    $(".scroll").click(function(){        

        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
    });

 

});
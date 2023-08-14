AOS.init();

document.querySelector(".menu-abrir").onclick = function(){
  document.documentElement.classList.add("menu-ativo");
  
  document.documentElement.classList.remove("menu-abrir");
}


document.querySelector(".menu-fechar").onclick = function(){
  document.documentElement.classList.remove("menu-ativo")
}



window.onscroll = function(){

    var top = window. scrollY || document.documentElement.scrollTop;


    //console.log(top);

    if(top > 550){
    //console.log("adiciona meu menu fixo");
    document.getElementById('topo-fixo').classList.add('menu-fixo');
    }
    else{
      //console.log("remover meu menu fixo");
      document.getElementById('topo-fixo').classList.remove('menu-fixo');
    }
  }

  




  $('.comentario').slick({
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay:2500,
    dots:true,
  });



  const openModalButton = document.querySelector("#open-modal");
  const closeModalButton = document.querySelector("#close-modal");
  const modal = document.querySelector("#modal");
  const fade = document.querySelector("#fade");

  const toggleModal = () => {
    modal.classList.toggle("hide");
    fade.classList.toggle("hide");
    };

  [openModalButton, closeModalButton, fade].forEach((el) => {
    el.addEventListener("click", () => toggleModal());
  });



    function formWhats(){

      var form = document.getElementById('modal-body');

      var mens = 'Proposta: ' + document.getElementById('mens').value;

      var numFone = '5511947396478'

      if(mens == ''){
        alert ("O campo de mensagem é obrigatório");
        return;
      }else{
        mens = 'Proposta: ' + document.getElementById('mens').value;

        window.open('https://api.whatsapp.com/send?phone=' +
        numFone + '&text=' +
        mens);
      }
    }
 

    



<?php 
$parametro = json_decode($secaoPagina["parametros"],true);
$temas = buscaTemas($paginaDados['idTema']);
$menus = json_decode($temas['menu'],true);
$perfil = json_decode($temas['perfil'],true);
?>

<style>
  .navbar-brand img{
    width: 180px;
  }
  #div_data{
    margin-left: 200px;
    color: #1B4D60;
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    font-weight: 500;
  }
  .containerFaixaDeCima{
    width: 95vw;
  }

  .typed-text {
    color: #1B4D60;
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    font-weight: 500;
  }


  hr {
    background-color: #3B3D42;
    margin-top: -10px;
    font-size: 14px;
  }
</style>


<div class="containerFaixaDeCima" id="faixaDeCima">
  <div class="row">

    <div class="col-sm-4 mt-3 p-0">
        <p id="div_data"></p>
     
    </div>
    <div class="col-sm-6 mt-3 p-0">
    <p><span class="typed-text"></span><span class="cursor">&nbsp;</span>_</p>
    </div>
    <div class="col-sm-2 mt-2">
      <a href="<?php echo $perfil['facebook']?>"><i class="bi bi-person-fill"></i></a> Lucas <i class="bi bi-box-arrow-right"></i>
    </div>
  </div>
   
   
</div>


<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #E2EBEB;">
  <div class="container">

  <a class="navbar-brand" href="../<?php echo URLROOT?>"><img class="logo" src="<?php echo URLROOT ?>/img/<?php echo $parametro['logo']?>" alt="" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 120px">
    <ul class="navbar-nav mr-auto">
    <?php 
          foreach($menus as $menu){
        ?>
          <li class="nav-item mr-4"><a href="<?php echo URLROOT . $menu['href']?>" class="nav-link"><?php echo $menu['menu']?></a></li>
        <?php } ?>

      </ul>
   <!--  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
  </div>
  
</nav>




<script>
// mostrar data
const meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
const diaSemana = ["Domingo","Segunda-feira ", "Terça-feira ", "Quarta-feira ", "Quinta-feira ", "Sexta-feira ", "Sábado"];
let data = new Date();
let dataFormatada = ((diaSemana[(data.getDay())]  + "," + data.getDate() + " " + meses[(data.getMonth())] + " " + data.getFullYear()));

div_data.innerHTML=dataFormatada
// texto com efeito de maquina de escrever
const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

const textArray = ["todas as marcas em um único lugar", "veja os eventos da semana"];
const typingDelay = 200;
const erasingDelay = 100;
const newTextDelay = 2000; // Delay between current and next text
let textArrayIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
    setTimeout(erase, newTextDelay);
  }
}

function erase() {
  if (charIndex > 0) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
    charIndex--;
    setTimeout(erase, erasingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if(textArrayIndex>=textArray.length) textArrayIndex=0;
    setTimeout(type, typingDelay + 1100);
  }
}

document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
  if(textArray.length) setTimeout(type, newTextDelay + 250);
});

  $('.mobile-menu').click(function(){
    $('.mobile-conteudo').toggleClass('mostra');
    
});
</script>
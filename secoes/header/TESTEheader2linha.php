<?php 
$parametro = json_decode($secaoPagina["parametros"],true);
$temas = buscaTemas($paginaDados['idTema']);
$menus = json_decode($temas['menu'],true);
$perfil = json_decode($temas['perfil'],true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<style>
.navbar {
  display: flex;
  width: 100%;
  height: 65px;
  background: var(--color-header-primary)
}

.navbar-collapse{
 /*  background-color: red; 990 */
  position: relative;
  z-index: 10;
}

@media (max-width: 990px) {
  .navbar-collapse{
  background-color: red; 
  position: relative;
  
}
.nav-link{
  color:blue
}
}
</style>
<body>
<div class="container-fluid" id="faixaDeCima">
  <div class="row">
    <!-- <div class="col-sm-2"></div> -->

    <div class="col-sm-4">
      <a href="" class="dataHeader"><p>quarta-feira, 28 junho, 2023</p></a>
      
    </div>
    <div class="col-sm-6 mt-3 p-0">
    <p><span class="typed-text"></span><span class="cursor">&nbsp;</span>_</p>
    </div>
    <div class="col-sm-2 mt-2">
      <!-- <a href="https://www.instagram.com/<?php echo $perfil['instagram']?>"><i class="bi bi-instagram"></i></a> -->
      <a href="<?php echo $perfil['facebook']?>"><i class="bi bi-person-fill"></i></a> Lucas <i class="bi bi-box-arrow-right"></i>
      
    </div>
  </div>
   
</div>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#"><img class="logo" src="<?php echo URLROOT ?>/img/<?php echo $parametro['logo']?>" alt="" width="200px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
      
        <?php 
          foreach($menus as $menu){
        ?>
          <li class="nav-item"><a href="<?php echo $menu['href']?>" class="nav-link"><?php echo $menu['menu']?></a></li>
        <?php } ?>
       
      </ul>
    </div>
  </div>
</nav>

<script>const typedTextSpan = document.querySelector(".typed-text");
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
</body>
</html>
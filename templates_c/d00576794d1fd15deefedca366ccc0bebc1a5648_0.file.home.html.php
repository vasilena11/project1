<?php
/* Smarty version 3.1.33, created on 2020-01-13 00:21:51
  from 'D:\xampp\New folder\htdocs\neyli\templates\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1baa0f4d1072_74625194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd00576794d1fd15deefedca366ccc0bebc1a5648' => 
    array (
      0 => 'D:\\xampp\\New folder\\htdocs\\neyli\\templates\\home.html',
      1 => 1578871308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1baa0f4d1072_74625194 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>


<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
 
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Mickey<br>mouse</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Начало</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">За нас</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Нашия екип</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Цени</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Свържи се с нас</a>
    <br><br><br><br><br>
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
        <a href="index.php?page=logout" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white" >Изход от акаунт</a>
        <?php if ($_smarty_tpl->tpl_vars['loginadmin']->value) {?>
         <a href="index.php?page=users" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white" >Участници в томбола</a>
          <a href="index.php?page=messages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white" >Зададени въпроси</a>
          <?php }?>
    <?php } else { ?>
    <a href="index.php?page=login" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white" >Вход</a>
    <a href="index.php?page=register" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Регистрация</a>
    <?php }?>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Да се забавляваме заедно!</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Кои сме ние?</b></h1>
    <p>Винаги позитивни, обърнати към слънчевото добро бъдеще, ние от Мики Маус раздаваме оптимизъм и приветстваме вашите усмивки. Казваме „здравей” на светулката във всеки от вас. В нашата малка фабрика за веселие, упражняваме практики за събуждане на вдъхновението. Преобразявайки се на приказни герои, успяваме да вдъхнем живот на всяко събитие. Детските партита, рожденни дни и тематичните занимания са наша страст, а изненадите - специалитет. Тук изкуството и доброто настроение се превръщат в терапия или инструмент за нравствено и социално развитие.</p>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="http://localhost/neyli/templates/image/1.jpg" style="width:100%" onclick="onClick(this)" alt="Concrete meets bricks">
      <img src="http://localhost/neyli/templates/image/2.jpg" style="width:100%" onclick="onClick(this)" alt="Light, white and tight scandinavian design">
      <img src="http://localhost/neyli/templates/image/3.jpg" style="width:100%" onclick="onClick(this)" alt="White walls with designer chairs">
    </div>

    <div class="w3-half">
      <img src="http://localhost/neyli/templates/image/4.jpg" style="width:100%" onclick="onClick(this)" alt="Windows for the atrium">
      <img src="http://localhost/neyli/templates/image/5.jpg" style="width:100%" onclick="onClick(this)" alt="Bedroom and office in one space">
      <img src="http://localhost/neyli/templates/image/6.jpg" style="width:100%" onclick="onClick(this)" alt="Scandinavian design">
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>


  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Нашето семейство.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>НАЙ-ДОБРОТО РАБОТНО МЯСТО Е ТАМ, КЪДЕТО НАМИРАШ ПРИЯТЕЛИ! Екипът на Мики Маус се състои от високо квалифицирани и талантливи специалисти с различно професионално минало, които се превръщат в мощно цяло за създаването на весели и мили спомени за вашето семейство. Те се ръководят от идеята да осигурят най-добрите преживявания на клиентите и да задоволяват всички техни нужди - на всяка молба ще бъде отделено внимание и всяко желание ще бъде изпълнено.
    </p>
    <p><b>Това е нашият екип! За нас е чест да работим за вас!</b></p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="http://localhost/neyli/templates/image/men1.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>Денис Ди</h3>
          <p class="w3-opacity">Аниматор/Музикант</p>
          <p>Казват, че ден без усмивка е загубен ден! Аз мисля че хората трябва да се усмихват винаги, напук на трудностите!</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="http://localhost/neyli/templates/image/az.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Нейлин Юсуф</h3>
          <p class="w3-opacity">Управител/Аниматор</p>
          <p>За мен е чест да ръководя вашите празнинства! Преди време ме бяха попитали какво за мен е важно, а отговора ми беше:
            Много важно е да си ЧОВЕК. Нечовешкото, грубо отношение към клиентите, персонала с демонстриране на сила е огромна грешка.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="http://localhost/neyli/templates/image/men2.jpg"" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Иван Иванов</h3>
          <p class="w3-opacity">Аниматор/Организатор</p>
          <p>Всяко цвете е различно. Всяко цвете се оглежда по различен начин. Така е и с децата, трябва да обърнеш внимание на всяко по различен начин, за да може да усети, че е обичано!</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Packages / Pricing Tables -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Цени.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>За всяко събитие цените са различни. Но по-долу са показани нашите промоции за Януари.</p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Детско парти</li>
        <li class="w3-padding-16">Брой деца : 10</li>
        <li class="w3-padding-16">Времетраене : 3 часа</li>
        <li class="w3-padding-16">Фотограф : включен</li>
        <li class="w3-padding-16">20% намаление за Вип места</li>
        <li class="w3-padding-16">Аниматори : 2</li>
        <li class="w3-padding-16">
          <h2>199 лв</h2>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-white w3-padding-large w3-hover-black">Резервирай</button>
        </li>
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">ВИП Парти</li>
        <li class="w3-padding-16">Брой деца : 20</li>
        <li class="w3-padding-16">Времетраене : 5 часа</li>
        <li class="w3-padding-16">Фотограф : включен</li>
        <li class="w3-padding-16">25% намаление за Вип места</li>
        <li class="w3-padding-16">Аниматори : 3</li>
        <li class="w3-padding-16">
          <h2> 349 лв</h2>
          <span class="w3-opacity"></span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-red w3-padding-large w3-hover-black">Резервирай</button>
        </li>
      </ul>
    </div>
  </div>
  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Свържи се с нас.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Искате да направите резервация, или имате въпроси, не се колебайте, а се свържете с НАС! </p>
    <form action="index.php?page=send" target="_blank" method="POST" name="send">
      <div class="w3-section">
        <label>Име</label>
        <input class="w3-input w3-border" type="text" name="name" required>
      </div>
      <div class="w3-section">
        <label>Имейл</label>
        <input class="w3-input w3-border" type="text" name="email" required>
      </div>
      <div class="w3-section">
        <label>Съобщение</label>
        <input class="w3-input w3-border" type="text" name="message" required>
      </div>
      <button type="submit" name="send" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Изпрати</button>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right"><a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity"></a></p></div>

<?php echo '<script'; ?>
>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}

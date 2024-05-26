<?php
if (!isset($_GET['id'])) {
   header('Location: http://roomteam-main/', true, 301);
   exit();
}
require_once($_SERVER["DOCUMENT_ROOT"] . '/backend/API/tours/get.php');
if (!$TOUR) {
   header('Location: http://roomteam-main/', true, 301);
   exit();
}
require "assets/connect/header.html";
?>
<link rel="stylesheet" href="assets/styles/mainProgram.css">
<link rel="stylesheet" href="assets/styles/mainProgram-min.css">
<section class="mainProgram-main">
   <div class="mainProgram__content">
      <div class="mainProgram__program">
         <h2 class="mainProgram__heading">
            <?=$TOUR['location']?>
         </h2>
         <div class="mainProgram__body">
            <div class="mainProgram__image__wrapper">
               <img src="<?=$TOUR['img_src']?>" alt="" class="mainProgram__image">
            </div>
            <div class="mainProgram__information__wrapper">
               <div class="mainProgram__brief-information">
                  <p class="brief-information__text">
                  <?=$TOUR['description']?>
                  </p>
               </div>
               <div class="mainProgram__information">
                  <p class="mainProgram__name-tour__wrapper">
                     Название тура:
                     <span class="mainProgram__name-tour">
                        <?=$TOUR['title']?>
                     </span>
                  </p>
                  <p class="mainProgram__date__wrapper">
                     Дата отправки:
                     <span class="mainProgram__date">
                     <?=$TOUR['date']?>
                     </span>
                  </p>
                  <p class="mainProgram__participants__wrapper">
                     Количество участников:
                     <span class="mainProgram__participants">
                     <?=$TOUR['total_users']?>
                     </span>
                  </p>
                  <button class="mainProgram__buy">
                        <?=$TOUR['price']?>$
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php
require "assets/connect/footer.html";
?>
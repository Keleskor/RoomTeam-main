<?php
if (!isset($_GET['id'])) {
  header('Location: http://roomteam-main/', true, 301);
  exit();
}
require "assets/connect/header.html";
require_once($_SERVER["DOCUMENT_ROOT"] . '/backend/API/hotels/getID.php');
if (!$HOTEL) {
  header('Location: http://roomteam-main/', true, 301);
  exit();
}
?>

<link rel="stylesheet" href="/assets/styles/hotel.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />>
<section class="hotel-main">
  <h1 class="hotel-main__heading">
    Отель
  </h1>
  <div class="hotel-main__content">
    <div class="wrapper__hotel-image">
      <a href="<? echo $HOTEL['picture'] ?>" data-fancybox="gallery" class="hotel__main-image">
        <img src="<? echo $HOTEL['picture'] ?>" alt="" class="hotel-image">
        <div class="row__hotel-images">
          <a href="/assets/images/92.jpeg" class="gallery" data-fancybox="gallery">
            <img src="/assets/images/92.jpeg" alt="" class="hotel-image-mini">
          </a>
          <a href="/assets/images/94.jpeg.webp" class="gallery" data-fancybox="gallery">
            <img src="/assets/images/94.jpeg.webp" alt="" class="hotel-image-mini">
          </a>
          <a href="/assets/images/93.jpeg.webp" class="gallery" data-fancybox="gallery">
            <img src="/assets/images/93.jpeg.webp" alt="" class="hotel-image-mini">
          </a>
        </div>
      </a>
    </div>
    <div class="hotel-main__information">
      <h2 class="hotel-main__hotel-name">
        <? echo $HOTEL['name'] ?>
      </h2>
      <p class="hotel-main__description">
        <? echo $HOTEL['desc'] ?>
      </p>
      <div class="wrapper__hotel-main__price">
        <h4 class="hotel-main__price">
          Стоимость: <span class="hotel-main__price-num"> {{GetPrice(<? echo $HOTEL['balance'] ?>)}}</span>
        </h4>
        <button class="hotel-main__price-button">
          Заказать
        </button>
      </div>
    </div>
  </div>
</section>
<div class="wrappper__hotel-main__modal-buy">
  <div class="hotel-main__modal-buy">
    <form action="/hotels.php" class="hotel-main__buy" method="get">
      <label class="hotel-main__buy-heading">
        Заполните поля
      </label>
      <input type="text" class="hotel-main__buy-element" placeholder="Введите имя: ">
      <input type="text" class="hotel-main__buy-element" placeholder="Введите фамилию: ">
      <input type="text" class="hotel-main__buy-element" placeholder="Ваш номер телефона: ">
      <input type="text" class="hotel-main__buy-element" placeholder="Ваш email: ">
      <button class="submit">
        Отправить
      </button>
    </form>
    <span class="hotel-main__modal-close">
      ✕
    </span>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
  Fancybox.bind('[data-fancybox="gallery"]', {

  });
</script>
<script src="/assets/script/hotel.js"></script>
<?php
require "assets/connect/footer.html";
?>
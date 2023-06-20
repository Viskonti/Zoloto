<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Пестициды</title>
    <link rel="stylesheet" href="css/styleform.css">
</head>
<script src="js/jquery-3.6.4.min.js"></script>
<body>
<div class="container">
    <div class="container__header">
        <div class="container__header__Hed">
        <img src="images/v2sSNKSbnW0.jpg">
    </div>
    <div class="container__header_tutu">
    <div class="container__header__lis" id="nav_menu">
        <ul>
            <li><a class="" href="info.html">Главная</a></li>
            <li><a class="" href="index.html">Пестициды</a></li>
            <li><a href="formindex.html">Оставить заявку</a></li>



        </ul>
    </div>
    <div class="menu" id="collMenu">
        <ul>
            <li><a class="" href="info.html">Главная</a></li>
            <li><a class="" href="index.html">Пестициды</a></li>
            <li><a href="formindex.html">Оставить заявку</a></li>



        </ul>
    </div>
    <input type="checkbox" id="toggleMenu" hidden>
        <label for="toggleMenu">
            Меню
        </label>
    <div class="container__header__pupu">
    <div class="search">
        <input type="text" class="searchTerm" placeholder="Что ищем?">
        <button type="submit" class="searchButton">
          <i class="fa fa-search"></i>
       </button>
     </div>


    </div>


</div>

</div>
<main>
    <div class="container__main">
        <div class="container__main__text">
        <H3>Связь с нами</H3>
        <p>У нас есть возможность связаться по телефону</p>
        <p>Телефон: 8 (495) 727-74-95, 7 (800) 600-70-74</p>
        <p>Широкий ассортимент пестицидов, гибкая система скидок</p>
</div>
        <form class="decor" action="send.php" method="POST">
            <div class="form-inner">
            <h3>Написать нам</h3>
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="email" name="email" placeholder="Email">
            <input type="phone" name="phone" placeholder="+7 ___-___-__-__">
            <input type="headtext" name="headtext" placeholder="Тема сообщения">
            <textarea placeholder="Сообщение..." rows="3" name="textmsg"></textarea>
            <div class="checkpsl">
            <input type="checkbox">
            <p>Вы даёте согласие на обработку персональных данных</p>
            </div>
            <input type="submit" name="formSubmit" value="Отправить">
            </div>
            </form>
    </div>
</main>


<footer class="footer">
    <div class="Name_Company">
    <p>Zolotoe Поле</p>
</div>
    <nav class="footer-nav clearfix">
        <ul class="nav-left">
            <li>Политика конфиденциальности</li>
            <li>344033, Ростовская область, г Ростов-На-Дону, Заводская ул, д. 1/38, кв. 97</li>
            <li>ИНН: 6162087888</li>
            <li>ОГРН:1226100024655</li>
            <li>ИП:Веренич Илья Александрович</li>
        </ul>
     
    </nav>
<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2710.9744985153466!2d39.62345777686141!3d47.197511671155254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e3bf18ab028d8b%3A0x75befd4c29131232!2z0YPQuy4g0JfQsNCy0L7QtNGB0LrQsNGPLCAxLzM4LCA5Nywg0KDQvtGB0YLQvtCyLdC90LAt0JTQvtC90YMsINCg0L7RgdGC0L7QstGB0LrQsNGPINC-0LHQuy4sIDM0NDAzMw!5e0!3m2!1sru!2sru!4v1686588237081!5m2!1sru!2sru" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
   
</footer>
</body>
<script src="js/menu.js"></script>
<script src="js/products.js"></script>
<script src="js/main.js"></script>
<script src="js/script.js"></script>
</html>
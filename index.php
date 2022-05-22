<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
    rel="stylesheet">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/fancybox.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Портфолио Ивана Иванова | Главная страница</title>
</head>

<body>
  <header class="header " style="background-image: url('images/background-image.jpg');" >
    <div class="container ">
      <nav class="header__menu">
        <a class="logo" href="#">
          <img class="logo__img" width="159" height="52" src="images/logo.svg" alt="Логотип">
        </a>
        <button class="menu__btn">
          <img class="menu__btn--img" src="images/burger.svg" alt="menu button">
        </button>
        <ul class="menu__list">
          <li class="menu__item">
            <a class="menu__link" href="#about">
              Обо мне
            </a>
          </li>
          <li class="menu__item">
            <a class="menu__link" href="#skills">
              Навыки
            </a>
          </li>
          <li class="menu__item">
            <a class="menu__link" href="#services">
              Услуги
            </a>
          </li>
          <li class="menu__item">
            <a class="menu__link" href="#portfolio">
              Портфолио
            </a>
          </li>
          <li class="menu__item">
            <a class="menu__link" href="#stats">
              Отзывы
            </a>
          </li>
          <li class="menu__item">
            <a class="menu__link" href="#footer">
              Контакты
            </a>
          </li>
        </ul>
      </nav>

      <div class="header__content">
        <h1 class="header__title"> Привет, я Иван Иванов<br/>
          <span class="header__subtitle">frontend- разработчик</span>
        </h1>
        <a class="header__link" href="#portfolio">смотреть работы</a>
      </div>

    </div>

  </header>

   <main>

    <section class="about section" id="about">
      <div class="container">
        <div class="about__inner">
        <h2 class="about__title title">
          Обо мне
        </h2>
        <div class="about__text">
          <p>
            Приветствую всех на своём сайте! Меня зовут Иван, я из Киева. Занимаюсь фронтенд-разработкой более года. До
            разработки занимался нелюбимым делом, ходил на нелюбимую работу, не мог понять за что взяться, чтобы дело
            приносило удовольствие и деньги, пока не наткнулся на один интересный курс.
          </p>
          <p>
            С тех пор прошел огонь, воду и медные трубы. Учёба давалась по-разному: где-то легче, где-то сложнее.
            Каждодневная работа над навыками и усердие, с которым я подходил к обучению, уже через несколько месяцев
            принесли плоды - я взял первый заказ на фрилансе. С отзывами клиентов и примерами работ можно ознакомиться
            ниже.
          </p>
        </div>
      </div>
    </section>
    
      <section class="skills" id="skills">
      <div class="container">
        <h2 class="title">
          Навыки
        </h2>
        <div class="skills__content">
          <img class="skills__img" width="415" height="450" src="images/portrait-2.jpg" alt="Портрет:Ивана Иванова">
          <ul class="skills__inner">
            <li class="skills__item ">
              <span class="skills__subtitle">html</span>
              <div class="skills__unfill">
                <span class="skills__fill" style="width: 85%;"></span>
              </div>
            </li>
            <li class="skills__item">
              <span class="skills__subtitle">css</span>
              <div class="skills__unfill">
                <span class="skills__fill" style="width: 80%;"></span>
              </div>
            </li>
            <li class="skills__item">
              <span class="skills__subtitle">js</span>
              <div class="skills__unfill">
                <span class="skills__fill" style="width: 61%;"></span>
            </li>
       
          </ul>
        </div>
      </div>
    </section> 

     <section class="services section" id="services">
      <div class="container">
        <h2 class="title">Услуги</h2>
        <ul class="services__content">
          <li class="services__item  services__item--code">
            <h3 class="services__subtitle">Вёрстка проектов</h3>
            <div class="services__text">
              <p>
                Сделаю качественную вёрстку вашего проекта по предоставленному макету или примеру
              </p>
            </div>
          </li>
          <li class="services__item  services__item--cms">
            <h3 class="services__subtitle">Посадка на CMS</h3>
            <div class="services__text">
              <p>
                Интегрирую ваш проект в одну из популярных CMS
              </p>
            </div>
          </li>
          <li class="services__item services__item--chat">
            <h3 class="services__subtitle">Поддержка сайта</h3>

            <div class="services__text">
              <p>
                Гарантирую поддержку вашего сайта на протяжениии 30 дней после сдача проекта
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section> 

    
 <section class="portfolio" id="portfolio">
      <div class="container">

        <h2 class="title">Мои работы</h2>

      <ul class="portfolio__top">
          <li class="portfolio__elem">
          <button class="portfolio__btn" type="button" data-filter="all">Все работы </button>
        </li>
        <li class="portfolio__elem"> 
          <button class="portfolio__btn" type="button" data-filter=".category-a">Лендинги</button>
        </li>
        <li class="portfolio__elem"> 
          <button class="portfolio__btn" type="button" data-filter=".category-c">Корпоративные</button>
        </li>
        <li class="portfolio__elem">
          <button class="portfolio__btn" type="button" data-filter=".category-b">E-commerce</button>
        </li>
      </ul>
        <ul class="portfolio__content">
          <li class="portfolio__item  mix category-a">
            <a class="portfolio__link" href="#" >
              <img class="portfolio__img" src="images/img1.png" width="360" 
                height="360" alt="Фото: Река и Город ">
            </a>
          </li>
          <li class="portfolio__item mix category-b">
            <a class="portfolio__link" href="#" >
              <img class="portfolio__img" width="360" 
                height="360" src="images/img4.png" alt="Фото: Портфолио ">
            </a>
          </li>
          <li class="portfolio__item mix category-c">
            <a class="portfolio__link"  href="#" >
              <img class="portfolio__img" width="360" 
                height="360" src="images/img2.png" alt="Фото: Река и Мост ">
            </a>
          </li>
          <li class="portfolio__item mix category-c">
            <a class="portfolio__link" href="#" >
              <img class="portfolio__img" width="360" 
                height="360" src="images/img5.png" alt="Фото: Портфолио ">
            </a>
          </li>
          <li class="portfolio__item mix category-a">
            <a class="portfolio__link" href="#" >
              <img class="portfolio__img" width="360" 
                height="360" src="images/img3.png" alt="Фото: Мост и Поезд ">
            </a>
          </li>
          <li class="portfolio__item mix category-b ">
            <a class="portfolio__link" href="#" >
              <img class="portfolio__img" width="360" 
                height="360" src="images/img6.png" alt="Фото: Високая Гора и Океан">
            </a>
          </li>
        </ul>
        <button class="button" type="button" >Загрузить еще</button>
      </div>
    </section> 

     <section class="reviews section" id="reviews">
      <div class="container">
        <h2 class="title">
          Отзывы клиентов
        </h2>
        <div class="reviews__inner">
          <div class="reviews__content">
            <img class="reviews__img" width="130" height="130" src="images/avatar.jpg" alt="фото: аватар клиента">
            <blockqoute class="reviews__blockqoute">
                <cite class="reviews__name">Марк Цукерберг</cite>
              Фантастика! Я всецело доволен
              работой этого специалиста.
              Быстро и качественно. Рекомендую!
            </blockqoute>
        
        
         
        </div>
        <a class="reviews__link" style="background-image: url('images/reviews-bg.jpg')" data-fancybox href="https://www.youtube.com/watch?v=hMPMUDydTtQ">
          <span class="sr-only">посмотреть видео</span>
        </a>

      </div>
    </section> 

 <section class="stats section" id="stats">
      <h2 class="sr-only">
        статистика 
      </h2>
      <div class="container">
        <ul class="stats__inner">
          <li class="stats__item stats__item--work">
            <h3 class="stats__text">
              Выполненных работ
            </h3>
            <span class="stats__num">
              56
            </span>
          </li>
          <li class="stats__item stats__item--clients">
            <h3 class="stats__text">
              Довольных клиентов
            </h3>
            <span class="stats__num">
              23
            </span>
          </li>
          <li class="stats__item stats__item--coffee">
            <h3 class="stats__text">
              Выпито чашек кофе
            </h3>
            <span class="stats__num">
              477
            </span>
          </li>
          <li class="stats__item stats__item--comments">
            <h3 class="stats__text">
              Всего отзывов
            </h3>
            <span class="stats__num">
              48
            </span>
          </li>
        </ul>
      </div>
    </section>
  </main>   

  <footer class="footer" id="footer">
    <div class="container">
      <h2 class="title">          
        Контакты
      </h2>
      <div class="footer__inner">
        <div class="footer__info">
          <p class="footer__text">
            Связаться со мной можно, воспользовавшись контактной формой, или напрямую по номеру телефона, email, в соцсетях:
          </p>
          <ul class="footer__contacts">
            <li class="footer__elem">
              <a class="footer__requisites footer__requisites--bottom focus-shadow" href="tel:+38 (050) 111 11 11">+38 (050) 111 11 11</a>
            </li>
            <li class="footer__elem">
              <a class="footer__requisites focus-shadow" href="mailto:frontend-monster@email.com">frontend-monster@email.com</a>
            </li>
          </ul>

          <ul class="footer__social">
            <li class="footer__item">
              <a class="footer__social-link focus-shadow" href="#" style="background: url('/images/instagram.svg');" width="44" height="44">
                <span class="sr-only">связаться с нами в Инстаграмме</span>
              </a>
            </li>
            <li class="footer__item">
              <a class="footer__social-link focus-shadow" href="#" style="background: url('/images/facebook.svg');" width="44" height="44">
                <span class="sr-only">связаться с нами в фейсбук</span>
              </a>
            </li>
            <li class="footer__item">
              <a class="footer__social-link focus-shadow"  href="#"  style="background: url('/images/facebook.png');background-repeat: no-repeat;" width="44" height="45" >
                <span class="sr-only">связаться с нами в Телеграмме</span></a>
            </li>
          </ul>
          
        </div>
        <form  id="subscription_form"  method="post" class="form">
          <div class="form__inner">

               <div class="form__item">
              <label class="form__label">
                Ваше имя
              </label>
              <input  class="form__input footer__input--color focus-shadow"  name="Name"   type="text" placeholder="Иван" required>
            </div>

            <div class="form__item">
              <label class="form__label">
                Номер телефона
              </label>
              <input class="form__input footer__input--color focus-shadow " name="number" type="tel" placeholder="+38 (050) 111 11 11" required>
            </div>

          </div>

            <label class="form__label">
                Ваше сообщение
            </label>
          <textarea class="form__textarea footer__input--color focus-shadow" required  name="text" placeholder="Текст вашего сообщения"></textarea>
          <button class="button focus-shadow" type="submit" >Отправить</button>
        </form>
      </div>

    </div>

    
    <div class="footer__logo">
      <a class="logo" href="#">
        <img class="logo__img" src="images/logo.svg" alt="Логотип">
      </a>
    </div>
  </footer>  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/fancybox.min.js"></script>
  <script src="js/mixitup.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
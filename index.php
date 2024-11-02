<?php
      include('php/token.php');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="3d65 - сайт, который окунет вас в мир 3d туров. Закажите 3d тур для вашего бизнеса, недвижимости или имущества">
      <meta name="robots" content="index">

      <title>3d65</title>
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
      <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>

</head>
<body>
      <main class="wrapper">
            <div class="fixed--buttons">
                  <button type="button" class="fixed--phone fixed--button" onclick="window.location.href='tel:+79621290909'">
                        <img src="assets/images/phone-fixed.svg" alt="Телефон" class="fixed--img" width="50">
                        
                  </button>

                  <button type="button" class="fixed--whatsapp fixed--button" onclick="window.location.href='https://api.whatsapp.com/send/?phone=79621290909&text=Здравствуйте%2C+у+меня+есть+вопрос'">
                        <img src="assets/images/whatsapp-fixed.svg" alt="Ватсап" class="fixed--img" width="50">
                  </button>
            </div>
            <div class="policy__popupwrapper" id="policyPopup" style="display: none;">
                  <div class="policy__popup">
                        <div class="policy__popupwrapper">
                              <h2 class="policy__title">
                                    Политика конфиденциальности  
                              </h2>
                              <div class="policy__subtitlesblock">
                                    <h3 class="policy__themetitle">
                                          Предоставление информации клиентом:
                                    </h3>
                                    <p class="policy__subtitle">
                                          - Заполняя формы, Клиент передает следующую информацию: Имя, email, телефон. 
                                    </p>
                                    <p class="policy__subtitle">
                                          - Информация, предоставленная Клиентом, используется только для выполнения обязательств перед Клиентом.
                                    </p>
                              </div>
                              <div class="policy__subtitlesblock">
                                    <h3 class="policy__themetitle">
                                          Разглашение полученной информации:
                                    </h3>
                                    <p class="policy__subtitle">
                                          - Мы обязуемся не разглашать полученную от Клиента информацию.
                                    </p>
                                    <p class="policy__subtitle">
                                          - Не считается нарушением предоставление информации агентам и третьим лицам, действующим на основании договора, для исполнения обязательств перед Клиентом.
                                    </p>
                                    <p class="policy__subtitle">
                                          - Не считается нарушением обязательств разглашение информации в соответствии с обоснованными и применимыми требованиями закона.
                                    </p>
                              </div>
                              <p style="color: red;">
                                    P.S. Мы не несем ответственности за сведения, предоставленные Клиентом на Сайте в общедоступной форме.
                              </p>
                        </div>
                  </div>
            </div>
            <header class="header" id="header">
                  <div class="container">
                        <div class="header__wrapper">
                              <div class="header__burgermenuwrapper n-active">
                                    <div class="header__burgermenuinner">
                                          <button type="button" class="burgerActionClose">
                                                
                                          </button>
                                          <ul class="header__burgermenu">
                                                <li class="header__burgermenu--item">
                                                      <a href="index.php">Главная</a>
                                                </li>
                                                <li class="header__burgermenu--item">
                                                      <a href="#porfolio--section">Портфолио</a>
                                                </li>
                                                <li class="header__burgermenu--item">
                                                      <a href="#footer">Контакты</a>
                                                </li>
                                                <li class="header__burgermenu--item">
                                                      <a href="#demonstration--section">Ваши возможности</a>
                                                </li>
                                                <li class="header__burgermenu--item">
                                                      <a href="#create--section">Как мы работаем</a>
                                                </li>
                                                <li class="header__burgermenu--item">
                                                      <a href="#questions--section">FAQ</a>
                                                </li>
      
                                              
                                          </ul>
                                          
                                          <hr class="header__burgermenu--line">
      
                                          <div class="header__burgersocial">
                                                <a href="tel:+79621290909" class="header__social--link">
                                                      <img src="assets/images/header/phone-solid.svg" alt="phone" class="phone--icon" width="32">
                                                </a>
                                                <a href="https://api.whatsapp.com/send/?phone=79621290909&text=Здравствуйте%2C+у+меня+есть+вопрос" class="header__social--link">
                                                      <img src="assets/images/header/whatsapp.svg" alt="whatsapp" class="whatsapp--icon">
                                                </a>
      
                                                <button class="header__social--link" data-fancybox="application--headerpopup"  data-src="#headerdialog-content">
                                                      <img src="assets/images/header/mail.svg" alt="mail" class="mail--icon">
                                                </button>
                                                <div class="header__popupwrapper" id="headerdialog-content" style="display: none; background-color: transparent; max-width: 500px; width: 100%;">
                                                      <div class="form__wrapper form-anim-background">
                                                            <div class="form__titleblock" style="max-width: 350px;">
                                                                  <h2 class="form__title" style="color: #fff; line-height: 32px;">
                                                                        Оставить заявку
                                                                  </h2>
                                                                  <p class="form__title--subtitle" style="color: #fff;">
                                                                        Отправьте заявку и с вами свяжутся в ближайшее время
                                                                  </p>
                                                            </div>
                                                            <form action="#" method="POST" name="form-type-application" class="form form-type-application" autocomplete="off">
                                                                  <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                                                                  <input type="text" name="name" class="form__input form__nameapplication" placeholder="Ваше имя" autocomplete="off">
                                                                  <input type="email" name="email" class="form__input form__emailapplication" placeholder="Ваша почта">
                                                                  <input type="tel" name="tel" class="form__input form__telapplication" placeholder="Ваш номер" autocomplete="off">
                                                                  <textarea autocomplete="off" rows="10" name="comment" class="form__area form__areaapplication" placeholder="Комментарий к заявке"></textarea>
                                                                  <button class="form__action b-n-animation" type="submit" style="color: #fff;">
                                                                        Отправить
                                                                  </button>
                                                            </form>
                                                            <p class="create__policy--text policy__text" style="color: #fff; padding-right: 5px;" data-fancybox="policy-popup" data-src="#policyPopup">
                                                                  *Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с <span>политикой конфиденциальности.</span>
                                                            </p>

                                                            <div class="policy__popupwrapper" id="policyPopup" style="display: none;">
                                                                  <div class="policy__popup">
                                                                        <div class="policy__popupwrapper">
                                                                              <h2 class="policy__title">
                                                                                    Политика конфиденциальности  
                                                                              </h2>
                                                                              <div class="policy__subtitlesblock">
                                                                                    <h3 class="policy__themetitle">
                                                                                          Предоставление информации клиентом:
                                                                                    </h3>
                                                                                    <p class="policy__subtitle">
                                                                                          - Заполняя формы, Клиент передает следующую информацию: Имя, email, телефон. 
                                                                                    </p>
                                                                                    <p class="policy__subtitle">
                                                                                          - Информация, предоставленная Клиентом, используется только для выполнения обязательств перед Клиентом.
                                                                                    </p>
                                                                              </div>
                                                                              <div class="policy__subtitlesblock">
                                                                                    <h3 class="policy__themetitle">
                                                                                          Разглашение полученной информации:
                                                                                    </h3>
                                                                                    <p class="policy__subtitle">
                                                                                          - Мы обязуемся не разглашать полученную от Клиента информацию.
                                                                                    </p>
                                                                                    <p class="policy__subtitle">
                                                                                          - Не считается нарушением предоставление информации агентам и третьим лицам, действующим на основании договора, для исполнения обязательств перед Клиентом.
                                                                                    </p>
                                                                                    <p class="policy__subtitle">
                                                                                          - Не считается нарушением обязательств разглашение информации в соответствии с обоснованными и применимыми требованиями закона.
                                                                                    </p>
                                                                              </div>
                                                                              <p style="color: red;">
                                                                                    P.S. Мы не несем ответственности за сведения, предоставленные Клиентом на Сайте в общедоступной форме.
                                                                              </p>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                
                                          </div>
                                    </div>
                              </div>
                              <div class="header__menuwrapper" data-aos="fade-right">
                                    <a href="index.php" class="header__logo">
                                          <img src="assets/images/header/logo.svg" alt="header-logo">
                                    </a>

                              
                              
                                    <div class="header__mobile--menu">
                                          <a href="tel:+79621290909" class="header__social--link">
                                                <img src="assets/images/header/phone-solid.svg" alt="phone" class="phone--icon" width="32">
                                          </a>
                                          <button class="header__burgeraction burgeraction" id="burgerAction" data-aos="fade-left">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                          </button>
                                         
                                    </div>
                                    <nav class="header__nav">
                                          <ul class="header__menu menu">
                                                <li class="menu__item">
                                                      <a href="index.html">Главная</a>
                                                </li>
                                                <li class="menu__item">
                                                      <a href="#porfolio--section">Портфолио</a>
                                                </li>
                                                <li class="menu__item">
                                                      <a href="#footer">Контакты</a>
                                                </li>
                                                <li class="menu__item">
                                                      <a href="#demonstration--section">Ваши возможности</a>
                                                </li>
                                                <li class="menu__item">
                                                      <a href="#create--section">Как мы работаем</a>
                                                </li>
                                                <li class="menu__item">
                                                      <a href="#questions--section">FAQ</a>
                                                </li>
                                          </ul>
                                    </nav>
                              </div>

                              <div class="header__contactblock" data-aos="fade-left">
                                    
                                    <div class="header__social">
                                          <a href="tel:+79621290909" class="header__social--link">
                                                <img src="assets/images/header/phone-solid.svg" alt="phone" class="phone--icon" width="32">
                                          </a>
                                          <a href="https://api.whatsapp.com/send/?phone=79621290909&text=Здравствуйте%2C+у+меня+есть+вопрос" class="header__social--link">
                                                <img src="assets/images/header/whatsapp.svg" alt="whatsapp" class="whatsapp--icon">
                                          </a>

                                          <button class="header__social--link" data-fancybox="application--headerdesctoppopup"  data-src="#headerdesctopdialog-content">
                                                <img src="assets/images/header/mail.svg" alt="mail" class="mail--icon">
                                          </button>
                                          <div class="header__popupwrapper" id="headerdesctopdialog-content" style="display: none; background-color: transparent; max-width: 500px; width: 100%;">
                                                <div class="form__wrapper form-anim-background">
                                                      <div class="form__titleblock" style="max-width: 350px;">
                                                            <h2 class="form__title" style="color: #fff; line-height: 32px;">
                                                                  Оставить заявку
                                                            </h2>
                                                            <p class="form__title--subtitle" style="color: #fff;">
                                                                  Отправьте заявку и с вами свяжутся в ближайшее время
                                                            </p>
                                                      </div>
                                                      <form action="#" method="POST" id="main__headerform" name="form-type-application" class="form form-type-application" autocomplete="off">
                                                            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                                                            <input type="text" name="name" id="mainheader__inputname" class="form__input form__nameapplication" placeholder="Ваше имя" autocomplete="off">
                                                            <input type="email" name="email" class="form__input form__emailapplication" placeholder="Ваша почта">
                                                            <input type="tel" name="tel" autocomplete="off" class="form__input form__telapplication" placeholder="Ваш номер">
                                                            <textarea rows="10" autocomplete="off" name="comment" class="form__area form__areaapplication" placeholder="Комментарий к заявке"></textarea>
                                                            <button class="form__action b-n-animation" type="submit" style="color: #fff;">
                                                                  Отправить
                                                            </button>
                                                      </form>
                                                      <p class="create__policy--text policy__text" style="color: #fff; padding-right: 5px;" data-fancybox="policy-popupmainheader" data-src="#policyPopupmainheader">
                                                            *Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с <span>политикой конфиденциальности.</span>
                                                      </p>
                                                      <div class="policy__popupwrapper" id="policyPopupmainheader" style="display: none;">
                                                            <div class="policy__popup">
                                                                  <div class="policy__popupwrapper">
                                                                        <h2 class="policy__title">
                                                                              Политика конфиденциальности  
                                                                        </h2>
                                                                        <div class="policy__subtitlesblock">
                                                                              <h3 class="policy__themetitle">
                                                                                    Предоставление информации клиентом:
                                                                              </h3>
                                                                              <p class="policy__subtitle">
                                                                                    - Заполняя формы, Клиент передает следующую информацию: Имя, email, телефон. 
                                                                              </p>
                                                                              <p class="policy__subtitle">
                                                                                    - Информация, предоставленная Клиентом, используется только для выполнения обязательств перед Клиентом.
                                                                              </p>
                                                                        </div>
                                                                        <div class="policy__subtitlesblock">
                                                                              <h3 class="policy__themetitle">
                                                                                    Разглашение полученной информации:
                                                                              </h3>
                                                                              <p class="policy__subtitle">
                                                                                    - Мы обязуемся не разглашать полученную от Клиента информацию.
                                                                              </p>
                                                                              <p class="policy__subtitle">
                                                                                    - Не считается нарушением предоставление информации агентам и третьим лицам, действующим на основании договора, для исполнения обязательств перед Клиентом.
                                                                              </p>
                                                                              <p class="policy__subtitle">
                                                                                    - Не считается нарушением обязательств разглашение информации в соответствии с обоснованными и применимыми требованиями закона.
                                                                              </p>
                                                                        </div>
                                                                        <p style="color: red;">
                                                                              P.S. Мы не несем ответственности за сведения, предоставленные Клиентом на Сайте в общедоступной форме.
                                                                        </p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          
                                    </div>
                              </div>
                        </div>
                  </div>
            </header>

            <div class="content">
                  <section class="section section__intro">
                        <img src="assets/images/intro/backgroundintro.png" alt="background" class="intro__background">
                        <div class="container">
                              <div class="intro__wrapper">
                                    <div class="intro__row">
                                          <div class="intro__textbox">
                                                <div class="intro__titlebox titles__anim">
                                                      <h1 class="intro__title" data-aos="fade-right">
                                                            Создание виртуальных 3D туров на заказ в г. Южно-Сахалинске и по Сахалинской области.
                                                      </h1>
                                                      <div class="intro__subtitles">
                                                            <p class="intro__subtitle" data-aos="fade-right" data-aos-duration="600">
                                                                  <span>Демонстрируйте быстрее и эффективней</span>
                                                            </p>
                                                            <p class="intro__subtitle intro__subtitle--width" data-aos="fade-left" data-aos-duration="600">
                                                                  Опубликуем 3D-тур на вашем сайте, Яндекс карте.
                                                            </p>
                                                      </div>
                                                </div>
                                                <button class="intro__textbox--btn" type="button" name="headerTextAction">
                                                      Примеры
                                                </button>
                                          </div>
                                          
                                    </div>
                              </div>
                        </div>
                  </section>
                  <section class="section section__viewtour">
                        <div class="container">
                              <div class="viewtour__wrapper">
                                    <div class="section__titlewrapper animationTitleTarget">
                                          <h2 class="section__title">
                                                Привлекайте больше клиентов
                                          </h2>
                                          <p class="section__subtitle">
                                                Показывайте 3D-туры
                                          </p>

                                          <div class="section__titleline"></div>
                                    </div>

                                    <div class="viewtour__content">
                                          <div class="viewtour__cards">
                                                <div class="view__card ">
                                                      <div class="view__card--imgblock">
                                                            <img src="assets/images/viewtour/commerce.png" alt="Коммерческая недвижимость" class="view__card--img">
                                                      </div>
                                                      <div class="view__card--textblock">
                                                            <h3 class="view__card--title">
                                                                  Коммерческая недвижимость
                                                            </h3>
                                                            <p class="view__card--subtitle">
                                                                  3D тур позволит Вашему бизнесу выделиться среди конкурентов. Сделает Ваш бизнес привлекательным.
                                                            </p>
                                                      </div>
                                                </div>
                                                <div class="view__card">
                                                      <div class="view__card--imgblock marg-center">
                                                            <img src="assets/images/viewtour/life.png" alt="Жилая недвижимость" class="view__card--img">
                                                      </div>
                                                      <div class="view__card--textblock text-ac">
                                                            <h3 class="view__card--title">
                                                                  Жилая недвижимость
                                                            </h3>
                                                            <p class="view__card--subtitle">
                                                                  3D тур Вашего объекта привлекает к себе больше внимания среди потенциальных покупателей. Высвобождает дополнительное время у специалистов по продажам.
                                                            </p>
                                                      </div>
                                                </div>
                                                <div class="view__card">
                                                      <div class="view__card--imgblock marg-right">
                                                            <img src="assets/images/viewtour/aero.png" alt="Аэросъемка" class="view__card--img">
                                                      </div>
                                                      <div class="view__card--textblock text-ar">
                                                            <h3 class="view__card--title">
                                                                  Аэросъемка
                                                            </h3>
                                                            <p class="view__card--subtitle">
                                                                  Аэро 3D тур, позволит целостно отразить Ваш объект, с высоты птичьего полета.
                                                            </p>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </section>
                  <div class="portfolio__gallery dn" id="galery">
                        <div class="portfolio__backgroundwrapper">
                              <div class="portfolio__background">
                                    
                              </div>
                        </div>
                        <div class="portfolio__gallary--inner">
                              <div class="portfolio__gallary--menu">
                                    <button type="button" class="gallary--action">
                                          <img src="assets/images/galery/cross.png" alt="Выход">
                                    </button>
                                    <div class="gallary__titlebox">
                                          <h2 class="gallary__title">
                                                Галерея работ
                                          </h2>
                                    </div>
                                    <div class="gallary__mainmenu">
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/1-комн квартира.png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            1-комн квартира
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания
                                                      </p>
                                                      <a href="https://360.3d65.ru/Mira563k5/index.htm" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                                
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Однокомнатная квартира.png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Однокомнатная квартира
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания
                                                      </p>
                                                      <a href="https://360.3d65.ru/renta65/chehova43/3d.html" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                                
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Водный комплекс Янкито (Santa Resort Hotel).png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Водный комплекс "Янкито" (Santa Resort Hotel)
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания
                                                      </p>
                                                      <a href="https://360.3d65.ru/santa/Yankito/3d.html" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                                
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Сауна (Santa Resort Hotel).png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Сауна (Santa Resort Hotel)
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания
                                                      </p>
                                                      <a href="https://360.3d65.ru/santa/Santa/index.htm" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                                
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Банный комплекс (УТЦ Восток).png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Банный комплекс (УТЦ Восток)
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания
                                                      </p>
                                                      <a href="https://360.3d65.ru/bath/index.htm" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                                
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Биллиардная (Santa Resort Hotel).png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Биллиардная (Santa Resort Hotel)
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания
                                                      </p>
                                                      <a href="https://360.3d65.ru/santa/billiards/index.htm" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                                
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Номер Lux (Santa Resort Hotel).png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Номер "Lux" (Santa Resort Hotel)
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания
                                                      </p>
                                                      <a href="https://360.3d65.ru/santa/Lux_1311/index.htm" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Вестибюль (Santa Resort Hotel).png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Вестибюль (Santa Resort Hotel)
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания
                                                      </p>
                                                      <a href="https://360.3d65.ru/santa/lobby/index.htm" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Территория гостиничного комплекса Santa Resort Hotel.png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Территория гостиничного комплекса "Santa Resort Hotel"
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания
                                                      </p>
                                                      <a href="https://360.3d65.ru/santa/ter/3d.html" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Номер Double (Santa Resort Hotel).png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Номер "Double" (Santa Resort Hotel)
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания
                                                      </p>
                                                      <a href="https://360.3d65.ru/santa/Double1204/3d.html" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Терраса (Santa Resort Hotel).png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Терраса (Santa Resort Hotel)
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания
                                                      </p>
                                                      <a href="https://360.3d65.ru/santa/terrace/3d.html" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Аппартаменты «Гранд» (Белый снег).png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Аппартаменты «Гранд» (Белый снег)
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания
                                                      </p>
                                                      <a href="https://360.3d65.ru/ws65/grand/index.htm" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Аппартаменты «Люкс» (Белый снег).png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Аппартаменты «ЛЮКС» (Белый снег)
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания
                                                      </p>
                                                      <a href="https://360.3d65.ru/ws65/2/index.htm" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Ресторан Азия (Santa Resort Hotel).png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Ресторан "Азия" (Santa Resort Hotel)
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания
                                                      </p>
                                                      <a href="https://360.3d65.ru/santa/rest_asia/index.htm" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Ресторан Европа (Santa Resort Hotel).png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Ресторан "Европа" (Santa Resort Hotel)
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания
                                                      </p>
                                                      <a href="https://360.3d65.ru/santa/rest_europe/index.htm" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/ООО Сахалин Электро Сервис.png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            ООО "Сахалин Электро Сервис"
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Съемка 3D тура для ООО "Сахалин Электро Сервис" 
                                                      </p>
                                                      <a href="https://360.3d65.ru/ses/index.htm " class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/УТЦ Восток.png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            УТЦ "Восток"
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Готовый интерактивный 3D тур в Учебно-тренировочном центре "Восток" с размещением на сайте центра и Яндекс карт. 
                                                      </p>
                                                      <a href="https://360.3d65.ru/vostok/index.htm" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Сахалин-Машинери.png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Сахалин-Машинери
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания
                                                      </p>
                                                      <a href="https://360.3d65.ru/sm/3d.html" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Стоматологическая клиника (Пьер Фошар).png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Стоматологическая клиника "Пьер Фошар"
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания 
                                                      </p>
                                                      <a href="https://360.3d65.ru/foshar/index.htm" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Стоматологическая клиника (Мегадент).png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Стоматологическая клиника "МЕГАДЕНТ"
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Нет описания 
                                                      </p>
                                                      <a href="https://360.3d65.ru/megadent/3d.html" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Аэро 3D тур лыжной трассы.png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Аэротур 30/50 км для марафона
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            Аэро 3D тур лыжной трассы к международному марафону памяти И.П. Фархутдинова для Спортивной школы олимпийского резерва зимних видов спорта.   
                                                      </p>
                                                      <a href="https://360.3d65.ru/Aero2024/index.htm" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                          </div>
                                          <div class="gallary__mainmenu--item">
                                                <div class="gallary__imgblock">
                                                      <img class="gallary__img" src="assets/images/portfolio-card/Лыжная трасса 30-50 км для марафона.png" alt="gallary img" width="550">
                                                </div>
                                                <div class="gallary__textbox">
                                                      <h3 class="gallary__itemtitle">
                                                            Лыжная трасса 30/50 км для марафона
                                                      </h3>
                                                      <p class="gallary__subtitle"> 
                                                            3D тур лыжной трассы к международному марафону памяти И.П. Фархутдинова для Спортивной школы олимпийского резерва зимних видов спорта.   
                                                      </p>
                                                      <a href="https://360.3d65.ru/mar2024/index.htm" class="gallary--link" target="_blank">
                                                            Смотреть
                                                      </a>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div> 
                  </div>
                  <section class="section section__portfolio" id="porfolio--section">
                        <div class="container">
                              <div class="portfolio__wrapper">
                                    <div class="section__titlewrapper animationTitleTarget">
                                          <h2 class="section__title">
                                                Портфолио
                                          </h2>
                                          <p class="section__subtitle">
                                                Примеры работ
                                          </p>

                                          <div class="section__titleline"></div>
                                    </div>

                                    <div class="portfolio__content">
                                          <div class="portfolio__category">
                                                <button class="portfolio__category--btn" id="categoryAction" type="button">
                                                      <p>Категории</p>
                                                      <img src="assets/images/portfolio/arrow-down.svg" alt="Расскрыть категории" id="portfolioArrowAction">
                                                </button>
                                                <hr class="portfolio__category--line">
                                          </div>
                                          <div class="portfolio__sliderwrapper">
                                                
                                          
                                                <div class="portfolio__slide">
                                                      <div class="portfolio__slidebody">
                                                            <div class="portfolio__slide--imgblock">
                                                                  <img src="assets/images/portfolio-card/1-комн квартира.png" alt="slide" class="portfolio__slide--img">
                                                                  <a id="play-video" class="video-play-button" href="https://360.3d65.ru/Mira563k5/index.htm" target="_blank">
                                                                        <span></span>
                                                                  </a>
      
                                                            </div>
                                                            <div class="portfolio__slide--textblock">
                                                                  <h3 class="portfolio__slide--title">
                                                                        1-комн квартира
                                                                  </h3>
                                                                  <p class="portfolio__slide--subtitle">
                                                                        Нет описания
                                                                  </p>
                                                                  
                                                                  <a href="https://360.3d65.ru/Mira563k5/index.htm" target="_blank" class="slide--panaramshowbtn b-n-animation">
                                                                        Посмотреть
                                                                  </a>
                                                               
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="portfolio__slide">
                                                      <div class="portfolio__slidebody">
                                                            <div class="portfolio__slide--imgblock">
                                                                  <img src="assets/images/portfolio-card/Однокомнатная квартира.png" alt="slide" class="portfolio__slide--img">
                                                                  <a id="play-video" class="video-play-button" href="https://360.3d65.ru/renta65/chehova43/3d.html" target="_blank">
                                                                        <span></span>
                                                                  </a>
      
                                                            </div>
                                                            <div class="portfolio__slide--textblock">
                                                                  <h3 class="portfolio__slide--title">
                                                                        Однокомнатная квартира
                                                                  </h3>
                                                                  <p class="portfolio__slide--subtitle">
                                                                        Описания нет
                                                                  </p>
                                                                  
                                                                  <a href="https://360.3d65.ru/renta65/chehova43/3d.html" target="_blank" class="slide--panaramshowbtn b-n-animation">
                                                                        Посмотреть
                                                                  </a>
                                                               
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="portfolio__slide">
                                                      <div class="portfolio__slidebody">
                                                            <div class="portfolio__slide--imgblock">
                                                                  <img src="assets/images/portfolio-card/Водный комплекс Янкито (Santa Resort Hotel).png" alt="slide" class="portfolio__slide--img">
                                                                  <a id="play-video" class="video-play-button" href="https://360.3d65.ru/santa/Yankito/3d.html" target="_blank">
                                                                        <span></span>
                                                                  </a>
      
                                                            </div>
                                                            <div class="portfolio__slide--textblock">
                                                                  <h3 class="portfolio__slide--title">
                                                                        Водный комплекс "Янкито" (Santa Resort Hotel)
                                                                  </h3>
                                                                  <p class="portfolio__slide--subtitle">
                                                                        Нет описания 
                                                                  </p>
                                                                  
                                                                  <a href="https://360.3d65.ru/santa/Yankito/3d.html" target="_blank" class="slide--panaramshowbtn b-n-animation">
                                                                        Посмотреть
                                                                  </a>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="portfolio__slide">
                                                      <div class="portfolio__slidebody">
                                                            <div class="portfolio__slide--imgblock">
                                                                  <img src="assets/images/portfolio-card/Стоматологическая клиника (Пьер Фошар).png" alt="slide" class="portfolio__slide--img">
                                                                  <a id="play-video" class="video-play-button" href="https://360.3d65.ru/foshar/index.htm" target="_blank">
                                                                        <span></span>
                                                                  </a>
                                                                  
                                                            </div>
                                                            <div class="portfolio__slide--textblock">
                                                                  <h3 class="portfolio__slide--title">
                                                                        Стоматологическая клиника "Пьер Фошар"
                                                                  </h3>
                                                                  <p class="portfolio__slide--subtitle">
                                                                        Нет описания 
                                                                  </p>
                                                                  
                                                                  <a href="https://360.3d65.ru/foshar/index.htm" target="_blank" class="slide--panaramshowbtn b-n-animation">
                                                                        Посмотреть
                                                                  </a>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="portfolio__slide">
                                                      <div class="portfolio__slidebody">
                                                            <div class="portfolio__slide--imgblock">
                                                                  <img src="assets/images/portfolio-card/Аэро 3D тур лыжной трассы.png" alt="slide" class="portfolio__slide--img">
                                                                  <a id="play-video" class="video-play-button" href="https://360.3d65.ru/Aero2024/index.htm" target="_blank">
                                                                        <span></span>
                                                                  </a>
      
                                                            </div>
                                                            <div class="portfolio__slide--textblock">
                                                                  <h3 class="portfolio__slide--title">
                                                                        Аэротур 30/50 км для марафона
                                                                  </h3>
                                                                  <p class="portfolio__slide--subtitle">
                                                                        Аэро 3D тур лыжной трассы к международному марафону памяти И.П. Фархутдинова для Спортивной школы олимпийского резерва зимних видов спорта.  
                                                                  </p>
                                                                  
                                                                  <a href="https://360.3d65.ru/Aero2024/index.htm" target="_blank" class="slide--panaramshowbtn b-n-animation">
                                                                        Посмотреть
                                                                  </a>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="portfolio__slide">
                                                      <div class="portfolio__slidebody">
                                                            <div class="portfolio__slide--imgblock">
                                                                  <img src="assets/images/portfolio-card/Лыжная трасса 30-50 км для марафона.png" alt="slide" class="portfolio__slide--img">
                                                                  <a id="play-video" class="video-play-button" href="https://360.3d65.ru/mar2024/index.htm" target="_blank">
                                                                        <span></span>
                                                                  </a>
      
                                                            </div>
                                                            <div class="portfolio__slide--textblock">
                                                                  <h3 class="portfolio__slide--title">
                                                                        Лыжная трасса 30/50 км для марафона
                                                                  </h3>
                                                                  <p class="portfolio__slide--subtitle">
                                                                        3D тур лыжной трассы к международному марафону памяти И.П. Фархутдинова для Спортивной школы олимпийского резерва зимних видов спорта.
                                                                  </p>
                                                                  
                                                                  <a href="https://360.3d65.ru/mar2024/index.htm" target="_blank" class="slide--panaramshowbtn b-n-animation">
                                                                        Посмотреть
                                                                  </a>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <button class="btn portfolio__moreworks" id="moreworksAction" type="button" name="Больше работ">Больше работ</button>
                                          
                                    </div>
                              </div>
                        </div>
                  </section>

                  <section class="section section__demonstrations" id="demonstration--section">
                        <div class="container">
                              <div class="demonstrations__wrapper">
                                    <div class="section__titlewrapper animationTitleTarget">
                                          <h2 class="section__title">
                                                Используйте 3D-туры для быстрых демонстраций и эффективных продаж
                                          </h2>
                                          <div class="section__titleline"></div>
                                    </div>

                                    <div class="demonstration__content">

                                          <div class="demonstration__sldier owl-carousel owl-theme">
                                                <div class="demonstration__slide">
                                                      <img src="assets/images/demonstration/see.png" alt="see" class="demonstration__slide--img" width="100">
                                                      <div class="demonstration__slide--textbox">
                                                            <h3 class="demonstration__slide--title">
                                                                  Эффект присутствия
                                                            </h3>
                                                            <p class="demonstration__slide--subtitle">
                                                                  Виртуальная реальность объекта. <br>
                                                                  Желание клиентов посетить именно Вас!
                                                            </p>
                                                      </div>
                                                </div>
                                                <div class="demonstration__slide">
                                                      <img src="assets/images/demonstration/invest.png" alt="invest" class="demonstration__slide--img" width="100">
                                                      <div class="demonstration__slide--textbox">
                                                            <h3 class="demonstration__slide--title">
                                                                  Рост продаж
                                                            </h3>
                                                            <p class="demonstration__slide--subtitle">
                                                                  У Вас становится больше клиентов. Статистика показывает, что компании у которых усть 3D тур, отметили заметное  увеличение продаж!
                                                            </p>
                                                      </div>
                                                </div>
                                                <div class="demonstration__slide">
                                                      <img src="assets/images/demonstration/descmobile.png" alt="desctop" class="demonstration__slide--img" width="100">
                                                      <div class="demonstration__slide--textbox">
                                                            <h3 class="demonstration__slide--title">
                                                                  Просмотр с любых устройств
                                                            </h3>
                                                            <p class="demonstration__slide--subtitle">
                                                                  Презентация Вашего объекта в любом месте и в любое время на все 360 градусов. Размещение 3D тура в сервисах Yandex и у Вас на сайте! Адаптация на все виды устройств
                                                            </p>
                                                      </div>
                                                </div>
                                                <div class="demonstration__slide">
                                                      <img src="assets/images/demonstration/web.png" alt="web" class="demonstration__slide--img" width="100">
                                                      <div class="demonstration__slide--textbox">
                                                            <h3 class="demonstration__slide--title">
                                                                  Создание контента в 3D-турах
                                                            </h3>
                                                            <p class="demonstration__slide--subtitle">
                                                                  Внедряем информативную инфографику, ссылки, всплывающие окна и прочее
                                                            </p>
                                                      </div>
                                                </div>
                                                <div class="demonstration__slide">
                                                      <img src="assets/images/demonstration/sucsess.png" alt="sucsess" class="demonstration__slide--img" width="100">
                                                      <div class="demonstration__slide--textbox">
                                                            <h3 class="demonstration__slide--title">
                                                                  Вставка элементов брендинга
                                                            </h3>
                                                            <p class="demonstration__slide--subtitle">
                                                                  Используйте эти возможности, чтобы укрепить узнаваемость и имидж компании
                                                            </p>
                                                      </div>
                                                </div>
                                                <div class="demonstration__slide">
                                                      <img src="assets/images/demonstration/param.png" alt="param" class="demonstration__slide--img" width="100">
                                                      <div class="demonstration__slide--textbox">
                                                            <h3 class="demonstration__slide--title">
                                                                  Множество опций и настроек
                                                            </h3>
                                                            <p class="demonstration__slide--subtitle">
                                                                  Используем различные типы навигаций, добавляем интерактивные элементы
                                                            </p>
                                                      </div>
                                                </div>
                                                <div class="demonstration__slide">
                                                      <img src="assets/images/demonstration/3d.png" alt="3D" class="demonstration__slide--img" width="100">
                                                      <div class="demonstration__slide--textbox">
                                                            <h3 class="demonstration__slide--title">
                                                                  Высокое качество 3D-тура
                                                            </h3>
                                                            <p class="demonstration__slide--subtitle">
                                                                  3D туры помогают клиентам детальнее увидеть особенности интерьера и экстерьера
                                                            </p>
                                                      </div>
                                                </div>
                                                <div class="demonstration__slide">
                                                      <img src="assets/images/demonstration/olimp.png" alt="olimp" class="demonstration__slide--img" width="100">
                                                      <div class="demonstration__slide--textbox">
                                                            <h3 class="demonstration__slide--title">
                                                                  Преимущество среди конкурентов
                                                            </h3>
                                                            <p class="demonstration__slide--subtitle">
                                                                  Позволит привлечь больше внимания к объекту недвижимости или заведению
                                                            </p>
                                                      </div>
                                                </div>
                                                <div class="demonstration__slide">
                                                      <img src="assets/images/demonstration/home.png" alt="home" class="demonstration__slide--img" width="100">
                                                      <div class="demonstration__slide--textbox">
                                                            <h3 class="demonstration__slide--title">
                                                                  Инструмент для риэлторов
                                                            </h3>
                                                            <p class="demonstration__slide--subtitle">
                                                                  Экономьте свое драгоценное время, выезжая на объекты недвижимости. Достаточно просто демонстрировать 3D тур своим клиентам
                                                            </p>
                                                      </div>
                                                </div>
                                          </div>
                                          
                                          
                                      
                                            
                                              
                                    </div>
                                    
                              </div>
                        </div>
                  </section>

                  <section class="section section__create" id="create--section">
                        <div class="container">
                              <div class="create__wrapper">
                                    <div class="section__titlewrapper animationTitleTarget">
                                          <h2 class="section__title">
                                                Как происходит создание?
                                          </h2>
                                          <p class="section__subtitle">
                                                Всего в несколько шагов
                                          </p>

                                          <div class="section__titleline"></div>
                                    </div>

                                    <div class="create__content">
                                          <div class="create__column">
                                                <div class="create__inner">
                                                      <div class="create__card">
                                                            <div class="create__countbox--wrapper">
                                                                  <div class="create__countbox">
                                                                        <p class="create__countbox--innertext">
                                                                              1
                                                                        </p>
                                                                  </div>
                                                            </div>
                                                            <div class="create__card--textbox">
                                                                  <h3 class="create__card--title">
                                                                        Заявка
                                                                  </h3>
                                                                  <p class="create__card--subtitle">
                                                                        Вы оставляете заявку на расчет стоимости виртуального тура.
                                                                  </p>
                                                            </div>
                                                      </div>
                                                      <div class="create__card">
                                                            <div class="create__countbox--wrapper">
                                                                  <div class="create__countbox">
                                                                        <p class="create__countbox--innertext">
                                                                              2
                                                                        </p>
                                                                  </div>
                                                            </div>
                                                            <div class="create__card--textbox">
                                                                  <h3 class="create__card--title">
                                                                        Расчет стоимости
                                                                  </h3>
                                                                  <p class="create__card--subtitle">
                                                                        На этом этапе изучаем ваш материал, оцениваем объем работ. Если объект сложный,
                                                                        то наш специалист выезжает на объект для уточнения деталей. После полного
                                                                        согласования предоставляем Вам коммерческое предложение.
                                                                  </p>
                                                            </div>
                                                      </div>
                                                      <div class="create__card">
                                                            <div class="create__countbox--wrapper">
                                                                  <div class="create__countbox">
                                                                        <p class="create__countbox--innertext">
                                                                              3
                                                                        </p>
                                                                  </div>
                                                            </div>
                                                            <div class="create__card--textbox">
                                                                  <h3 class="create__card--title">
                                                                        Съемка
                                                                  </h3>
                                                                  <p class="create__card--subtitle">
                                                                        Наш фотограф проводит съемку объекта, применяя профессиональное оборудование,
                                                                        в удобное для вас время.
                                                                  </p>
                                                            </div>
                                                      </div>
                                                      <div class="create__card">
                                                            <div class="create__countbox--wrapper">
                                                                  <div class="create__countbox">
                                                                        <p class="create__countbox--innertext">
                                                                              4
                                                                        </p>
                                                                  </div>
                                                            </div>
                                                            <div class="create__card--textbox">
                                                                  <h3 class="create__card--title">
                                                                        Согласование работ
                                                                  </h3>
                                                                  <p class="create__card--subtitle">
                                                                        Выполняем основную часть работ. Показываем выполненные наброски. 
                                                                        Предоставляем Вам на согласование собранный 3D тур. 
                                                                        Учитываем Ваши пожелания и вносим доработки.
                                                                  </p>
                                                            </div>
                                                      </div>
                                                      <div class="create__card">
                                                            <div class="create__countbox--wrapper">
                                                                  <div class="create__countbox">
                                                                        <p class="create__countbox--innertext">
                                                                              5
                                                                        </p>
                                                                  </div>
                                                            </div>
                                                            <div class="create__card--textbox">
                                                                  <h3 class="create__card--title">
                                                                        Передача готового проекта
                                                                  </h3>
                                                                  <p class="create__card--subtitle">
                                                                        Передаем Вам в полном объеме готовый объект. Подписываем закрывающие документы. 
                                                                  </p>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="create__column">
                                                <div class="form__wrapper create__formwrapper form-anim-background">
                                                      <div class="create__form--titleblock form__titleblock">
                                                            <h2 class="create__form--title form__title">
                                                                  Оставить заявку
                                                            </h2>
                                                            <p class="create__form--subtitle form__title--subtitle">
                                                                  Отправьте заявку и с вами свяжутся в ближайшее время
                                                            </p>
                                                      </div>
                                                      <form id="create__form" name="form-type-application" class="form form-type-application create__form" data-js-form>
                                                            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                                                            <input type="text" name="name" id="create__fieldname"  
                                                            class="form__input form__nameapplication create__form--input" placeholder="Ваше имя">
                                                      
                                                            <input type="email" name="email" class="form__input form__emailapplication" placeholder="Ваша почта">
                                                            <input type="tel" name="tel" class="form__input
                                                            create__form--input form__telapplication"  id="create__fieldswitcher"
                                                            placeholder="Ваш номер" 
                                                            required>
                                                            <textarea rows="10" name="comment" class="form__area form__areaapplication create__form--area" placeholder="Комментарий к заявке"></textarea>
                                                            <button class="form__action create__form--action b-n-animation" type="submit">
                                                                  Отправить
                                                            </button>
                                                      </form>
                                                      <p class="create__policy--text policy__text" data-fancybox="policy-popupcreate" data-src="#policyPopupcreate">
                                                            *Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с <span>политикой конфиденциальности.</span>
                                                      </p>
                                                      <div class="policy__popupwrapper" id="policyPopupcreate" style="display: none;">
                                                            <div class="policy__popup">
                                                                  <div class="policy__popupwrapper">
                                                                        <h2 class="policy__title">
                                                                              Политика конфиденциальности  
                                                                        </h2>
                                                                        <div class="policy__subtitlesblock">
                                                                              <h3 class="policy__themetitle">
                                                                                    Предоставление информации клиентом:
                                                                              </h3>
                                                                              <p class="policy__subtitle">
                                                                                    - Заполняя формы, Клиент передает следующую информацию: Имя, email, телефон. 
                                                                              </p>
                                                                              <p class="policy__subtitle">
                                                                                    - Информация, предоставленная Клиентом, используется только для выполнения обязательств перед Клиентом.
                                                                              </p>
                                                                        </div>
                                                                        <div class="policy__subtitlesblock">
                                                                              <h3 class="policy__themetitle">
                                                                                    Разглашение полученной информации:
                                                                              </h3>
                                                                              <p class="policy__subtitle">
                                                                                    - Мы обязуемся не разглашать полученную от Клиента информацию.
                                                                              </p>
                                                                              <p class="policy__subtitle">
                                                                                    - Не считается нарушением предоставление информации агентам и третьим лицам, действующим на основании договора, для исполнения обязательств перед Клиентом.
                                                                              </p>
                                                                              <p class="policy__subtitle">
                                                                                    - Не считается нарушением обязательств разглашение информации в соответствии с обоснованными и применимыми требованиями закона.
                                                                              </p>
                                                                        </div>
                                                                        <p style="color: red;">
                                                                              P.S. Мы не несем ответственности за сведения, предоставленные Клиентом на Сайте в общедоступной форме.
                                                                        </p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </section>
                  <section class="section section__ourclient">
                        <div class="container">
                              <div class="ourclient__wrapper">
                                    <div class="section__titlewrapper animationTitleTarget">
                                          <h2 class="section__title">
                                                Нам доверяют
                                          </h2>

                                          <div class="section__titleline"></div>
                                    </div>
                                         
                                    <div class="ourclient__content">
                                          <div class="ourclient__slider owl-carousel owl-theme owl-loaded owl-drag">
                                                <img src="assets/images/clients/csp.jpg" alt="ЦСП" class="ourclient--img" width="150">
                                                <img src="assets/images/clients/megadent.png" alt="Мегадент" class="ourclient--img" width="150">
                                                <img src="assets/images/clients/pier.jpg" alt="Пьер Фошар" class="ourclient--img" width="150">
                                                <img src="assets/images/clients/sahmash.png" alt="sahmash" class="ourclient--img" width="150">
                                                <img src="assets/images/clients/santa.png" alt="santa" class="ourclient--img" width="150">
                                                <img src="assets/images/clients/vostok.jpg" alt="Восток" class="ourclient--img" width="150">
                                                <img src="assets/images/clients/winter.png" alt="Зима" class="ourclient--img" width="150">
                                          </div>
                                    </div>    
                                
                              </div>
                        </div>
                  </section>
                  <section class="section section__questions" id="questions--section">
                        <div class="container">
                              <div class="questions__wrapper">
                                    <div class="section__titlewrapper animationTitleTarget">
                                          <h2 class="section__title">
                                                Часто задаваемые вопросы
                                          </h2>
                                          <p class="section__subtitle">
                                                FAQ
                                          </p>

                                          <div class="section__titleline"></div>
                                    </div>
                                    <hr class="questions__line">
                                    <div class="questions__content">
                                          <div class="questions__itemwrapper">
                                                <h3 class="questions__itemtype">
                                                      Общие вопросы
                                                </h3>
                                                <div class="questions__item">
                                                      <div class="questions__closedblock">
                                                            <h4 class="questions__title">
                                                                  Что такое Виртуальный Тур?
                                                            </h4>
                                                            <div class="questions__action">
                                                                  
                                                            </div>
                                                      </div>
                                                      <div class="questions__openedblock">
                                                            <hr class="questions__item--line">
                                                            <div class="questions__subtitles">
                                                                  <p class="questions__subtitle">
                                                                        Виртуальный тур или 3д-тур это несколько связанных между собой 
                                                                        сферических панорамных фотографий, которые создают у пользователя 
                                                                        эффект присутствия в помещении. Другими словами, пользователь может 
                                                                        прогуляться внутри снятых панорам при помощи своего смартфона, ноутбука 
                                                                        или очков виртуальной реальности.
                                                                  </p>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="questions__item">
                                                      <div class="questions__closedblock">
                                                            <h4 class="questions__title">
                                                                  Мой объект далеко от города. Возьметесь?
                                                            </h4>
                                                            <div class="questions__action">
                                                                  
                                                            </div>
                                                      </div>
                                                      <div class="questions__openedblock">
                                                            <hr class="questions__item--line">
                                                            <div class="questions__subtitles">
                                                                  <p class="questions__subtitle">
                                                                        Мы снимаем виртуальные туры не только в г. Южно-Сахалинске, но и на территории Сахалинской области. 
                                                                        Сообщите нам местоположение Вашего объекта, и мы рассчитаем для 
                                                                        Вас индивидуальную стоимость проекта.
                                                                  </p>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="questions__item">
                                                      <div class="questions__closedblock">
                                                            <h4 class="questions__title">
                                                                  Как рассчитать стоимость виртуального тура?
                                                            </h4>
                                                            <div class="questions__action">
                                                                  
                                                            </div>
                                                      </div>
                                                      <div class="questions__openedblock">
                                                            <hr class="questions__item--line">
                                                            <div class="questions__subtitles">
                                                                  <p class="questions__subtitle">
                                                                        Стоимость виртуального тура зависит от планировки Вашего помещения и объекта, 
                                                                        а также количества требуемых панорам для его демонстрации. В среднем это одна панорама на 15-20 кв м. 
                                                                        Необходимо учесть связующие панорамы и входную группу. 
                                                                        Чтобы узнать точную стоимость для вашего объекта <span>оставьте заявку</span>, мы перезвоним и сделаем расчет.
                                                                  </p>
                                                                  <p class="questions__subtitle">
                                                                        Вы платите только за съемку панорам. Выезд фотографа, обработка, размещение 
                                                                        и использование — бесплатно! Размещение на Яндекс карты бесплатно. 
                                                                        Если у вас большой объект или много уличных панорам, позвоните нам, мы расскажем, 
                                                                        как можно оптимизировать съемку тем самым сократить бюджет.
                                                                  </p>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="questions__item">
                                                      <div class="questions__closedblock">
                                                            <h4 class="questions__title">
                                                                  Есть ли скидки?
                                                            </h4>
                                                            <div class="questions__action">
                                                                  
                                                            </div>
                                                      </div>
                                                      <div class="questions__openedblock">
                                                            <hr class="questions__item--line">
                                                            <div class="questions__subtitles">
                                                                  <p class="questions__subtitle">
                                                                        Скидка предоставляется при заказе от 10 панорам на объект.
                                                                  </p>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="questions__item">
                                                      <div class="questions__closedblock">
                                                            <h4 class="questions__title">
                                                                  Как готовить объект к съемке?
                                                            </h4>
                                                            <div class="questions__action">
                                                                  
                                                            </div>
                                                      </div>
                                                      <div class="questions__openedblock">
                                                            <hr class="questions__item--line">
                                                            <div class="questions__subtitles">
                                                                  <p class="questions__subtitle">
                                                                        Подготовка помещения к съемке может сэкономить значительный 
                                                                        бюджет на ретушь и время на съемку. 
                                                                        Грязные и неубранные поверхности, лишние объекты в кадре — на все это 
                                                                        придется потратить время и деньги на ретушь 
                                                                        (некоторые элементы невозможно отретушировать).  
                                                                        Чтобы избежать этого следуйте простому принципу: все, что видите вы, 
                                                                        вращая головой, увидит и камера.
                                                                  </p>
                                                                  <div class="questions__subtitles--inner">
                                                                        <p class="questions__subtitle">
                                                                              <span class="questions__subtitle--bold">Поэтому перед съемкой требуется:</span>
                                                                        </p>
                                                                        <p class="questions__subtitle">
                                                                              1. Очистите все поверхности, особенно те, 
                                                                              что со сложным рисунком или текстурой. Разводы тоже следует удалить.
                                                                        </p>
                                                                        <p class="questions__subtitle">
                                                                              2. Уберите все лишнее с объекта съемки, 
                                                                              проверьте на работоспособность все источники света.
                                                                        </p>
                                                                        <p class="questions__subtitle">
                                                                              3.	Выделите время на съемку — важно, чтобы на 
                                                                              объекте не было большого количества клиентов, 
                                                                              лишнего персонала и других посторонних. Понадобится время, чтобы 
                                                                              провести качественную съемку, 
                                                                              спешка всегда снижает качество и приводит к ошибкам. Чем больше площадь, 
                                                                              тем больше потребуется времени.
                                                                        </p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="questions__item">
                                                      <div class="questions__closedblock">
                                                            <h4 class="questions__title">
                                                                  Как быстро создается 3д Тур?
                                                            </h4>
                                                            <div class="questions__action">
                                                                  
                                                            </div>
                                                      </div>
                                                      <div class="questions__openedblock">
                                                            <hr class="questions__item--line">
                                                            <div class="questions__subtitles">
                                                                  <p class="questions__subtitle">
                                                                        • Съемка сферических панорам на объекте занимает от 30 минут и более, в зависимости от площади Вашего объекта, а также от сложности условий съемки.
                                                                  </p>
                                                                  <p class="questions__subtitle">
                                                                        • Создание 3д тура из готовых сферических панорам занимает 
                                                                        от 1 дня, зависит от площади отснятого объекта, а также от объёма  
                                                                        дополнительной информации которую Вы планируете разместить в 3д туре: 
                                                                        меню, всплывающие инфо-окна с описаниями, фото, видео, ссылки…
                                                                  </p>
                                                                  <p class="questions__subtitle">
                                                                        • Публикация готовых панорам на Яндекс.Картах занимает от 3 дней.
                                                                  </p>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="questions__item">
                                                      <div class="questions__closedblock">
                                                            <h4 class="questions__title">
                                                                  Хотим улицу отснять летом, а помещения зимой. Как поступить?
                                                            </h4>
                                                            <div class="questions__action">
                                                                  
                                                            </div>
                                                      </div>
                                                      <div class="questions__openedblock">
                                                            <hr class="questions__item--line">
                                                            <div class="questions__subtitles">
                                                                  <p class="questions__subtitle">
                                                                        Мы проведем для Вас съемку в любое удобное для Вас время 
                                                                        и сезон года и объединим весь отснятый материал в один 3д тур.
                                                                  </p>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="questions__itemwrapper">
                                                <h3 class="questions__itemtype">
                                                      Технические вопросы
                                                </h3>
                                                <div class="questions__item">
                                                      <div class="questions__closedblock">
                                                            <h4 class="questions__title">
                                                                  У меня нет сайта. Что делать?
                                                            </h4>
                                                            <div class="questions__action">
                                                                  
                                                            </div>
                                                      </div>
                                                      <div class="questions__openedblock">
                                                            <hr class="questions__item--line">
                                                            <div class="questions__subtitles">
                                                                  <p class="questions__subtitle">
                                                                        У нас есть техническая возможность хранить ваш виртуальный тур на нашем сервере (сайте). 
                                                                        Вы сможете делиться ссылкой с вашими клиентами. Для размещения на Яндекс картах, свой сайт 
                                                                        не требуется.  
                                                                  </p>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="questions__item">
                                                      <div class="questions__closedblock">
                                                            <h4 class="questions__title">
                                                                  Хотим добавить в 3д тур фото, описания объектов, ссылки... Возможно?
                                                            </h4>
                                                            <div class="questions__action">
                                                                  
                                                            </div>
                                                      </div>
                                                      <div class="questions__openedblock">
                                                            <hr class="questions__item--line">
                                                            <div class="questions__subtitles">
                                                                  <p class="questions__subtitle">
                                                                        Да! В 3д тур мы можем добавить: меню, тексты, описания локация, ссылки, 
                                                                        pdf файлы, видео, звук, формы 
                                                                        бронирования, кнопки и любые другие элементы. Обратите внимание на то, что часть этого 
                                                                        функционала оплачивается дополнительно.  
                                                                  </p>
                                                            </div>
                                                      </div>
                                                </div>
                                                
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </section>
                  <section class="section section__calltome">
                        <div class="container">
                              <div class="calltome__wrapper">
                                    <div class="section__titlewrapper animationTitleTarget">
                                          <h2 class="section__title">
                                                Мы смогли вас заинтересовать?
                                          </h2>
                                          <div class="section__titleline"></div>
                                          <p class="section__subtitle">
                                                Тогда давайте свяжемся
                                          </p>
                                    </div>
                                    <div class="form__wrapper calltome__formwrapper form-anim-background">
                                          <div class="calltome__form--titleblock form__titleblock">
                                                <h2 class="calltome__form--title form__title">
                                                      Связаться с нами
                                                </h2>
                                                <p class="calltome__form--subtitle form__title--subtitle">
                                                      Заполните данные и отправьте, с вами свяжутся в ближайшее время
                                                </p>
                                          </div>
                                          <form action="#" method="POST" name="form-type-connection" class="form calltome__form form-type-connection">
                                                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                                                <input type="text" name="name" class="form__input input__nameconnection calltome__form--input" placeholder="Ваше имя">
                                                <input type="email" name="email" class="form__input input__emailconnection calltome__form--input" placeholder="Ваша почта">
                                                <input type="tel" name="tel" class="form__input input__phoneconnection calltome__form--input" placeholder="Ваш номер">
                                                
                                                <button class="form__action calltome__form--action b-n-animation" type="submit">
                                                      Отправить
                                                </button>
                                                <p class="calltome__policy--text policy__text" data-fancybox="policy-popupcalltome" data-src="#policyPopupcalltome">
                                                      *Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с <span>политикой конфиденциальности.</span>
                                                </p>
                                          </form>
                                          <div class="policy__popupwrapper" id="policyPopupcalltome" style="display: none;">
                                                <div class="policy__popup">
                                                      <div class="policy__popupwrapper">
                                                            <h2 class="policy__title">
                                                                  Политика конфиденциальности  
                                                            </h2>
                                                            <div class="policy__subtitlesblock">
                                                                  <h3 class="policy__themetitle">
                                                                        Предоставление информации клиентом:
                                                                  </h3>
                                                                  <p class="policy__subtitle">
                                                                        - Заполняя формы, Клиент передает следующую информацию: Имя, email, телефон. 
                                                                  </p>
                                                                  <p class="policy__subtitle">
                                                                        - Информация, предоставленная Клиентом, используется только для выполнения обязательств перед Клиентом.
                                                                  </p>
                                                            </div>
                                                            <div class="policy__subtitlesblock">
                                                                  <h3 class="policy__themetitle">
                                                                        Разглашение полученной информации:
                                                                  </h3>
                                                                  <p class="policy__subtitle">
                                                                        - Мы обязуемся не разглашать полученную от Клиента информацию.
                                                                  </p>
                                                                  <p class="policy__subtitle">
                                                                        - Не считается нарушением предоставление информации агентам и третьим лицам, действующим на основании договора, для исполнения обязательств перед Клиентом.
                                                                  </p>
                                                                  <p class="policy__subtitle">
                                                                        - Не считается нарушением обязательств разглашение информации в соответствии с обоснованными и применимыми требованиями закона.
                                                                  </p>
                                                            </div>
                                                            <p style="color: red;">
                                                                  P.S. Мы не несем ответственности за сведения, предоставленные Клиентом на Сайте в общедоступной форме.
                                                            </p>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </section>
            </div>
            <hr class="between__line">
            <footer class="footer" id="footer">
                  <div class="container container__footer--flex">
                        <div class="footer__wrapper">
                              <div class="footer__column">
                                    <div class="footer__leftwrapper">
                                          <a href="index.html" class="footer__logo">
                                                <img src="assets/images/footer/logo.svg" alt="logo" class="logo">
                                          </a>

                                          <div class="footer__btnwrapper">
                                                <button class="footer__btn" type="button" id="reportTo3d">
                                                      Оставить заявку на 3D-Тур
                                                </button>
                                                <button class="footer__btn footer__secondbtn" type="button" id="footerToPortfolio">
                                                      Портфолио
                                                </button>
                                          </div>
                                          <div class="footer__contactwrapper">
                                                <h3 class="footer__contacttitle">
                                                      Контакты
                                                </h3>
                                                <a href="tel:+79621290909" class="footer__contactnum">
                                                      7-962-129-09-09
                                                </a>
                                                <div class="footer__socialblock">
                                                      <a href="https://api.whatsapp.com/send/?phone=79621290909&text=Здравствуйте%2C+у+меня+есть+вопрос" class="footer__socialicon">
                                                            <img src="assets/images/footer/whatsapp.svg" alt="whatsapp" width="32">
                                                      </a>
                                                      <button class="footer__socialicon" data-fancybox="application--footerpopup"  data-src="#footerdialog-content">
                                                            <img src="assets/images/footer/mail.svg" alt="mail" width="32">
                                                      </button>
                                                      <div class="header__popupwrapper" id="footerdialog-content" style="display: none; background-color: transparent; max-width: 500px; width: 100%;">
                                                            <div class="form__wrapper form-anim-background">
                                                                  <div class="form__titleblock" style="max-width: 350px;">
                                                                        <h2 class="form__title" style="color: #fff; line-height: 32px;">
                                                                              Оставить заявку
                                                                        </h2>
                                                                        <p class="form__title--subtitle" style="color: #fff;">
                                                                              Отправьте заявку и с вами свяжутся в ближайшее время
                                                                        </p>
                                                                  </div>
                                                                  <form action="#" method="POST" name="form-type-application" class="form form-type-application">
                                                                        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                                                                        <input type="text" name="name" class="form__input form__nameapplication" placeholder="Ваше имя">
                                                                        <input type="email" name="email" class="form__input form__emailapplication" placeholder="Ваша почта">
                                                                        <input type="tel" name="switch" class="form__input form__telapplication" placeholder="Ваш номер">
                                                                        <textarea rows="10" name="comment" class="form__area form__areaapplication" placeholder="Комментарий к заявке"></textarea>
                                                                        <button class="form__action b-n-animation" type="submit" style="color: #fff;">
                                                                              Отправить
                                                                        </button>
                                                                  </form>
                                                                  <p class="create__policy--text policy__text" style="color: #fff; padding-right: 5px;" data-fancybox="policy-popupfooter" data-src="#policyPopupfooter">
                                                                        *Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с <span>политикой конфиденциальности.</span>
                                                                  </p>
                                                                  <div class="policy__popupwrapper" id="policyPopupfooter" style="display: none;">
                                                                        <div class="policy__popup">
                                                                              <div class="policy__popupwrapper">
                                                                                    <h2 class="policy__title">
                                                                                          Политика конфиденциальности  
                                                                                    </h2>
                                                                                    <div class="policy__subtitlesblock">
                                                                                          <h3 class="policy__themetitle">
                                                                                                Предоставление информации клиентом:
                                                                                          </h3>
                                                                                          <p class="policy__subtitle">
                                                                                                - Заполняя формы, Клиент передает следующую информацию: Имя, email, телефон. 
                                                                                          </p>
                                                                                          <p class="policy__subtitle">
                                                                                                - Информация, предоставленная Клиентом, используется только для выполнения обязательств перед Клиентом.
                                                                                          </p>
                                                                                    </div>
                                                                                    <div class="policy__subtitlesblock">
                                                                                          <h3 class="policy__themetitle">
                                                                                                Разглашение полученной информации:
                                                                                          </h3>
                                                                                          <p class="policy__subtitle">
                                                                                                - Мы обязуемся не разглашать полученную от Клиента информацию.
                                                                                          </p>
                                                                                          <p class="policy__subtitle">
                                                                                                - Не считается нарушением предоставление информации агентам и третьим лицам, действующим на основании договора, для исполнения обязательств перед Клиентом.
                                                                                          </p>
                                                                                          <p class="policy__subtitle">
                                                                                                - Не считается нарушением обязательств разглашение информации в соответствии с обоснованными и применимыми требованиями закона.
                                                                                          </p>
                                                                                    </div>
                                                                                    <p style="color: red;">
                                                                                          P.S. Мы не несем ответственности за сведения, предоставленные Клиентом на Сайте в общедоступной форме.
                                                                                    </p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="footer__partner">
                                                <h3 class="footer__partner--text">
                                                      Партнер Яндекса
                                                </h3>
                                                <img src="assets/images/arrowtopartner.svg" alt="стрелка" width="100" class="arrowtopartner">
                                                <a href="https://yandex.ru/support/maps/concept/panoramas_org.html?ysclid=m2so77qq4w371531478" target="_blank">
                                                      <img src="assets/images/partner.png" alt="Партнер Яндекса" class="footer__partner--img" width="150">
                                                </a>
                                          </div>
                                    </div>
                              </div>
                              
                              <div class="footer__column">
                                    <nav class="footer__nav">
                                          <h3 class="footer__nav--title">
                                                Меню
                                          </h3>
                                          <ul class="footer__menu">
                                                <li class="footer__menu--item">
                                                      <a href="#header">
                                                            Главная
                                                      </a>
                                                </li>
                                                <li class="footer__menu--item">
                                                      <a href="#porfolio--section">
                                                            Портфолио
                                                      </a>
                                                </li>
                                                <li class="footer__menu--item">
                                                      <a href="#demonstration--section">
                                                            Ваши возможности
                                                      </a>
                                                </li>
                                                <li class="footer__menu--item">
                                                      <a href="#create--section">
                                                            Как мы работаем?
                                                      </a>
                                                </li>
                                                <li class="footer__menu--item">
                                                      <a href="#questions--section">
                                                            FAQ
                                                      </a>
                                                </li>
                                          </ul>
                                    </nav>
                              </div>
                        </div>
                        <hr class="footer__line">
                        <div class="footer__warpper--bottom">
                              <div class="footer__policyblock">
                                    <p class="footer--policy" data-fancybox="policy-popup" data-src="#policyPopup">
                                          Политика конфиденциальности
                                    </p>
                                    <p class="footer--year">
                                          2024г
                                    </p>
                              </div>
                        </div>
                  </div>
            </footer>
      </main>
      <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
      <script src="slick/slick.min.js"></script>
      <script src="assets/js/slick.js"></script> 
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="assets/js/aos.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js""></script>
      <script src="assets/js/scroll.js"></script>
      <script src="assets/js/animation.js"></script>
      <script src="assets/js/owl.js"></script>
      <script src="assets/js/fancyapps.js"></script>
      <script src="assets/js/burgermenu.js"></script>
      <script src="assets/js/galery.js"></script>
      <script type="module" src="assets/js/form.js"></script>
      <script src="assets/js/main.js"></script>
      
</body>
</html>
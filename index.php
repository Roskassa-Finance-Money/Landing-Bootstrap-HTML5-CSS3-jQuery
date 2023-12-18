<?php
        require "_header.php";
        ?>
  <section class="section hero hero-layer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1 class="hero-title">Интернет эквайринг</h1>
          <span class="hero-subtitle">Простой способ приёма палтежей</span>
          <p class="hero-text">Комиссия от 2,8% за платежи с банковских карт. Если ваш оборот по онлайн-платежам стабильно выше 5 млн в месяц — договоримся.</p>
          <div class="hero-button">
            <a href="#!" class="btn btn-primary mr-sm-3">Подключить кассу</a> <a href="#!" class="btn btn-white"><i class="fal fa-question mr-2"></i> Задать вопрос</a>
          </div>
        </div>
        <div class="col-lg-6 d-none d-lg-block"><img src="assets/images/hero-panel.png" alt="" class="hero-panel" /></div>
      </div>
      <span class="title-dots d-none d-xl-block"></span>
    </div>
    <span class="section-layer sl-1"></span>
    <span class="section-layer sl-2"></span>
    <span class="section-layer sl-3"></span>
  </section>

  <section class="section about">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Быстро и безопасно</h2>
        <p class="section-text text-lg"><strong>CreditnaKassa</strong> - Самое популярное платёжное решение на просторах СНГ, её используют более 30% сайтов в рунете</p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="about-card d-flex">
            <div class="about-card-icon"><img src="assets/images/icon-cards/about-icon-1.svg" alt="" class="about-image"></div>
            <div class="ml-5">
              <h4 class="about-title">Равным образом</h4>
              <p class="about-text">Значимость этих проблем настолько очевидна</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="about-card d-flex">
            <div class="about-card-icon"><img src="assets/images/icon-cards/about-icon-2.svg" alt="" class="about-image"></div>
            <div class="ml-5">
              <h4 class="about-title">Равным образом</h4>
              <p class="about-text">Значимость этих проблем настолько очевидна</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="about-card d-flex">
            <div class="about-card-icon"><img src="assets/images/icon-cards/about-icon-3.svg" alt="" class="about-image"></div>
            <div class="ml-5">
              <h4 class="about-title">Равным образом</h4>
              <p class="about-text">Значимость этих проблем настолько очевидна</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section cms">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <img src="assets/images/cms-image.png" alt="" class="cms-image" />
          <div class="layer-circle"></div>
        </div>
        <div class="col-lg-5 ml-auto">
          <span class="section-put">CMS</span>
          <h2 class="section-title">Готовый модуль — без разработки</h2>
          <p class="section-text">
            Это просто: разрабатывать ничего не нужно, только поставить модуль и заполнить несколько полей. Модули Кассы есть для большинства популярных CMS, SaaS, CRM и фреймворков. Если для вашей платформы модуля нет, напишите нам.
          </p>
          <a href="#!" class="section-link">Подключить модуль <i class="fad fa-long-arrow-right"></i></a>
        </div>
      </div>
    </div>
    <span class="section-layer sl-1"></span>
    <span class="section-layer sl-2"></span>
    <span class="section-layer sl-3"></span>
  </section>
  <section class="section api">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5  mb-4 mb-lg-0">
          <span class="section-put">API</span>
          <h2 class="section-title">Все возможности <span>по API</span></h2>
          <p class="section-text">У Кассы понятный и логичный REST API, есть SDK для самых популярных языков программирования, библиотеки с готовыми платёжными формами для сайтов и мобильных приложений и подробная документация.</p>
          <a href="#!" class="section-link">Посмотреть документацию <i class="fad fa-long-arrow-right"></i></a>
        </div>
        <div class="col-lg-6 ml-auto">
          <div class="api-code">
            <nav class="nav nav-pills nav-fill">
              <a class="nav-item nav-link rounded-0" id="curl-tab" data-toggle="tab" href="#curl" role="tab" aria-controls="curl" aria-selected="true">cURL</a>
              <a class="nav-item nav-link rounded-0" id="php-tab" data-toggle="tab" href="#php" role="tab" aria-controls="php" aria-selected="true">PHP</a>
              <a class="nav-item nav-link rounded-0 active" id="phyton-tab" data-toggle="tab" href="#phyton" role="tab" aria-controls="phyton" aria-selected="true">Phyton</a>
            </nav>
            <div class="tab-content" id="myTabContent">

              <pre class="prettyprint linenums lang-curl tab-pane fade" id="curl" role="tabpanel" aria-labelledby="curl-tab">curl https://payment.yandex.net/api/v3/payments 
          -X POST 
          -u &lt;Идентификатор магазина&gt;:&lt;Секретный ключ&gt; 
          -H 'Idempotence-Key: &lt;Ключ идемпотентности&gt;' 
          -H 'Content-Type: application/json' 
          -d '{ "amount": { 
          "value": "9900.00", "currency": "RUB" 
          }, 
          "confirmation": { 
          "type": "redirect", "return_url": "https://example.com/url" 
          }, 
          "description": "Слон большой, розовый" }'</pre>

              <pre class="prettyprint linenums lang-php tab-pane fade" id="php" role="tabpanel" aria-labelledby="php-tab">&lt;?php	use YandexCheckoutClient;
	$client = new Client();
	$client-&gt;setAuth('&lt;Идентификатор магазина&gt;', '&lt;Секретный ключ&gt;');
	$payment = $client-&gt;createPayment(
		array(
			'amount' =&gt; array(
				'value' =&gt; 9900.0,
				'currency' =&gt; 'RUB',
			),
			'confirmation' =&gt; array(
				'type' =&gt; 'redirect',
				'return_url' =&gt; 'https://example.com/url',
			),
			'description' =&gt; 'Слон большой, розовый',
		),
		uniqid('', true)
	);
?&gt;
</pre>
              <pre class="prettyprint linenums lang-phyton tab-pane fade show active" id="phyton" role="tabpanel" aria-labelledby="phyton-tab">from yandex_checkout import Configuration, Payment
Configuration.account_id = &lt;Идентификатор магазина&gt;
Configuration.secret_key = &lt;Секретный ключ&gt;
payment = Payment.create({
	"amount": {
		"value": "9900.00",
		"currency": "RUB"
	},
	"confirmation": {
		"type": "redirect",
		"return_url": "https://example.com/url"
	},
	"description": "Слон большой, розовый"
})</pre>
            </div>
          </div>
        </div>
      </div>
    </div>
     <span class="section-layer sl-1"></span>
    <span class="section-layer sl-2"></span>
    <span class="section-layer sl-3"></span>
  </section>

  <section class="section business">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Выберите свой бизнес</h2>
        <p class="section-text text-lg">Покажем какие возможности у нас есть</p>
      </div>
      <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item"><a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-store" role="tab" aria-controls="pills-store" aria-selected="true">Интернет-магазин</a></li>
        <li class="nav-item"><a class="nav-link" id="pills-business-tab" data-toggle="pill" href="#pills-business" role="tab" aria-controls="pills-business" aria-selected="false">Бизнес в соцсетях</a></li>
        <li class="nav-item"><a class="nav-link" id="pills-services-tab" data-toggle="pill" href="#pills-services" role="tab" aria-controls="pills-services" aria-selected="false">Услуги и сервисы</a></li>
        <li class="nav-item"><a class="nav-link" id="pills-webinar-tab" data-toggle="pill" href="#pills-webinar" role="tab" aria-controls="pills-webinar" aria-selected="false">Вебинары и тренинги</a></li>
        <li class="nav-item"><a class="nav-link" id="pills-startup-tab" data-toggle="pill" href="#pills-startup" role="tab" aria-controls="pills-startup" aria-selected="false">Стартапы</a></li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-store" role="tabpanel" aria-labelledby="pills-store-tab">
          <div class="row align-items-center">
            <div class="col-lg-6"><img src="/assets/images/store.svg" alt="" class="business-image" /></div>
            <div class="col-lg-6">
              <h2 class="section-title title-md mb-3">Возможности интернет-магазина</h2>
              <p class="section-text">Проснувшись однажды утром после беспокойного сна, регор Замза обнаружил, что он у себя в постели превратился в страшное, значимость этих проблем очевидна, что начало.</p>
              <ul class="section-list">
                <li>Выставление счетов для работы без сайта</li>
                <li>Приём платежей для клиентов из разных стран</li>
                <li>Форма оплаты на английском</li>
                <li>Интеграция с вебинарами и площадками</li>
              </ul>
            </div>
          </div>
        </div>
         <div class="tab-pane fade" id="pills-business" role="tabpanel" aria-labelledby="pills-business-tab">
          <div class="row">
            <div class="col-lg-6"><img src="assets/images/shop-image.svg" alt="" class="business-image" /></div>
            <div class="col-lg-6 ml-auto">
              <h2 class="section-title title-md">Бизнес в соцсетях</h2>
              <p class="section-text">Проснувшись однажды утром после беспокойного сна, регор Замза обнаружил, что он у себя в постели превратился в страшное, значимость этих проблем очевидна, что начало.</p>
              <ul class="section-list">
                <li>Выставление счетов для работы без сайта</li>
                <li>Приём платежей для клиентов из разных стран</li>
                <li>Форма оплаты на английском</li>
                <li>Интеграция с вебинарами и площадками</li>
              </ul>
            </div>
          </div>
        </div>
         <div class="tab-pane fade" id="pills-services" role="tabpanel" aria-labelledby="pills-services-tab">
          <div class="row">
            <div class="col-lg-5"><img src="assets/images/shop-image.svg" alt="" class="business-image" /></div>
            <div class="col-lg-6 ml-auto">
              <h2 class="section-title title-md">Услуги и сервисы</h2>
              <p class="section-text">Проснувшись однажды утром после беспокойного сна, регор Замза обнаружил, что он у себя в постели превратился в страшное, значимость этих проблем очевидна, что начало.</p>
              <ul class="section-list">
                <li>Выставление счетов для работы без сайта</li>
                <li>Приём платежей для клиентов из разных стран</li>
                <li>Форма оплаты на английском</li>
                <li>Интеграция с вебинарами и площадками</li>
              </ul>
            </div>
          </div>
        </div>
         <div class="tab-pane fade" id="pills-webinar" role="tabpanel" aria-labelledby="pills-webinar-tab">
          <div class="row">
            <div class="col-lg-5"><img src="assets/images/shop-image.svg" alt="" class="business-image" /></div>
            <div class="col-lg-6 ml-auto">
              <h2 class="section-title title-md">Вебинары и тренинги</h2>
              <p class="section-text">Проснувшись однажды утром после беспокойного сна, регор Замза обнаружил, что он у себя в постели превратился в страшное, значимость этих проблем очевидна, что начало.</p>
              <ul class="section-list">
                <li>Выставление счетов для работы без сайта</li>
                <li>Приём платежей для клиентов из разных стран</li>
                <li>Форма оплаты на английском</li>
                <li>Интеграция с вебинарами и площадками</li>
              </ul>
            </div>
          </div>
        </div>
         <div class="tab-pane fade" id="pills-startup" role="tabpanel" aria-labelledby="pills-startup-tab">
          <div class="row">
            <div class="col-lg-5"><img src="assets/images/shop-image.svg" alt="" class="business-image" /></div>
            <div class="col-lg-6 ml-auto">
              <h2 class="section-title title-md">Стартапы</h2>
              <p class="section-text">Проснувшись однажды утром после беспокойного сна, регор Замза обнаружил, что он у себя в постели превратился в страшное, значимость этих проблем очевидна, что начало.</p>
              <ul class="section-list">
                <li>Выставление счетов для работы без сайта</li>
                <li>Приём платежей для клиентов из разных стран</li>
                <li>Форма оплаты на английском</li>
                <li>Интеграция с вебинарами и площадками</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <span class="section-layer sl-5"></span> <span class="section-layer sl-6"></span>
  </section>
  <section class="section payments">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <span class="section-put">Kassa</span>
          <h2 class="section-title">Принимайте деньги, <span>как вам удобно</span></h2>
          <p class="section-text">
            От карт Visa/Mastercard до ePayments и WebMoney — получайте оплату любым удобным для вас способом. Если вы не нашли подходящий вариант, напишите нам, и мы рассмотрим добавление новых каналов для получения денег.​
          </p>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <div class="col-6 col-md-4 col-lg-6 p-0">
              <div class="pay-card ml-lg-auto"><img src="assets/images/icon-pay/Visa-lightblack.svg" alt="" class="pay-image" /></div>
            </div>
            <div class="col-6 col-md-4 col-lg-6 p-0">
              <div class="pay-card mx-lg-auto"><img src="assets/images/icon-pay/WebMoney-darkblack.svg" alt="" class="pay-image" /></div>
            </div>
            <div class="col-6 col-md-4 col-lg-6 p-0">
              <div class="pay-card mx-lg-auto"><img src="assets/images/icon-pay/ApplePay-lightblack.svg" alt="" class="pay-image" /></div>
            </div>
            <div class="col-6 col-md-4 col-lg-6 p-0">
              <div class="pay-card"><img src="assets/images/icon-pay/Paypal-lightblack.svg" alt="" class="pay-image" /></div>
            </div>
            <div class="col-6 col-md-4 col-lg-6 p-0">
              <div class="pay-card ml-lg-auto"><img src="assets/images/icon-pay/yandex-lightblack.svg" alt="" class="pay-image" /></div>
            </div>
            <div class="col-6 col-md-4 col-lg-6 p-0">
              <div class="pay-card mx-lg-auto"><img src="assets/images/icon-pay/qiwi-lightblack.svg" alt="" class="pay-image" /></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <span class="section-layer sl-1"></span>
    <span class="section-layer sl-2"></span>
    <span class="section-layer sl-3"></span>
     <span class="title-dots d-none d-xl-block"></span>
  </section>
  <section class="section blog">
    <div class="container articles">
      <div class="section-header">
        <h2 class="section-title">Свежее из блога</h2>
        <p class="section-text text-lg opacity-5"><a href="/blog.php" class="section-link">Перейти в раздел  <i class="fad fa-long-arrow-right"></i></a></p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <article class="post-item" itemscope="" itemtype="http://schema.org/BlogPosting">
            <a href="/blog-article.php" itemprop="url">
              <div itemprop="image" itemscope="" itemtype="http://schema.org/ImageObject">
                <meta itemprop="height" content="330" />
                <meta itemprop="width" content="330" />
                <meta itemprop="url" content="/assets/images/images-blog/blog-1.jpg" /> <img class="post-image" src="/assets/images/images-blog/blog-1.jpg" alt="SMM инструменты и SEO услуги" />
              </div>
              <div class="post-body">
                <h3 class="post-headline" itemprop="headline">Беспроводные наушники Xiaomi Air 2 можно купить всего за 2 724 рубля</h3>
                <meta itemscope="" itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="/blog-article.php" />
                <p class="post-description" itemprop="description">Повседневная практика показывает, что рамки и место обучения кадров требуют от нас анализа существенных финансовых и административных условий.</p>
              </div>
            </a>
            <div class="post-layer">
              <div class="post-category">
                <a href="#!"><i class="fas fa-angle-right mr-2"></i><span itemprop="about">Советы</span></a>
              </div>
              <div class="post-rating">
                <span class="mr-3">Рейтинг статьи:</span>
                <div id="post-ratings-1" class="article-stars">
                  <a href="#!" title="Одна звезда" class="rating-link rating-on"><i class="fas fa-star" id="rating_1_1"></i></a>
                  <a href="#!" title="Две звезды" class="rating-link rating-on"><i class="fas fa-star" id="rating_1_2"></i></a>
                  <a href="#!" title="Три звезды" class="rating-link rating-on"><i class="fas fa-star" id="rating_1_3"></i></a>
                  <a href="#!" title="Четыре звезды" class="rating-link rating-on"><i class="fas fa-star" id="rating_1_4"></i></a>
                  <a href="#!" title="Пять звезд" class="rating-link rating-off"><i class="fas fa-star" id="rating_1_5"></i></a>
                </div>
              </div>
            </div>
            <meta itemprop="author" content="Lana Day" />
            <meta itemprop="datePublished" content="06/06/2020" />
            <div hidden="" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
              <meta itemprop="name" content="SMM инструменты и SEO услуги" />
              <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                <img itemprop="url" src="/images/favicon.ico" />
                <meta itemprop="width" content="50" />
                <meta itemprop="height" content="50" />
              </div>
            </div>
          </article>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <article class="post-item" itemscope="" itemtype="http://schema.org/BlogPosting">
            <a href="/blog-article.php" itemprop="url">
              <div itemprop="image" itemscope="" itemtype="http://schema.org/ImageObject">
                <meta itemprop="height" content="330" />
                <meta itemprop="width" content="330" />
                <meta itemprop="url" content="/assets/images/images-blog/blog-2.jpg" /> <img class="post-image" src="/assets/images/images-blog/blog-2.jpg" alt="SMM инструменты и SEO услуги" />
              </div>
              <div class="post-body">
                <h3 class="post-headline" itemprop="headline">Беспроводные наушники Xiaomi Air 2 можно купить всего за 2 724 рубля</h3>
                <meta itemscope="" itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="/blog-article.php" />
                <p class="post-description" itemprop="description">Повседневная практика показывает, что рамки и место обучения кадров требуют от нас анализа существенных финансовых и административных условий.</p>
              </div>
            </a>
            <div class="post-layer">
              <div class="post-category">
                <a href="#!"><i class="fas fa-angle-right mr-2"></i><span itemprop="about">Советы</span></a>
              </div>
              <div class="post-rating">
                <span class="mr-3">Рейтинг статьи:</span>
                <div id="post-ratings-1" class="article-stars">
                  <a href="#!" title="Одна звезда" class="rating-link rating-on"><i class="fas fa-star" id="rating_1_1"></i></a>
                  <a href="#!" title="Две звезды" class="rating-link rating-on"><i class="fas fa-star" id="rating_1_2"></i></a>
                  <a href="#!" title="Три звезды" class="rating-link rating-on"><i class="fas fa-star" id="rating_1_3"></i></a>
                  <a href="#!" title="Четыре звезды" class="rating-link rating-on"><i class="fas fa-star" id="rating_1_4"></i></a>
                  <a href="#!" title="Пять звезд" class="rating-link rating-off"><i class="fas fa-star" id="rating_1_5"></i></a>
                </div>
              </div>
            </div>
            <meta itemprop="author" content="Lana Day" />
            <meta itemprop="datePublished" content="06/06/2020" />
            <div hidden="" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
              <meta itemprop="name" content="SMM инструменты и SEO услуги" />
              <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                <img itemprop="url" src="/images/favicon.ico" />
                <meta itemprop="width" content="50" />
                <meta itemprop="height" content="50" />
              </div>
            </div>
          </article>
        </div>
        <div class="col-md-6 col-lg-4">
          <article class="post-item" itemscope="" itemtype="http://schema.org/BlogPosting">
            <a href="/blog-article.php" itemprop="url">
              <div itemprop="image" itemscope="" itemtype="http://schema.org/ImageObject">
                <meta itemprop="height" content="330" />
                <meta itemprop="width" content="330" />
                <meta itemprop="url" content="/assets/images/images-blog/blog-3.jpg" /> <img class="post-image" src="/assets/images/images-blog/blog-3.jpg" alt="SMM инструменты и SEO услуги" />
              </div>
              <div class="post-body">
                <h3 class="post-headline" itemprop="headline">Беспроводные наушники Xiaomi Air 2 можно купить всего за 2 724 рубля</h3>
                <meta itemscope="" itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="/blog-article.php" />
                <p class="post-description" itemprop="description">Повседневная практика показывает, что рамки и место обучения кадров требуют от нас анализа существенных финансовых и административных условий.</p>
                </div>
            </a>
            <div class="post-layer">
              <div class="post-category">
                <a href="#!"><i class="fas fa-angle-right mr-2"></i><span itemprop="about">Советы</span></a>
              </div>
              <div class="post-rating">
                <span class="mr-3">Рейтинг статьи:</span>
                <div id="post-ratings-1" class="article-stars">
                  <a href="#!" title="Одна звезда" class="rating-link rating-on"><i class="fas fa-star" id="rating_1_1"></i></a>
                  <a href="#!" title="Две звезды" class="rating-link rating-on"><i class="fas fa-star" id="rating_1_2"></i></a>
                  <a href="#!" title="Три звезды" class="rating-link rating-on"><i class="fas fa-star" id="rating_1_3"></i></a>
                  <a href="#!" title="Четыре звезды" class="rating-link rating-on"><i class="fas fa-star" id="rating_1_4"></i></a>
                  <a href="#!" title="Пять звезд" class="rating-link rating-off"><i class="fas fa-star" id="rating_1_5"></i></a>
                </div>
              </div>
            </div>
            <meta itemprop="author" content="Lana Day" />
            <meta itemprop="datePublished" content="06/06/2020" />
            <div hidden="" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
              <meta itemprop="name" content="SMM инструменты и SEO услуги" />
              <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                <img itemprop="url" src="/images/favicon.ico" />
                <meta itemprop="width" content="50" />
                <meta itemprop="height" content="50" />
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
    <span class="section-layer sl-1"></span>
    <span class="section-layer sl-2"></span>
    <span class="section-layer sl-3"></span>
  </section>
  <section class="section action">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Готовы подключиться?</h2>
        <p class="section-text text-lg">Задайте вопрос нашим менеджерам или сразу подключайтесь к CreditnaKassa</p>
      </div>
      <div class="section-buttons text-center">
        <a href="#!" class="btn btn-primary  mr-sm-3">Подключить кассу</a> <a href="#!" class="btn btn-white"><i class="far fa-question mr-2"></i> Задать вопрос</a>
      </div>
    </div>
  </section>
  <?php
        require "_footer.php";
        ?>
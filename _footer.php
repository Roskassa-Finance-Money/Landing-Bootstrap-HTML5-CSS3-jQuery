<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <img src="assets/images/logo.svg" alt="" class="footer-logo">
        <p class="mt-3">
          Сервис для приёма платежей в интернете и офлайне, с быстрым подключением и современным API.
        </p>
        <div class="social-links">
          <a href="#!" class="social-link-item" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#!" class="social-link-item" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a>
          <a href="#!" class="social-link-item" target="_blank" title="VK"><i class="fab fa-vk"></i></a>
          <a href="#!" class="social-link-item" target="_blank" title="Facebook"><i class="fab fa-facebook-square"></i></a>
          <a href="#!" class="social-link-item" target="_blank" title="Telegram"><i class="fab fa-telegram-plane"></i></a>
        </div>
      </div>
      <div class="col-md-6 col-lg-2 ml-lg-auto">
        <h5>Компания</h5>
        <ul>
          <li><a class="footer-link" href="#">О нашей компании</a></li>
          <li><a class="footer-link" href="#">Работа у нас</a></li>
          <li><a class="footer-link" href="#">Контакты</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-2 ml-lg-auto">
        <h5>Полезные ссылки</h5>
        <ul>
          <li><a class="footer-link" href="#">Подключение CMS</a></li>
          <li><a class="footer-link" href="#">Документация API</a></li>
          <li><a class="footer-link" href="#">Тарифные планы</a></li>
          <li><a class="footer-link" href="#">Блог компании</a></li>
          <li><a class="footer-link" href="#">Техподдержка</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-2 ml-lg-auto">
        <h5>Пользователю</h5>
        <ul>
          <li><a class="footer-link" href="#">Пользовательское соглашение</a></li>
          <li><a class="footer-link" href="#">Вопросы и ответы (FAQ)</a></li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="footer-cop">
    <div class="container">
      <p class="mb-0 text-center">
        © 2020 CreditnaKassa. Все права защищены.
      </p>
    </div>
  </div>

</footer>

<!-- JS  -->
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script async type="text/javascript" src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>
  <script src="/assets/vendors/lang-code/prettify.js"></script>
<script type="text/javascript">
!function ($) {
	$(function(){
		window.prettyPrint && prettyPrint()   
	})
}(window.jQuery)
</script>
<script>
  
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
  
  var header = $('.navbar'),
  scrollPrev = 0;
  
      var sticky = $('.sticky'),    
		scrollPrev = 0;

$(window).scroll(function() {
	var scrolled = $(window).scrollTop();
 
	if ( scrolled > 100 && scrolled > scrollPrev ) {
		header.addClass('out');
    sticky.addClass('out');
	} else {
		header.removeClass('out');
    sticky.removeClass('out');
	}
	scrollPrev = scrolled;
});


</script>
</body>

</html>
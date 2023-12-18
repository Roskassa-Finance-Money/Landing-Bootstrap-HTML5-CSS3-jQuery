<?php
require "_header.php";
?>
<section class="header">
  <div class="container">
    <h1 class="section-title mb-3 text-center">Документация</h1>
    <!-- Breadcrumb -->
    <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb justify-content-center">
      <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <meta itemprop="position" content="1"/>
        <a  itemprop="item" href="/index.php">
          <span itemprop="name">Главная</span>
        </a>
      </li>
      <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <meta itemprop="position" content="3"/>
        <span itemprop="name">Документация и руководство пользователя</span>
      </li>
    </ol>
    <form action="" class="w-50 mx-auto mt-5">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Поиск по документации" aria-label="Поиск по документации" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button type="submit" form="" value="Submit" class="btn btn-flat btn-primary">Поиск</button>
        </div>
      </div>
    </form>
  </div>
</section>
<div class="wrapper mt-5">
  <div class="container help-content">
    <div class="row">
      <div class="col-xl-3">
        <div class="sidebar-block sticky">
          <h4 class="sidebar-title mb-0"><i class="fas fa-bars mr-3"></i>Категории</h4>
          <div class="p-4 accordion" id="accordionHelp">
            <a class="help-collapse-link" data-toggle="collapse" href="#collapse-help-1" role="button" aria-expanded="true" aria-controls="collapse-help-1">
              Начало работы <i class="fas fa-angle-right ml-auto"></i>
            </a>
            <div class="help-collapse collapse show" id="collapse-help-1" data-parent="#accordionHelp">
              <div class="nav flex-column nav-pills help-links" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-help1-tab" data-toggle="pill" href="#v-pills-help1" role="tab" aria-controls="v-pills-help1" aria-selected="true">Регистрация аккаунта</a>
                <a class="nav-link" id="v-pills-help2-tab" data-toggle="pill" href="#v-pills-help2" role="tab" aria-controls="v-pills-help2" aria-selected="false">Добавление проекта</a>
                <a class="nav-link" id="v-pills-help3-tab" data-toggle="pill" href="#v-pills-help3" role="tab" aria-controls="v-pills-help3" aria-selected="false">Модерация проекта</a>
                <a class="nav-link" id="v-pills-help4-tab" data-toggle="pill" href="#v-pills-help4" role="tab" aria-controls="v-pills-help4" aria-selected="false">Перенос проекта</a>
                <a class="nav-link" id="v-pills-help5-tab" data-toggle="pill" href="#v-pills-help5" role="tab" aria-controls="v-pills-help5" aria-selected="false">Видео-инструкции</a>
                <a class="nav-link" id="v-pills-help6-tab" data-toggle="pill" href="#v-pills-help6" role="tab" aria-controls="v-pills-help6" aria-selected="false">Добавление проекта - сообщества VK</a>
              </div>
            </div>
            <a class="help-collapse-link" data-toggle="collapse" href="#collapse-help-2" role="button" aria-expanded="false" aria-controls="collapse-help-2">
              Платежи API <i class="fas fa-angle-right ml-auto"></i>
            </a>
            <div class="help-collapse collapse bg-light" id="collapse-help-2" data-parent="#accordionHelp">
              <div class="nav flex-column nav-pills help-links" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link" id="v-pills-help7-tab" data-toggle="pill" href="#v-pills-help7" role="tab" aria-controls="v-pills-help7" aria-selected="true">Создание платежа (простой способ)</a>
                <a class="nav-link" id="v-pills-help8-tab" data-toggle="pill" href="#v-pills-help8" role="tab" aria-controls="v-pills-help8" aria-selected="false">Создание платежа</a>
                <a class="nav-link" id="v-pills-help9-tab" data-toggle="pill" href="#v-pills-help9" role="tab" aria-controls="v-pills-help9" aria-selected="false">Создание ссылок на оплату в личном кабинете</a>
                <a class="nav-link" id="v-pills-help10-tab" data-toggle="pill" href="#v-pills-help10" role="tab" aria-controls="v-pills-help10" aria-selected="false">Обработчик платежа</a>
                <a class="nav-link" id="v-pills-help11-tab" data-toggle="pill" href="#v-pills-help11" role="tab" aria-controls="v-pills-help11" aria-selected="false">Информация о платеже</a>
                <a class="nav-link" id="v-pills-help12-tab" data-toggle="pill" href="#v-pills-help12" role="tab" aria-controls="v-pills-help12" aria-selected="false">Возврат платежа</a>
                <a class="nav-link" id="v-pills-help13-tab" data-toggle="pill" href="#v-pills-help13" role="tab" aria-controls="v-pills-help13" aria-selected="false">Платежи с преавторизацией</a>
              </div>
            </div>
            <a class="help-collapse-link" data-toggle="collapse" href="#collapse-help-3" role="button" aria-expanded="false" aria-controls="collapse-help-3">
              Выплаты API <i class="fas fa-angle-right ml-auto"></i>
            </a>
            <div class="help-collapse collapse" id="collapse-help-3" data-parent="#accordionHelp">
              <div class="nav flex-column nav-pills help-links" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               ...
              </div>
            </div>

            <a class="help-collapse-link" data-toggle="collapse" href="#collapse-help-4" role="button" aria-expanded="false" aria-controls="collapse-help-4">
              Кабинет API <i class="fas fa-angle-right ml-auto"></i>
            </a>
            <div class="help-collapse collapse" id="collapse-help-4" data-parent="#accordionHelp">
              <div class="nav flex-column nav-pills help-links" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               ...
              </div>
            </div>
            <a class="help-collapse-link" data-toggle="collapse" href="#collapse-help-5" role="button" aria-expanded="false" aria-controls="collapse-help-5">
              Подписки API <i class="fas fa-angle-right ml-auto"></i>
            </a>
            <div class="help-collapse collapse" id="collapse-help-5" data-parent="#accordionHelp">
              <div class="nav flex-column nav-pills help-links" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               ...
              </div>
            </div>
            <a class="help-collapse-link" data-toggle="collapse" href="#collapse-help-6" role="button" aria-expanded="false" aria-controls="collapse-help-6">
              Справочник <i class="fas fa-angle-right ml-auto"></i>
            </a>
            <div class="help-collapse collapse" id="collapse-help-6" data-parent="#accordionHelp">
              <div class="nav flex-column nav-pills help-links" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               ...
              </div>
            </div>
            <a class="help-collapse-link" data-toggle="collapse" href="#collapse-help-7" role="button" aria-expanded="false" aria-controls="collapse-help-7">
              Готовые модули <i class="fas fa-angle-right ml-auto"></i>
            </a>
            <div class="help-collapse collapse" id="collapse-help-7" data-parent="#accordionHelp">
              <div class="nav flex-column nav-pills help-links" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               ...
              </div>
            </div>
            <a class="help-collapse-link" data-toggle="collapse" href="#collapse-help-8" role="button" aria-expanded="false" aria-controls="collapse-help-8">
              Реферальная программа <i class="fas fa-angle-right ml-auto"></i>
            </a>
            <div class="help-collapse collapse" id="collapse-help-8" data-parent="#accordionHelp">
              <div class="nav flex-column nav-pills help-links" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               ...
              </div>
            </div>
            <a class="help-collapse-link" data-toggle="collapse" href="#collapse-help-9" role="button" aria-expanded="false" aria-controls="collapse-help-9">
              Другие возможности <i class="fas fa-angle-right ml-auto"></i>
            </a>
            <div class="help-collapse collapse" id="collapse-help-9" data-parent="#accordionHelp">
              <div class="nav flex-column nav-pills help-links" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               ...
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-8 mx-auto">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-help1" role="tabpanel" aria-labelledby="v-pills-help1-tab">
            <?php
            require "_help-tab-1.php";
            ?>
          </div>
          <div class="tab-pane fade" id="v-pills-help2" role="tabpanel" aria-labelledby="v-pills-help2-tab">
            <?php
            require "_help-tab-2.php";
            ?>
          </div>
          <div class="tab-pane fade" id="v-pills-help3" role="tabpanel" aria-labelledby="v-pills-help3-tab">
            <?php
            require "_help-tab-3.php";
            ?>
          </div>
          <div class="tab-pane fade" id="v-pills-help4" role="tabpanel" aria-labelledby="v-pills-help4-tab">
             <?php
            require "_help-tab-4.php";
            ?>
          </div>
          <div class="tab-pane fade" id="v-pills-help5" role="tabpanel" aria-labelledby="v-pills-help5-tab">
             <?php
            require "_help-tab-5.php";
            ?>
          </div>
          <div class="tab-pane fade" id="v-pills-help6" role="tabpanel" aria-labelledby="v-pills-help6-tab">
            <?php
            require "_help-tab-6.php";
            ?>
          </div>
          <div class="tab-pane fade" id="v-pills-help7" role="tabpanel" aria-labelledby="v-pills-help7-tab">
            7
          </div>
          <div class="tab-pane fade" id="v-pills-help8" role="tabpanel" aria-labelledby="v-pills-help8-tab">
           0
          </div>
          <div class="tab-pane fade" id="v-pills-help9" role="tabpanel" aria-labelledby="v-pills-help9-tab">
            9
          </div>
          <div class="tab-pane fade" id="v-pills-help10" role="tabpanel" aria-labelledby="v-pills-help10-tab">
            10
          </div>
          <div class="tab-pane fade" id="v-pills-help11" role="tabpanel" aria-labelledby="v-pills-help11-tab">
            11
          </div>
          <div class="tab-pane fade" id="v-pills-help12" role="tabpanel" aria-labelledby="v-pills-help12-tab">
           12
          </div>
          <div class="tab-pane fade" id="v-pills-help13" role="tabpanel" aria-labelledby="v-pills-help13-tab">
           13
          </div>
          
        </div>
      </div>
      
    </div>
  </div>
</div>
<?php
require "_footer.php";
?>
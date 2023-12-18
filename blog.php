<?php
require "_header.php";
?>
<div class="wrapper">
    <section class="header">
        <div class="container">
            <h1 class="section-title mb-3 text-center">
                Блог проекта
            </h1>
            <!-- Breadcrumb -->
            <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb justify-content-center">
                <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <meta itemprop="position" content="1" />
                    <a itemprop="item" href="/index.php">
                        <span itemprop="name">Главная</span>
                    </a>
                </li>
                <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <meta itemprop="position" content="2" />
                    <a itemprop="item" href="/blog.php">
                        <span itemprop="name">Блог</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <meta itemprop="position" content="3" />
                    <span itemprop="name">Новости</span>
                </li>
            </ol>
        </div>
    </section>
    <div class="container articles">
        <div class="d-flex flex-wrap align-items-center mb-5">
            <ul class="nav articles-nav flex-wrap">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-fire"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Советы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Новости</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Экономия</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Еда</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Мотивация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Спорт и фитнес</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Книги</a>
                </li>
            </ul>
            <select class="custom-select ml-lg-auto mx-auto mx-lg-0 mt-4 mt-lg-0">
                <option value="1" selected>Новые</option>
                <option value="2">Популярные</option>
                <option value="3">Комментируемые</option>
            </select>
        </div>
        <div class="row align-self-stretch">
            <?php
            require "_blog-catalog.php";
            ?>
        </div>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination flex-wrap justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
<?php
require "_footer.php";
?>

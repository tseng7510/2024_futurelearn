<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/news.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages newsDetail">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>


      <div class="inBanner">
        <div class="outer">
          <div class="container">
            <div class="titleBox wow fadeInUp" data-wow-delay="0s">
              <div class="title">News Information<span>最新消息</span></div>
            </div>
            <div class="breadcrumbBox">
              <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <a href="index.php" itemprop="item">
                    <span itemprop="name">Home</span>
                  </a>
                  <meta itemprop="position" content="1">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <span itemprop="name">最新消息</span>
                  <meta itemprop="position" content="2">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <span itemprop="name">最新消息</span>
                  <meta itemprop="position" content="3">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="mainBox">

        <section>
          <div class="outer">
            <div class="container">

              <div class="contentBox">
                <h1 class="pageTitle">日本熊本縣菊池市市長一行來訪</h1>
                <div class="editorOuter wow fadeInUp" data-wow-delay="0.2s">
                  <div class="content">
                    <div class="info">
                      <time>Nov 12.2024</time>
                      <div class="tag">最新消息</div>
                    </div>
                    <div class="editor">
                      <img src="images/in/n.jpg" alt="">
                      <p>2024年11月12日（二*/),來自日本熊本縣菊池市市長及市議員一行共15人，參訪本機構各項軟硬體設施，並對教育交流交換意見，期待明年可以和當地學校互訪，以加深彼此情誼。</p>
                    </div>
                    <div class="pageBtnBox wow fadeInUp" data-wow-delay="0.2s">
                      <a href="news.php" class="back">BACK TO LIST</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>

      </div>

    </main>

    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>

</body>

</html>
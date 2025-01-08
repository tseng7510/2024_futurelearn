<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages newsList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="outer">
          <div class="container">
            <div class="titleBox wow fadeInUp" data-wow-delay="0s">
              <h1 class="title">News Information<span>最新消息</span></h1>
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

          <div class="contentTopNav">
            <div class="outer">
              <div class="container">
                <nav class="wow fadeInUp" data-wow-delay="0s">
                  <ul>
                    <li class="active"><a href="news.php">最新消息</a></li>
                    <li><a href="news.php">媒體報導</a></li>
                    <li><a href="news.php">近期活動</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

          <div class="outer">
            <div class="container">
              <div class="contentBox">
                <div class="listBox">

                  <? for ($i = 0; $i < 6; $i++) { ?>
                    <div class="item wow fadeInRight" data-wow-delay="0.2s">
                      <a href="news_detail.php">
                        <div class="info">
                          <time>Nov 12.2024</time>
                          <div class="tag">最新消息</div>
                        </div>
                        <div class="pic"><img src="images/index/n1.jpg" alt=""></div>
                        <h2 class="title">日本熊本縣菊池市市長一行來訪</h2>
                        <div class="description">來自日本熊本縣菊池市市長及市議員一行共15人，參訪本機構各項軟硬體設施，並對...</div>
                        <div class="more">READ MORE</div>
                      </a>
                    </div>
                  <? } ?>

                </div>

                <div class="pageBox wow fadeInUp" data-wow-delay="0.2s">
                  <ul class="pagination">
                    <li class="controls"><a class="prev" href="#" title="Previous"></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="controls"><a class="next" href="#" title="Next"></a></li>
                  </ul>
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
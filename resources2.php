<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/resources.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages resourcesList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="outer">
          <div class="container">
            <div class="titleBox wow fadeInUp" data-wow-delay="0s">
              <h1 class="title">Resources<span>教育資源</span></h1>
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
                  <span itemprop="name">教育資源</span>
                  <meta itemprop="position" content="2">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <span itemprop="name">活動紀錄</span>
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
            <div class="container hasSide">

              <aside class="sideBox wow fadeInLeft" data-wow-delay="0s">
                <button type="button"><span>Menu</span></button>
                <div class="content">
                  <ul>
                    <li><a href="#">國際教育交流</a></li>
                    <li><a href="#">修學旅行</a></li>
                    <li><a href="#">接待家庭</a></li>
                    <li><a href="#">遊學團</a></li>
                    <li class="active"><a href="#">活動紀錄</a></li>
                  </ul>
                </div>
              </aside>

              <div class="contentBox">
                <h2 class="pageTitle wow fadeInUp" data-wow-delay="0.2s">活動紀錄</h2>
                <div class="listBox">

                  <? for ($i = 0; $i < 6; $i++) { ?>
                    <div class="item wow fadeInRight" data-wow-delay="0.2s">
                      <a href="resources2_detail.php">
                        <div class="pic"><img src="images/in/r.jpg" alt=""></div>
                        <div class="info">
                          <h3 class="title">日本修學旅行</h3>
                        </div>
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
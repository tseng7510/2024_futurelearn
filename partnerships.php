<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/about.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages partnerships">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="outer">
          <div class="container">
            <div class="titleBox wow fadeInUp" data-wow-delay="0s">
              <div class="title">Partnerships<span>合作夥伴</span></div>
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
                  <span itemprop="name">關於我們</span>
                  <meta itemprop="position" content="2">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <span itemprop="name">合作夥伴</span>
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
                <div class="listBox">

                  <? for ($i = 0; $i < 6; $i++) { ?>
                    <div class="item wow fadeInRight" data-wow-delay="0.2s">
                      <a href="#">
                        <div class="pic"><img src="images/in/p.jpg" alt=""></div>
                        <div class="en">British Council IELTS</div>
                        <h3 class="title">台灣IELTS雅思官方考試中心</h3>
                      </a>
                    </div>
                  <? } ?>

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
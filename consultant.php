<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/about.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages advisors">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="outer">
          <div class="container">
            <div class="titleBox wow fadeInUp" data-wow-delay="0s">
              <div class="title">Consultant<span>顧問群</span></div>
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
                  <span itemprop="name">顧問群</span>
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

                  <? for ($i = 1; $i < 5; $i++) { ?>
                    <div class="item">
                      <div class="picBox">
                        <div class="pic"><img src="images/in/adv.jpg" alt=""></div>
                        <div class="info">
                          <div class="title">榮譽顧問</div>
                          <div class="name">星野達彥</div>
                        </div>
                      </div>
                      <div class="list">
                        <div class="box">
                          <div class="label">現職</div>
                          <ul>
                            <li>一般社団法人海外留学協議会（JAOS）理事・事務局長</li>
                            <li>日本認定留学カウンセラー協会（JACSAC）代表幹事</li>
                            <li>国際高等専門学校　客員教授</li>
                          </ul>
                        </div>
                        <div class="box">
                          <div class="label">主要經歷</div>
                          <ul>
                            <li>The Princeton Review Japan, Managing Director</li>
                            <li>ALC International, Director</li>
                            <li>留学ジャーナル、執行役員</li>
                          </ul>
                        </div>
                        <div class="box">
                          <div class="label">學歷</div>
                          <ul>
                            <li>創価大学卒業（東京）</li>
                            <li>San Bernardino Valley College卒業（米国、加州）</li>
                          </ul>
                        </div>
                      </div>
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
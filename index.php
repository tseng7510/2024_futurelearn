<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="indexVideo"><video src="images/index/logolading.mp4" autoplay muted playsinline controls></video></div>

      <div class="mainBox">
        <div class="banner">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="pic">
                  <picture>
                    <source srcset="images/mbanner.png" media="(max-width: 768px)" />
                    <img src="images/index/banner.jpg" alt="">
                  </picture>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="pic">
                  <picture>
                    <source srcset="images/mbanner.png" media="(max-width: 375px)" />
                    <img src="images/index/banner.jpg" alt="">
                  </picture>
                </div>
              </div>
            </div>
          </div>
        </div>


        <section class="newsBox">
          <div class="outer">
            <div class="container wow fadeInLeft" data-wow-delay="0s">
              <div class="side">
                <h2 class="blockTitle">News <span>Information</span></h2>
                <div class="description">學無界提供最新的訊息，讓您可以能藉由更多資訊瞭解我們。您可以透過點擊照片或標題閱讀更詳細的資訊。</div>
              </div>
              <div class="listBox">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper">
                  <div class="swiper-wrapper">
                    <? for ($i = 0; $i < 4; $i++) { ?>
                      <div class="swiper-slide">
                        <a href="news_detail.php">
                          <div class="info">
                            <time>Nov 12.2024</time>
                            <div class="tag">最新消息</div>
                          </div>
                          <div class="pic"><img src="images/index/n1.jpg" alt=""></div>
                          <h3 class="title">日本熊本縣菊池市市長一行來訪</h3>
                          <div class="description">來自日本熊本縣菊池市市長及市議員一行共15人，參訪本機構各項軟硬體設施，並對...</div>
                        </a>
                      </div>
                    <? } ?>
                  </div>
                </div>
              </div>
              <a href="news.php" class="indexMore">VIEW ALL NEWS</a>
            </div>
          </div>
        </section>

        <section class="aboutBox">
          <div class="outer">
            <div class="pic"><img src="images/index/a.jpg" alt=""></div>
            <div class="container wow fadeInLeft" data-wow-delay="0s">
              <h2 class="blockTitle">News <span>Information</span></h2>
              <div class="info">
                <div class="description">耶拿教育，尊重人是獨一無二的個體，擁有權利發展自我，透過人際關係、物質、社會、文化和精神，用尊嚴與價值去成就自我。本機構引用耶拿教育的理念與精神，在於實踐、塑造人與社會的價值，課程內容取材於孩子的生活世界、內在經驗和社會文化，教學設計富有教育情境，特別是經由「對話、遊戲、工作和歡慶」節奏性的交替中，來形塑教與學。</div>
                <a href="about.php" class="indexMore">VIEW MORE</a>
              </div>
            </div>
          </div>
        </section>

      </div>
    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>

  <script type="text/javascript">
    const bannerSwiper = new Swiper('.banner .swiper', {
      loop: true,
      autoplay: {
        delay: 3000,
        stopOnLastSlide: false,
        disableOnInteraction: true,
      },
    });

    const newsSwiper = new Swiper('.newsBox .swiper', {
      loop: true,
      slidesPerView: 1,
      navigation: {
        nextEl: '.newsBox .swiper-button-next',
        prevEl: '.newsBox .swiper-button-prev',
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        810: {
          slidesPerView: 2,
        },
        1100: {
          slidesPerView: 3,
        },
      },
    });

    window.addEventListener("load", (e) => {
      const body = document.querySelector('body');
      const indexVideo = document.querySelector('.indexVideo');
      const video = document.querySelector('.indexVideo video');
      setTimeout(() => {
        indexVideo.classList.add('active');
        body.classList.add('loaded');
        setTimeout(() => {
          indexVideo.classList.add('loaded');
          //indexVideo.remove();
        }, 1000);
      }, 4000);
    });
  </script>
</body>

</html>
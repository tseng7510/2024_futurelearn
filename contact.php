<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages contactPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="outer">
          <div class="container">
            <div class="titleBox wow fadeInUp" data-wow-delay="0s">
              <div class="title">Advisory<span>預約諮詢</span></div>
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
                  <span itemprop="name">預約諮詢</span>
                  <meta itemprop="position" content="2">
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
                <div class="infoBox">
                  <div class="slogan wow fadeInUp" data-wow-delay="0.2s">學無界實踐教育機構，和世界接軌的教育專家！</div>
                  <div class="notice wow fadeInUp" data-wow-delay="0.4s">我們是唯一獲得「英國劍橋大學國際考評部」、「英國牛津大學國際AQA考試院」、「英國文化協會全球夥伴學校」等三項國際認證的學校。</div>
                  <ul class="wow fadeInUp" data-wow-delay="0.6s">
                    <li>我們除國內課程外，全面採外師授課。</li>
                    <li>在沉浸式的英語學習環境中，培養英語聽說讀寫能力。</li>
                    <li>國中畢業後英語能力可達雅思5.0~6.0分，相當全民英檢中高級。</li>
                    <li>高中畢業雅思成績達6.5～7.0為目標，相當於海外研究所入學門檻。</li>
                    <li>豐富的國際教育資源，透過寒暑假海外遊學體驗營和各種國際交流活動的參與，提升英語溝通能力。</li>
                  </ul>

                  <div class="faqBox wow fadeInUp" data-wow-delay="0.8s">
                    <div class="title">諮詢FAQ</div>
                    <div class="listBox">

                      <? for ($i = 0; $i < 6; $i++) { ?>
                        <div class="item">
                          <button type="button" class="qBox">學費</button>
                          <div class="aBox">國中：面試<br />
                            高中：校內英語檢定<br />
                            需檢附歷年成績資訊及其他相關證明。
                          </div>
                        </div>
                      <? } ?>

                    </div>
                  </div>
                </div>

                <form class="formBox">
                  <div class="slogan wow fadeInUp" data-wow-delay="0s">立即諮詢，給孩子一個翻轉人生的機會！</div>
                  <div class="description wow fadeInUp" data-wow-delay="0.2s">由學無界實驗教育機構，為您孩子提供專業的學術建議和課程計畫。請詳細填寫表單資料，我們將安排與您一對一諮詢。</div>
                  <div class="title wow fadeInUp" data-wow-delay="0.4s">預約諮詢表單</div>
                  <ul class="wow fadeInUp" data-wow-delay="0.4s">
                    <li class="inputItem full wow fadeInUp required">
                      <label class="label" for="company">家長姓名</label>
                      <input type="text" class="inputControl" id="name">
                    </li>
                    <li class="inputItem full wow fadeInUp required">
                      <div class="label" for="sex">性別</div>
                      <div class="itemBox radio">
                        <ul>
                          <li><input type="radio" name="sex" id="male"><label for="male">Male/先生</label></li>
                          <li><input type="radio" name="sex" id="female"> <label for="female">Female/小姐</label></li>
                        </ul>
                      </div>
                    </li>
                    <li class="inputItem full wow fadeInUp required">
                      <label class="label" for="tel">手機</label>
                      <input type="text" class="inputControl" id="tel">
                    </li>
                    <li class="inputItem full wow fadeInUp">
                      <label class="label" for="line">Line</label>
                      <input type="text" class="inputControl" id="line">
                    </li>
                    <li class="inputItem full wow fadeInUp required">
                      <label class="label" for="email">Email</label>
                      <input type="text" class="inputControl" id="email">
                    </li>
                    <li class="inputItem full wow fadeInUp required">
                      <label class="label" for="school">小孩目前就讀學校</label>
                      <input type="text" class="inputControl" id="school">
                    </li>
                    <li class="inputItem full wow fadeInUp required">
                      <label class="label" for="grade">年級</label>
                      <input type="text" class="inputControl" id="grade">
                    </li>
                  </ul>

                  <ul class="wow fadeInUp" data-wow-delay="0.4s">
                    <li class="inputItem flexStart full wow fadeInUp required">
                      <div class="label" for="sex">諮詢課程</div>
                      <div class="itemBox checkBox">
                        <ul>
                          <li><input type="checkbox" id="item1"><label for="item1">國中國際課程</label></li>
                          <li><input type="checkbox" id="item2"> <label for="item2">高中國際課程</label></li>
                        </ul>
                      </div>
                    </li>
                    <li class="inputItem flexStart full wow fadeInUp required">
                      <div class="label" for="sex">諮詢方式</div>
                      <div class="itemBox checkBox full">
                        <ul>
                          <li><input type="checkbox" id="item3"><label for="item3">一對一諮詢</label></li>
                          <li><input type="checkbox" id="item4"><label for="item4">12/14(六)課程說明會</label></li>
                          <li><input type="checkbox" id="item5"><label for="item5">12/21(六) 10:30~11:30 一對一諮詢 (園遊會專場)</label></li>
                          <li><input type="checkbox" id="item6"><label for="item6">12/21(六) 14:00~15:00 一對一諮詢 (園遊會專場)</label></li>
                          <li><input type="checkbox" id="item7"><label for="item7">12/21(六) 15:00~16:00 一對一諮詢 (園遊會專場)</label></li>
                        </ul>
                      </div>
                    </li>
                    <li class="inputItem full wow fadeInUp required">
                      <label class="label" for="expected">預計入學年度</label>
                      <input type="text" class="inputControl" id="expected">
                    </li>
                    <li class="inputItem flexStart full wow fadeInUp required">
                      <div class="label" for="sex">如何得知學無界</div>
                      <div class="itemBox checkBox half">
                        <ul>
                          <li><input type="checkbox" id="item8"><label for="item8">Google</label></li>
                          <li><input type="checkbox" id="item9"><label for="item9">Facebook</label></li>
                          <li><input type="checkbox" id="item10"><label for="item10">Instagram</label></li>
                          <li><input type="checkbox" id="item11"><label for="item11">廣告文宣</label></li>
                          <li><input type="checkbox" id="item12"><label for="item12">親友推薦</label></li>
                          <li><input type="checkbox" id="item13"><label for="item13">Line@</label></li>
                          <li><input type="checkbox" id="item14"><label for="item14">簡訊</label></li>
                          <li class="other"><input type="checkbox" id="item15">
                            <label class="label" for="item15">其他</label>
                            <input type="text" class="inputControl">
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="inputItem flexStart full wow fadeInUp required">
                      <div class="label" for="sex">方便聯絡時間</div>
                      <div class="itemBox checkBox full">
                        <ul>
                          <li><input type="checkbox" id="item16"><label for="item16">早上(10:00 ~ 12:00)</label></li>
                          <li><input type="checkbox" id="item17"><label for="item17">中午(13:00 ~ 15:00)</label></li>
                          <li><input type="checkbox" id="item18"><label for="item18">下午(15:00 ~ 17:00)</label></li>
                          <li><input type="checkbox" id="item19"><label for="item19">晚上(17:00 ~ 19:00)</label></li>
                        </ul>
                      </div>
                    </li>
                    <li class="inputItem full wow fadeInUp">
                      <label class="label" for="message2">備註</label>
                      <input type="text" class="inputControl" id="message2">
                    </li>
                    <li class="inputItem full wow fadeInUp required">
                      <label class="label" for="password">驗證碼</label>
                      <div class="box">
                        <input type="password" class="inputControl" id="password">
                        <span class="checkImg"><img src="images/check_img.jpg"></span>
                        <button class="reBtn"></button>
                      </div>
                    </li>
                  </ul>
                  <div class="pageBtnBox wow fadeInUp">
                    <button class="send" type="button" onclick="javascript:location.href='contact_ok.php'">確認送出</button>
                  </div>
                </form>
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
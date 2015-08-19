<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Imacenは『髪を切りたい美容師さん』と『髪を切ってもらいたいモデルさん』のマッチングサービスです。">
    <meta name="author" content="yukino.oniwa">

    <title>Imachan Post</title>

<!-- CSS -->
    <link href="/imachan/app/webroot/imachan/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/imachan/app/webroot/imachan/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/imachan/app/webroot/imachan/css/nivo-lightbox.css" rel="stylesheet" />
    <link href="/imachan/app/webroot/imachan/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="/imachan/app/webroot/imachan/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="/imachan/app/webroot/imachan/css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="/imachan/app/webroot/imachan/css/animate.css" rel="stylesheet" />
    <link href="/imachan/app/webroot/imachan/css/style.css" rel="stylesheet">
    <link href="/imachan/app/webroot/imachan/color/default.css" rel="stylesheet">
<!-- /CSS -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


<!-- てすと -->
<p>
  <form method="post" action="./check" name="form1">
    <div><input type="text" name="text1" id="text1"></div>

    <div><input type="checkbox" name="check1" id="check1">
    <label for="check1">check1</label></div>

    <div><input type="radio" value="radio_A"
      name="radio1" id="radio_a">
    <label for="radio_a">Radio A</label>
    <input type="radio" value="radio_B"
      name="radio1" id="radio_b">
    <label for="radio_b">Radio B</label></div>
    <div><input type="submit" value="送る">
  </form>
</p>
</div>
<!-- てすと -->

<!-- Preloader -->
    <div id="preloader">
      <div id="load"></div>
    </div>
<!-- /Preloader -->

<!-- Navigation -->
    <div id="navigation">
      <nav class="navbar navbar-custom" role="navigation">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
        <i class="fa fa-bars"></i>
      </button>
    </div>
    <!-- /Brand and toggle get grouped for better mobile display -->


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="menu">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
        <li><a href="#about">募集一覧</a></li>
        <li><a href="#gallery">Bfore/After</a></li>
      </ul>
    </div>
    <!-- /Collect the nav links, forms, and other content for toggling -->

    </div>
      </nav>
        </div>
          </div>
            </div>
<!-- /Navigation -->

<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
      <div class="heading-contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-offset-2">

              <div class="section-heading">
                <div class="wow bounceInDown" data-wow-delay="0.4s">
                  <h2>Before/After 投稿</h2>
                    <p class="wow lightSpeedIn" data-wow-delay="0.3s">Take a look at our picture, enjoy Imachan!</p>
      </div>
        </div>
          </div>
            </div>
              </div>
                </div>

<!-- 投稿ブロック -->

    <div class="row">
      <div class="col-lg-8 col-md-offset-2">
        <div class="form-wrapper marginbot-50">
<p>
  <form method="post" action="./check" name="posting">


    <!-- ユーザー名テキストBOX -->
      <label for="InputName"><i class="fa fa-user fa-lg"></i>&nbsp;お名前</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="What your name ?" required="required">
    <!-- /ユーザー名テキストBOX -->
</br>
    <!-- 男/女 -->
    <div>
      <input type="radio" value="radio_A" name="radio1" id="radio_a">
      <label for="radio_a">&nbsp;男</label>
      <input type="radio" value="radio_B" name="radio1" id="radio_b">
      <label for="radio_b">&nbsp;女</label>
    </div>
     <!-- /男/女 -->
</br>
    <!-- 画像投稿テキストボックス(1) -->
      <label for="InputFileB"><i class="fa fa-camera-retro fa-lg"></i>&nbsp;Befor画像アップロード</label>
      <input type="file" name="file1" id="InputFileB">
    <!-- /画像投稿テキストボックス(1) -->

    <!-- 画像投稿テキストボックス(2) -->
      <label for="InputFileA"><i class="fa fa-camera-retro fa-lg"></i>&nbsp;After画像アップロード</label>
      <input type="file" name="file2" id="InputFileA">
    <!-- /画像投稿テキストボックス(2) -->

    <!-- 髪型種類 -->
    </br>
    <div>
      <input type="radio" value="radio_A" name="radio2" id="radio_c">
      <label for="radio_c">&nbsp;ショート</label>
      <input type="radio" value="radio_B" name="radio2" id="radio_d">
      <label for="radio_d">&nbsp;ボブ</label>
      <input type="radio" value="radio_B" name="radio2" id="radio_e">
      <label for="radio_e">&nbsp;セミロング</label>
      <input type="radio" value="radio_B" name="radio2" id="radio_f">
      <label for="radio_f">&nbsp;ロング</label>
      <input type="radio" value="radio_B" name="radio2" id="radio_g">
      <label for="radio_g">&nbsp;その他</label>
    </div>
    <!-- /髪型種類 -->
</br>
    <!-- メッセージテキストBOX -->
      <label for="InputMessage"><i class="fa fa-comment fa-lg"></i>&nbsp;メッセージ</label>
      <textarea name="message" id="message" class="form-control" placeholder="Please share your experience !"></textarea>
    <!-- /メッセージテキストBOX -->
</br>
    <!-- 確認するボタン -->
    <div><input type="submit" href="#gallery" class="btn btn-skin btn-lg btn-scroll"></div>
    <!-- /確認するボタン -->
    </div>
      </div>
        </div>
  </form>
<p>
<!-- /投稿ブロック -->

<!-- フッダー-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <p>&copy;Copyright 2015 . Imachan . design by <a href="">Bootstraptaste</a></p>
                </div>
            </div>
        </div>
    </footer>
<!-- /フッダー-->

    <!-- Core JavaScript Files -->
    <script src="/imachan/app/webroot/imachan/js/jquery.min.js"></script>
    <script src="/imachan/app/webroot/imachan/js/bootstrap.min.js"></script>
    <script src="/imachan/app/webroot/imachan/js/jquery.easing.min.js"></script>
    <script src="/imachan/app/webroot/imachan/js/jquery.sticky.js"></script>
    <script src="/imachan/app/webroot/imachan/js/jquery.scrollTo.js"></script>
    <script src="/imachan/app/webroot/imachan/js/stellar.js"></script>
    <script src="/imachan/app/webroot/imachan/js/wow.min.js"></script>
    <script src="/imachan/app/webroot/imachan/js/owl.carousel.min.js"></script>
    <script src="/imachan/app/webroot/imachan/js/nivo-lightbox.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/imachan/app/webroot/imachan/js/custom.js"></script>


</body>

</html>

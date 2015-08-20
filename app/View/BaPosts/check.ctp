<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Imacenは『髪を切りたい美容師さん』と『髪を切ってもらいたいモデルさん』のマッチングサービスです。">
    <meta name="author" content="yukino.oniwa">

    <title>Imachan check</title>

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
<body>
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
                  <h2>Brfot/After 投稿確認</h2>
                    <p class="wow lightSpeedIn" data-wow-delay="0.3s">Take a look at our picture, enjoy Imachan!</p>
      </div>
        </div>
          </div>
            </div>
              </div>
                </div>

<!-- 作成ちゅう -->
<p>名前: <?php echo $name; ?></p>
<p>性別: <?php echo $radio1; ?></p>
<p>Befor画像: <?php echo $file1; ?></p>
<p>After画像: <?php echo $file2; ?></p>
<p>髪型type: <?php echo $radio2; ?></p>
<p>メッセージ: <?php echo $message; ?></p>

<form method="post" action="./add">
   <input type="hidden" name="text1" value="<?php $text1; ?>">
   <input type="hidden" name="check1" value="<?php $check1; ?>">
   <input type="hidden" name="radio1" value="<?php $radio1; ?>">
   <input type="submit" name="send">
</form>


<!-- /作成ちゅう -->


<!-- ↓ 表示 -->
<p>名前: <?php echo $text1; ?></p>
<p>check1: <?php echo $check1; ?></p>
<p>radio1: <?php echo $radio1; ?></p>
<!-- ↓ 追加 -->
<form method="post" action="./add">
   <input type="hidden" name="text1" value="<?php $text1; ?>">
   <input type="hidden" name="check1" value="<?php $check1; ?>">
   <input type="hidden" name="radio1" value="<?php $radio1; ?>">
   <input type="submit" name="send">
</form>


</div>

</body>
</html>



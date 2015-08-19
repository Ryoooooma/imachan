<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Imachan</title>

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
  <link href="/imachan/app/webroot/imachan/css/ryoma/login.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Preloader -->
  <div id="preloader">
    <div id="load"></div>
  </div>

  <!-- Section: intro -->
    <section id="intro" class="intro">

    <div class="container">
          <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <a href="#" class="active" id="login-form-link">Login ?</a>
                  </div>
                </div>
                <hr>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-12">
                    <form id="login-form">
                      <div class="form-group">
                        <?php echo $this->Session->flash('auth'); ?>
                        <?php echo $this->Form->create('User', array('action' => 'login')); ?>
                        <?php echo $this->Form->input('username', array('label' => 'お名前')); ?>
                      </div>
                      <div class="form-group">
                        <?php echo $this->Form->input('password', array('label' => 'パスワード')); ?>
                      </div>
                      <div class="form-group text-center">
                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                        <label for="remember"> Remember Me</label>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-6 col-sm-offset-3">
                            <?php echo $this->Form->end('Login'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="text-center">
                              <p><?php echo $this->Html->link('Sign up ?', array('action' => 'add')); ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  

      <div class="page-scroll">
      <a href="#about">
        <i class="fa fa-angle-down fa-5x animated"></i>
      </a>
    </div>
    </section>
  <!-- /Section: intro -->
  
  <!-- Section: about -->
    <section id="about" class="home-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="section-heading text-center wow bounceInDown" data-wow-delay="0.2s">



            <?php echo $this->Html->link('ログアウト', '/users/logout/'); ?>



            <h2>How to use</h2>
          </div>          
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
        
          <img src="/imachan/app/webroot/imachan/img/step_1.jpg" class="img-responsive img-rounded" alt="" />
        </div>    
        <div class="col-md-6">
          <p><strong>まずはユーザー登録！</strong></p>
          <p>
          当サイトではユーザーのタイプが2つ存在します。1つは「カットモデル」、もう1つは「スタイリスト」。スタイリストさんに髪を切ってもらいたい方はカットモデルを、カットモデルさんの髪を切りたい方は「スタイリスト」をご指定いただき、ご登録をお願い致します。
          </p>
          <a href="" class="btn btn-skin btn-lg btn-scroll">Go to Signup</a>
        </div>
      </div>    
    </div>
    <div class="container margin-top50">
      <div class="row">
        <div class="col-md-6">
        
          <img src="/imachan/app/webroot/imachan/img/step_2.jpg" class="img-responsive img-rounded" alt="" />
        </div>    
        <div class="col-md-6">
          <p><strong>お気に入りのサロンを予約しよう！</strong></p>
          <p>
          スタイリストの皆さんが投稿した「こんなモデルさん募集しています！」という一覧の中から、自分に合うヘアサロンの予約をしよう。数日以内にスタイリストさんから連絡が来ますので、その後スケジュールを調整した上で詳細予約を完了させてください。
          </p>
          <a href="#gallery" class="btn btn-skin btn-lg btn-scroll">Go to Recruitment</a>
        </div>
      </div>    
    </div>
    <div class="container margin-top50">
      <div class="row">
        <div class="col-md-6">
        
          <img src="/imachan/app/webroot/imachan/img/step_3.jpg" class="img-responsive img-rounded" alt="" />
        </div>    
        <div class="col-md-6">
          <p><strong>あとはサロンに行くだけ！</strong></p>
          <p>
          予約した日時に合わせて、サロンに向かいます。（15分以上の遅刻は厳禁とさせていただきます）カット後、お時間あるときに当サイトのビフォーアフタータイムラインにカット前とカット後の写真を投稿してください
          </p>
          <a href="#gallery" class="btn btn-skin btn-lg btn-scroll">Go to Photo garally</a>
        </div>
      </div>    
    </div>
  </section>
  <!-- /Section: about -->
  
  <!-- Section: separator -->
    <section id="separator" class="home-section parallax text-center" data-stellar-background-ratio="0.5">
    
    <div class="container">
      <div class="row">
          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="align-center txt-shadow">
              <div class="icon">
                <i class="fa fa-graduation-cap fa-5x"></i>
              </div>
            <span class="color-white">Bachelor of Design</span>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="align-center txt-shadow">
              <div class="icon">
                <i class="fa fa-heart fa-5x"></i>
              </div>
            <span class="color-white">10x failed in love</span>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="align-center txt-shadow">
              <div class="icon">
                <i class="fa fa-plane fa-5x"></i>
              </div>
            <span class="color-white">I love traveling</span>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="align-center txt-shadow">
              <div class="icon">
                <i class="fa fa-camera fa-5x"></i>
              </div>
            <span class="color-white">I'm photographer</span>
            </div>
          </div>
      </div>    
    </div>
  </section>
  <!-- /Section: separator -->
  
  
  <!-- Section: gallery -->
    <section id="gallery" class="home-section text-center bg-gray">

      <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow bounceInDown" data-wow-delay="0.4s">
          <div class="section-heading">
            <h2>My photo gallery</h2>
            <p>Take a look at my personal moment, enjoy</p>
          </div>
          </div>
        </div>
      </div>
      </div>

    <div class="container">
      <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
          <div class="wow bounceInUp" data-wow-delay="0.4s">
                    <div id="owl-works" class="owl-carousel">
                        <div class="item"><a href="img/gallery/photo_1.jpg.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="/imachan/app/webroot/imachan/img/photo_1.jpg" class="img-responsive" alt="img"></a></div>
                        <div class="item"><a href="img/gallery/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="/imachan/app/webroot/imachan/img/photo_2.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/gallery/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="/imachan/app/webroot/imachan/img/photo_3.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/gallery/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="/imachan/app/webroot/imachan/img/photo_4.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/gallery/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="/imachan/app/webroot/imachan/img/photo_5.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/gallery/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="/imachan/app/webroot/imachan/img/photo_6.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/gallery/7.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="/imachan/app/webroot/imachan/img/photo_7.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/gallery/8.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="/imachan/app/webroot/imachan/img/photo_8.jpg" class="img-responsive " alt="img"></a></div>
                    </div>
          </div>
                </div>
            </div>
    </div>
  </section>
  <!-- /Section: services -->

    <!-- Core JavaScript Files -->
    <script src="/imachan/app/webroot/imachan/js/jquery.min.js"></script>
    <script src="/imachan/app/webroot/imachan/js/bootstrap.min.js"></script>
    <script src="/imachan/app/webroot/imachan/js/jquery.easing.min.js"></script>  
  <script src="/imachan/app/webroot/imachan/js/jquery.sticky.js"></script>
  <script src="/imachan/app/webroot/imachan/js/jquery.scrollTo.js"></script>
  <script src="/imachan/app/webroot/imchan/js/stellar.js"></script>
  <script src="/imachan/app/webroot/imachan/js/wow.min.js"></script>
  <script src="/imachan/app/webroot/imachan/js/owl.carousel.min.js"></script>
  <script src="/imachan/app/webroot/imachan/js/nivo-lightbox.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/imachan/app/webroot/imachan/js/custom.js"></script>

</body>

</html>

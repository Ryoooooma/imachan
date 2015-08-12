<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <link href="/imachan/app/webroot/imachan/css//yuta/bootstrap.min.css" rel="stylesheet" type="text/css">
     <link href="/imachan/app/webroot/imachan/css/yuta/change.css" rel="stylesheet" type="text/css">
     


  </head>
  <body>
  



  <div class="well">
  <ul class="nav nav-tabs">
  </ul>
    <div class="sample1">
    <?php echo $this->Form->create('UserRecruitPost'); ?>
    <h2>確認画面</h2>
    </br>
    <h4>以下の内容で、モデルの募集をしますか？</h4>
    </div>
   <div style="margin:0px;padding:0px;" align="center">
    <table width="400px" style="border-collapse: collapse;border:2px solid #FFD1E4;background-color:#FFFFFF;color:#000000;text-align:left;">
       <?php //foreach ($userrecruitposts as $post): ?>
       


      <tr><td style="border:2px solid #FFD1E4;text-align:left;">施術内容</td><td style="border:2px solid #FFD1E4;text-align:left;"><?php echo $userrecruitposts['cut_content']; ?></td></tr><tr><td style="border:2px solid #FFD1E4;text-align:left;">対象性別</td><td style="border:2px solid #FFD1E4;text-align:left;"><?php echo $userrecruitposts['gender']; ?></td></tr><tr><td style="border:2px solid #FFD1E4;text-align:left;">対象モデル</td><td style="border:2px solid #FFD1E4;text-align:left;"><?php echo $userrecruitposts['hair_style']; ?></td></tr><tr><td style="border:2px solid #FFD1E4;text-align:left;">料金</td><td style="border:2px solid #FFD1E4;text-align:left;"><?php echo $userrecruitposts['fee']; ?></td></tr><tr><td style="border:2px solid #FFD1E4;text-align:left;">募集時間帯</td><td style="border:2px solid #FFD1E4;text-align:left;"><?php echo $userrecruitposts['meeting_time']; ?></td></tr><tr><td style="border:2px solid #FFD1E4;text-align:left;">募集開始日</td><td style="border:2px solid #FFD1E4;text-align:left;">
      <?php echo $userrecruitposts['created']['year'].$userrecruitposts['created']['month'].$userrecruitposts['created']['hour'].$userrecruitposts['created']['min'].$userrecruitposts['created']['meridian']; ?></td></tr><tr><td style="border:2px solid #FFD1E4;text-align:left;">募集終了日</td><td style="border:2px solid #FFD1E4;text-align:left;">
     <?php echo $userrecruitposts['modified']['year'].$userrecruitposts['modified']['month'].$userrecruitposts['modified']['hour'].$userrecruitposts['modified']['min'].$userrecruitposts['modified']['meridian']; ?></td></tr><tr><td style="border:2px solid #FFD1E4;text-align:left;">募集の題名</td><td style="border:2px solid #FFD1E4;text-align:left;"><?php echo $userrecruitposts['title']; ?></td></tr><tr><td style="border:2px solid #FFD1E4;text-align:left;">募集の詳細</td><td style="border:2px solid #FFD1E4;text-align:left;"><?php echo $userrecruitposts['message']; ?></td></tr>

    <?php //endforeach; ?>
    <?php unset($post); ?>


    </table></div>
    </br>
    </br>

     <div class="sample1">
     <?php echo $this->Form->end('この条件でモデルを募集'); ?>
     </div>
  </div>
  </body>
</html>

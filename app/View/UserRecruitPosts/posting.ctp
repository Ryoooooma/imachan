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
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        <div class="sample1">
        <!-- <form id="tab"> -->
                <?php echo $this->Form->create('UserRecruitPost'); ?>
                <input type="hidden" NAME="_template_confirm" VALUE="kakunin.tpl">
                <h2>モデル募集フォーム</h2>
                </br>
                <div style="margin: 0 auto; background:#f7f7f7; padding:10px; border-radius: 10px; border: 3px dotted #ffb6c1;width:450px;">
                </br>
                【施術内容】　(※必須)<br>
              
                <?php echo $this->Form->input( 'cut_content', array()); ?>
 

                 </br>
                 </br>
                【対象性別】　(※必須)</br>
                <?php echo $this->Form->input('gender'); ?>

                 </br>

                【対象モデル】　(※必須)</br>
                ※髪の長さ、髪色などの条件を入力してください。</br>
                <?php echo $this->Form->input('hair_style'); ?>
                </br>
                【料金】　　　　(※必須)
                <?php echo $this->Form->input('fee'); ?>
                </br>
                【募集時間帯】　(※必須)
                <?php echo $this->Form->input('meeting_time'); ?>
                </br>
                【募集開始日】　(※必須)</br>
                <p>
                   <?php echo $this->Form->input('created'); ?>
                 </br>
                
                【募集終了日】　(※必須)</br>
                <p>
                   <?php echo $this->Form->input('modified'); ?>
                 </br>

                
               【募集の題名】　(※必須)
                <?php echo $this->Form->input('title'); ?>
                </br>

             　【募集の詳細】　(※必須)</br>
             　　<?php echo $this->Form->input('message'); ?>

                </br>
                <?php echo $this->Form->end('確認画面へ'); ?>
                </div>
            </div>
            </div>
        </div>
        </form>
        </diV>
      </div>
      
        
      </div>
  </div>
  <BODY>
    <div class="sample1">

    </form>
    </div>
    </BODY>
  </body>
</html>

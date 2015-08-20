<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Imachan</title>
   
    <!-- CSS -->
    <link href="/imachan/app/webroot/imachan/css//yuta/bootstrap.min.css" rel="stylesheet" type="text/css">
     <link href="/imachan/app/webroot/imachan/css/yuta/change.css" rel="stylesheet" type="text/css">
     

   
  

</head>

<body>
<<<<<<< HEAD
=======

  <!-- cut_contentで検索させてます -->
  <?php
        echo $this->Form->create('UserRecruitPost');
        echo $this->Form->input('keyword',array('placeholder'=>'検索ワード入力','label'=>false));
        echo $this->Form->button('Search',array('type'=>'submit','label'=>false));
        echo $this->Form->end();
    ?>

    <?php echo "<br>"; ?>

<?php echo $this->Html->link(
    'Add',
    array('controller' => 'UserRecruitPosts', 'action' => 'add')
); ?>

<table class="table table-bordered table-hover">
    <tr>
        <th>Id</th>
        <th>Cut_Content</th>
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($posts as $post){ ?>
    <tr>
        <td><?php echo $post['UserRecruitPost']['id']; ?></td>
        <td><?php echo $post['UserRecruitPost']['cut_content']; ?></td>
    </tr>
    <?php } ?>
    <?php unset($post); ?>
</table>

>>>>>>> 1d09d53a6332df4586da2fbabe550b0e94ef2590





<<<<<<< HEAD

	
=======
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
>>>>>>> 1d09d53a6332df4586da2fbabe550b0e94ef2590
    </br>
	<div class="sample1">
  <h3>現在の募集リスト</h3>
  </br>
  <div style="margin: 0 auto; background:#f7f7f7; padding:10px; border-radius: 10px; border: 3px dotted #ffb6c1;width:450px;">
  条件から検索！(絞り込む)
  </br>
  </br>

	【エリア】
	<select name="example">
	<option value="選択肢1">選択肢のサンプル1</option>
	<option value="選択肢2">選択肢のサンプル2</option>
	<option value="選択肢3">選択肢のサンプル3</option>
	<option value="選択肢4">選択肢のサンプル4</option>
	<option value="選択肢5">選択肢のサンプル5</option>
	</select>
  </br>

	【施術内容】　
              
                 <input type="checkbox">&nbsp;カット&nbsp;&nbsp;
                 <input type="checkbox">&nbsp;カラー&nbsp;&nbsp;
                 <input type="checkbox">&nbsp;パーマ&nbsp;&nbsp;
                 <input type="checkbox">&nbsp;その他&nbsp;&nbsp;</br>
                 
	</p> <button type="button" onclick="alert('検索！')">検索！</button>

    </div>
  </br>
  </br>
  </br>
    </div>

	


  <!-- Preloader -->


<table>
    <?php foreach ($userrecruitposts as $post): ?>
    <tr>
    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->
        <td>
          <div style="margin: 0 auto; background:#f7f7f7; padding:10px; border-radius: 10px; border: 3px dotted #ffb6c1;width:450px;">
          <div style=": solid ; border-width: 1px; padding: 5px 5px 5px 5px;width:50px;">
                    
          </div>　　　　　　　　　　　　　　　　　　　　　
          <div style=": solid ; border-width: 1px; padding: 5px 5px 5px 5px;">
           
              </br>
              <img width="80" src ="../img/post_thumbnail/<?php echo $post['UserRecruitPost']['picture']; ?>">
          </br>
          </div>        
          </br>
          <div style=": solid ; border-width: 1px; padding: 1px 5px 5px 5px;">
           <h4>
           <p>投稿者:</p>
           <p>施術内容:<?php echo $post['UserRecruitPost']['cut_content']; ?></P>
           <p>日付:<?php echo $post['UserRecruitPost']['meeting_time']; ?></p>
           </h4>
          </div>
           <p class="media-comment">
          </p>
           <button class="btn btn-primary">詳細をみる</button>

          </div>

          </div>              
          </div>  

        </td>
      
       </tr>
       <?php endforeach; ?>
  <!-- /Section: about -->
  </br>
                            </br>
                            </br>
  
  <!-- Section: separator -->
    

  <!-- /Section: services -->
  

    <!-- Core JavaScript Files -->
   
</body>

</html>

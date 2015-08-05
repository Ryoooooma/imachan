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
<?php echo $this->Html->link(
    'Add',
    array('controller' => 'UserRecruitPosts', 'action' => 'add')
); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($userrecruitposts as $post): ?>
    <tr>
        <td><?php echo $post['UserRecruitPost']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['UserRecruitPost']['title'],
array('controller' => 'userrecruitposts', 'action' => 'view', $post['UserRecruitPost']['id'])); ?>
        </td>
        <td><?php echo $post['UserRecruitPost']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>







	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
               
                           
                            <div style="margin: 0 auto; background:#f7f7f7; padding:10px; border-radius: 10px; border: 3px dotted #ffb6c1;width:450px;">
                              <div style="border-style: solid ; border-width: 1px; padding: 5px 5px 5px 5px;width:50px;">
                              顔写真
                              </div>　　　　　　　　　　　　　　　　　　　　　
                            　<div style="border-style: solid ; border-width: 1px; padding: 5px 5px 5px 5px;">

                              <p>店舗写真</p>
                              </br>
                              </br>
                              </br>
                              
                              </div>
                              
                              </br>
                              <div style="border-style: solid ; border-width: 1px; padding: 1px 5px 5px 5px;">
                              <h4>
                              <p>投稿者:</p>
                              <p>場所:</P>
                              <p>日付:</p>
                              </h4>
                              </div>

                              
                              <p class="media-comment">
                              </p>
                            <button class="btn btn-primary">詳細をみる</button>

                            </div>

                          </div>              
                        </div>
  <!-- /Section: about -->
  </br>
                            </br>
                            </br>
  
  <!-- Section: separator -->
    

  <!-- /Section: services -->
  

    <!-- Core JavaScript Files -->
   
</body>

</html>

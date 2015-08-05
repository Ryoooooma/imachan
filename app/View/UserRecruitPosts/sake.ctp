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
    <?php echo $this->Html->link(
    'Add',
    array('controller' => 'UserRecruitPosts', 'action' => 'add')
); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>hair_style</th> 
        <th>fee</th> 
        <th>gender</th>
        <th>message</th>
        <th>cut_date</th>

    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($userrecruitposts as $post): ?>
    <tr>
        <td><?php echo $post['UserRecruitPost']['id']; ?></td>
        <td><?php echo $post['UserRecruitPost']['cut_content']; ?></td>
        <td><?php echo $post['UserRecruitPost']['user_id']; ?></td>
        <td><?php echo $post['UserRecruitPost']['gender']; ?></td>
        <td><?php echo $post['UserRecruitPost']['hair_style']; ?></td>
        <td><?php echo $post['UserRecruitPost']['fee']; ?></td>
        <td><?php echo $post['UserRecruitPost']['meeting_time']; ?></td>
        <td><?php echo $post['UserRecruitPost']['created']; ?></td>
        <td><?php echo $post['UserRecruitPost']['modified']; ?></td>
        <td><?php echo $post['UserRecruitPost']['message']; ?></td>
        

    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>








   
  </body>
</html>

<h1>Brfot/After 投稿確認</h1>
<p>this is test View.</p>
<p>text1: <?php echo $text1; ?></p>
<p>check1: <?php echo $check1; ?></p>
<p>radio1: <?php echo $radio1; ?></p>
<form method="post" action="./add">
   <input type="hidden" name="text1" value="<?php $text1; ?>">
   <input type="hidden" name="check1" value="<?php $check1; ?>">
   <input type="hidden" name="radio1" value="<?php $radio1; ?>">
   <input type="submit" name="send">
</form>
<p>　</p>
</div>
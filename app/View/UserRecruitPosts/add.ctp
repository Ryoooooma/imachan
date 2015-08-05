<h1>Add Post</h1>
<?php
echo $this->Form->create('UserRecruitPost');
echo $this->Form->input('cut_content');
echo $this->Form->hidden('user_id');
echo $this->Form->input('gender');
echo $this->Form->input('hair_style');
echo $this->Form->input('fee');
echo $this->Form->input('meeting_time');
echo $this->Form->input('created');
echo $this->Form->input('modified');
echo $this->Form->input('title');
echo $this->Form->input('message');
echo $this->Form->end('Save UserRecruitPost');
?>

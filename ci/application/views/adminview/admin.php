<?php include 'header.php' ?>
<?php if($success = $this->session->flashdata('success')){ ?>
<div class="alert alert-dismissible alert-primary">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?= $success ?>
</div>
<?php } ?>


this is admin control part
	<h1>MY name is khalil...</h1>
	<?= anchor('ice1st/ice1stview','ice1st',['class'=>'btn btn-primary']); ?>
	<?= anchor('ice2nd/ice2ndview','ice2nd',['class'=>'btn btn-primary']); ?>
	<?= anchor('ice3rd/ice3rdview','ice3rd',['class'=>'btn btn-primary']); ?>
	<?= anchor('ice4th/ice4thview','ice4th',['class'=>'btn btn-primary']); ?>
	<?= anchor('ice5th/ice5thview','ice5th',['class'=>'btn btn-primary']); ?>
	<?= anchor('ice6th/ice6thview','ice6th',['class'=>'btn btn-primary']); ?>
	<?= anchor('ice7th/ice7thview','ice7th',['class'=>'btn btn-primary']); ?>
	<?= anchor('teacher/teacherview','teacher',['class'=>'btn btn-primary']); ?>
	<?= anchor('home/homeview','home',['class'=>'btn btn-primary']); ?>


<?php include 'header.php' ?>
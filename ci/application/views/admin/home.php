<?php include 'header.php' ?>

<center><h1 class="mt-5">Image</h1></center>	
<div id="fm" class="m-4">
	<div class="m-4">
	<?= form_open_multipart('home/homeInsert') ?>
	<center><h1>Image form</h1></center>
      
  		<div class="row">
	   		<div class="col-lg-6">
		        <div class="form-group">
		        <label for="title">Title:</label>
		         <?= form_input(['class'=>'form-control','placeholder'=>'Enter your title...','name'=>'title','required'=>'1','value'=>set_value('title')]); ?>
		         <?= form_error('title'); ?>
		  		</div>
	  		</div>
	  		<div class="col-lg-6">
	  			<label for="activity">Your picture:</label>
	    		<div class="form-group">
		         <?= form_upload(['name'=>'userfile','required'=>'1']); ?>
		          <?php if(isset($upload_error)){ echo $upload_error;} ?>
		  		</div>
	     	</div>
      	</div>

      	<center>
      	<?= form_submit(['class'=>'btn btn-primary mb-4','value'=>'submit']); ?>
      	<?= form_reset(['class'=>'btn btn-primary mb-4','value'=>'reset']); ?>
		</center>
	<?= form_close() ?>
</div>
</div>



<?php include 'header.php' ?>
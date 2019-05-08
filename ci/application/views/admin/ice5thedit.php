<?php include 'header.php' ?>

<center><h1 class="mt-5">Ice 5th batch</h1></center>	
<div id="fm" class="m-4">
	<div class="m-4">
	<?= form_open_multipart("ice5th/ice5thUpdate/$data->id"); ?>
	<h1>student edit form</h1>
	   
  		<div class="row">
	   		<div class="col-lg-6">
	   			<label for="name">Name:</label>
		        <div class="form-group">
		         <?= form_input(['class'=>'form-control','name'=>'name','required'=>'1','value'=>set_value('name',$data->name)]); ?>
		         <?= form_error('name'); ?>
		  		</div>
	  		</div>
	  		<div class="col-lg-6">
	    			<label for="email">email:</label>
		        <div class="form-group">
		         <?= form_input(['class'=>'form-control','name'=>'email','type'=>'email','required'=>'1','value'=>set_value('email',$data->email)]); ?>
		         	<?= form_error('email'); ?>
		  		</div>
	     	</div>
      	</div>

      	
  		

      	
  		<div class="row">
	   		<div class="col-lg-6">
		        <div class="form-group">
		        	<label for="fb">Fb_id:</label>
		         <?= form_input(['class'=>'form-control','name'=>'fb','required'=>'1','value'=>set_value('fb',$data->fb)]); ?>
		         <?= form_error('fb'); ?>
		  		</div>
	  		</div>
	  		<div class="col-lg-6">
	    		<label for="school">School:</label>
		        <div class="form-group">
		         <?= form_input(['class'=>'form-control','name'=>'school','required'=>'1','value'=>set_value('school',$data->school)]); ?>
		         <?= form_error('school'); ?>
		  		</div>
	     	</div>
      	</div>

      	
  		<div class="row">
	   		<div class="col-lg-6">
	   			<label for="college">College:</label>
		        <div class="form-group">
		         <?= form_input(['class'=>'form-control','name'=>'college','required'=>'1','value'=>set_value('college',$data->college)]); ?>
		         <?= form_error('college'); ?>
		  		</div>
	  		</div>
	  		<div class="col-lg-6">
	    		<label for="city">City:</label>
	    		<div class="form-group">
		         <?= form_input(['class'=>'form-control','name'=>'city','required'=>'1','value'=>set_value('city',$data->city)]); ?>
		         <?= form_error('city'); ?>
		  		</div>
	     	</div>
      	</div>

      	
  		<div class="row">
	   		<div class="col-lg-6">
	   			<label for="blood">Blood:</label>
		        <div class="form-group">
		         <?= form_input(['class'=>'form-control','name'=>'blood','required'=>'1','value'=>set_value('blood',$data->blood)]); ?>
		         <?= form_error('blood'); ?>
		  		</div>
	  		</div>
	  		<div class="col-lg-6">
	    			<label for="roll">Roll_id:</label>
		        <div class="form-group">
		         <?= form_input(['class'=>'form-control','name'=>'roll','required'=>'1','value'=>set_value('roll',$data->roll)]); ?>
		         <?= form_error('roll'); ?>
		  		</div>
	     	</div>
      	</div>

      	
  		<div class="row">
	   		<div class="col-lg-6">
	   			<label for="phone">Phone:</label>
		        <div class="form-group">
		         <?= form_input(['class'=>'form-control','name'=>'phone','required'=>'1','value'=>set_value('phone',$data->phone)]); ?>
		         <?= form_error('phone'); ?>
		  		</div>
	  		</div>
	  		<div class="col-lg-6">
	    			<label for="dateofbarth">Date-of-birth:</label>
		        <div class="form-group">
		         <?= form_input(['class'=>'form-control','name'=>'dateofbarth','required'=>'1','value'=>set_value('dateofbarth',$data->dateofbarth)]); ?>
		         <?= form_error('dateofbarth'); ?>
		  		</div>
	     	</div>
      	</div>


      
  		<div class="row">
	   		<div class="col-lg-6">
	   			<label for="activity">Activity:</label>
		        <div class="form-group">
		         <?= form_input(['class'=>'form-control','name'=>'activity','required'=>'1','value'=>set_value('activity',$data->activity)]); ?>
				<?= form_error('activity'); ?>
		  		</div>
	  		</div>
	  		<div class="col-lg-6">
	    		<label for="activity">Your picture:</label>
	    		<div class="form-group">
		         <?= form_upload(['name'=>'userfile','required'=>'1']); ?>
		         <?php if(isset($upload_error)){echo $upload_error;} ?>
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
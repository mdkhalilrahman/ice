<?php include 'header.php' ?>

<center><h1 class="mt-5">Ice 7th batch</h1></center>	
<div id="fm" class="m-4">
	<div class="m-4">
	<?= form_open_multipart("teacher/teacherupdate/$data->id") ?>
	<h1>student edit form</h1>
	   
  		<div class="row">
	   		<div class="col-lg-6">
	   			<label for="name">Name:</label>
		        <div class="form-group">
		         <?= form_input(['class'=>'form-control','placeholder'=>'Enter name...','name'=>'name','required'=>'1','value'=>set_value('name',$data->name)]); ?>
		         <?= form_error('name'); ?>
		  		</div>
	  		</div>
	  		<div class="col-lg-6">
	  			<label for="email">Email:</label>
	    		<div class="form-group">
		         <?= form_input(['class'=>'form-control','placeholder'=>'Enter email...','name'=>'email','type'=>'email','required'=>'1','value'=>set_value('email',$data->email)]); ?>
		  			<?= form_error('email'); ?>
		  		</div>
	     	</div>
      	</div>

   

      	
  		<div class="row">
	   		<div class="col-lg-6">
	   			<label for="fb">Fb_id:</label>
		        <div class="form-group">
		         <?= form_input(['class'=>'form-control','placeholder'=>'Enter your fb_id...','name'=>'fb','required'=>'1','value'=>set_value('fb',$data->fb)]); ?>
		  			<?= form_error('fb'); ?>
		  		</div>
	  		</div>
	  		<div class="col-lg-6">
	  			<label for="school">School:</label>
	    		<div class="form-group">
		         <?= form_input(['class'=>'form-control','placeholder'=>'Enter your school..','name'=>'school','required'=>'1','value'=>set_value('school',$data->school)]); ?>
		  			<?= form_error('school'); ?>	
		  		</div>
	     	</div>
      	</div>

      	
  

      	
  		<div class="row">
	   		<div class="col-lg-6">
	   			<label for="college">College:</label>
		        <div class="form-group">
		         <?= form_input(['class'=>'form-control','placeholder'=>'Enter your college..','name'=>'college','required'=>'1','value'=>set_value('college',$data->college)]); ?>
		  			<?= form_error('college'); ?>
		  		</div>
	  		</div>
	  		<div class="col-lg-6">
	  			<label for="university">University:</label>
	    		  <div class="form-group">
		         <?= form_input(['class'=>'form-control','placeholder'=>'Enter university..','name'=>'university','required'=>'1','value'=>set_value('university',$data->university)]); ?>
		         <?= form_error('university'); ?>
		  		</div>
	     	</div>
      	</div>

      	<div class="row">
	   		<div class="col-lg-6">
	   			<label for="city">City:</label>
	    		  <div class="form-group">
		         <?= form_input(['class'=>'form-control','placeholder'=>'Enter city..','name'=>'city','required'=>'1','value'=>set_value('city',$data->city)]); ?>
		         <?= form_error('city'); ?>
		  		</div>
	  		</div>
	  		<div class="col-lg-6">
	  			<label for="blood">Blood:</label>
		        <div class="form-group">
		         <?= form_input(['class'=>'form-control','placeholder'=>'Enter your blood..','name'=>'blood','required'=>'1','value'=>set_value('blood',$data->blood)]); ?>
		  			<?= form_error('blood'); ?>
		  		</div>
	     	</div>
      	</div>

     
      
  		<div class="row">
	   		<div class="col-lg-6">
	   			<label for="designation">Designation:</label>
		        <div class="form-group">
		         <?= form_input(['class'=>'form-control','placeholder'=>'Enter your designation..','name'=>'designation','required'=>'1','value'=>set_value('designation',$data->designation)]); ?>
		  			<?= form_error('designation'); ?>
		  		</div>
	  		</div>
	  		<div class="col-lg-6">
	  			<label for="qualification">Qualification:</label>
	    		<div class="form-group">
		         <?= form_input(['class'=>'form-control','placeholder'=>'Enter your qualification...','name'=>'qualification','required'=>'1','value'=>set_value('qualification',$data->qualification)]); ?>
		  			<?= form_error('qualification'); ?>
		  		</div>
	     	</div>
      	</div>

      	
  		<div class="row">
	   		<div class="col-lg-6">
	   			<label for="dateofbarth">Date-of-birth:</label>
	    		  <div class="form-group">
		         <?= form_input(['class'=>'form-control','placeholder'=>'Enter your date-of-birth...','name'=>'dateofbarth','required'=>'1','value'=>set_value('dateofbarth',$data->dateofbarth)]); ?>
		  		<?= form_error('dateofbarth'); ?>
		  		</div>
	  		</div>
	  		<div class="col-lg-6">
	  			<label for="thisis">Thisis:</label>
	    		  <div class="form-group">
		         <?= form_input(['class'=>'form-control','placeholder'=>'Enter your thisis...','name'=>'thisis','required'=>'1','value'=>set_value('thisis',$data->thisis)]); ?>
		  		<?= form_error('thisis'); ?>
		  		</div>
	     	</div>
      	</div>

      
  		<div class="row">
	   		<div class="col-lg-6">
		        <div class="form-group">
		        		<label for="phone">Phone:</label>
		         <?= form_input(['class'=>'form-control','placeholder'=>'Enter your phone...','name'=>'phone','required'=>'1','value'=>set_value('phone',$data->phone)]); ?>
		         <?= form_error('phone'); ?>
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
<?php include 'header.php' ?>


<h2>admin login form</h2>

<?= form_open('admin/login'); ?>

<div class="row">
	<div class="col-lg-6">
		<label for="">Username or email:</label>
		<div class="form-group">
		<?= form_input(['name'=>'email','class'=>'form-control','value'=>set_value('email'),'required'=>'1']); ?>
		<?= form_error('email') ?>	
		</div>
		
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<label for="">Password:</label>
		<div class="form-group">
		<?= form_password(['name'=>'pass','class'=>'form-control','value'=>set_value('pass'),'required'=>'1']); ?>
		<?= form_error('pass') ?>
		</div>
	</div>
</div>

<?= form_submit(['class'=>'btn btn-primary','value'=>'login']); ?>
<?= form_close(); ?>


<?php include 'header.php' ?>
<?php include 'header.php'; ?>

<!--flashdata part-->
<?php if($ice1st = $this->session->flashdata('ice1st')): ?>
<div class="alert alert-dismissible alert-primary">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
	<?= $ice1st ?>
</div>
<?php endif ?>
<?php if($ice1st = $this->session->flashdata('success')){ ?>
<div class="alert alert-dismissible alert-primary">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
	<?= $ice1st ?>
</div>
<?php }elseif($ice1st = $this->session->flashdata('fail')){ ?>
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
	<?= $ice1st ?>
</div>
<?php } ?>


<!--data table part-->

<div>
	<center><h1>ICE 2nd Bath student list</h1></center>
	<h4><?= anchor('ice2nd/ice2nds','Add_student',['class'=>'btn btn-primary']) ?></h4>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Image</th>
				<th>Name</th>
				<th>Email</th>
				<th>Fb_id</th>
				<th>school</th>
				<th>college</th>
				<th>City</th>
				<th>Blood_group</th>
				<th>Roll</th>
				<th>Phone</th>
				<th>Date-of-birth</th>
				<th>Activity</th>
				
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php  
				if($fatch_data->num_rows() > 0){
					foreach ($fatch_data->result() as $value) {
						
			?>
			<tr>
				<td><img src="<?= $value->img; ?>" alt="1" height="80" width="100"></td>
				<td> <?= $value->name;  	  ?> </td>
				<td> <?= $value->email;   	  ?> </td>
				<td> <?= $value->fb; 		  ?> </td>
				<td> <?= $value->school; 	  ?> </td>
				<td> <?= $value->college;	  ?> </td>
				<td> <?= $value->city; 		  ?> </td>
				<td> <?= $value->blood;		  ?> </td>
				<td> <?= $value->roll;		  ?> </td>
				<td> <?= $value->phone;       ?> </td>
				<td> <?= $value->dateofbarth; ?> </td>
				<td> <?= $value->activity;    ?> </td>
				
				<td> 
					<?=
						form_open('ice2nd/ice2ndEdit'),
						form_hidden('id',$value->id),
						form_submit(['name'=>'submit','value'=>'Edit','class'=>'btn btn-primary']),
						form_close()
					?>
				</td>
				<td>
					<?=
						form_open('ice2nd/ice2ndDelete'),
						form_hidden('id',$value->id),
						form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
						form_close()
					?>
				</td>
			</tr>
	<?php }}else{ echo "data not found";} ?>		
		</tbody>
	</table>
	
	
</div>






<?php include 'footer.php' ?>
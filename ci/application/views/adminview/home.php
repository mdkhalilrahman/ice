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
	<center><h1>Image</h1></center>
	<h4><?= anchor('home/homs','Add_Image',['class'=>'btn btn-primary']) ?></h4>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Title</th>
				<th>Image</th>
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
				<td> <?= $value->title;  	  ?> </td>
				<td><img src="<?= $value->img; ?>" alt="1" height="80" width="100"></td>
				
				
				<td> 
					<?=
						form_open('home/homEdit'),
						form_hidden('id',$value->id),
						form_submit(['name'=>'submit','value'=>'Edit','class'=>'btn btn-primary']),
						form_close()
					?>
				</td>
				<td>
					<?=
						form_open('home/homeDelete'),
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
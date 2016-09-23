<?php $this->load->view('layout/header');?>
<?php $this->load->view('layout/sidebar');?>
 <div class="container">
 <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $this->pageTitle;?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?= base_url();?>">Home</a>
                    </li>
                    <li><a href="<?= base_url('result');?>">Results</a></li>
                    <li class="active">Create</li>
                </ol>
            </div>
        </div>
<form method="POST" action="<?= base_url('result/create');?>">
	 	<div class="row">
	 		<?php if(!empty($this->session->flashdata('msg'))){?>
	 			<div class="alert alert-danger"><?= $this->session->flashdata('msg');?></div>
	 		<?php }elseif(!empty($this->session->flashdata('success'))){?>
	 			<div class="alert alert-success"><?= $this->session->flashdata('success');?></div>
	 			<?php }else{?>
	 		<?php }?>
	 		<div class="col-md-6">
	 			<div class="form-group">
	 			<label class="control-label">Seat Number</label>
	 			<input type="text" class="form-control" name="seat_number" placeholder="Seat Number">
	 			</div>
	 		</div>
	 		<div class="col-md-6">
	 			<div class="form-group">
	 				<label class="control-label">Fullname</label>
	 				<input type="text" class="form-control" name="name" placeholder="Surname first">
	 			</div>
	 		</div>
	 		<div class="col-md-6">
	 			<div class="form-group">
	 				<label class="control-label">Exam Type</label>
	 				<select class="form-control" name="exam_body">
	 				<?php foreach ($exam_body as $key => $value):?>
	 					<?php if(!$this->aauth->is_member('Admin',$value->id)){?>
						<option value="<?= $value->id;?>"><?= $value->name;?></option>
						<?php }?>	 					
					<?php endforeach;?>
	 				</select>
	 			</div>
	 		</div>
	 		<div class="col-md-6">
	 			<div class="form-group">
	 				<label class="control-label">Exam Year</label>
	 				<select class="form-control" name="exam_body">
	 				<?php foreach ($exam_body as $key => $value):?>
	 					<?php if(!$this->aauth->is_member('Admin',$value->id)){?>
						<option value="<?= $value->id;?>"><?= $value->name;?></option>
						<?php }?>	 					
					<?php endforeach;?>
	 				</select>
	 			</div>
	 		</div>

	 		<div class="col-md-6">
	 			<div class="form-group">
	 			<label class="control-label"> Age</label>
	 				<select class="form-control" name="age">
	 					<?php for($i=18; $i <= 60; $i++):?>
	 						<option value="<?= $i;?>"><?= $i;?></option>
	 					<?php endfor;?>
	 				</select>
	 			</div>
	 		</div>
	 		<div class="col-md-6">
	 			<div class="form-group">
	 			<label class="control-label"> Gender</label>
	 				<select class="form-control" name="sex">
	 					<option value="MALE">MALE</option>
	 					<option value="FEMALE">FEMALE</option>
	 				</select>
	 			</div>
	 		</div>
	 		<div class="col-md-6">
	 			<div class="form-group">
	 				<label class="control-label">Passport</label>
	 				<input type="file" name="userfile" class="form-control">
	 			</div>
	 		</div>
	 	</div>

	 	<div class="col-md-12">
	 		<div class="form-group">
	 		</div>
	 	</div>
 			<div class="pull-right">
		 		<div class="btn-group">
	 				<button class="btn btn-block btn-success" type="submit">Submit Result</button>
	 			</div>
	 		</div>
</form>
<?php $this->load->view('layout/footer');?>
 </div>

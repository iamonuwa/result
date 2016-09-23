<?php $this->load->view('layout/header');?>
<?php $this->load->view('layout/sidebar');?>
 <div class="container">
 <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Verification Application
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?= base_url();?>">Home</a>
                    </li>
                    <li class="active">Application</li>
                </ol>
            </div>
        </div>
<form method="POST" action="<?= base_url('application/create');?>">
	 	<div class="row">
	 		<?php if(!empty($this->session->flashdata('msg'))){?>
	 			<div class="alert alert-danger"><?= $this->session->flashdata('msg');?></div>
	 		<?php }elseif(!empty($this->session->flashdata('success'))){?>
	 			<div class="alert alert-success"><?= $this->session->flashdata('success');?></div>
	 			<?php }else{?>
	 		<?php }?>
	 		<div class="col-md-6">
	 			<div class="form-group">
	 			<label class="control-label">Applicatant Seat Number</label>
	 			<input type="text" class="form-control" name="seat_number" placeholder="Applicant Seat Number">
	 			</div>
	 		</div>
	 		<div class="col-md-6">
	 			<div class="form-group">
	 				<label class="control-label">Please select Exam Body</label>
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
	 			<label class="control-label"> Email Address</label>
	 			<input type="email" class="form-control" name="email" placeholder="Enter your email address">
	 			</div>
	 		</div>
	 		<div class="col-md-6">
	 			<div class="form-group">
	 				<label class="control-label">Phone Number</label>
	 				<input type="text" class="form-control" name="phone" placeholder="Phone Number">
	 			</div>
	 		</div>
	 	</div>
 			<div class="pull-right">
		 		<div class="btn-group">
	 				<button class="btn btn-block btn-success" type="submit">Submit Application</button>
	 			</div>
	 		</div>
</form>
<?php $this->load->view('layout/footer');?>
 </div>

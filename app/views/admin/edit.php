<?php $this->load->view('layout/header');?>
<?php $this->load->view('layout/sidebar');?>

 <div class="container">
 <div class="row">
            <div class="col-lg-12"><h1><?= $this->pageTitle;?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?= base_url();?>">Home</a>
                    </li>
                    <li>Accounts</li>
                    <li class="active">Modify</li>
                </ol>
            </div>
        </div>

        <form method="POST" action="<?= base_url('admin/accounts/'.$account->id);?>">
           <?php if(!empty($this->session->flashdata('msg'))){?>
                <div class="alert alert-danger"><?= $this->session->flashdata('msg');?></div>
            <?php }elseif(!empty($this->session->flashdata('success'))){?>
                <div class="alert alert-success"><?= $this->session->flashdata('success');?></div>
                <?php }else{?>
            <?php }?>
            <div class="row">

                <div class="col-md-8">
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <input type="text" value="<?= $account->name;?>" name="name" placeholder="Name" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Email Address</label>
                        <input type="email" name="email" value="<?= $account->email;?>" placeholder="Email Address" class="form-control">
                    </div>
                </div>
            </div>
                <div class="btn-group pull-right">
                    <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
                </div>
        </form>
<?php $this->load->view('layout/footer');?>
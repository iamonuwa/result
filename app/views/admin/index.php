<?php $this->load->view('layout/header');?>
<?php $this->load->view('layout/sidebar');?>

 <div class="container">
 <div class="row">
            <div class="col-lg-12"><h1><?= $this->pageTitle;?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?= base_url();?>">Home</a>
                    </li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>

       <div class="row">
                <div class="col-lg-12">
           <?php if(!empty($this->session->flashdata('msg'))){?>
                <div class="alert alert-danger"><?= $this->session->flashdata('msg');?></div>
            <?php }elseif(!empty($this->session->flashdata('success'))){?>
                <div class="alert alert-success"><?= $this->session->flashdata('success');?></div>
                <?php }else{?>
            <?php }?>                       
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Accounts
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table id="result" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email Address</th>
                                            <th>Last Login</th>
                                            <th>Status</th>
                                            <th>IP Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($users as $key => $value):?>
                                            <tr>
                                                <td><?= $value->name;?></td>
                                                <td><?= $value->email;?></td>
                                                <td><?= $value->last_login;?></td>
                                                <td><?= ($value->banned == 0) ? '<a href="'.base_url('admin/accounts/deactivate/'.$value->id).'" class="btn-link">Active</a>' : '<a href="'.base_url('admin/accounts/activate/'.$value->id).'" class="btn-link">Inactive</a>';?></td>
                                                <td><?= $value->ip_address;?></td>
                                                <td>
                                                <a href="<?= base_url('admin/accounts/'.$value->id);?>" class="btn btn-primary">Modify</a>
                                                <a href="<?= base_url('admin/accounts/delete/'.$value->id);?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div> 
                            <div class="btn-group">
                                <a href="<?= base_url('admin/accounts/create');?>" class="btn btn-success">Create New Account</a>
                            </div>
                        <div class="clearfix"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
<?php $this->load->view('layout/footer');?>
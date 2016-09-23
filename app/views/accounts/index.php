<?php $this->load->view('layout/header');?>
<?php $this->load->view('layout/sidebar');?>

 <div class="container">
 <div class="row">
            <div class="col-lg-12"><h1><?= $this->aauth->get_user()->name;?>
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
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Applicants
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table id="result" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Seat Number</th>
                                            <th>Email Address</th>
                                            <th>Phone</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($applicants as $key => $value):?>
                                            <tr>
                                                <td><?= $value->seat_number;?></td>
                                                <td><?= $value->email;?></td>
                                                <td><?= $value->phone;?></td>
                                                <td><?= $value->created_on;?></td>
                                                <td><a href="<?= base_url('accounts/'.$value->id);?>" class="btn btn-default">Verify</a></td>
                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
<?php $this->load->view('layout/footer');?>
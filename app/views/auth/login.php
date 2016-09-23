<?php $this->load->view('layout/header');?>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                    <div class="text-center">
                    <?php if(!empty($this->session->flashdata('msg'))){?>
                        <div class="alert alert-error"><?= $this->session->flashdata('msg');?></div>
                        <?php }else{?>
                    <?php }?>
                    </div>
                        <form role="form" method="POST" autocomplete="off" action="<?= base_url('index/login');?>">
                            <fieldset>
                                <div class="form-group">
                                    <label class="control-label">Email Address</label>
                                    <input class="form-control" placeholder="Email Address" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Password</label>
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                                <div class="pull-right">
                                    <a href="<?= base_url('index/reset');?>" class="btn-link">Forgot Password?</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('layout/footer');?>
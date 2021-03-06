<?php $this->load->view('layout/header');?>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Password Reset</h3>
                    </div>
                    <div class="panel-body">
                    <div class="text-center">
                    <?php if(!empty($this->session->flashdata('msg'))){?>
                        <div class="alert alert-error"><?= $this->session->flashdata('msg');?></div>
                        <?php }else{?>
                    <?php }?>
                    </div>
                        <form role="form" method="POST" action="<?= base_url('index/login');?>">
                            <fieldset>
                                <div class="form-group">
                                    <label class="control-label">Enter your email address</label>
                                    <input class="form-control" placeholder="Enter your email address" name="email" type="email" autofocus>
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Send me the reset code</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('layout/footer');?>
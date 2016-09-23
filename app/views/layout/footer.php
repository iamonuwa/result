<?php if($this->uri->segment(2) == 'login' || $this->uri->segment(2) == 'reset'){?>
<?php } else{?>
 <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <?= date('Y');?> Result Verification System.</p>
                </div>
            </div>
        </footer>
<?php }?>
    <script src="<?= base_url('public_html/js/jquery.js');?>"></script>
    <script src="<?= base_url('public_html/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('public_html/datatables/media/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?= base_url('public_html/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?= base_url('public_html/datatables/dataTables.bootstrap.min.js')?>"></script>
    <script>
    $('.carousel').carousel({
        interval: 5000 
    })
     $(function () {
    $("#result").DataTable();
    });
    </script>
</body>

</html>

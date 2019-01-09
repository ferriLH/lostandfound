
</div>
<script src="<?php echo base_url()?>assets/back/CoolAdmin-master/vendor/jquery/dist/jquery.min.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url()?>assets/back/CoolAdmin-master/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/back/CoolAdmin-master/vendor//datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- Jquery JS-->
<!--<script src="--><?php //echo base_url();?><!--/assets/back/CoolAdmin-master/vendor/jquery-3.2.1.min.js"></script>-->
<!-- Bootstrap JS-->
<script src="<?php echo base_url();?>assets/back/CoolAdmin-master/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/back/CoolAdmin-master/vendor/bootstrap-4.1/bootstrap.min.js"></script>

<!-- Vendor JS       -->
<script src="<?php echo base_url();?>assets/back/CoolAdmin-master/vendor/slick/slick.min.js">
</script>
<script src="<?php echo base_url();?>assets/back/CoolAdmin-master/vendor/wow/wow.min.js"></script>
<script src="<?php echo base_url();?>assets/back/CoolAdmin-master/vendor/animsition/animsition.min.js"></script>
<script src="<?php echo base_url();?>assets/back/CoolAdmin-master/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="<?php echo base_url();?>assets/back/CoolAdmin-master/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url();?>assets/back/CoolAdmin-master/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="<?php echo base_url();?>assets/back/CoolAdmin-master/vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?php echo base_url();?>assets/back/CoolAdmin-master/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo base_url();?>assets/back/CoolAdmin-master/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/back/CoolAdmin-master/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="<?php echo base_url();?>/assets/back/CoolAdmin-master/js/main.js"></script>

<script>
    $(function () {
        $('#barang').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
        //$('#owner').DataTable()
    })
</script>

</body>

</html>
<!-- end document-->
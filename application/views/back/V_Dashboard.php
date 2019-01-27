<?php
$this->load->view("back/parts/V_Header");
$this->load->view("back/parts/V_Navigation");

?>
<link rel="stylesheet" href="<?php echo base_url()?>assets/back/CoolAdmin-master/vendor/bootstrap/dist/css/bootstrap.min.css">

                <div class="col-xl-9">
                    <!-- PAGE CONTENT-->
                    <div class="page-content">
                        <div class="row">

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border">
                                    <div class="au-card-title" style="background-image:url('<?php echo base_url();?>/assets/back/CoolAdmin-master/images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>
                                            <?php echo date("d M");echo ", ";echo date("Y");?>
                                        </h3>
                                    </div>
                                    <div class="au-task js-list-load au-task--border">
                                        <div class="au-task__title">
                                            <p>List Stuffs</p>
                                        </div>
                                        <div class="au-task-list js-scrollbar3 table-responsive">
                                            <table id="barang" class="table table-hover table-striped">
                                                <thead>
                                                <tr>
                                                    <th>action</th>
                                                    <th>Label</th>
                                                    <th>Name</th>
                                                    <th>Photo</th>
                                                    <th>Desc</th>
                                                    <th>City</th>
                                                    <th>Univ</th>
                                                    <th>Date</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                foreach ($barang as $brg){
                                                    ?>
                                                    <tr>
                                                        <td class="btn-group">
                                                            <a href="<?php echo base_url('C_Stuff/delete_stuffs/');echo $brg->id_barang."/";echo $this->session->userdata('id_user');?>">
                                                                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </a>
                                                            <a href="<?php echo base_url('C_Stuff/update_stuffs/');echo $brg->id_barang;?>">
                                                                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Edit">
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                            </a>
                                                        </td>
                                                        <td class="mailbox-name"><?php  echo $brg->nama_label;?></td>
                                                        <td class="mailbox-name"><?php  echo $brg->nama_barang;?></td>
                                                        <td class="mailbox-name"><img width="50px" src="<?php echo base_url('foto_barang/');echo $brg->foto_barang;?>" alt="foto"></td>
                                                        <td class=""><?php  echo  mb_strimwidth($brg->deskripsi, 0, 50, "...");?></td>
                                                        <td class=""><?php  echo $brg->nama_kota;?></td>
                                                        <td class=""><?php  echo $brg->nama_univ;?></td>
                                                        <td class=""><?php  echo $brg->tanggal_upload;?></td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="au-task__footer">
                                            <button class="au-btn au-btn-load js-load-btn">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTENT-->
                </div>
            </div>
        </div>
    </section>
</div>
<!-- END PAGE CONTENT  -->

<?php
$this->load->view("back/parts/V_Footer");
?>


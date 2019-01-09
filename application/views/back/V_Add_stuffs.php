<?php
$this->load->view("back/parts/V_Header");
$this->load->view("back/parts/V_Navigation");

?>
<div class="col-xl-9">
    <!-- PAGE CONTENT-->
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Add</strong> Stuffs
                    </div>
                    <?php
                    if (validation_errors() || $this->session->flashdata('result')) {
                        ?>
                        <div class="alert alert-primary">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Succes</strong>
                            <?php echo validation_errors(); ?>
                            <?php echo $this->session->flashdata('result'); ?>
                        </div>
                    <?php } ?>
                    <form action="<?php echo base_url('C_Stuff/add/');echo $this->session->userdata('id_user');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="card-body card-block">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Stuff label/category</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="label" placeholder="Input label/category" class="form-control">
                                    <small class="form-text text-muted">e.g. Wallet</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Stuff Name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="nama" placeholder="Input stuff name" class="form-control">
                                    <small class="form-text text-muted">e.g. Louis Vuitton Wallet</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Description</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Description..." class="form-control"></textarea>
                                </div>
                            </div>
                            <script src="<?php echo base_url()?>assets/back/CoolAdmin-master/vendor/jquery/dist/jquery.min.js"></script>
                            <script type="text/javascript">
                                $(function(){
                                    $.ajaxSetup({
                                        type:"GET",
                                        url: "<?php echo base_url('C_Stuff/ambil_data') ?>",
                                        cache: false,
                                    });
                                    $("#select-kota").change(function(){
                                        var value=$(this).val();
                                        if(value>0){
                                            $.ajax({
                                                data:{modul:'kota',id:value},
                                                success: function(respond){
                                                    $("#select-univ").html(respond);
                                                }
                                            })
                                        }
                                    });
                                })
                            </script>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">City/District</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="kota" id="select-kota" class="form-control">
                                        <option value="0"> - Choose - </option>
                                        <?php
                                        foreach ($data_kota as $dk){
                                            ?>
                                            <option
                                                    value="<?php echo $dk->id_kota;?>"
                                                    label="<?php echo $dk->nama_kota;?>"
                                            >

                                            </option>
                                        <?php } ?>                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">University</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="univ" id="select-univ" class="form-control">
                                        <option value="0">Please select city</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="date-input" class=" form-control-label">Date</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="date" id="date-input" name="date-input" class="form-control">
                                    <small class="help-block form-text">Input Date</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class=" form-control-label">Stuff Pictures</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="file-input" name="foto" class="form-control-file">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <input type="reset" class="btn btn-danger" value="Reset">
                        </div>
                    </form>
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
    <?php
    $this->load->view("back/parts/V_Footer");
    ?>


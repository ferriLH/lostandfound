<?php
$this->load->view("back/parts/V_Header");
$this->load->view("back/parts/V_Navigation");

?>
<div class="col-xl-9">
    <!-- PAGE CONTENT-->
    <div class="page-content">
        <div class="row">

        </div>
        <div class="row">
           <div class="col-lg-12">
                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border">
                    <div class="au-card-title" style="background-image:url('<?php echo base_url();?>assets/back/CoolAdmin-master/images/bg-title-02.jpg');">
                        <div class="bg-overlay bg-overlay--blue"></div>
                        <h3>
                            <i class="zmdi zmdi-comment-text"></i>New Messages</h3>
                    </div>
                    <div class="au-inbox-wrap js-inbox-wrap">
                        <div class="au-message js-list-load">
                            <div class="au-message__noti">
                                <p>You Have
                                    <span><?php echo count($notif_new_inbox);?></span>
                                    unred messages
                                </p>
                            </div>
                            <div class="au-message-list">
                                <?php foreach ($inbox as $i){?>
                                <div class="<?php if ($i->status==0){echo 'au-message__item unread';}else{echo 'au-message__item';}?>">
                                    <div class="au-message__item-inner">
                                        <div class="au-message__item-text">
                                            <div class="avatar-wrap">
                                                <div class="avatar">
                                                    <img src="<?php echo base_url('foto_user/').$i->file_foto?>" alt="<?php echo $i->nama?>">
                                                </div>
                                            </div>
                                            <div class="text">
                                                <h4 class="name"><?php echo $i->nama?></h4>
                                                <h5><?php echo $i->subjek?></h5>
                                                <p><?php echo mb_strimwidth($i->pesan, 0, 50, "...")?></p>
                                            </div>
                                        </div>
                                        <div class="au-message__item-time">
                                            <span><?php echo $i->waktu?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                            <div class="au-message__footer">
                                <button class="au-btn au-btn-load js-load-btn">load more</button>
                            </div>
                        </div>
                        <div class="au-chat">
                            <div class="au-chat__title">
                                <div class="au-chat-info">
                                    <?php foreach ($inbox as $i){?>
                                    <div class="avatar-wrap online">
                                        <div class="avatar avatar--small">
                                            <a href="">
                                                <img src="<?php echo base_url('foto_user/').$i->file_foto?>" alt="<?php echo $i->nama?>">
                                            </a>
                                        </div>
                                    </div>
                                    <span class="nick">
                                        <a href=""><?php echo $i->nama?></a>
                                    </span>
                                    <button class="au-input-icon">
                                        <a href=""><i class="zmdi zmdi-arrow-back"></i></a>
                                    </button>
                                     <?php break;}?>
                                </div>
                            </div>
                            <div class="au-chat__content">
                                <div class="recei-mess-wrap">
                                    <span class="mess-time">12 Min ago</span>
                                    <div class="recei-mess__inner">
                                        <div class="avatar avatar--tiny">
                                            <img src="<?php echo base_url('assets/back/CoolAdmin-master');?>images/icon/avatar-02.jpg" alt="John Smith">
                                        </div>
                                        <div class="recei-mess-list">
                                            <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                            <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="send-mess-wrap">
                                    <span class="mess-time">30 Sec ago</span>
                                    <div class="send-mess__inner">
                                        <div class="send-mess-list">
                                            <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="au-chat-textfield">
                                <form class="au-form-icon">
                                    <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                                    <button class="au-input-icon">
                                        <i class="zmdi zmdi-mail-send"></i>
                                    </button>
                                </form>
                            </div>
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


<?php $this->load->view('includes/page_head');?>
    <link href="<?php echo base_url();?>assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css"> <body class="fixed-left">
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <?php $this->load->view('includes/top_head');?>
            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start ========== -->
            <?php $this->load->view('includes/side_menu');?>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Milla</h4>
                                <p class="text-muted page-title-alt">Welcome to Milla Dashboard!</p>
                            </div>
                        </div>
                        <div class="row">
                          <a href="<?php echo base_url()?>milla/users">
                            <div class="col-md-6 col-lg-4">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-info pull-left">
                                        <i class="fa fa-user text-info"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">Users</b></h3>
                                        <p class="text-muted">Registered Users Details</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            </a>
                          <a href="<?php echo base_url()?>milla/lost">
                            <div class="col-md-6 col-lg-4">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-info pull-left">
                                        <i class="fa fa-briefcase text-info"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">Lost</b></h3>
                                        <p class="text-muted">Things lost information</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                          </a>
                          <a href="<?php echo base_url()?>milla/found">
                            <div class="col-md-6 col-lg-4">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-info pull-left">
                                        <i class="fa fa-bolt text-info"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">Found</b></h3>
                                        <p class="text-muted">Things Found information</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                          </a>
                          <a href="<?php echo base_url()?>milla/claims">
                            <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-info pull-left">
                                        <i class="fa fa-hashtag text-info"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">Claims</b></h3>
                                        <p class="text-muted">Users Claims</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                          </a>
                        </div>
                    </div> <!-- container -->

                </div> <!-- content -->
                
                <footer class="footer text-right">
                    2016 © PortFolio.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
<?php $this->load->view('includes/page_footer');?>
<script type="text/javascript">
    // $(function(){
    //       swal("Here's a message!");
    // });
    // setTimeout(function(){
    //     swal('You Can Set Your Url Name From Settings');
    // },5000);
</script>
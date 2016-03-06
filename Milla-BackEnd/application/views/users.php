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
                          <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Users </b></h4>
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if (!empty($Users)) {
                                            foreach ($Users as $EachUser) {
                                            echo '<tr>
                                                    <td>'.$EachUser->username.'</td>
                                                    <td>'.$EachUser->contactno.'</td>
                                                    <td>'.$EachUser->email.'</td>
                                                    <td>'.$EachUser->address.'</td>
                                                  </tr>';   
                                            }
                                        }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
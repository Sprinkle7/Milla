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
                                    <h4 class="m-t-0 header-title"><b>Found </b></h4>
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Longitude</th>
                                                <th>Latitude</th>
                                                <th>Address</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if (!empty($Found)) {
                                            foreach ($Found as $EachFound) {
                                            echo '<tr>
                                                    <td>'.$EachFound->title.'</td>
                                                    <td>'.$EachFound->desc.'</td>
                                                    <td>'.$EachFound->long.'</td>
                                                    <td>'.$EachFound->lat.'</td>
                                                    <td>'.$EachFound->address.'</td>
                                                    <td><a href="#" class="btn btn-default btn-xs">Show Details</a></td>
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
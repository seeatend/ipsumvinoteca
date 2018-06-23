<style>
.modal-dialog {width:800px;}
.thumbnail {margin-bottom:6px;}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h4>
            <?php echo !empty($getdetailbooking-> 	customer_name) ? $getdetailbooking-> 	customer_name : ''; ?> 's Details
        </h4>
        <ol class="breadcrumb">
            <!--<li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>-->
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/ipsum-onlinebooking-view'); ?>">Online Booking</a></li>
            <li class="breadcrumb-item active">Online Booking Detail</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="container-fluid">
            
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">

                        <li><a class="<?php echo empty($_GET) ? "active" : '' ?>" href="#timeline" data-toggle="tab">Basic Information</a></li>
<!--                        <li><a href="#overview" class="<?php echo!empty($_GET['search_y']) ? "active" : '' ?>" data-toggle="tab" id="art">Overview</a></li>
                         <li><a href="#Package" class="<?php echo!empty($_GET['search_y']) ? "active" : '' ?>" data-toggle="tab" id="art">Package</a></li>
                        <li><a href="#highlights" class="<?php echo!empty($_GET['search_h']) ? "active" : '' ?>" data-toggle="tab" id="art">Highlights</a></li>
                        <li><a href="#styles" class="<?php echo!empty($_GET['search_i']) ? "active" : '' ?>" data-toggle="tab">Styles</a></li>
                        <li><a href="#additional_box" class="<?php echo!empty($_GET['search_t']) ? "active" : '' ?>" data-toggle="tab">Additional Boxes</a></li>
                        <li><a href="#gallery" class="<?php echo!empty($_GET['search_r']) ? "active" : '' ?>" data-toggle="tab">Gallery</a></li>-->


                    </ul>

                    <div class="tab-content">

                        <div class="<?php echo empty($_GET) ? "active" : '' ?> tab-pane" id="timeline">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Customer Name :</label> <br>
                                            <p> <?php echo !empty($getdetailbooking-> 	customer_name ) ? $getdetailbooking-> 	customer_name : ''; ?></p>
                                        </div>


                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Customer Email :</label> <br>
                                            <p>  <?php echo !empty($getdetailbooking-> 	customer_email ) ? $getdetailbooking-> 	customer_email  : ''; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Customer Phone :</label><br> 
                                            <p><?php echo !empty($getdetailbooking-> 	customer_phone ) ? $getdetailbooking-> 	customer_phone  : ''; ?></p>
                                        </div>


                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Customer Message :</label><br>
                                            <p><?php echo !empty($getdetailbooking-> 	customer_message) ? $getdetailbooking-> 	customer_message : ''; ?></p>
                                        </div>
                                    </div>
<!--                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Country :</label><br> 
                                            <p> <?php echo !empty($getdetailbooking-> 	status ) ? $getdetailbooking-> 	status  : ''; ?></p>
                                        </div>


                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;">  State :</label><br>
                                            <p> <?php echo !empty($yoga_detail_retreat->name) ? $yoga_detail_retreat->name : ''; ?></p>
                                        </div>
                                    </div>-->
<!--                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Skills :</label> <br>
                                            <p>  <?php echo !empty($yoga_detail_retreat->skill_level) ? $yoga_detail_retreat->skill_level : ''; ?></p>
                                        </div>


                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Packeges :</label><br>
                                            <p><?php echo (!empty($yoga_detail_retreat->package_id) && $yoga_detail_retreat->package_id == 1) ? "India" : ''; ?></p>
                                        </div>
                                    </div>-->
<!--                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;">Instructions Languages :</label><br> 
                                            <p><?php echo!empty($yoga_detail_retreat->additional_languages) ? $yoga_detail_retreat->additional_languages : ''; ?><p>
                                        </div>


                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;">Spoken Languages :</label><br>
                                            <p><?php echo!empty($yoga_detail_retreat->spoken_languages) ? $yoga_detail_retreat->spoken_languages : ''; ?></p>
                                        </div>
                                    </div>-->
                                   



                                </div>





                            </div>
                        </div>
                        
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            
            <!-- /.col -->
        </div>
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>
<div tabindex="-1" class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
		<button class="close" type="button" data-dismiss="modal">×</button>
		<h3 class="modal-title">Heading</h3>
	</div>
	<div class="modal-body">
		
	</div>
	
   </div>
  </div>
</div>
<!-- /.content-wrapper -->

 




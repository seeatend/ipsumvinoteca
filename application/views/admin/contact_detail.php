<style>
.modal-dialog {width:800px;}
.thumbnail {margin-bottom:6px;}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h4>
            <?php echo !empty($getdetailcontact-> 	contact_name) ? $getdetailcontact-> 	contact_name : ''; ?> 's Details
        </h4>
        <ol class="breadcrumb">
            <!--<li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>-->
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/ipsum-contactquery-view'); ?>">Contact Query</a></li>
            <li class="breadcrumb-item active">Detail</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="container-fluid">
            
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">

                        <li><a class="<?php echo empty($_GET) ? "active" : '' ?>" href="#timeline" data-toggle="tab">Basic Information</a></li>


                    </ul>

                    <div class="tab-content">

                        <div class="<?php echo empty($_GET) ? "active" : '' ?> tab-pane" id="timeline">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Contact Name :</label> <br>
                                            <p> <?php echo !empty($getdetailcontact-> 	contact_name ) ? $getdetailcontact-> 	contact_name : ''; ?></p>
                                        </div>


                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Contact Email :</label> <br>
                                            <p>  <?php echo !empty($getdetailcontact-> 	contact_email ) ? $getdetailcontact-> 	contact_email  : ''; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Contact Phone :</label><br> 
                                            <p><?php echo !empty($getdetailcontact-> 	contact_phone ) ? $getdetailcontact-> 	contact_phone  : ''; ?></p>
                                        </div>


                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Address :</label><br>
                                            <p><?php echo !empty($getdetailcontact-> 	address) ? $getdetailcontact-> 	address : ''; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> City :</label><br> 
                                            <p> <?php echo !empty($getdetailcontact-> 	city ) ? $getdetailcontact-> 	city  : ''; ?></p>
                                        </div>


                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;">  Post Code :</label><br>
                                            <p> <?php echo !empty($getdetailcontact->post_code) ? $getdetailcontact->post_code : ''; ?></p>
                                        </div>
                                    </div>
                                   <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-control" style="font-weight:bold;"> Message :</label> <br>
                                            <p>  <?php echo !empty($getdetailcontact->message) ? $getdetailcontact->message : ''; ?></p>
                                        </div>


                                     <!--   <div class="col-md-6">
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

 




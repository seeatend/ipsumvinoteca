<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h4>
             Events
        </h4>
        <ol class="breadcrumb">
            <!--<li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Online Booking</a></li>-->
            <li class="breadcrumb-item active">Online Events</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <!-- /.box -->

                <div class="box padding-0">
                    <div class="box-header">
                        <div class="row">
                            <div class="col-md-10 col-sm-9">
                                <h3 class="box-title mt-10">All Events</h3>
                            </div>
                            <div class="col-md-2 col-sm-3 text-right">
                                <button class="btn btn-social-icon btn-circle checkalldelete" data-toggle="modal" data-target="#modal-primary" value="" data-href="<?php echo base_url('admin/ipsum-onlinebooking-delete'); ?>"><i class="glyphicon glyphicon-trash"></i></button>
                                <!--<a href="<?php echo base_url('admin/yoga-category-add'); ?>"><button class="btn btn-social-icon btn-circle"><i class="fa fa-plus"></i></button></a>-->
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->

                    <?php
                    $flashdata = $this->session->flashdata('success');
                    if (!empty($flashdata)) {
                        ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <!-- <h4><i class="icon fa fa-check"></i> Alert!</h4>-->
                        <?php echo $flashdata; ?>
                        </div>
                    <?php } ?>

                    <div class="box-body">
                        <table id="" class="table table-bordered table-hover display nowrap margin-top-10 table-responsive example1" cellspacing="0" width="100%">
                            <thead>
                                <tr> 
                                    <th data-sortable="false">
                                        <div class="controls">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" name="styled_single_checkbox" class="custom-control-input checkall"> 
                                                <span class="custom-control-indicator"></span> 
                                            </label>
                                        </div> 
                                    </th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Link</th>
                                    <th data-sortabDatele="false">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($arrEvents)) {
                                    foreach ($arrEvents as $eventObj) {
                                        ?>
                                        <tr>
                                            <th>
                                                <div class="controls">
                                                    <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" required value="<?php echo $eventObj->id; ?> " name="single_checkbox" class="custom-control-input checkItemdelete"> <span class="custom-control-indicator"></span> </label>
                                                </div> 
                                            </th>
                                            <td><a href="<?php echo base_url('admin/ipsum-event-detail' . '/' . $eventObj->id); ?>"><?php echo  $eventObj->title  ; ?></a></td>
                                            <td><?php echo $eventObj->date; ?></td>
                                            <td><?php echo  $eventObj->link; ?></td>
                                            <td>
                                                <button class="btn btn-social-icon btn-circle delyogacenter" data-toggle="modal" data-target="#modal-primary" value="<?= $eventObj->id; ?>" data-href="<?php echo base_url('admin/ipsum-event-delete') . '/' . $eventObj->id; ?>"><i class="glyphicon glyphicon-trash"></i></button>
                                            </td>
                                        </tr>
                                <?php } 
                                    } else { ?>
                                        <tr>
                                            <td colspan="9"><h4 style="text-align: center;color: red;">No Records Found</h4></td>
                                        </tr>
                                <?php } ?>
                            </tbody>
                        </table>


                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->  
            </div>

        </div>
    </section>

    <!-- /.content -->
</div>

<!-- /.content-wrapper -->



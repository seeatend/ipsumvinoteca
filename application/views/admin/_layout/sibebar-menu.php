<?php
$controller = $this->router->fetch_class();
//var_dump($controller);exit;
?>

<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="treeview active">
        <a href="#">
            <i class="fa fa-files-o"></i> Manage Booking
        </a>
        <ul class="treeview-menu">
<!--            <li class=""><a href="<?php echo base_url('admin/ipsum-onlinebooking-view'); ?>">View List</a></li>-->
            <li><a href="<?php echo base_url('admin/ipsum-onlinebooking-view'); ?>">Online Booking</a></li>
            <li><a href="<?php echo base_url('admin/ipsum-contactquery-view'); ?>">Contact</a></li>
        </ul>
    </li>

</ul>
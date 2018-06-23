<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/assets/stylesheets/fullcalendar.css">
<!-- Javascript -->
<script src="<?php echo base_url(); ?>assets/front/assets/javascripts/vendor/head.core.min.js" type="text/javascript" charset="utf-8"></script>

<div id="banner" class="overlay">
    <img class="img-fluid" src="<?php echo base_url(); ?>assets/front/assets/images/banner/banner5.jpg" alt="Banner">
    <div class="description">
        <div class="container">
            <h1>
                Events
            </h1>         
        </div>
    </div>
</div>
<!-- /Banner -->

<!-- Content -->
<div id="content">
    <!-- Section -->
    <section class="section pattern" id="events">
        <div class="container">
            <h3 class="h3 mb-4  text-center">
                Coming events
            </h3>  
            <div class="calendar-outer">
                <div id="fullCalendar"></div>   
            </div>

        </div>
    </section>
    <!-- /Section -->  
</div>
<script src="<?php echo base_url(); ?>assets/front/assets/javascripts/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/assets/javascripts/bootstrap-datetimepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/front/assets/javascripts/jquery.sharrre.js"></script>
<script src="<?php echo base_url(); ?>assets/front/assets/javascripts/fullcalendar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/assets/javascripts/app_cal.js"></script>
<script src="<?php echo base_url(); ?>assets/front/assets/javascripts/events.js"></script>
<script type="text/javascript">
    $(document).ready(function ($){
        appointmentCalender.initClientCalendar();        
    });
</script>
<!-- Custom JS Code for this page -->

<style>
    #fullCalendar .fc-toolbar .fc-center{
        display: none;
    }

    #fullCalendar .fc-toolbar .fc-right .fc-today-button{
        display: none;
    }

    .fc-toolbar .fc-left{
        width:100%;
        float: none;
    }
    .fc-view table tr td{
        background: #fff;
        color: #4c4c4c;
    }

    .fc-view table tr td.fc-widget-header{
        background: #3d3d3d;
        color:#fff;
    }

    .fc-view table tr td.fc-other-month{
        color:#b5b5b5;
    }

    .fc-unthemed th, .fc-unthemed td, .fc-unthemed thead, .fc-unthemed tbody, .fc-unthemed .fc-divider, .fc-unthemed .fc-row, .fc-unthemed .fc-content, .fc-unthemed .fc-popover, .fc-unthemed .fc-list-view, .fc-unthemed .fc-list-heading td{
        border-color: #e4d69c;
    }
    .fc-unthemed th{
        border-color: #e4d69c;
    }

    .fc-unthemed th {
        border-color: #e4d69c;
        font-weight: normal;
        text-transform: uppercase;
        font-size: 14px;
    }
    .fc-day-grid-event .fc-time{
        display: none;
    }
    .fc-unthemed .fc-content{
        position: relative
    }

</style>





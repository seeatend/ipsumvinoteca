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
            <div id="eventContent" title="Event Content" style="display:none;">
                <form class="form" method="POST" action="">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input required="" name="title" id="title" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input required="" name="startTime" id="startTime" type="text" class="form-control" />
                        </div>
                        <div class="form-group col-md-6">
                            <input required="" name="endTime" id="endTime" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input required="" name="link" id="link" type="text" class="form-control" />
                        </div>
                    </div>
                </form>
            </div>
        
            <div id="eventAdd" title="Add Event" style="display:none;">
                <form class="form" method="POST" action="">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input required="" name="title" id="title" type="text" class="form-control" placeholder="Event Name *" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input required="" name="link" id="link" type="text" class="form-control" placeholder="Event Link *" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <button type="button" id="submitAppointment" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /Section -->  
</div>
<script src="<?php echo base_url(); ?>assets/front/assets/javascripts/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/assets/javascripts/bootstrap-datetimepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modal.js"></script>
<script src="<?php echo base_url(); ?>assets/front/assets/javascripts/jquery.sharrre.js"></script>
<script src="<?php echo base_url(); ?>assets/front/assets/javascripts/fullcalendar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/assets/javascripts/app_cal.js"></script>
<script src="<?php echo base_url(); ?>assets/front/assets/javascripts/events.js"></script>
<script type="text/javascript">
    var BASE_URL = "<?php echo base_url(); ?>";
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
    #eventContent .form .form-group, #eventAdd .form .form-group {
        margin: 1rem 0;
    }

</style>





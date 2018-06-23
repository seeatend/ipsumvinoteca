/* 
 * handle all the appointment calender related js
 * @author shiv kumar tiwari
 * @version 1.0
 * @date 1 April 2017
 */
appointmentCalender = {
    initClientCalendar: function () {
        $calendar = $('#fullCalendar');
        today = new Date();
        y = today.getFullYear();
        m = today.getMonth();
        d = today.getDate();
        $thisObj = this;
        //console.log(clientEvents);
        $calendar.fullCalendar({
            viewRender: function (view, element) {
                // We make sure that we activate the perfect scrollbar when the view isn't on Month
                if (view.name != 'month') {
                    $(element).find('.fc-scroller').perfectScrollbar();
                }
            },
            header: {
                left: 'title',
                center: 'month,agendaWeek,agendaDay',
                right: 'prev,next,today'
            }, select: function (start, end, jsEvent, view) {
                if (moment().diff(start, 'days') > 0) {
                    $calendar.fullCalendar('unselect');
                    // or display some sort of alert
                    return false;
                }
            },
            eventClick: function (clientEvents, jsEvent, view) {
                $("#eventContent").dialog({
                    autoOpen: false

                }

                );
                $("#title").val(clientEvents.title);
                $("#startTime").val(clientEvents.start);
                $("#endTime").val(clientEvents.end);
                $("#eventLink").val(clientEvents.url);

                $('#eventContent').dialog('open');
            },
            defaultDate: today,
            selectable: true,
            selectHelper: true,
            views: {
                month: {// name of view
                    titleFormat: 'MMMM YYYY'
                            // other view-specific options here
                },
                week: {
                    titleFormat: " MMMM D YYYY"
                },
                day: {
                    titleFormat: 'D MMM, YYYY'
                }
            },
            viewRender: function (view, element) {

                curdate = new Date();
                viewdate = new Date(view.start);

                // PREV - force minimum display month to current month
                if (new Date(viewdate.getFullYear(), viewdate.getMonth() + 1, 1).getTime() <=
                        new Date(curdate.getFullYear(), curdate.getMonth(), 1).getTime()) {
                    $('.fc-prev-button').prop('disabled', true);
                    $('.fc-prev-button').css('opacity', 0.5);
                } else {
                    $('.fc-prev-button').prop('disabled', false);
                    $('.fc-prev-button').css('opacity', 1);
                }

                // NEXT - force max display month to a year from current month
                if (new Date(viewdate.getFullYear(), viewdate.getMonth() + 1).getTime() >=
                        new Date(curdate.getFullYear() + 1, curdate.getMonth() + 1).getTime()) {
                    $('.fc-next-button').prop('disabled', true);
                    $('.fc-next-button').css('opacity', 0.5);
                } else {
                    $('.fc-next-button').prop('disabled', false);
                    $('.fc-next-button').css('opacity', 1);
                }
            },
                    select: function (start, end) {
                        if (moment().diff(start, 'days') > 0) {
                            $calendar.fullCalendar('unselect');
                            // or display some sort of alert
                            alert('Event is start in the past!');

                            return false;
                        }

                        $('#modelTitle').html("Create an Appointment");
                        $('#modelBody').html(htmlTemplate);
                        $('#ok_button').html('<button type="button" id="submitAppointment" class="btn btn-success">Submit</button>');
                        $('#modal-1').modal('show', {backdrop: 'fade'});
                        // click on the submit button
                        var $objDate = moment(start, "YYYY-MM-DD HH:mm");
                        var $objDay = $objDate.format("d")
                        var $newDateTime = $objDate.format("HH:mm");
                        var $newDate = $objDate.format("YYYY-MM-DD");
                        if ($newDateTime != '00:00') {
                            $("#startTime").val($newDateTime);
                        }
                        $('#hid_selected_day').val($objDay);



                        var DATE_SELEECTED_DAY = '';
                        $('body').on('click', '#submitAppointment', function () {
                            var validatedData = $thisObj.validateClientAppointmentForm($newDate);
                            // alert(validatedData);return false;
                            if (validatedData) {
                                $.ajax({
                                            url: BASE_URL + "appointment/saveappointment",
                                            type: "POST",
                                    data: validatedData,
                                    beforeSend: function () {
                                        $('#submitAppointment').attr("disabled", "true");
                                    },
                                            success: function (response) {
                                        //alert(response);
                                                $("#submitAppointment").removeAttr("disabled");
                                        $('#modal-1').modal('hide');
                                        if (response == 'error') {
                                            $(".alert_error").show();
                                            $(".error_msg").html('Allready Appointment This Date & Time.Please Select Other');
                                            //window.location.replace(BASE_URL + "appointment");  
                                        } else {
                                            //alert('hi');
                                            window.location.replace(BASE_URL + "payment/" + window.btoa(response));
                                        }
                                        // window.location.replace(BASE_URL + "payment/"+response);

                                        //window.location.reload(true);
                                        $calendar.fullCalendar('renderEvent', {title: validatedData.title, start: start, end: start}, true);
                                        $calendar.fullCalendar('unselect');
                                    }
                                });
                            }
                        });

                    },
                    editable: false,
            eventLimit: true, // allow "more" link when too many events
            // color classes: [ event-blue | event-azure | event-green | event-orange | event-red ]

            events: clientEvents,
        });
    },
    initUsersCalendar: function () {
        $calendar = $('#fullCalendar');
        today = new Date();
        y = today.getFullYear();
        m = today.getMonth();
        d = today.getDate();
        $thisObj = this;
        $calendar.fullCalendar({
            viewRender: function (view, element) {
                // We make sure that we activate the perfect scrollbar when the view isn't on Month
                if (view.name != 'month') {
                    $(element).find('.fc-scroller').perfectScrollbar();
                }
            },
            header: {
                left: 'title',
                center: 'month,agendaWeek,agendaDay',
                right: 'prev,next,today'
            },
            defaultDate: today,
            selectable: true,
            selectHelper: true,
            views: {
                month: {// name of view
                    titleFormat: 'MMMM YYYY'
                            // other view-specific options here
                },
                week: {
                    titleFormat: " MMMM D YYYY"
                },
                day: {
                    titleFormat: 'D MMM, YYYY'
                }
            },
            viewRender: function (view, element) {

                curdate = new Date();
                viewdate = new Date(view.start);

                // PREV - force minimum display month to current month
                if (new Date(viewdate.getFullYear(), viewdate.getMonth() + 1, 1).getTime() <=
                        new Date(curdate.getFullYear(), curdate.getMonth(), 1).getTime()) {
                    $('.fc-prev-button').prop('disabled', true);
                    $('.fc-prev-button').css('opacity', 0.5);
                } else {
                    $('.fc-prev-button').prop('disabled', false);
                    $('.fc-prev-button').css('opacity', 1);
                }

                // NEXT - force max display month to a year from current month
                if (new Date(viewdate.getFullYear(), viewdate.getMonth() + 1).getTime() >=
                        new Date(curdate.getFullYear() + 1, curdate.getMonth() + 1).getTime()) {
                    $('.fc-next-button').prop('disabled', true);
                    $('.fc-next-button').css('opacity', 0.5);
                } else {
                    $('.fc-next-button').prop('disabled', false);
                    $('.fc-next-button').css('opacity', 1);
                }
            },
                    select: function (start, end) {

                        if (moment().diff(start, 'days') > 0) {
                            $calendar.fullCalendar('unselect');
                            // or display some sort of alert
                            alert('Event is start in the past!');
                            return false;
                        }
                        $('#modelTitle').html("Create an Appointment");
                        $('#modelBody').html("safsfds");
                        $('#ok_button').html('<button type="button" id="submitAppointment" class="btn btn-success">Submit</button>');
                        $('#modal-1').modal('show', {backdrop: 'fade'});
                        // click on the submit button
                        var $objDate = moment(start, "YYYY-MM-DD HH:mm");
                        var $newDateTime = $objDate.format("HH:mm");
                        var $newDate = $objDate.format("YYYY-MM-DD");
                        if ($newDateTime != '00:00') {
                            $("#startTime").val($newDateTime);
                        }
                        $('body').on('click', '#submitAppointment', function () {
                            var validatedData = $thisObj.validateClientAppointmentForm($newDate);
                            //alert(validatedData.start_datetime);return false;
                            if (validatedData) {
                                $.ajax({
                                            url: BASE_URL + "user_appointment/saveappointment",
                                            type: "POST",
                                    data: validatedData,
                                    beforeSend: function () {
                                        $('#submitAppointment').attr("disabled", "true");
                                    },
                                            success: function (response) {
                                        //alert(response);
                                                $("#submitAppointment").removeAttr("disabled");
                                        $('#modal-1').modal('hide');
                                        if (response == 'error') {
                                            $(".alert_error").show();
                                            $(".error_msg").html('Allready Appointment This Date & Time.Please Select Other');
                                            return false;
                                            //window.location.replace(BASE_URL + "appointment");  
                                        } else {
                                            $(".alert_success").show();
                                            $(".success_msg").html('Successfully Appoint');
                                            //window.location.replace(BASE_URL + "payment/"+response);  
                                        }
                                        // window.location.replace(BASE_URL + "payment/"+response);

                                        //window.location.reload(true);
                                        $calendar.fullCalendar('renderEvent', {title: validatedData.title, start: start, end: start}, true);
                                        $calendar.fullCalendar('unselect');
                                    }
                                });
                            }
                        });

                    },
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            // color classes: [ event-blue | event-azure | event-green | event-orange | event-red ]
            events: usersEvents
        });
    },
    validateClientAppointmentForm: function (date) {
        var validate = true;
        $thisObj = this;
        var objData = {};
        if ($.trim($('#appoint_title').val()) == "") {
            $('#appoint_title').focus();
            validate = false;
        } else if ($.trim($('#appoint_description').val()) == "") {
            $('#appoint_description').focus();
            validate = false;
        } else if ($.trim($('#usersSection').val()) == "") {
            $('#usersSection').focus();
            validate = false;
        } else if ($.trim($('#servicesSection').val()) == "") {
            $('#servicesSection').focus();
            validate = false;
        } else if ($.trim($('#startTime').val()) == "") {
            $('#startTime').focus();
            validate = false;
        } else {
            var chekedT = $('#total_credit').is(':checked');
            objData = {
                title: $.trim($('#appoint_title').val()),
                user_id: $.trim($('#usersSection').val()),
                services_id: $.trim($('#servicesSection').val()),
                start_datetime: date + " " + $.trim($('#startTime').val()),
                note: $.trim($('#appoint_description').val()),
                total_credit: (chekedT == true) ? $.trim($('#total_credit').val()) : 0
            };
        }

        if (validate) {
            return  objData;
        } else {
            $thisObj.showSwal('basic');
            return false;
        }

    },
    showSwal: function (type) {

        if (type == 'basic') {
            swal({
                title: "Please Fill all fields!",
                buttonsStyling: false,
                confirmButtonClass: "btn btn-success"
            });

        } else if (type == 'title-and-text') {
            swal({
                title: "Here's a message!",
                text: "It's pretty, isn't it?",
                buttonsStyling: false,
                confirmButtonClass: "btn btn-info"
            });

        } else if (type == 'success-message') {
            swal({
                title: "Good job!",
                text: "You clicked the button!",
                buttonsStyling: false,
                confirmButtonClass: "btn btn-success",
                type: "success"
            });

        } else if (type == 'warning-message-and-confirmation') {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: 'Yes, delete it!',
                buttonsStyling: false
            }).then(function () {
                swal({
                    title: 'Deleted!',
                    text: 'Your file has been deleted.',
                    type: 'success',
                    confirmButtonClass: "btn btn-success",
                    buttonsStyling: false
                })
            });
        } else if (type == 'warning-message-and-cancel') {
            swal({
                title: 'Are you sure?',
                text: 'You will not be able to recover this imaginary file!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, keep it',
                confirmButtonClass: "btn btn-success",
                cancelButtonClass: "btn btn-danger",
                buttonsStyling: false
            }).then(function () {
                swal({
                    title: 'Deleted!',
                    text: 'Your imaginary file has been deleted.',
                    type: 'success',
                    confirmButtonClass: "btn btn-success",
                    buttonsStyling: false
                })
            }, function (dismiss) {
                // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
                if (dismiss === 'cancel') {
                    swal({
                        title: 'Cancelled',
                        text: 'Your imaginary file is safe :)',
                        type: 'error',
                        confirmButtonClass: "btn btn-info",
                        buttonsStyling: false
                    })
                }
            })

        } else if (type == 'custom-html') {
            swal({
                title: 'HTML example',
                buttonsStyling: false,
                confirmButtonClass: "btn btn-success",
                html:
                        'You can use <b>bold text</b>, ' +
                        '<a href="http://github.com">links</a> ' +
                        'and other HTML tags'
            });

        } else if (type == 'auto-close') {
            swal({title: "Auto close alert!",
                text: "I will close in 2 seconds.",
                timer: 2000,
                showConfirmButton: false
            });
        } else if (type == 'input-field') {
            swal({
                title: 'Input something',
                html: '<div class="form-group">' +
                        '<input id="input-field" type="text" class="form-control" />' +
                        '</div>',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function (result) {
                swal({
                    type: 'success',
                    html: 'You entered: <strong>' +
                            $('#input-field').val() +
                            '</strong>',
                    confirmButtonClass: 'btn btn-success',
                    buttonsStyling: false

                })
            }).catch(swal.noop)
        }
    }

}
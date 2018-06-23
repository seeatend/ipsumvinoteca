$('body').on('click', '.edityogacenter', function () {
    var url = $(this).attr('data-target');
    window.location.href = url.concat('/') + this.value;
})
$('body').on('click', '.editinstructors', function () {
    var url = $(this).attr('data-target');
    window.location.href = url.concat('/') + this.value;
})
$('body').on('click', '.editreview', function () {
    var url = $(this).attr('data-target');
    window.location.href = url.concat('/') + this.value;
})
$('body').on('click', '.edittestimonial', function () {
    var url = $(this).attr('data-target');
    window.location.href = url.concat('/') + this.value;
})
$('body').on('click', '.delyogacenter', function () {
    var hidval = $(this).attr('data-href');
    $('#deletedata').attr('href', hidval);
})
$('body').on('click', '.deltestimonial', function () {
    var hidval = $(this).attr('data-href');
    $('#deletedata').attr('href', hidval);
})
$('body').on('click', '.delreview', function () {
    var hidval = $(this).attr('data-href');
    $('#deletedata').attr('href', hidval);
})
$('body').on('click', '.delinstructors', function () {
    var hidval = $(this).attr('data-href');
    $('#deletedata').attr('href', hidval);
})
var i = 1;
$('body').on('click', '.addmore', function () {
    i = i + 1;
    var varHtml = "";
    varHtml = "<div class='row'><div class='col-md-12'><div class='form-group'><label for='lastName1'>Title</label><input type='text' class='form-control' name='retreate_additional_title[]'></div></div><div class='col-md-9'><div class='form-group'><label for='shortDescription1'>Description :</label><textarea  name='additional_description[]' id='editor1' rows='6' class='form-control textarea textarea" + i + "'></textarea></div></div><div class='col-md-3'><button type='button' class='btn btn-info addmore' value='Add More' style='margin-top:80px;'>Add More</button></div></div>";
    $('.display').append(varHtml);
    $(this).removeClass('addmore');
    $(this).addClass('removeadd');
    $(this).html('X');
    $('.textarea' + i).wysihtml5();
})
$("body").on("click", ".removeadd", function () {
    $(this).parent().parent().remove();
});
$(".checkall").click(function () {
    $('input:checkbox').not(this).prop('checked', this.checked);
});
$('body').on('click', '.checkalldelete', function (e) {
    var checkedVals = $('.checkItemdelete:checked').map(function () {
        return this.value;
    }).get();
    // alert(checkedVals);
    if (checkedVals.join(",") == '')
    {
        $('.showtext').html("Please select one of them to delete!");
        $('#deletedata').hide();
    }
    else
    {
        $('.showtext').html("Are your sure ! want remove this ?");
        var url = $(this).attr('data-href');
//alert(url);
        $('#deletedata').hide();
        $('#deletebutton').show();
        $('#deletebutton').click(function () {
            $.ajax({
                url: url,
                type: "POST",
                data: {deleteid: checkedVals},
                dataType: 'JSON',
                success: function (res) {
                    //alert(res.redir_url);
                    window.location.href = res.redir_url;
                }
            })
        })
    }
})

$('body').on('click', '.delyogaretreate', function () {
    var hidval = $(this).attr('data-href');
    $('#deletedata').attr('href', hidval);
})
var i=1;
$('body').on('click', '.addmoredate', function () {
    i = i + 1;
    var varHtml = "";
    varHtml = "<div class='row'><div class='col-md-3'><div class='form-group'><label for='lastName1'> From Date:</label><input type='text' class='form-control' id='chkdate_from"+ i +"' name='retreate_datefrom[]' placeholder='Select Date'></div></div><div class='col-md-3'><div class='form-group'><label for='lastName1'> To Date:</label><input type='text' class='form-control' id='chkdate_to"+ i +"' name='retreate_dateto[]' placeholder='Select Date'> </div></div><div class='col-md-2'><button type='button' class='btn btn-info addmoredate' value='Add More' style='margin-top:30px;'>Add More</button></div></div></div>";
    $('.displaydate').append(varHtml);
    $(this).removeClass('addmoredate');
    $(this).addClass('removeadddate');
    $(this).html('X');
    $('#chkdate_from'+i).datepicker();
    $('#chkdate_to'+i).datepicker();
})
$("body").on("click", ".removeadddate", function () {
    $(this).parent().parent().remove();
});
var i=1;
$('body').on('click', '.addmorepackage', function () {
    i = i + 1;
    var varHtml = "";
    varHtml = "<div class='row'><div class='col-sm-2'><h5>Person   <span class='text-danger'>*</span></h5><div class='form-group'><input type='text' name='person[]' class='form-control'> <div class='help-block'></div></div></div><div class='col-sm-2'><h5> Privacy <span class='text-danger'>*</span></h5><div class='form-group'><input type='text' name='privacy[]' class='form-control'> <div class='help-block'></div></div></div><div class='col-sm-2'><h5> About Privacy  <span class='text-danger'>*</span></h5><div class='form-group'><input type='text' name='about_privacy[]' class='form-control'> <div class='help-block'></div></div></div><div class='col-sm-2'><h5> Price <span class='text-danger'>*</span></h5><div class='form-group'><input type='text' name='price[]' class='form-control'> <div class='help-block'></div></div></div><div class='col-sm-2'><button type='button' class='btn btn-info addmorepackage' style='margin-top: 38px;'>Add more</button> </div></div>";
    $('.displaypackage').append(varHtml);
    $(this).removeClass('addmorepackage');
    $(this).addClass('removeaddpackage');
    $(this).html('X');
})
$("body").on("click", ".removeaddpackage", function () {
    $(this).parent().parent().remove();
});


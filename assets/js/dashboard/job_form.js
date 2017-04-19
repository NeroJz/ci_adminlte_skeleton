/**
 * Created by kumhoe.lau on 10/7/2016.
 */
$(function () {
    var d;

    if(default_date == ''){
        d = new Date();
    }else{
        d = new Date(default_date);
    }

    $('#datepicker').datepicker({
        autoClose: true,
        format: 'dd/mm/yyyy',
    }).datepicker("setDate",d);

    $("#timepicker").timepicker();
});
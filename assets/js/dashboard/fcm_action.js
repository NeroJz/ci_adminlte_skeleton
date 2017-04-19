/**
 * Created by MacBookPro on 16/10/2016.
 */
$(function () {


    $('#form').submit(function (e) {
        e.preventDefault();

        var data = {
            message: $('#inputMessage').val(),
            type: $('#inputType').val(),
            id: $('#inputAttId').val(),
            name: $('#inputAttName').val(),
            externalUrl: $('#inputAttUrl').val(),
            target: $('input[name=inputTarget]:radio:checked').val(),
            push_at: $('#datepicker').val(),
            time_at: $('#timepicker').val()
        };

        //console.log(data);

        $.ajaxFileUpload({
            url: base_url + 'dashboard/create',
            secureuri: false,
            fileElementId: 'userfile',
            dataType: 'json',
            data: data,
            success: function (data, status) {
                if(data.id !== undefined){
                    $('#form')[0].reset();
                    location.href =  data.redirect;
                }
            },
            error: function(){
                console.log("error");
            }
        });

        return false;
    });


    //var files;
    //
    //$('input[type=file]').on('change', function(evt){
    //    files = evt.target.files;
    //});
    //
    //$('#btnSend').click(function(e){
    //    var msg = $('#inputMessage').val();
    //    var type = $('#inputType').val();
    //    var id = $('#inputAttId').val();
    //    var content = $('#inputAttName').val();
    //
    //    var data = {
    //        'inputMessage' : msg,
    //        'type' : type,
    //        'id' : id,
    //        'content' : content
    //    };
    //
    //    if(msg != ''){
    //        $.ajax({
    //            url: base_url + 'dashboard/create',
    //            data: data,
    //            type: 'POST',
    //            dataType: 'json',
    //            success: function(result){
    //                if(result.success && result.success == 1){
    //                    $('#form')[0].reset();
    //                }
    //            }
    //        });
    //    }
    //});
});
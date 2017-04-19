/**
 * Created by kumhoe.lau on 9/21/2016.
 */
$(function(){
    $('#tbl_message').DataTable({
        lengthMenu: [ 10, 25, 50, 75, 100 ],
        columnDefs:[{
            targets: 9,
            orderable: false
        }]
    });
});
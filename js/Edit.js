function Edit() {
    var check = document.getElementById('inlineRadio1').checked;
    if(check == true){
        var  status = "active";

    }else {
        var status ="noactive";
    }
    $(document).ready(function () {
        $.ajax({
            url: "SaveEdit.php",
            type: "post",
            data:{
                newsletter_id:$("input#newstletter_id").val(),
                name:$("input#name").val(),
                description:$("input#description").val(),
                status:status
            },
            success: function () {
                 $(window).attr('location', '/zadanie1/prasowka#!/Edit');
            },
        });
    });
}
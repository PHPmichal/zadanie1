function login() {
    $(document).ready(function () {
        $.ajax({
            url: "Validation.php",
            type: "post",
            data:{
                email:$("input#exampleInputEmail1").val(),
                pass:$("input#exampleInputPassword1").val()
            },
            success: function (tablica) {
               if(tablica == true){
                   $(window).attr('location', '/zadanie1');
               }else {
                   $("#error").html(tablica);
               }
            },
        });
    });
}
function Registration() {
    var check = document.getElementById('inlineRadio1').checked;
    if(check == true){
      var  gender = "man";

    }else {
        var gender ="women";
    }
    $(document).ready(function () {
        $.ajax({
            url: "Regis.php",
            type: "post",
            data:{
                email:$("input#exampleInputEmail1").val(),
                pass:$("input#exampleInputPassword1").val(),
                pass2:$("input#exampleInputPassword2").val(),
                name:$("input#exampleInputName").val(),
                lastName:$("input#exampleInputLastName").val(),
                gender:gender
            },
            success: function (tablica) {
                    if(tablica == true){
                         $(window).attr('location', '/zadanie1/#!/Login');
                    }else {
                        $("#error").html(tablica);
                    }
            },
        });
    });
}
function AddNewstleter() {
    $(document).ready(function () {
        $.ajax({
            url: "dodaj.php",
            type: "post",
            data:{
                title:$("input#title").val(),
                description:$("input#description").val()
            },
            success: function () {
                $(window).attr('location', '/zadanie1');
            },
        });
    });
}
function Delet(id) {
        if (confirm('Czy napewno chcesz usunąć ten artykół ?')) {
            $(document).ready(function () {
                $.ajax({
                    url: "Delet.php",
                    type: "post",
                    data:{
                        newsletter_id:id
                    },
                    success: function () {
                        $("#"+id).remove();
                    },
                });
            });
        } else {

        }
}

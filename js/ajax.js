
window.onload = downloadcontetn;
function downloadcontetn() {
    $(document).ready(function () {
        $.ajax({
            url: "DownloadNews.php",
            type: "post",
            success: function (tablica) {
                $("#nius").html(tablica);
            },
        });
    });

}

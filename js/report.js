function Report(rankings_id, rankings_url, difficulty) {
    // var change = $("#id").val();
    // var date = $("#date").val();
    // var time = $("#phone").val();
    // var rankings_url = $("#rankings_url").val();
    $.post("/procedure/ReportRequest.php", { rankings_id: rankings_id, rankings_url: rankings_url, difficulty: difficulty},
    function(data) {
        $('#results').html(data);
        //  $('#reportForm')[0].reset();
    });
}
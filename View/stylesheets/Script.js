$('#go').keyup(function () {
    var Search_term = $(this).val();
//alert("kry doen");
    $.get('index.php', { Search_term: Search_term }, function (Search_term) {
        $('#search_results').html(Search_term);
   });

});


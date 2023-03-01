//Description pop up when choosing a specific reason
$('#reason').click(
    function(){
        $(this).change();
    });
$('#reason').change(
    function(){
        var index = $(this).find('option:selected').index();
        $('#description li.active-des').removeClass('active-des');
        $('#description li').eq(index).addClass('active-des');
    });
$(document).ready(function(){
    $(function(){
        $("#editSortable").sortable();
        $("#addSortable").sortable();
    });
    $("ul.categories").on("click", ".init", function() {
        $(this).closest("ul.categories").children('li:not(.init)').toggle();
    });
    var allOptions = $("ul.categories").children('li:not(.init)');
    $("ul.categories").on("click", "li:not(.init)", function() {
        allOptions.removeClass('selected');
        $(this).addClass('selected');
        $("ul.categories").children('.init').html($(this).html());
        allOptions.toggle();
    });
    $("a#trash").click(function(event){
        event.stopPropagation();
    });
    $("i#edit").click(function(event){
        event.stopPropagation();
        $(this).parent().siblings("input[type=text]").prop("readonly",false).prop("disabled",false).css("border","1px solid gray");
    });
    $("input#category").click(function(event){
        event.stopPropagation();
    });
    $(document).on('change', 'input#category', function(event){
        event.stopPropagation();
        $(this).prop("readonly",true).prop("disabled",true).attr("value",$(this).val()).css("border","0");
    });   
});
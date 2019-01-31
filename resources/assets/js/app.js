
// import $ from 'jquery';
// window.$ = window.jQuery = $;

require('jquery-ui/ui/widgets/autocomplete.js');
require('./bootstrap');

    $('#autocomplete').autocomplete({
        minLength: 2,
        source: "/live_search",
        response: function (e, u) {
                $('#autocomplete').removeClass('loader');
            },
        select: function(e, ui){
            // $('#autocomplete').val(ui.item.value);
            var goto = ui.item.value;                
        },
})    .data("ui-autocomplete")._renderItem = function(ul, item) {
        return $("<li class=\"list-item-group border rounded\"></li>")
            //.data("item.autocomplete", item)
            .append("<a style=\"color:blue\" href=\"/exams/" + item.label +  "\">" + item.label + "</a>")
            .appendTo(ul);
        };


    $(document).ready(function(){
        $("#autocomplete").on("keyup", function(){
        $('#autocomplete').addClass('loader');
        var str = $("#autocomplete").val();     
            if(str.length < 2) {
            $('#autocomplete').removeClass('loader');
        }
        
    });  
});

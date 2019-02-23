$(function () {
    $('#json-format').click(function() {
        var text = $( '#input_json' ).val();
        var jsonBefore = JSON.parse(text);
        var json = JSON.stringify(jsonBefore, null, "    ");
        $( '#input_json' ).val(json);
    });
    $('#json-trim').click(function(){
        var text = $('#input_json').val();
        var str = text.replace(/\s+/g, "");
    $( '#input_json' ).val(str);
    });
    $('#json-copy').click(function(){
        $('#input_json').select();
        document.execCommand('copy');
    });
    $('#xml-format').click(function() {
        var text = $( '#input_json' ).val();
        $( '#input_json' ).val(vkbeautify.xml(text));
    });
    $('#xml-trim').click(function(){
        var text = $('#input_json').val();
        var str = text.replace(/\s+/g, "");
        $( '#input_json' ).val(str);
    });
    $('#xml-copy').click(function(){
        $('#input_json').select();
        document.execCommand('copy');
    });
});


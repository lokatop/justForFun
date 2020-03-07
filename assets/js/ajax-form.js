
$( document ).ready(function() {
    $("#btn").click(
        function(){
            sendAjaxForm('result_form', 'ajax_form', 'http://untitled:8090/ajax/');
            return false;
        }
    );
});

function sendAjaxForm(result_form, ajax_form, url) {
        $.post(
            url, // адрес обработчика
            $("#"+ajax_form).serialize(), // отправляемые данные
            function(msg) { // получен ответ сервера
                alert(msg);
                $('#result_form').html(msg);
            }
        );
}


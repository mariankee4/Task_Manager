/* 
 * Submits ajax request
 */

function initAjaxForm()
{
    $('body').on('submit', '.ajaxForm', function (e) {
 
        e.preventDefault();
 
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data, textStatus) {
                window.location.href = '/task_manager/web/task';
            }
        })
        .done(function (data) {
            if (typeof data.message !== 'undefined') {
                alert(data.message + ' The task was saved!');
            }
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            if (typeof jqXHR.responseJSON !== 'undefined') {
                if (jqXHR.responseJSON.hasOwnProperty('form')) {
                    $('#form_body').html(jqXHR.responseJSON.form);
                }
 
                $('.form_error').html(jqXHR.responseJSON.message);
 
            } else {
                alert(errorThrown);
            }
 
        });
    });
}



function changeStatus(url) {
    $.get(url, function(data) {
        var element = ' a#status-' + data[0];
        var className = '';
        var textContent = '';
        if (data[1] == 0) {
            className = 'btn btn-warning btn-sm';
            textContent = 'Active';
        } else {
            className = 'btn btn-danger btn-sm';
            textContent = 'Inactive';
        }
        $(element).attr('href', "javascript:changeStatus('" + data[2] + "')");
        $(element + ' span').attr('class', className);
        $(element + ' span').html(textContent);

    }, 'json');

}

function changeAjaxACP(url) {
    $.get(url, function(data) {
        var element = ' a#group-' + data[0];
        var className = '';
        var textContent = '';
        if (data[1] == 0) {
            className = 'btn btn-warning btn-sm';
            textContent = 'Active';
        } else {
            className = 'btn btn-danger btn-sm';
            textContent = 'Inactive';
        }
        $(element).attr('href', "javascript:changeAjaxACP('" + data[2] + "')");
        $(element + ' span').attr('class', className);
        $(element + ' span').html(textContent);

    }, 'json');

}
$(document).ready(function() {

    $('input[name=checkall-toggle]').change(function() {

        var checkStatus = this.checked;
        $('#groupform').find(':checkbox').each(function() {
            this.checked = checkStatus;
        });
    });


})
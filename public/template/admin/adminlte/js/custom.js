function submitForm(url) {
    $('#addedit').attr('action', url).submit();
}

$('#btn-multydelete').click(function() {
    $('#formList').submit();
});
$('#btn-multydeleteUser').click(function() {
    $('#formListUser').submit();
});

function changePage(page) {
    $('input[name =filter_page]').val(page);
    $('#groupform').submit();
}

function submitMultyDelete(url) {
    $('#groupform').attr('action', url).submit();
}

$(document).ready(function() {

    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function() {
        if (this.checked) {
            checkbox.each(function() {
                this.checked = true;
            });
        } else {
            checkbox.each(function() {
                this.checked = false;
            });
        }
    });
    checkbox.click(function() {
        if (!this.checked) {
            $("#selectAll").prop("checked", false);
        }
    });

    $(".btn-change-password").click(function() {
        $('#changePasswod').submit();
    });

    // $(".filter_category_id").change(function() {
    //     $('#formBox').submit();
    // });
})
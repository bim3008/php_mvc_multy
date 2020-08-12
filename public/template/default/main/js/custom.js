function getUrlVar(key) {
    var result = new RegExp(key + "=([^&]*)", "i").exec(window.location.search);
    return result && unescape(result[1]) || "";
}
$(document).ready(function() {
    var controller = (getUrlVar('controller') == '') ? "index" : getUrlVar('controller');
    $('div.menu-area li.' + controller).addClass('active');
});
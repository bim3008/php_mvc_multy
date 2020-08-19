// function getUrlVar(key) {
//     var result = new RegExp(key + "=([^&]*)", "i").exec(window.location.search);
//     return result && unescape(result[1]) || "";
// }
$(document).ready(function() {
    $('div.menu-area ul li.' + controller).addClass('active');
});

$(document).ready(function() {
    $("#buybook").change(function() {
        alert(1);
    });
});

$(document).ready(function() {
    $(".wc-proceed-to-checkout a").click(function() {
        $("#buy-books").submit();
    });
});
$(document).ready(function() {
    $(".product-button a").click(function() {
        alert("Sản phẩm đã được thêm vào giỏ hàng");
    });
});
$(document).ready(function() {
    $(".add-to-cart").click(function() {
        alert("Sản phẩm đã được thêm vào giỏ hàng");
    });
});
$(document).ready(function() {
    $(".single-input-item a").click(function() {
        $("#userchange").submit();
    });
});


$(document).ready(function() {
    $(".header-search a").click(function() {
        $("#defaultSearch").submit();
    });
});
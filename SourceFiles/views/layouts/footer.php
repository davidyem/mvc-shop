<footer id="footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2016</p>
                <p class="pull-right">David Yem</p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->

<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>
<script>
$(document).ready(function(){
$("#form-post").submit(function() { //устанавливаем событие отправки для формы
var formPost=$(this);
var formData = $(this).serialize(); //собираем все данные из формы
$.ajax({
type: "POST", //Метод отправки
url: "/catalog/search/", //путь до php файла отправителя
dataType: "html",
data: formData,
success: function(data){// успешная отправка сообщения. Всё верно?
    header("Location: /search_result/search");
alert('Письмo oтпрaвлeнo!');
},
error: function(xhr,ajaxOptions,thrownError){// мне нужна причина ошибки. Я правильным путем иду?
alert("Косяк!");
alert(xhr.status);
alert(thrownError);
},
complete: function(){}; //а как быть здесь?
});

});
});
</script>
</body>
</html>

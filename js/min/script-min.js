function send_form(e,t,o){$("#"+e).submit(function(){var i=$(this).serialize();return $.ajax({type:"POST",url:"/mail/"+t+".php",data:i,success:function(t){"OK"==t?(result='<h3 class="form-sended">'+o+"</h3>",$("#"+e).html(result)):(result=t,$("#"+e).html(result))}}),!1})}function fform(e,t){$(".modal-form-title").html(e),$(".modal-form-value").val(t)}jQuery.fn.getTitle=function(){var e=jQuery("a.fancybox");jQuery.each(e,function(){var e=jQuery(this).children("img").attr("title");jQuery(this).attr("title",e)})};var thumbnails=jQuery("a:has(img)").not(".nolightbox").filter(function(){return/\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr("href"))}),posts=jQuery(".item-images");posts.each(function(){jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts.index(this)).getTitle()}),jQuery("a.fancybox").fancybox({helpers:{overlay:{locked:!1}}}),$(".slider-fruits").slick({dots:!1,infinite:!0,speed:300,slidesToShow:5,slidesToScroll:1,autoplay:!0,autoplaySpeed:7e3}),send_form("form-price","phpform","Спасибо, мы отправи Вам прайс"),send_form("form-footer","phpform","Спасибо, мы с Вами свяжемся");
//# sourceMappingURL=script-min.js.map
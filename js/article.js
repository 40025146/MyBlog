$(function(){var t=!1,e=!1;$(window).resize(function(){$(this).width()<640?t||(t=!0):e||($(".content img").each(function(){$(this).attr("data-fancybox-group","x").attr("href",$(this).attr("src"))}).fancybox({beforeLoad:function(){$(this.element).attr("title")?this.title=$(this.element).attr("title"):$(this.element).attr("alt")?this.title=$(this.element).attr("alt"):$(this.element).data("fancybox_title")&&(this.title=$(this.element).data("fancybox_title"))},padding:0,helpers:{overlay:{locked:!1},title:{type:"over"},thumbs:{width:50,height:50}}}),e=!0)}).resize()});
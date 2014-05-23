// JavaScript Document

$(function() {
    navihover();
});
//导航下拉菜单效果
function navihover() {
    $("#navi li").hover(
        function(){
            $('div', $(this)).css({'display':'block'});
			$(this).addClass("navi_hover");
        },
        function(){
            $('div', $(this)).css({'display':'none'});
			$(this).removeClass("navi_hover");
        }
    );
	
	$("#navi p").hover(
        function(){
            $('span', $(this)).css({'display':'block'});
			$(this).addClass("span_hover");
        },
        function(){
            $('span', $(this)).css({'display':'none'});
			$(this).removeClass("span_hover");
        }
    );
	
	$(".head_tab td").hover(
        function(){
            $('div', $(this)).css({'display':'block'});
			$(this).addClass("tab_hover");
        },
        function(){
            $('div', $(this)).css({'display':'none'});
			$(this).removeClass("tab_hover");
        }
    );
}
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
}
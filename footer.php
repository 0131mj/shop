<footer>
	<div class="footer_top">
		<div class="wrapper">
			이용약관 개인청보 처리 방침
			이용안내 문의하기 앱 다운로드
		</div>
	</div>
	<div class="footer_bottom">
		<div class="wrapper">
		(c)copyright 2017 by WebSite
		</div>
	</div>
</footer>
<script src="//code.jquery.com/jquery.min.js"></script>
<script>
$('.menu').mouseover(function(){
	$('.submenu').removeClass('on');
	$(this).children('.submenu').addClass('on');
});
$('.menu').mouseout(function(){
	$('.submenu').removeClass('on');
});
</script>
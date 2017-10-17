<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		/* @import url(//fonts.googleapis.com/earlyaccess/nanumgothic.css); */
		body{
			margin:0px;
			/* font-family: 'Nanum Gothic', sans-serif; */
			background-color:#fafafa;
		}

		/*header*/
		header > .header-top{
			height:30px;
			background-color:#eee;
		}
		header > .header-middle{
			height:100px;
			padding:10px 0px;
			background-color:#fff;
		}
		header > .header-bottom{
			height:50px;
			background-color:crimson;
		}
		.header-bottom > .wrapper > ul > li{
			width:25%;
			height:50px;
			line-height:50px;
			float:left;
			text-align:center;
			color:#fff;
			margin:0px;
			cursor:pointer;
		}
		#logo{
			float:left;
			width:100px;
			margin-left:300px;
			margin-right:30px;
		}
		#search_form{
			float:left;
			width:500px;
		}
		#search_form > input[type="text"]{
			width:400px;
			height:40px;
			padding:0px;
			margin-top:30px;
			border:1px solid #ccc;
			float:left;
		}
		#search_btn{
			float:left;
			width:80px;
			height:40px;
			margin-top:30px;
			border:1px solid #ccc;
			border-left:none;
			padding:0px;
			background-color:#fafafa;
			font-size:16px;
			cursor:pointer
		}
		/*login form*/
		#login_info{
			width:70%;
			float:left;			
		}
		#id,#pw{
			width:100%;
			height:30px;
			padding:0px 10px;
			border:1px solid #ccc;
		}
		#pw{
			margin-top:-1px;
		}
		#login_btn{
			float:left;
			width:30%;
			height:60px;
			cursor:pointer;
		}
		/*common*/
		li{
			list-style:none;
		}
		h1,h2,ul,li{
			margin:0px;
			padding:0px;
		}
		.wrapper{
			width:1202px;
			height:100%;
			margin:0 auto;
			/* box-sizing:border-box; */
			/* border-right:1px solid #ff0000;
			border-left:1px solid #ff0000; */
		}
		span:hover{
			color:crimpson
		}
		/*board*/
		.board_area{
			width:900px;
			overflow: hidden;
			float: left;
		}
		.main_board{
			float:left;
			font-size:14px;
			margin:10px;
			width: calc(50% - 40px);
		}
		article{
			padding:20px;
			border: 1px solid #eee;
			box-sizing: border-box;
			background-color: #fff;
		}
		.side_board{
			float:left;
			font-size:14px;
			width: 100%;
		}		
		h2.title{
			height:20px;
			line-height:20px;
			padding: 10px;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
			font-size:16px;
		}
		.main_board > ul > li{
			height:20px;
			margin-bottom:5px;
			cursor:pointer;
		}
		aside{
			background-color:#fafafa;
			float:right;
			width:300px;
			height:100%;
		}
		.title_num{
			width:30px;
			text-align:center;
			color:#fff;
			background-color:crimson;
			display:inline-block;
		}
		.reply_num{
			
			display:inline-block;
			color:crimson;
			float:right
		}
		.date{
			display:inline-block;
			margin-right:10px;
			float:right;
			color:#ccc;
		}
		/*footer*/
		footer{
			clear:both;
		}
		.footer_top{
			border-top:1px solid #eee;
			background-color:#888;
			height:30px;
		}
		.footer_bottom{
			height:100px;
		}
	</style>
</head>
<body>
	<header>
		<div class="header-top"></div>
		<div class="header-middle">
			<div class="wrapper">
				<img src="https://www.logo.com.tr/img/250x250.png" id="logo">
				<form id="search_form" class="wrapper">
					<input type="text">
					<input type="submit" value="검색" id="search_btn">
				</form>
			</div>
		</div>
		<div class="header-bottom">
			<nav class="wrapper">
				<ul>
					<li>공지사항</li>
					<li>구매후기</li>
					<li>커뮤니티</li>
					<li>갤러리</li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="wrapper">
		<section class="board_area">
		<?php for($j=0; $j<6;$j++):?>
			<article class="main_board">
				<h2 class="title">휴대폰 포럼</h2>
				<ul>
					<?php for($i=0; $i<10;$i++):?>
					<li>
						<span class="title_num"><?php echo $i;?></span>
						<span class="title">제목입니다.제목입니다.제목입니다.</span>
						<span class="reply_num">+15</span>
						<span class="date">11-10</span>
					</li>
					<?php endfor;?>
				</ul>
			</article>
		<?php endfor;?>
		</section>
		
		<aside>
			<article>
				<h2 class="title">로그인</h2>
				<form id="login_form">
					<div id="login_info">
						<input type="text" placeholder="아이디" id="id">
						<input type="text" placeholder="비밀번호" id="pw">
					</div>
					<input type="submit" value="로그인" id="login_btn">
					<input type="checkbox">
					<span>자동로그인</span>
					<a href="#">회원가입</a>
					<a href="#">정보 찾기</a>
				</form>
			</article>
			<article class="side_board">
				<h2 class="title">공지사항</h2>
				<ul>
					<?php for($i=0; $i<10;$i++):?>
					<li>
						<span class="title">제목입니다.제목입니다.</span>
						<span class="reply_num">+15</span>
						<span class="date">11-10</span>
					</li>
					<?php endfor;?>
				</ul>
			</article>
			<article class="side_board">
				<h2 class="title">최근 게시글</h2>
				<ul>
					<?php for($i=0; $i<10;$i++):?>
					<li>
						<span class="title">제목입니다.제목입니다.</span>
						<span class="reply_num">+15</span>
						<span class="date">11-10</span>
					</li>
					<?php endfor;?>
				</ul>
			</article>
		</aside>
	</div>
	<footer>
		<div class="footer_top">
			<div class="wrapper">
				이용약관 개인청보 처리 방침
				이용안내 문의하기 앱 다운로드
			</div>
		</div>
		<div class="footer_bottom"></div>
	</footer>
</body>
</html>
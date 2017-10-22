<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel ="stylesheet" type="text/css" href="./style.css">
</head>
<body>
	<?php include('./header.php');?>
	<div class="wrapper">
		
		<article id="join">
			<h2>회원가입</h2>
			<h3>사이트 이용정보 입력</h3>
			<input type="text" name="" id="" placeholder="아이디입력">
			<input type="password" name="" id="" placeholder="비밀번호(영문,숫자 8~16자)">
			<input type="password" name="" id="" placeholder="비밀번호 확인">
			<input type="text" name="" id="" placeholder="이름">
			<input type="text" name="" id="" placeholder="닉네임(6자이하)">
			<input type="text" name="" id="" placeholder="e-mail">
			<input type="text" name="" id="phone" placeholder="휴대폰번호">
			<div id="etc_agree">
				<input type="checkbox" name="" id="agree_email"><label for="agree_email">정보 메일을 받겠습니다.</label><br>
				<input type="checkbox" name="" id="agree_info"><label for="agree_info">다른분들이 나의 정보를 볼 수 있도록 합니다.</label><br>
			</div>
			<div class="center_btn_group">
				<button class="center_btn">회원가입</button>
				<button class="center_btn">취소</button>
			</div>
		</article>
	</div>
	<?php include('./footer.php');?>
</body>
</html>
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
		<section class="board_area">
		<?php for($j=0; $j<6;$j++):?>
			<article class="main_board">
				<h2 class="title">휴대폰 포럼</h2>
				<ul>
					<?php for($i=1; $i<11;$i++):?>
					<li>
						<a class="title" href="./detail.php">제목입니다.제목입니다.제목입니다.</a>
						<span class="date">11-10</span>
						<span class="reply_num">+15</span>
					</li>
					<?php endfor;?>
				</ul>
			</article>
		<?php endfor;?>
		</section>	
		<?php include('./aside.php');?>
	</div>
	<?php include('./footer.php');?>
</body>
</html>
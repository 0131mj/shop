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
			<article>			
				<form action="./board.php" method="post">
					<h2>자유게시판</h2>
					<input type="text" name="write_title" id="write_title" placeholder="제목을 입력해주세요.">
					<textarea name="" id="write_content" rows="10" style=""></textarea>
					첨부파일 <input type="file" name="" id=""><br>
					첨부파일 <input type="file" name="" id=""><br>
					첨부파일 <input type="file" name="" id=""><br>
					첨부파일 <input type="file" name="" id=""><br>
					첨부파일 <input type="file" name="" id=""><br>
					<div class="center_btn_group">
						<input type="submit" class="center_btn" value="작성완료">
						<button class="center_btn">취소</button>
					</div>
				</form>
			</article>
		</section>	
		<?php include('./aside.php');?>
	</div>
	<?php include('./footer.php');?>
</body>
</html>
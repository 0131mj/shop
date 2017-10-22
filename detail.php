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
				<h2>제목입니다.</h2>
				<span id="user_nick">에이스크래커<span>
				<span id="wr_date">2017-07-21<span>
				<span id="view_count">조회수 311<span>
				<span id="recommend_count">추천수 311<span>
				<p>내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.
				내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.
				내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.
				내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.
				내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.내용입니다.
				</p>
				<div class="center_btn_group">
					<button id="wr_recommend" class="center_btn">추천</button>
					<button id="wr_unrecommend" class="center_btn">비추</button>
				</div>
				<div id="detail_link">
					<a href="./board.php">목록</a>
					<a href="">이전글</a>
					<a href="">다음글</a>
				</div>
				<br><br><br>
				<h3>댓글목록</h3>
				<ul id="reply_list">
					<li class="reply">
						<span class="nick">캔디바</span>
						<span class="date">17-10-22 15:00</span>
						<p>동감입니다.</p>
						<div>
							<button>추천</button>
							<button>비추</button>
						</div>
					</li>
					<li class="reply indent">
						<span class="re_reply_mark">└</span>
						<span class="nick">새우깡</span>
						<span class="date">17-10-22 15:00</span>
						<p>전 반대요.</p>
						<div>
							<button>추천</button>
							<button>비추</button>
						</div>
					</li>
					<li class="reply">
						<span class="nick">달고나</span>
						<span class="date">17-10-22 15:00</span>
						<p>전 잘 모르겠네요.</p>
						<div>
							<button>추천</button>
							<button>비추</button>
						</div>
					</li>
				</ul>
			</article>
		</section>	
		<?php include('./aside.php');?>
	</div>
	<?php include('./footer.php');?>
</body>
</html>
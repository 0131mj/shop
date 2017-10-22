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
				<h2>자유게시판</h2>
				<table>
					<thead>
						<th class="wr_number">번호</th>
						<th class="wr_title">제목</th>
						<th class="writer">글쓴이</th>
						<th class="wr_date">날짜</th>
						<th class="view_count">조회</th>
					</thead>
					<tbody>
						<?php for($i=0;$i<3;$i++):?>
						<tr class="notice">
							<td class="wr_number">알림</td>
							<td class="wr_title">공지사항입니다.</td>
							<td class="writer">사이트관리자</td>
							<td class="wr_date">10.21</td>
							<td class="view_count">54</td>
						</tr>
						<?php endfor;?>
						<?php for($j=0;$j<10;$j++):?>
						<tr>
							<td class="wr_number"><?php echo(1500-$j);?></td>
							<td class="wr_title"><a href="detail.php?no=<?php echo(1500-$j);?>">안녕하세요</a><span class="reply_num">+13</td>
							<td class="writer">사용자</td>
							<td class="wr_date">10.21</td>
							<td class="view_count">54</td>
						</tr>
						<?php endfor;?>
					</tbody>
				</table>
				<div id="pagination">
					<a href="">&lt; 이전</a>
					<?php for($i=1;$i<11;$i++):?>
					<a href="" <?php if($i==1){echo " class='on'";}?>><?php echo $i;?></a>
					<?php endfor;?>
					<a href="">다음 &gt;</a>
				</div>
				<a href="./write.php"class="button">글쓰기</a>
			</article>
		</section>	
		<?php include('./aside.php');?>
	</div>
	<?php include('./footer.php');?>
</body>
</html>
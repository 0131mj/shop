<aside>
	<?php if(!isset($_GET['login']) || $_GET['login'] !='ok'):?>
	<article>
		<h2 class="title">로그인</h2>
		<form id="login_form" action="./index.php?login=ok">
			<div id="login_info">
				<input type="text" placeholder="아이디" id="id">
				<input type="text" placeholder="비밀번호" id="pw">
			</div>
			<input type="submit" value="로그인" id="login_btn">
			<div id="login_option">
				<input type="checkbox" id="auto_login">
				<label for="auto_login">자동로그인</label>
				<a href="./join.php" >회원가입</a> | 
				<a href="#">ID/PW 찾기</a>
				<input type="hidden" name="login" value="ok">
			</div>
		</form>
	</article>
	<?php else:?>
	<article>
		<div>에이스크래커님, 환영합니다.</div><br>
		<a href="./index.php" class="button">로그아웃</a>
		<a href="" class="button">마이메뉴</a>
		<a href="" class="button">정보수정</a>
	</article>
	<?php endif;?>
	<article class="side_board">
		<h2 class="title">공지사항</h2>
		<ul>
			<?php for($i=0; $i<10;$i++):?>
			<li>
				<a href="./detail.php">
					<span class="title">제목입니다.제목입니다.</span>
					<span class="date">11-10</span>
					<span class="reply_num">+15</span>
				</a>
			</li>
			<?php endfor;?>
		</ul>
	</article>
	<article class="side_board">
		<h2 class="title">최근 게시글</h2>
		<ul>
			<?php for($i=0; $i<10;$i++):?>
			<li>
				<a href="./detail.php">
					<span class="title">제목입니다.제목입니다.</span>
					<span class="date">11-10</span>
					<span class="reply_num">+15</span>
				</a>
			</li>
			<?php endfor;?>
		</ul>
	</article>
</aside>
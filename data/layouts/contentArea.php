<?php include('style.php') ?>
<div id="contentsArea" class="clearfix">
	<div >
		<h2><?= $title ?></h2>
		<hr color="#7FC3EA" width="635" align="left">
		<?= Breadcrumb::show($breadcrumbs) ?>
	</div>
	<div style="margin: 20px 0;">
		<div class="main" style="width:75%;">
			<div><?= isset($content) ? $content : '' ?></div>
		</div>
		<div class="sidebar" style="
		float:right;
		border:solid;
		width:145px;
		padding-left: 10px;
		padding-top: 10px;
		padding-bottom: 10px;
		border-width:1.5px;
		border-color:#7FC3EA;
		border-radius:15px;
		position:relative;">
			<?php if (isset($_SESSION['username'])): ?>
			<div>ようこそ、<a href="customer-profile.php"><?= $_SESSION['username'] ?></a>様</div>
			<ul style="list-style: square;padding-left: 12px;margin-bottom:5px;">
				<li style="color:#167DB9;"><a href="customer-mypage.php">My Page</a></li>
				<li style="color:#167DB9;"><a href="customer-profile.php">プロフィール</a></li>
				<li style="color:#167DB9;"><a href="customer-logout.php">ログアウト</a></li>
			</ul>
			<hr color="#7FC3EA" style="position:relative;right:5px;weight:1px;border-width:0.75px;">
		<?php else: ?>
			<ul style="list-style: square;padding-left: 12px;margin-bottom:5px;">
				<li style="color:#167DB9;"><a href="login-input.php">ログイン画面へ</a></li>
				<li style="color:#167DB9;"><a href="customer-input.php">会員登録</a></li>
				<li style="color:#167DB9;"><a href="customer-forgot-password.php">パスワードを忘れた</a></li>
			</ul>
			<?php endif ?>
			<?php if (isset($sidebar_menu)): ?>
			<ul style="list-style: square;padding-left: 12px;margin-top:5px;">
				<?php foreach ($sidebar_menu as $text => $url): ?>
					<li style="color:#167DB9;"><a href="<?= $url ?>"><?= $text ?></a></li>
				<?php endforeach ?>
			</ul>
			<?php endif ?>
		</div>
	</div>
</div>

<?php include('style.php') ?>
<div id="contentsArea" class="clearfix">
	<div>
		<h2><?= $title ?></h2>
		<hr color="#7FC3EA" width="635" align="left">
		<?= Breadcrumb::show($breadcrumbs) ?>
	</div>
	<div style="margin: 20px 0">
		<div class="main">
			<?= isset($content) ? $content : '' ?>
		</div>
		<div class="sidebar">
			<?php if (isset($sidebar_menu)): ?>
			<ul style="list-style: square;padding-left: 12px;">
				<?php foreach ($sidebar_menu as $text => $url): ?>
					<li><a href="<?= $url ?>"><?= $text ?></a></li>
				<?php endforeach ?>
			</ul>
			<?php endif ?>
		</div>
	</div>
</div>

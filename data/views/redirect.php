<?php $this->beginSection('content') ?>
<p class="my-2 alert alert-success"><?= $message ?></p>
<p><?= $duration ?>秒間自動的にページが移動しない場合は<a href="<?= $url ?>">こちら</a>をクリックしてください。</p>
<?php $this->endSection(); ?>

<?php $this->beginSection('bottom') ?>
<script type="text/javascript">
setTimeout(function(){
	document.location = '<?= $url ?>';
}, <?= $duration * 1000 ?>);
</script>
<?php $this->endSection(); ?>

<?php

echo $this->layout('contentArea-anonym', array(
	'title' => $title,
	'breadcrumbs' => array(
		'TOP',
		$title
	),
	'content' => $this->yield('content'),
));
<?php $this->beginSection('content') ?>
<?php
if ($validator->hasError('is_activated')) {
	echo '<div class="alert alert-warning">' . $validator->getError('is_activated') . '</div>';
}
?>
<?php $this->endSection(); ?>

<?php

echo $this->layout('contentArea', array(
	'title' => 'My Page',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'My Page'
	),
	'sidebar_menu' => array(
		'検索履歴' => 'customer-search-history.php',
		'保存した検索条件'=>'customer-conditions.php',
		'保存したお仕事'=>'customer-keep.php',
		'ファイルアップロード'=>'customer-file.php'
	)
));

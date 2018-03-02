<?php
  require_once('action/IndexAction.php');
  $action = new IndexAction();
  $action->execute();
  $page = $action->getTranslator();
  require_once('partial/header.php');
?>
<div class="index-page">
	<p><span class="bold-text"><?php echo $page->read('index', 'par1'); ?></span><b><?php echo $page->read('index', 'company'); ?></b></p>
	<p><?php echo $page->read('index', 'par2'); ?></p>
	<ul>
		<li><?php echo $page->read('index', 'ul-li1'); ?></li>
		<li><?php echo $page->read('index', 'ul-li2'); ?></li>
		<li><?php echo $page->read('index', 'ul-li3'); ?></li>
		<li><?php echo $page->read('index', 'ul-li4'); ?></li>
	</ul>
	<p><?php echo $page->read('index', 'par3'); ?></p>
	<p><?php echo $page->read('index', 'par4'); ?></p>
	<p><?php echo $page->read('index', 'par5'); ?> <b><?php echo $page->read('index', 'slogan'); ?></b>.</p>
</div>
<?php
    require_once('partial/footer.php');

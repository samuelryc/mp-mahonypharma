<?php
  require_once('action/DivisionAction.php');
  $action = new DivisionAction();
  $action->execute();
  $page = $action->getTranslator();
  require_once('partial/header.php');
?>
<div class="division-page">
	<p><?php echo $page->read('division', 'par1'); ?></p>
	<ul>
		<li><?php echo $page->read('division', 'ul-li1'); ?></li>
		<li><?php echo $page->read('division', 'ul-li2'); ?></li>
		<li><?php echo $page->read('division', 'ul-li3'); ?></li>
		<li><?php echo $page->read('division', 'ul-li4'); ?></li>
		<li><?php echo $page->read('division', 'ul-li5'); ?></li>
	</ul>
</div>
<?php
    require_once('partial/footer.php');

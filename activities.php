<?php
  require_once('action/ActivitiesAction.php');
  $action = new ActivitiesAction();
  $action->execute();
  $page = $action->getTranslator();
  require_once('partial/header.php');
?>
<div class="activities-page">
	<p><?php echo $page->read('activities', 'par1'); ?><b><?php echo $page->read('activities', 'b1'); ?></b><?php echo $page->read('activities', 'par2'); ?><b><?php echo $page->read('activities', 'b2'); ?></b><?php echo $page->read('activities', 'par3'); ?></p>
	<p><?php echo $page->read('activities', 'par4'); ?></p>
</div>
<?php
    require_once('partial/footer.php');

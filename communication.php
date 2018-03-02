<?php
  require_once('action/CommunicationAction.php');
  $action = new CommunicationAction();
  $action->execute();
  $page = $action->getTranslator();
  require_once('partial/header.php');
?>
<div class="communication-page">
	<ul>
		<li class="first-li"><?php echo $page->read('communication', 'par1'); ?></li>
	<ul>
	<p><?php echo $page->read('communication', 'par2'); ?></p>
	<ul class="second-ul">
		<li><?php echo $page->read('communication', 'ul-li1'); ?></li>
		<li><a href="/doc/invitation/MAHONY_PHARMA_pozvanka_14_10_2014.pdf"><?php echo $page->read('communication', 'ul-li2'); ?></a></li>
		<li><?php echo $page->read('communication', 'ul-li3'); ?></li>
		<li><?php echo $page->read('communication', 'ul-li4'); ?></li>
	</ul>
</div>
<?php
    require_once('partial/footer.php');

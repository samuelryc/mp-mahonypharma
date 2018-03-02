<?php
  require_once('action/NoticesAction.php');
  $action = new NoticesAction();
  $action->execute();
  $page = $action->getTranslator();
  require_once('partial/header.php');
?>
<div class="notices-page">
	<p><?php echo $page->read('notices', 'par1'); ?></p>
	<div class="ctainer-left">
		<p class="bold-text"><?php echo $page->read('notices', 'title1'); ?></p>
	</div>
	<div class="ctainer-right">
		<p><?php echo $page->read('notices', 'par2'); ?></p>
	</div><div class="clear"></div>
	<div class="empty-left-ctainer"></div>
	<div class="empty-right-ctainer">
		<p><?php echo $page->read('notices', 'par3'); ?></p>
	</div><div class="clear"></div>
	<div class="ctainer-left">
		<p class="bold-text"><?php echo $page->read('notices', 'title2'); ?></p>
	</div>
	<div class="ctainer-right">
		<p><?php echo $page->read('notices', 'par4'); ?></p>
	</div>
	<div class="clear"></div>
	<div class="ctainer-left">
		<p class="bold-text"><?php echo $page->read('notices', 'title3'); ?></p>
	</div>
	<div class="ctainer-right">
		<p><?php echo $page->read('notices', 'par5'); ?></p>
	</div>
	<div class="clear"></div>
	<div class="ctainer-left">
		<p class="bold-text"><?php echo $page->read('notices', 'title4'); ?></p>
	</div>
	<div class="ctainer-right">
		<p><b><?php echo $page->read('notices', 'b1'); ?></b><?php echo $page->read('notices', 'par6'); ?><b><?php echo $page->read('notices', 'b2'); ?></b><?php echo $page->read('notices', 'par7'); ?><b><?php echo $page->read('notices', 'b3'); ?></b><?php echo $page->read('notices', 'par8'); ?></p>
	</div>
	<div class="clear"></div>
	<div class="ctainer-left">
		<p class="bold-text"><?php echo $page->read('notices', 'title5'); ?></p>
	</div>
	<div class="ctainer-right">
		<p><?php echo $page->read('notices', 'par9'); ?> <a href="http://wwwinfo.mfcr.cz/cgi-bin/ares/darv_or.cgi?ico=24295361&jazyk=cz&xml=1"><?php echo $page->read('notices', 'here'); ?></a></p>
	</div>
	<div class="clear"></div>
	<div class="ctainer-left">
		<p class="bold-text"><?php echo $page->read('notices', 'title6'); ?></p>
	</div>
	<div class="ctainer-right">
		<p><?php echo $page->read('notices', 'par10'); ?></p>
	</div>
	<div class="clear"></div>
	<div class="ctainer-left"></div>
	<div class="ctainer-right-less-margin-first">
		<p class="underline-text"><?php echo $page->read('notices', 'cr'); ?></p>
	</div>
	<div class="clear"></div>
	<div class="ctainer-left"></div>
	<div class="ctainer-right-less-margin">
		<p><b><?php echo $page->read('notices', 'b4'); ?></b><?php echo $page->read('notices', 'par11'); ?></p>
	</div>
	<div class="clear"></div>
	<div class="ctainer-left"></div>
	<div class="ctainer-right-less-margin">
		<p class="underline-text"><?php echo $page->read('notices', 'sv'); ?></p>
	</div><div class="clear"></div>
	<div class="ctainer-left"></div>
	<div class="ctainer-right-less-margin">
		<p><b><?php echo $page->read('notices', 'b5'); ?></b><?php echo $page->read('notices', 'par12'); ?></p>
	</div>
	<div class="clear"></div>
</div>
<?php
    require_once('partial/footer.php');

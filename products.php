<?php
  require_once('action/ProductsAction.php');
  $action = new ProductsAction();
  $action->execute();
  $page = $action->getTranslator();
  require_once('partial/header.php');
?>
<div class="products-page">
	<ul>
		<li><?php echo $page->read('products', 'li1'); ?></li>
		<ul>
			<li><?php echo $page->read('products', 'par1'); ?><a href="http://www.mahonydiet.cz">www.mahonydiet.cz</a></li>
		</ul>
		<li><?php echo $page->read('products', 'li2'); ?></li>
		<li><?php echo $page->read('products', 'li3'); ?></li>
		<li><?php echo $page->read('products', 'li4'); ?></li>
		<li><?php echo $page->read('products', 'li5'); ?></li>
	</ul>
</div>
<?php
    require_once('partial/footer.php');

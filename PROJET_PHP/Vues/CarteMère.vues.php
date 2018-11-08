<div class="container">

  <?php foreach($list as $id => $url){   ?>
  <a href="DisqueDur2.ctrl.php?id=<?php echo $id ?>">
  <img src="<?= $url ?>" />
  </a>
 <?php } ?>

</div>

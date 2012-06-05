<?php

/**
 * @file box.tpl.php
 *
 * Theme implementation to display a box.
 *
 * Available variables:
 * - $title: Box title.
 * - $content: Box content.
 *
 * @see template_preprocess()
 */
?>
<div class="box">

<?php if ($title): ?>
  <h3><?php echo $title ?></h3>
<?php endif; ?>

  <div class="content"><?php echo $content ?></div>
</div>

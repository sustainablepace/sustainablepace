<ul>
<?php 
  foreach( $pages->find( 'author', 'privacy' ) as $item ) {
    $title = $item->shorttitle();
    if( !$title ) {
      $title = $item->title();
    }
?>
<li>
  <a href="<?= $item->url() ?>"<?= $item->type() ? ' type="' . $item->type() . '"' : '' ?>
><?= html( $title ) ?></a>
</li>
<?php
  }
?>
</ul>

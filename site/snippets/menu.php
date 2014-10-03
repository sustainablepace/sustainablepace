<?php 
  $feed = $pages->find( 'feed' );
  $title = $feed->shorttitle();
	if( !$title ) {
    $title = $feed->title();
	}
?>
<a href="<?= $feed->url() ?>"<?= $feed->type() ? ' type="' . $feed->type() . '"' : '' ?>
><?= html( $title ) ?></a>


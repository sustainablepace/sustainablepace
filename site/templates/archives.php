<?php snippet('header') ?>
<section class="content">
  <article>
    <dl>
<?php 
  $siblings = $page->siblings()->visible()->flip();
  foreach( $siblings as $s ) {
    echo '<dt><small>' . $s->date( 'Y-m-d' ) . '</small></dt>';
    echo '<dd>&raquo;&nbsp;<a href="' . $s->url() . '">' . $s->title() . '</a></dd>';
  }

?>
    <dl>
  </article>
</section>

<?php snippet('footer') ?>

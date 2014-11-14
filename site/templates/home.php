<?php snippet('header') ?>
<section class="content">
<?php 
  $siblings = $page->siblings()->without('what-is-sustainable-pace')->visible()->flip()->paginate( 5 );
  foreach( $siblings as $sibling ) {
    $date = '<p class="date">' . $sibling->date( 'F jS, Y' ) . '</p>';
    $title = '<h1><a href="' . $sibling->url() . '">' . html($sibling->title()) . '</a></h1>';
    $text = '<p>' . excerpt( $sibling->text(), 700 ) . '</p>';
    $more = '<p class="more"><a href="' . $sibling->url() . '">More...</a></p>';
    echo '<article>' . $date . $title . $text . $more . '</article>';
  }

?>
<?php if( $siblings->pagination()->hasPages() ): ?>
<p class="pagination">
 <?php if( $siblings->pagination()->hasPrevPage() ): ?>
 <a class="next" href="<?php echo $siblings->pagination()->prevPageURL() ?>">&lsaquo;&nbsp;newer&nbsp;posts</a>
 <?php endif ?>
 <?php if( $siblings->pagination()->hasNextPage() ): ?>
 <a class="prev" href="<?php echo $siblings->pagination()->nextPageURL() ?>">older&nbsp;posts&nbsp;&rsaquo;</a>
 <?php endif ?>
</p>
<?php endif ?>

<!--
<?php 
  $archives = $pages->find( 'archives' );
?>
<a href="<?php echo $archives->url() ?>"<?php echo $archives->type() ? ' type="' . $archives->type() . '"' : '' ?>>See all posts &raquo;</a>
-->

</section>
<?php snippet('footer') ?>

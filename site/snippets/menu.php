<nav class="menu">
  <ul>
    <?php
    $menuPages = array(
      $pages->find( 'feed' ),
      $pages->find( 'author' ),
      $pages->find( 'archives ')
    );
    foreach( $menuPages as $menuPage ) {
        $url = $menuPage->url();
	$title = $menuPage->shorttitle();
	if( !$title ) {
        	$title = $menuPage->title();
	}
        $type = $menuPage->type();
    ?>
    <li><a href="<?php echo $url ?>"<?php echo $type ? ' type="' . $type . '"' : '' ?>><?php echo html( $title ) ?></a></li>
    <?php
    }
    ?>
  </ul>
</nav>

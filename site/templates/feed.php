<?php 
$articles = $page->siblings()->visible()->flip()->limit(10);
snippet('feed', array(
  'link'  => url('home'),
  'items' => $articles,
  'descriptionField'  => 'text', 
  'descriptionLength' => 300
));
?>

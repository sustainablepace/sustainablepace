<?php snippet('header') ?>

<section class="content">
  <article>
    <p class="date">
      <?= $page->date( 'F jS, Y' ); ?>
    </p>
    <h1>
      <?= html($page->title()) ?>
      <?php if( $page->subtitle() ): ?>
        <br>
        <small>
          (<?= html($page->subtitle()) ?>)
        </small>
      <?php endif; ?>
    </h1>
    <?= kirbytext( $page->text() ) ?>
    <?php snippet('disqus', array('disqus_shortname' => 'sustainablepace' )) ?>
    <a href="https://twitter.com/share" class="twitter-share-button" data-via="twitterapi" data-lang="en">Tweet</a>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </article>
</section>

<?php snippet('footer') ?>

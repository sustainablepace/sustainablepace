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
    <?php //snippet('disqus', array('disqus_shortname' => 'sustainablepace' )) ?>
  </article>
</section>

<?php snippet('footer') ?>

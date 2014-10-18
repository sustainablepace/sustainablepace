<?php snippet('header') ?>

<section class="content">
  <article>
  <h1><?= html($page->title()) ?></h1>
  <p>
    <?= kirbytext($page->text()) ?>
  </p>
    <dl>
    <?php $siblings = $page->children()->visible()->flip(); ?>
    <?php if( $siblings->count() > 0 ): ?>
      <?php foreach( $siblings as $s ): ?>
        <dt>
          <small><?= $s->date( 'Y-m-d' ) ?></small>
        </dt>
        <dd>
          &raquo;&nbsp;<a href="<?= $s->url() ?>"><?= $s->title() ?></a>
        </dd>
      <?php endforeach; ?>
    <?php else: ?>
      <p>
        <em>I will add information on recent experiments soon.</em>
      <p>
    <?php endif; ?>
    </dl>
  </article>
</section>

<?php snippet('footer') ?>

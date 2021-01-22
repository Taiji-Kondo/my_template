<?php
/*
Template Name: TOP PAGE
*/
get_header();
?>

<main>
  <?php
  // Pictureクラスのインスタンス化
  $Picture = new Picture();
  ?>
  <div>
    <section>
      <h2>Picture class</h2>
      <div class="img relative w-full">
        <?php $Picture->get_picture('/assets/img/top-hero01'); ?>
      </div>
    </section>

    <section>
      <h2>Json class</h2>
      <span><?php var_dump(Json::get_json('/@json/variafables.json')); ?></span>
    </section>

    <section>
      <h2>Random class</h2>
      <div>
        <p>ミックス</p>
        <span><?php echo Random::shuffle();; ?></span>
      </div>
      <div>
        <p>数値のみ</p>
        <span><?php echo Random::int();; ?></span>
      </div>
      <div>
        <p>文字のみ</p>
        <span><?php echo Random::str();; ?></span>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>

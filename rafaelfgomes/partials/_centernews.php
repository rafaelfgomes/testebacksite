<?php

  $stmtFeatured = Connection::prepare('SELECT tn.news_title, tn.news_description, tn.news_keywords, tn.news_content, tn.news_image, tn.created_at, tc.category_name FROM rafaelfgomes_tbl_news tn INNER JOIN rafaelfgomes_tbl_categories tc ON tn.category_id = tc.id WHERE tc.id = 5 ORDER BY tn.id DESC LIMIT 1');
  $stmtFeatured->execute();
  $featuredNews = $stmtFeatured->fetchAll();

  $stmtTech = Connection::prepare('SELECT tn.news_title, tn.news_description, tn.news_keywords, tn.news_content, tn.news_image, tn.created_at, tc.category_name FROM rafaelfgomes_tbl_news tn INNER JOIN rafaelfgomes_tbl_categories tc ON tn.category_id = tc.id WHERE tc.id = 1 ORDER BY tn.id DESC LIMIT 1');
  $stmtTech->execute();
  $techNews = $stmtTech->fetchAll();

  $stmtSports = Connection::prepare('SELECT tn.news_title, tn.news_description, tn.news_keywords, tn.news_content, tn.news_image, tn.created_at, tc.category_name FROM rafaelfgomes_tbl_news tn INNER JOIN rafaelfgomes_tbl_categories tc ON tn.category_id = tc.id WHERE tc.id = 2 ORDER BY tn.id DESC LIMIT 1');
  $stmtSports->execute();
  $sportsNews = $stmtSports->fetchAll();

  $stmtEntertainment = Connection::prepare('SELECT tn.news_title, tn.news_description, tn.news_keywords, tn.news_content, tn.news_image, tn.created_at, tc.category_name FROM rafaelfgomes_tbl_news tn INNER JOIN rafaelfgomes_tbl_categories tc ON tn.category_id = tc.id WHERE tc.id = 3 ORDER BY tn.id DESC LIMIT 1');
  $stmtEntertainment->execute();
  $entertainmentNews = $stmtEntertainment->fetchAll();

  $stmtEconomy = Connection::prepare('SELECT tn.news_title, tn.news_description, tn.news_keywords, tn.news_content, tn.news_image, tn.created_at, tc.category_name FROM rafaelfgomes_tbl_news tn INNER JOIN rafaelfgomes_tbl_categories tc ON tn.category_id = tc.id WHERE tc.id = 4 ORDER BY tn.id DESC LIMIT 1');
  $stmtEconomy->execute();
  $economyNews = $stmtEconomy->fetchAll();

?>

<div class="row">

  <?php $date = explode(' ', $featuredNews[0]->created_at); ?>
  
  <div class="col col-12">

    <img src="<?= 'images/' . $featuredNews[0]->news_image ?>" class="img-fluid" width="600" height="350" alt="Destaque">

  </div>

  <div class="col col-12 pt-2">

    <p class="text-left pl-2"><i class="far fa-clock"></i>&nbsp;&nbsp;<?= date('d/m/Y', strtotime($date[0])) ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="far fa-folder-open"></i>&nbsp;&nbsp;<?= $featuredNews[0]->category_name ?></p>

  </div>

  <div class="col col-12 pb-3">

    <p class="text-left pl-2 h4"><strong><?= $featuredNews[0]->news_title ?></strong></p>

  </div>

  <div class="col col-12 mh-100 featuredcontent">

    <p class="text-justify pb-5"><?= $featuredNews[0]->news_content ?></p>

  </div>

  <div class="col col-12 featured">

    <p class="text-left pl-2"><strong>Tags:</strong> <?= $featuredNews[0]->news_keywords ?></p>

  </div>

</div>

<div class="row">

  <div class="col col-12 col-md-6">

    <?php $date = explode(' ', $techNews[0]->created_at); ?>

    <div class="col col-12 pt-3">

      <p class="text-left pl-2"><i class="far fa-clock"></i>&nbsp;&nbsp;<?= date('d/m/Y', strtotime($date[0])) ?></p>

    </div>

    <div class="col col-12">

      <p class="text-left pl-2"><i class="far fa-folder-open"></i>&nbsp;&nbsp;<?= $techNews[0]->category_name ?></p>

    </div>

    <div class="col col-12 pb-3">

      <p class="text-left pl-2 h5"><strong><?= $techNews[0]->news_title ?></strong></p>

    </div>

    <div class="col col-12 mh-100 content">

      <p class="text-justify pb-5"><?= $techNews[0]->news_content ?></p>

    </div>

    <div class="col col-12 featured">

      <p class="text-left pl-2"><strong>Tags:&nbsp;</strong><span class="keywords"><?= $techNews[0]->news_keywords ?></span></p>

    </div>

  </div>

  <div class="col col-12 col-md-6">

    <?php $date = explode(' ', $sportsNews[0]->created_at); ?>

    <div class="col col-12 pt-3">

      <p class="text-left pl-2"><i class="far fa-clock"></i>&nbsp;&nbsp;<?= date('d/m/Y', strtotime($date[0])) ?></p>

    </div>

    <div class="col col-12">

      <p class="text-left pl-2"><i class="far fa-folder-open"></i>&nbsp;&nbsp;<?= $sportsNews[0]->category_name ?></p>

    </div>

    <div class="col col-12 pb-3">

      <p class="text-left pl-2 h5"><strong><?= $sportsNews[0]->news_title ?></strong></p>

    </div>

    <div class="col col-12 mh-100 content">

      <p class="text-justify pb-5"><?= $sportsNews[0]->news_content ?></p>

    </div>

    <div class="col col-12 featured">

      <p class="text-left pl-2"><strong>Tags:&nbsp;</strong><span class="keywords"><?= $sportsNews[0]->news_keywords ?></span></p>

    </div>

  </div>

</div>

<div class="row">

  <div class="col col-12 col-md-6">

    <?php $date = explode(' ', $entertainmentNews[0]->created_at); ?>

    <div class="col col-12 pt-3">

      <p class="text-left pl-2"><i class="far fa-clock"></i>&nbsp;&nbsp;<?= date('d/m/Y', strtotime($date[0])) ?></p>

    </div>

    <div class="col col-12">

      <p class="text-left pl-2"><i class="far fa-folder-open"></i>&nbsp;&nbsp;<?= $entertainmentNews[0]->category_name ?></p>

    </div>

    <div class="col col-12 pb-3">

      <p class="text-left pl-2 h5"><strong><?= $entertainmentNews[0]->news_title ?></strong></p>

    </div>

    <div class="col col-12 mh-100 content">

      <p class="text-justify pb-5"><?= $entertainmentNews[0]->news_content ?></p>

    </div>

    <div class="col col-12 featured">

      <p class="text-left pl-2"><strong>Tags:&nbsp;</strong><span class="keywords"><?= $entertainmentNews[0]->news_keywords ?></span></p>

    </div>

  </div>

  <div class="col col-12 col-md-6">

    <?php $date = explode(' ', $economyNews[0]->created_at); ?>

    <div class="col col-12 pt-3">

      <p class="text-left pl-2"><i class="far fa-clock"></i>&nbsp;&nbsp;<?= date('d/m/Y', strtotime($date[0])) ?></p>

    </div>

    <div class="col col-12">

      <p class="text-left pl-2"><i class="far fa-folder-open"></i>&nbsp;&nbsp;<?= $economyNews[0]->category_name ?></p>

    </div>

    <div class="col col-12 pb-3">

      <p class="text-left pl-2 h5"><strong><?= $economyNews[0]->news_title ?></strong></p>

    </div>

    <div class="col col-12 mh-100 content">

      <p class="text-justify pb-5"><?= $economyNews[0]->news_content ?></p>

    </div>

    <div class="col col-12 featured">

      <p class="text-left pl-2"><strong>Tags:&nbsp;</strong><span class="keywords"><?= $economyNews[0]->news_keywords ?></span></p>

    </div>

  </div>

</div>
<?php

  $stmt1 = Connection::prepare('SELECT tn.news_title, tn.news_description, tn.news_image, tn.created_at, tc.category_name FROM rafaelfgomes_tbl_news tn INNER JOIN rafaelfgomes_tbl_categories tc ON tn.category_id = tc.id WHERE tc.id = 7 ORDER BY tn.id DESC');
  $stmt1->execute();
  $mostViewedNews = $stmt1->fetchAll();
  $rowsNumberMost = $stmt1->rowCount();

  $stmt2 = Connection::prepare('SELECT tn.news_title, tn.news_description, tn.news_image, tn.created_at, tc.category_name FROM rafaelfgomes_tbl_news tn INNER JOIN rafaelfgomes_tbl_categories tc ON tn.category_id = tc.id WHERE tc.id = 6 ORDER BY tn.id DESC');
  $stmt2->execute();
  $popularNews = $stmt2->fetchAll();
  $rowsNumberPopular = $stmt2->rowCount();

?>

<div class="row">

  <div class="col">

    <div class="row pb-3">

      <div class="col col-8 col-md-8 text-center">

        <i class="far fa-eye"></i>&nbsp;&nbsp;<span class="h6">Mais vistas</span>

      </div>

      <div class="col col-4 col-md-4 text-center">

        <span class="arrow"><i class="fas fa-arrow-left"></i></span>&nbsp;&nbsp;<span class="arrow"><i class="fas fa-arrow-right"></i></span>

      </div>

    </div>

    <?php

    if ($rowsNumberMost >= 1) {
        $date = explode(' ', $mostViewedNews[0]->created_at);

        echo '<div class="row pb-3">';
        echo '  <div class="col-4">';
        echo '    <img src="../images/' . $mostViewedNews[0]->news_image . '" alt="Imagem Noticia" width="80" height="120">';
        echo '  </div>';

        echo '  <div class="col-8">';
        echo '    <div class="row">';
        echo '      <div class="col">';
        echo '        <p class="text-left pl-2"><i class="far fa-clock"></i>&nbsp;&nbsp;' . date('d/m/Y', strtotime($date[0])) . '</p>';
        echo '      </div>';
        echo '    </div>';

        echo '    <div class="row pt-3">';
        echo '      <div class="col">';
        echo '        <p class="text-justify">' . $mostViewedNews[0]->news_title . '</p>';
        echo '      </div>';
        echo '    </div>';
        echo '  </div>';
        echo ' </div>';
    }

    if ($rowsNumberMost >= 2) {
        $date = explode(' ', $mostViewedNews[1]->created_at);

        echo '<div class="row pb-3">';
        echo '  <div class="col-4">';
        echo '    <img src="../images/' . $mostViewedNews[1]->news_image . '" alt="Imagem Noticia" width="80" height="120">';
        echo '  </div>';

        echo '  <div class="col-8">';
        echo '    <div class="row">';
        echo '      <div class="col">';
        echo '        <p class="text-left pl-2"><i class="far fa-clock"></i>&nbsp;&nbsp;' . date('d/m/Y', strtotime($date[0])) . '</p>';
        echo '      </div>';
        echo '    </div>';

        echo '    <div class="row pt-3">';
        echo '      <div class="col">';
        echo '        <p class="text-justify">' . $mostViewedNews[1]->news_title . '</p>';
        echo '      </div>';
        echo '    </div>';
        echo '  </div>';
        echo ' </div>';
    }

    if ($rowsNumberMost >= 3) {
        $date = explode(' ', $mostViewedNews[2]->created_at);

        echo '<div class="row pb-3">';
        echo '  <div class="col-4">';
        echo '    <img src="../images/' . $mostViewedNews[2]->news_image . '" alt="Imagem Noticia" width="80" height="120">';
        echo '  </div>';

        echo '  <div class="col-8">';
        echo '    <div class="row">';
        echo '      <div class="col">';
        echo '        <p class="text-left pl-2"><i class="far fa-clock"></i>&nbsp;&nbsp;' . date('d/m/Y', strtotime($date[0])) . '</p>';
        echo '      </div>';
        echo '    </div>';

        echo '    <div class="row pt-3">';
        echo '      <div class="col">';
        echo '        <p class="text-justify">' . $mostViewedNews[2]->news_title . '</p>';
        echo '      </div>';
        echo '    </div>';
        echo '  </div>';
        echo ' </div>';
    }

    ?>

  </div>

</div>

<div class="row">

  <div class="col">

    <div class="row pb-3">

        <div class="col col-8 col-md-8 text-center">

          <i class="far fa-star"></i>&nbsp;&nbsp;<span class="h6">Populares</span>

        </div>

        <div class="col col-4 col-md-4 text-center">

          <span class="arrow"><i class="fas fa-arrow-left"></i></span>&nbsp;&nbsp;<span class="arrow"><i class="fas fa-arrow-right"></i></span>

        </div>

    </div>

    <?php

    if ($rowsNumberPopular >= 1) {
        $date = explode(' ', $popularNews[0]->created_at);

        echo '<div class="row pb-3">';
        echo '  <div class="col-4">';
        echo '    <img src="../images/' . $popularNews[0]->news_image . '" alt="Imagem Noticia" width="80" height="120">';
        echo '  </div>';

        echo '  <div class="col-8">';
        echo '    <div class="row">';
        echo '      <div class="col">';
        echo '        <p class="text-left pl-2"><i class="far fa-clock"></i>&nbsp;&nbsp;' . date('d/m/Y', strtotime($date[0])) . '</p>';
        echo '      </div>';
        echo '    </div>';

        echo '    <div class="row pt-3">';
        echo '      <div class="col">';
        echo '        <p class="text-justify">' . $popularNews[0]->news_title . '</p>';
        echo '      </div>';
        echo '    </div>';
        echo '  </div>';
        echo ' </div>';
    }

    if ($rowsNumberPopular >= 2) {
        $date = explode(' ', $popularNews[1]->created_at);

        echo '<div class="row pb-3">';
        echo '  <div class="col-4">';
        echo '    <img src="../images/' . $popularNews[1]->news_image . '" alt="Imagem Noticia" width="80" height="120">';
        echo '  </div>';

        echo '  <div class="col-8">';
        echo '    <div class="row">';
        echo '      <div class="col">';
        echo '        <p class="text-left pl-2"><i class="far fa-clock"></i>&nbsp;&nbsp;' . date('d/m/Y', strtotime($date[0])) . '</p>';
        echo '      </div>';
        echo '    </div>';

        echo '    <div class="row pt-3">';
        echo '      <div class="col">';
        echo '        <p class="text-justify">' . $popularNews[1]->news_title . '</p>';
        echo '      </div>';
        echo '    </div>';
        echo '  </div>';
        echo ' </div>';
    }

    if ($rowsNumberPopular >= 3) {
        $date = explode(' ', $popularNews[2]->created_at);

        echo '<div class="row pb-3">';
        echo '  <div class="col-4">';
        echo '    <img src="../images/' . $popularNews[2]->news_image . '" alt="Imagem Noticia" width="80" height="120">';
        echo '  </div>';

        echo '  <div class="col-8">';
        echo '    <div class="row">';
        echo '      <div class="col">';
        echo '        <p class="text-left pl-2"><i class="far fa-clock"></i>&nbsp;&nbsp;' . date('d/m/Y', strtotime($date[0])) . '</p>';
        echo '      </div>';
        echo '    </div>';

        echo '    <div class="row pt-3">';
        echo '      <div class="col">';
        echo '        <p class="text-justify">' . $popularNews[2]->news_title . '</p>';
        echo '      </div>';
        echo '    </div>';
        echo '  </div>';
        echo ' </div>';
    }

    if ($rowsNumberPopular >= 4) {
        $date = explode(' ', $popularNews[3]->created_at);

        echo '<div class="row pb-3">';
        echo '  <div class="col-4">';
        echo '    <img src="../images/' . $popularNews[3]->news_image . '" alt="Imagem Noticia" width="80" height="120">';
        echo '  </div>';

        echo '  <div class="col-8">';
        echo '    <div class="row">';
        echo '      <div class="col">';
        echo '        <p class="text-left pl-2"><i class="far fa-clock"></i>&nbsp;&nbsp;' . date('d/m/Y', strtotime($date[0])) . '</p>';
        echo '      </div>';
        echo '    </div>';

        echo '    <div class="row pt-3">';
        echo '      <div class="col">';
        echo '        <p class="text-justify">' . $popularNews[3]->news_title . '</p>';
        echo '      </div>';
        echo '    </div>';
        echo '  </div>';
        echo ' </div>';
    }

    ?>

  </div>

</div>
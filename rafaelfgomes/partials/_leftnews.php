<?php

  $stmt = Connection::prepare('SELECT tn.news_title, tn.news_description, tn.news_image, tn.created_at, tc.category_name FROM rafaelfgomes_tbl_news tn INNER JOIN rafaelfgomes_tbl_categories tc ON tn.category_id = tc.id WHERE tc.id = 7 ORDER BY tn.id DESC');
  $stmt->execute();
  $mostViewedNews = $stmt->fetchAll();
  $rowsNumber = $stmt->rowCount();

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

      if ($rowsNumber >= 1) {
          $date = explode(' ', $mostViewedNews[0]->created_at);

          echo '<div class="row pb-3">';
          echo '  <div class="col-4">';
          echo '    <img src="images/' . $mostViewedNews[0]->news_image . '" alt="Imagem Noticia" width="80" height="120">';
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

      if ($rowsNumber >= 2) {
          $date = explode(' ', $mostViewedNews[1]->created_at);

          echo '<div class="row pb-3">';
          echo '  <div class="col-4">';
          echo '    <img src="images/' . $mostViewedNews[1]->news_image . '" alt="Imagem Noticia" width="80" height="120">';
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

      if ($rowsNumber >= 3) {
          $date = explode(' ', $mostViewedNews[2]->created_at);

          echo '<div class="row pb-3">';
          echo '  <div class="col-4">';
          echo '    <img src="images/' . $mostViewedNews[2]->news_image . '" alt="Imagem Noticia" width="80" height="120">';
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
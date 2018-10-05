<?php

  require_once '../database/connection.php';

  $stmtEconomy = Connection::prepare('SELECT tn.news_title, tn.news_description, tn.news_keywords, tn.news_content, tn.news_image, tn.created_at, tc.category_name FROM rafaelfgomes_tbl_news tn INNER JOIN rafaelfgomes_tbl_categories tc ON tn.category_id = tc.id WHERE tc.id = 4 ORDER BY tn.id DESC');
  $stmtEconomy->execute();
  $economyNews = $stmtEconomy->fetchAll();
  $rowsEconomyNews = $stmtEconomy->rowCount();

?>

<!DOCTYPE html>

<html lang="pt-br">

  <head>

    <?php include_once '../partials/_head.php'; ?>
    <link rel="stylesheet" href="../css/styles.css" type="text/css">
  
  </head>

  <body>

    <?php include_once 'partials/_pagestop.php'; ?>

    <div class="container">

      <?php include_once 'partials/_pagesheader.php'; ?>

      <?php include_once 'partials/_pagesnavbar.php'; ?>

      <p>&nbsp;</p>

      <div class="row">

        <div class="col col-12 col-md-8">

          <?php
          
            if ($rowsEconomyNews >= 1) {
                $date = explode(' ', $economyNews[0]->created_at);

                echo '<div class="row">';
                echo '  <div class="col col-12">';
                echo '    <img src="../images/' . $economyNews[0]->news_image . '" class="img-fluid" width="800" height="350" alt="Destaque">';
                echo '  </div>';
                echo '  <div class="col col-12 pt-2">';
                echo '    <p class="text-left pl-2"><i class="far fa-clock"></i>&nbsp;&nbsp;' . date('d/m/Y', strtotime($date[0])) . '&nbsp;&nbsp;&nbsp;&nbsp;<i class="far fa-folder-open"></i>&nbsp;&nbsp;' . $economyNews[0]->category_name . '</p>';
                echo '  </div>';
                echo '  <div class="col col-12 pb-3">';
                echo '    <p class="text-left pl-2 h4"><strong>' . $economyNews[0]->news_title . '</strong></p>';
                echo '  </div>';
                echo '  <div class="col col-12 mh-100 pagescontent">';
                echo '    <p class="text-justify pb-5">' . $economyNews[0]->news_content . '</p>';
                echo '  </div>';
                echo '  <div class="col col-12 featured">';
                echo '    <p class="text-left pl-2"><strong>Tags:&nbsp;</strong>' . $economyNews[0]->news_keywords . '</p>';
                echo '  </div>';
                echo '</div>';
            }

            if ($rowsEconomyNews >= 2) {
                $date = explode(' ', $economyNews[1]->created_at);

                echo '<div class="row pt-3">';
                echo '  <div class="col col-12">';
                echo '    <img src="../images/' . $economyNews[1]->news_image . '" class="img-fluid" width="800" height="350" alt="Destaque">';
                echo '  </div>';
                echo '  <div class="col col-12 pt-2">';
                echo '    <p class="text-left pl-2"><i class="far fa-clock"></i>&nbsp;&nbsp;' . date('d/m/Y', strtotime($date[0])) . '&nbsp;&nbsp;&nbsp;&nbsp;<i class="far fa-folder-open"></i>&nbsp;&nbsp;' . $economyNews[1]->category_name . '</p>';
                echo '  </div>';
                echo '  <div class="col col-12 pb-3">';
                echo '    <p class="text-left pl-2 h4"><strong>' . $economyNews[1]->news_title . '</strong></p>';
                echo '  </div>';
                echo '  <div class="col col-12 mh-100 pagescontent">';
                echo '    <p class="text-justify pb-5">' . $economyNews[1]->news_content . '</p>';
                echo '  </div>';
                echo '  <div class="col col-12 featured">';
                echo '    <p class="text-left pl-2"><strong>Tags:&nbsp;</strong>' . $economyNews[1]->news_keywords . '</p>';
                echo '  </div>';
                echo '</div>';
            }

            if ($rowsEconomyNews >= 3) {
                $date = explode(' ', $economyNews[2]->created_at);

                echo '<div class="row pt-3">';
                echo '  <div class="col col-12">';
                echo '    <img src="../images/' . $economyNews[2]->news_image . '" class="img-fluid" width="800" height="350" alt="Destaque">';
                echo '  </div>';
                echo '  <div class="col col-12 pt-2">';
                echo '    <p class="text-left pl-2"><i class="far fa-clock"></i>&nbsp;&nbsp;' . date('d/m/Y', strtotime($date[0])) . '&nbsp;&nbsp;&nbsp;&nbsp;<i class="far fa-folder-open"></i>&nbsp;&nbsp;' . $economyNews[2]->category_name . '</p>';
                echo '  </div>';
                echo '  <div class="col col-12 pb-3">';
                echo '    <p class="text-left pl-2 h4"><strong>' . $economyNews[2]->news_title . '</strong></p>';
                echo '  </div>';
                echo '  <div class="col col-12 mh-100 pagescontent">';
                echo '    <p class="text-justify pb-5">' . $economyNews[2]->news_content . '</p>';
                echo '  </div>';
                echo '  <div class="col col-12">';
                echo '    <p class="text-left pl-2"><strong>Tags:&nbsp;</strong>' . $economyNews[2]->news_keywords . '</p>';
                echo '  </div>';
                echo '</div>';
            }
          
          ?>

        </div>     
        
        <div class="col col-12 col-md-4">
          
          <div class="row">

            <div class="col">

              <?php include_once 'partials/_sidenews.php'; ?>

            </div>

          </div>
        
        </div>

      </div> 

    </div>

    <?php include_once '../partials/_footer.php'; ?>

    <?php include_once '../partials/_scripts.php'; ?>
    
  </body>

</html>
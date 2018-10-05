<?php

  require_once '../database/connection.php';

  define('IMAGES_DIR', '../images/');

  $newsId = $_POST['news_id'];

  $stmt2 = Connection::prepare('SELECT news_image, category_id FROM rafaelfgomes_tbl_news WHERE id = :newsId');
  $stmt2->bindParam(':newsId', $newsId, PDO::PARAM_INT);
  $execSelect = $stmt2->execute();
  $data = $stmt2->fetchAll();

  $imagePath = IMAGES_DIR . $data[0]->news_image;

  $stmt1 = Connection::prepare('DELETE FROM rafaelfgomes_tbl_news WHERE id = :newsId');
  $stmt1->bindParam(':newsId', $newsId, PDO::PARAM_INT);
  $exec = $stmt1->execute();

?>

<!DOCTYPE html>

<html lang="pt-br">

  <head>

    <?php include_once '../partials/_head.php'; ?>
    <link rel="stylesheet" href="../css/styles.css" type="text/css">

  </head>

  <body>

    <?php include_once '../partials/_admintop.php'; ?>

    <div class="container">

      <?php include_once '../partials/_admintitle.php'; ?>

      <div class="row pt-3">

        <div class="col">

          <div class="card">

            <div class="card-body">

              <?php

                if ($exec) {
                    unlink($imagePath);
                    echo '<p class="h2 text-center">Notícia excluída com sucesso!!!</p>';
                } else {
                    echo '<p class="h2 text-center">Erro ao excluir a notícia!!!</p>';
                }

              ?>

            </div>

          </div>

        </div>
        
      </div>

      <div class="row pt-3">

        <div class="col d-flex justify-content-center">

          <a class="btn btn-primary" href="admin.php" role="button">Voltar para o painel administrativo</a>

        </div>

      </div>

    </div>
    
  </body>

</html>
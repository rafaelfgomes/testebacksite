<?php

  require_once '../database/connection.php';

  $stmt = Connection::prepare('SELECT tn.id, tn.news_title, tc.category_name FROM rafaelfgomes_tbl_news tn INNER JOIN rafaelfgomes_tbl_categories tc ON tn.category_id = tc.id ORDER BY tn.id DESC');
  $stmt->execute();
  $data = $stmt->fetchAll();
  $rowsNumber = $stmt->rowCount();

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

      <?php include_once '../partials/_admintitle.php' ?>

      <div class="row pt-4 pb-4">

        <div class="col d-flex justify-content-center">

          <a class="btn btn-primary" href="formaddnews.php" role="button">Cadastrar nova notícia</a>

        </div>

        <div class="col d-flex justify-content-center">

          <a class="btn btn-info" href="../index.php" role="button">Voltar para o site</a>

        </div>

      </div>

      <div class="row">

        <table class="table">

          <thead class="thead-dark">

            <tr class="text-center">

              <th scope="col">#</th>
              <th scope="col">Título</th>
              <th scope="col">Categoria</th>
              <th scope="col">Açoes</th>

            </tr>

          </thead>

          <tbody>

            <?php
            
              if ($rowsNumber >= 1) {
                  echo '<tr class="text-center">';
                  echo '<th class="align-middle" scope="row">' . $data[0]->id . '</th>';
                  echo '<td class="align-middle">' . $data[0]->news_title . '</td>';
                  echo '<td class="align-middle">' . $data[0]->category_name . '</td>';
                  echo '<td class="align-middle">

                          <div class="row">
                          
                            <div class="col">

                              <form action="formeditnews.php" method="POST">

                                <input type="hidden" name="news_id" value="' . $data[0]->id . '">
                                <button class="btn btn-warning"><i class="far fa-edit"></i></button>

                              </form>

                            </div>

                            <div class="col">

                              <form action="deletenews.php" method="POST">

                                <input type="hidden" name="news_id" value="' . $data[0]->id . '">
                                <button class="btn btn-danger"><i class="far fa-times-circle"></i></button>

                              </form>

                            </div>
                          
                          </div>

                        </td>';
                  echo '<tr>';
              }
            
            ?>

            <?php

              if ($rowsNumber >= 2) {
                  echo '<tr class="text-center">';
                  echo '<th class="align-middle" scope="row">' . $data[1]->id . '</th>';
                  echo '<td class="align-middle">' . $data[1]->news_title . '</td>';
                  echo '<td class="align-middle">' . $data[1]->category_name . '</td>';
                  echo '<td class="align-middle">

                          <div class="row">
                          
                            <div class="col">

                              <form action="formeditnews.php" method="POST">

                                <input type="hidden" name="news_id" value="' . $data[1]->id . '">
                                <button class="btn btn-warning"><i class="far fa-edit"></i></button>

                              </form>

                            </div>

                            <div class="col">

                              <form action="deletenews.php" method="POST">

                                <input type="hidden" name="news_id" value="' . $data[1]->id . '">
                                <button class="btn btn-danger"><i class="far fa-times-circle"></i></button>

                              </form>

                            </div>
                          
                          </div>

                        </td>';
                  echo '<tr>';
              }

            ?>

            <?php

              if ($rowsNumber >= 3) {
                  echo '<tr class="text-center">';
                  echo '<th class="align-middle" scope="row">' . $data[2]->id . '</th>';
                  echo '<td class="align-middle">' . $data[2]->news_title . '</td>';
                  echo '<td class="align-middle">' . $data[2]->category_name . '</td>';
                  echo '<td class="align-middle">

                          <div class="row">
                          
                            <div class="col">

                              <form action="formeditnews.php" method="POST">

                                <input type="hidden" name="news_id" value="' . $data[2]->id . '">
                                <button class="btn btn-warning"><i class="far fa-edit"></i></button>

                              </form>

                            </div>

                            <div class="col">

                              <form action="deletenews.php" method="POST">

                                <input type="hidden" name="news_id" value="' . $data[2]->id . '">
                                <button class="btn btn-danger"><i class="far fa-times-circle"></i></button>

                              </form>

                            </div>
                          
                          </div>

                        </td>';
                  echo '<tr>';
              }

            ?>

            <?php

              if ($rowsNumber >= 4) {
                  echo '<tr class="text-center">';
                  echo '<th class="align-middle" scope="row">' . $data[3]->id . '</th>';
                  echo '<td class="align-middle">' . $data[3]->news_title . '</td>';
                  echo '<td class="align-middle">' . $data[3]->category_name . '</td>';
                  echo '<td class="align-middle">

                          <div class="row">
                          
                            <div class="col">

                              <form action="formeditnews.php" method="POST">

                                <input type="hidden" name="news_id" value="' . $data[3]->id . '">
                                <button class="btn btn-warning"><i class="far fa-edit"></i></button>

                              </form>

                            </div>

                            <div class="col">

                              <form action="deletenews.php" method="POST">

                                <input type="hidden" name="news_id" value="' . $data[3]->id . '">
                                <button class="btn btn-danger"><i class="far fa-times-circle"></i></button>

                              </form>

                            </div>
                          
                          </div>

                        </td>';
                  echo '<tr>';
              }

            ?>

            <?php

              if ($rowsNumber >= 5) {
                  echo '<tr class="text-center">';
                  echo '<th class="align-middle" scope="row">' . $data[4]->id . '</th>';
                  echo '<td class="align-middle">' . $data[4]->news_title . '</td>';
                  echo '<td class="align-middle">' . $data[4]->category_name . '</td>';
                  echo '<td class="align-middle">

                            <div class="row">
                            
                              <div class="col">

                                <form action="formeditnews.php" method="POST">

                                  <input type="hidden" name="news_id" value="' . $data[4]->id . '">
                                  <button class="btn btn-warning"><i class="far fa-edit"></i></button>

                                </form>

                              </div>

                              <div class="col">

                                <form action="deletenews.php" method="POST">

                                  <input type="hidden" name="news_id" value="' . $data[4]->id . '">
                                  <button class="btn btn-danger"><i class="far fa-times-circle"></i></button>

                                </form>

                              </div>
                            
                            </div>

                          </td>';
                  echo '<tr>';
              }

            ?>
            
          </tbody>

        </table>

      </div>

    </div>

    <?php include_once '../partials/_adminfooter.php'; ?>

    <?php include_once '../partials/_scripts.php'; ?>

  </body>

</html>
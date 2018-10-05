<?php

  require_once '../database/connection.php';

  $newsId = $_POST['news_id'];

  $stmt1 = Connection::prepare('SELECT id, category_name FROM rafaelfgomes_tbl_categories');
  $stmt1->execute();
  $categories = $stmt1->fetchAll();

  $stmt2 = Connection::prepare('SELECT * FROM rafaelfgomes_tbl_news WHERE id = :newsId');
  $stmt2->bindParam(':newsId', $newsId, PDO::PARAM_INT);
  $stmt2->execute();
  $news = $stmt2->fetchAll();

?>

<!DOCTYPE html>

<html>

  <head>
    
    <?php include '../partials/_head.php'; ?>
    <link rel="stylesheet" href="../css/styles.css" type="text/css">
  
  </head>
  
  <body>

    <?php include '../partials/_admintop.php'; ?>

    <div class="container">

      <?php include '../partials/_admintitle.php'; ?>

      <div class="row d-flex justify-content-center">

        <div class="col col-md-8">

          <div class="card text-justify">

            <div class="card-header">

              <p class="h3 text-center">Editar notícia</p> 

            </div>

            <div class="card-body">

              <div class="row pb-3">

                <div class="col col-12 col-md-6 offset-md-3">

                  <img src="<?= '../images/' . $news[0]->news_image ?>" class="rounded img-fluid" alt="">

                </div>

              </div>

              <form action="savenews.php" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="action" value="update">
                <input type="hidden" name="news_id" value="<?= $newsId ?>">
                <input type="hidden" name="old_image" value="<?= $news[0]->news_image ?>">

                <div class="form-group row">

                  <label for="title" class="col-sm-3 col-form-label">Título</label>

                  <div class="col-sm-9">

                    <input type="text" class="form-control" id="title" name="title" placeholder="Escreva o título" maxlength="40" value="<?= $news[0]->news_title ?>" required>

                  </div>
                
                </div>

                <div class="form-group row">

                  <label for="description" class="col-sm-3 col-form-label">Descrição</label>

                  <div class="col-sm-9">

                    <input type="text" class="form-control" id="description" name="description" placeholder="Escreva uma pequena descrição" maxlength="50" value="<?= $news[0]->news_description ?>" required>

                  </div>

                </div>

                <div class="form-group row">

                  <label for="slug" class="col-sm-3 col-form-label">Slug</label>

                  <div class="col-sm-9">

                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Escreva o 'slug name'" maxlength="50" value="<?= $news[0]->news_slug ?>" required>

                  </div>

                </div>

                <div class="form-group row">

                  <label for="keywords" class="col-sm-3 col-form-label">Palavras chave</label>

                  <div class="col-sm-9">

                    <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Escreva as palavras chave" maxlength="50" value="<?= $news[0]->news_keywords ?>" required>

                  </div>

                </div>

                <div class="form-group row">

                  <label for="category" class="col-sm-3 col-form-label">Categoria</label>

                  <div class="col-sm-9">

                    <select class="form-control" id="category" name="categoryId" required>
                      <option></option>
                      <?php

                        if ($news[0]->category_id == 1) {
                            echo '<option value="' . $categories[0]->id . '" selected>' . $categories[0]->category_name . '</option>';
                        } else {
                            echo '<option value="' . $categories[0]->id . '">' . $categories[0]->category_name . '</option>';
                        }

                        if ($news[0]->category_id == 2) {
                            echo '<option value="' . $categories[1]->id . '" selected>' . $categories[1]->category_name . '</option>';
                        } else {
                            echo '<option value="' . $categories[1]->id . '">' . $categories[1]->category_name . '</option>';
                        }

                        if ($news[0]->category_id == 3) {
                            echo '<option value="' . $categories[2]->id . '" selected>' . $categories[2]->category_name . '</option>';
                        } else {
                            echo '<option value="' . $categories[2]->id . '">' . $categories[2]->category_name . '</option>';
                        }

                        if ($news[0]->category_id == 4) {
                            echo '<option value="' . $categories[3]->id . '" selected>' . $categories[3]->category_name . '</option>';
                        } else {
                            echo '<option value="' . $categories[3]->id . '">' . $categories[3]->category_name . '</option>';
                        }

                        if ($news[0]->category_id == 5) {
                            echo '<option value="' . $categories[4]->id . '" selected>' . $categories[4]->category_name . '</option>';
                        } else {
                            echo '<option value="' . $categories[4]->id . '">' . $categories[4]->category_name . '</option>';
                        }

                        if ($news[0]->category_id == 6) {
                            echo '<option value="' . $categories[5]->id . '" selected>' . $categories[5]->category_name . '</option>';
                        } else {
                            echo '<option value="' . $categories[5]->id . '">' . $categories[5]->category_name . '</option>';
                        }

                        if ($news[0]->category_id == 7) {
                            echo '<option value="' . $categories[6]->id . '" selected>' . $categories[6]->category_name . '</option>';
                        } else {
                            echo '<option value="' . $categories[6]->id . '">' . $categories[6]->category_name . '</option>';
                        }

                      ?>

                    </select>

                  </div>

                </div>

                <div class="form-group row">

                  <label for="image" class="col-sm-3 col-form-label">Mudar imagem</label>

                  <div class="col-sm-9">

                    <input type="file" name="image" accept="image/*">

                  </div>

                </div>

                <div class="form-group row">

                  <label for="content" class="col-sm-3 col-form-label">Conteúdo</label>

                  <div class="col-sm-9">

                    <textarea class="form-control" id="content" name="content" rows="6" required><?=
                      $news[0]->news_content
                    ?></textarea>

                  </div>

                </div>

                <p>&nbsp;</p>

                <div class="form-group row">

                  <div class="col d-flex justify-content-center">

                    <button type="submit" class="btn btn-warning">Editar</button>

                  </div>

                  <div class="col d-flex justify-content-center">

                    <a class="btn btn-primary" href="admin.php" role="button">Voltar</a>

                  </div>

                </div>

              </form>

            </div>

          </div>

        </div>

      </div>

    </div>

    <?php include '../partials/_adminfooter.php'; ?>

    <?php include '../partials/_scripts.php'; ?>
    
  </body>

</html>
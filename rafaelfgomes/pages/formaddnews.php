<?php

  require_once '../database/connection.php';

  $stmt = Connection::prepare('SELECT id, category_name FROM rafaelfgomes_tbl_categories');
  $stmt->execute();
  $data = $stmt->fetchAll();

?>

<!DOCTYPE html>

<html lang="pt-br">

  <head>

    <?php include_once '../partials/_head.php'; ?>
    <link rel="stylesheet" href="../css/styles.css" type="text/css">

  </head>

  <body>

    <?php include '../partials/_admintop.php'; ?>

    <div class="container">

      <?php include_once '../partials/_admintitle.php'; ?>

      <div class="row d-flex justify-content-center">

        <div class="col col-md-8">

          <div class="card text-justify">

            <div class="card-header">

              <p class="h3 text-center">Nova notícia</p> 

            </div>

            <div class="card-body">

              <form action="savenews.php" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="action" value="insert">

                <div class="form-group row">

                  <label for="title" class="col-sm-3 col-form-label">Título</label>

                  <div class="col-sm-9">

                    <input type="text" class="form-control" id="title" name="title" placeholder="Escreva o título" maxlength="40" required>

                  </div>
                
                </div>

                <div class="form-group row">

                  <label for="description" class="col-sm-3 col-form-label">Descrição</label>

                  <div class="col-sm-9">

                    <input type="text" class="form-control" id="description" name="description" placeholder="Escreva uma pequena descrição" maxlength="50" required>

                  </div>

                </div>

                <div class="form-group row">

                  <label for="keywords" class="col-sm-3 col-form-label">Palavras chave</label>

                  <div class="col-sm-9">

                    <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Escreva as palavras chave" maxlength="50" required>

                  </div>

                </div>

                <div class="form-group row">

                  <label for="category" class="col-sm-3 col-form-label">Categoria</label>

                  <div class="col-sm-9">

                    <select class="form-control" id="category" name="categoryId" required>
                      <option class="disabled">Selecione uma categoria</option>
                      <option value="<?= $data[0]->id ?>"><?= $data[0]->category_name ?></option>
                      <option value="<?= $data[1]->id ?>"><?= $data[1]->category_name ?></option>
                      <option value="<?= $data[2]->id ?>"><?= $data[2]->category_name ?></option>
                      <option value="<?= $data[3]->id ?>"><?= $data[3]->category_name ?></option>
                      <option value="<?= $data[4]->id ?>"><?= $data[4]->category_name ?></option>
                      <option value="<?= $data[5]->id ?>"><?= $data[5]->category_name ?></option>
                      <option value="<?= $data[6]->id ?>"><?= $data[6]->category_name ?></option>
                    </select>

                  </div>

                </div>

                <div class="form-group row">

                  <label for="image" class="col-sm-3 col-form-label">Imagem</label>

                  <div class="col-sm-9">

                    <input type="file" name="image" accept="image/*">

                  </div>

                </div>

                <div class="form-group row">

                  <label for="content" class="col-sm-3 col-form-label">Conteúdo</label>

                  <div class="col-sm-9">

                    <textarea class="form-control" id="content" name="content" rows="6" required></textarea>

                  </div>

                </div>

                <p>&nbsp;</p>

                <div class="form-group row">

                  <div class="col d-flex justify-content-center">

                    <button type="submit" class="btn btn-success">Cadastrar</button>

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

    <?php include_once '../partials/_adminfooter.php'; ?>

    <?php include_once '../partials/_scripts.php'; ?>

  </body>

</html>
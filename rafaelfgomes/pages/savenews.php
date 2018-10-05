<?php

  require_once '../database/connection.php';

  define('IMAGES_DIR', '../images/');
  define('ECONOMY_DIR', 'economy/');
  define('ENTERTAINMENT_DIR', 'entertainment/');
  define('FEATURED_DIR', 'featured/');
  define('MOSTVIEWED_DIR', 'mostviewed/');
  define('POPULARNEWS_DIR', 'popularnews/');
  define('SPORTS_DIR', 'sports/');
  define('TECHNOLOGY_DIR', 'technology/');

  if (isset($_POST['news_id'])) {
      $newsId = $_POST['news_id'];
  }

  if (isset($_POST['old_image'])) {
      $oldImage = $_POST['old_image'];
  }

  $title = $_POST['title'];
  $description = $_POST['description'];
  $keywords = $_POST['keywords'];
  $categoryId = $_POST['categoryId'];
  $content = $_POST['content'];
  $action = $_POST['action'];
  $image = $_FILES['image'];

  if (isset($_POST['slug'])) {
      $slug = $_POST['slug'];
  } else {
      $table = [
      'Š' => 'S', 'š' => 's', 'Đ' => 'Dj', 'đ' => 'dj', 'Ž' => 'Z', 'ž' => 'z', 'Č' => 'C', 'č' => 'c', 'Ć' => 'C', 'ć' => 'c',
      'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
      'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O',
      'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss',
      'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c', 'è' => 'e', 'é' => 'e',
      'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o',
      'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'ý' => 'y', 'þ' => 'b',
      'ÿ' => 'y', 'Ŕ' => 'R', 'ŕ' => 'r', '/' => '-', ' ' => '-'
    ];

      $stripped = preg_replace(['/\s{2,}/', '/[\t\n]/'], ' ', $title);

      $slug = strtolower(strtr($title, $table));
  }

  if ($image['error'] == 4) {
      if ($action == 'insert') {
          $imagePath = 'noimage.png';
      }

      if ($action == 'update') {
          $imagePath = $oldImage;
      }
  } else {
      $extension = pathinfo($image['name'], PATHINFO_EXTENSION);

      $nameHash = md5($image['name']);
      $imageName = $nameHash . '.' . $extension;

      switch ($categoryId) {
        case 1:
          $imagePath = TECHNOLOGY_DIR . $imageName;
          break;

        case 2:
          $imagePath = SPORTS_DIR . $imageName;
          break;

        case 3:
          $imagePath = ENTERTAINMENT_DIR . $imageName;
          break;

        case 4:
          $imagePath = ECONOMY_DIR . $imageName;
          break;

        case 5:
          $imagePath = FEATURED_DIR . $imageName;
          break;

        case 6:
          $imagePath = POPULARNEWS_DIR . $imageName;
          break;

        case 7:
          $imagePath = MOSTVIEWED_DIR . $imageName;
          break;

        default:
          $imagePath = 'noimage.png';
          break;
      }
  }

  $date = date('Y-m-d H:i:s');

  if ($action == 'insert') {
      $stmt = Connection::prepare('INSERT INTO rafaelfgomes_tbl_news(news_title, news_description, news_slug, news_keywords, news_content, news_image, category_id, created_at, updated_at) VALUES (:title, :description, :slug, :keywords, :content, :image, :catId, :created, :updated)');

      $stmt->bindParam(':title', $title, PDO::PARAM_STR);
      $stmt->bindParam(':description', $description, PDO::PARAM_STR);
      $stmt->bindParam(':slug', $slug, PDO::PARAM_STR);
      $stmt->bindParam(':keywords', $keywords, PDO::PARAM_STR);
      $stmt->bindParam(':content', $content, PDO::PARAM_STR);
      $stmt->bindParam(':image', $imagePath, PDO::PARAM_STR);
      $stmt->bindParam(':catId', $categoryId, PDO::PARAM_INT);
      $stmt->bindParam(':created', $date, PDO::PARAM_STR);
      $stmt->bindParam(':updated', $date, PDO::PARAM_STR);

      $exec = $stmt->execute();

      if ($exec && $image['error'] != 4) {
          move_uploaded_file($image['tmp_name'], IMAGES_DIR . $imagePath);
          chmod(IMAGES_DIR . $imagePath, 0644);
      }
  }

  if ($action == 'update') {
      $stmt = Connection::prepare('UPDATE rafaelfgomes_tbl_news SET news_title = :title, news_description = :description, news_slug = :slug, news_keywords = :keywords, news_content = :content, news_image = :image, category_id = :catId, updated_at = :updated WHERE id = :newsId');

      $stmt->bindParam(':title', $title, PDO::PARAM_STR);
      $stmt->bindParam(':description', $description, PDO::PARAM_STR);
      $stmt->bindParam(':slug', $slug, PDO::PARAM_STR);
      $stmt->bindParam(':keywords', $keywords, PDO::PARAM_STR);
      $stmt->bindParam(':content', $content, PDO::PARAM_STR);
      $stmt->bindParam(':image', $imagePath, PDO::PARAM_STR);
      $stmt->bindParam(':catId', $categoryId, PDO::PARAM_INT);
      $stmt->bindParam(':updated', $date, PDO::PARAM_STR);
      $stmt->bindParam(':newsId', $newsId, PDO::PARAM_INT);

      $exec = $stmt->execute();

      if ($exec && $image['error'] != 4) {
          if ($imagePath != $oldImage) {
              if ($oldImage != null && $oldImage != 'noimage.png') {
                  unlink(IMAGES_DIR . $oldImage);
              }
              
              move_uploaded_file($image['tmp_name'], IMAGES_DIR . $imagePath);
              chmod(IMAGES_DIR . $imagePath, 0644);
          }
      }
  }

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

                if ($exec && ($action == 'insert')) {
                    echo '<p class="h2 text-center">Notícia cadastrada com sucesso!!!</p>';
                } elseif ($exec && ($action == 'update')) {
                    echo '<p class="h2 text-center">Notícia editada com sucesso!!!</p>';
                } else {
                    echo '<p class="h2 text-center">Erro ao gravar a notícia!!!</p>';
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

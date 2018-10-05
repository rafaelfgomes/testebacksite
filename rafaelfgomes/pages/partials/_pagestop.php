<div class="time">

  <div class="container">

    <div class="row pt-2 pb-1">

      <div class="col-12 col-md-4">

        <ul class="nav justify-content-center">

          <li class="nav-item pt-1">

            <img src="../images/logo.png" alt="" width="30" height="30">&nbsp;&nbsp;<span>Notícias Backsite</span>

          </li>

        </ul>

      </div>

      <div class="col-12 col-md-4">

        <ul class="nav justify-content-center">

          <li class="nav-item pt-1">

            <i class="fas fa-calendar-alt"></i>&nbsp;
            <span class="date">
              <?php
              setlocale(LC_TIME, 'pt_BR');
              date_default_timezone_set('America/Sao_Paulo');
              echo utf8_encode(ucfirst(strftime('%a, %d de %B de %Y', strtotime('today'))));
              ?>
            </span>

          </li>

        </ul>

      </div>

      <div class="col-12 col-md-4">

        <ul class="nav justify-content-center">

          <li class="nav-item">

            <a class="nav-link" href="https://www.facebook.com/Backsite/" target="_blank"><i class="fab fa-facebook"></i></a>
          
          </li>
          
          <li class="nav-item">
            
            <a class="nav-link" href="https://www.instagram.com/backsiteonline/" target="_blank"><i class="fab fa-instagram"></i></a>
          
          </li>
          
          <li class="nav-item"></li>
            
            <a class="nav-link" href="https://www.youtube.com/backsiteonlineoficial" target="_blank"><i class="fab fa-youtube"></i></a>
          
          </li>
          
          <li class="nav-item">
            
            <a class="nav-link" href="https://play.google.com/store/apps/details?id=com.backsite.bs" target="_blank"><i class="fab fa-google-play"></i></a>
          
          </li>
          
          <li class="nav-item">
            
            <a class="nav-link" href="https://itunes.apple.com/br/developer/backsite/id901386621" target="_blank"><i class="fab fa-apple"></i></a>
          
          </li>

          <li class="nav-item">
            
            <a class="nav-link" href="../pages/admin.php" target="_blank"><i class="fas fa-cogs"></i></a>
          
          </li>

        </ul>

      </div>

    </div>

  </div>

</div>
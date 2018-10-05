<div class="time">

  <div class="container">

    <div class="row pt-2 pb-3">

      <div class="col-12 col-md-6">

        <ul class="nav justify-content-center">

          <li class="nav-item pt-1">

            <img src="../images/logo.png" alt="" width="30" height="30">&nbsp;&nbsp;<span>Notícias Backsite</span>

          </li>

        </ul>

      </div>

      <div class="col-12 col-md-6">

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

    </div>

  </div>

</div>
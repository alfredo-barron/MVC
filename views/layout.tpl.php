<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ingeniería Web</title>
        <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="public/css/jumbotron-narrow.css">
        <script src="public/js/bootstrap.js"></script>
        <script src="public/js/ie-emulation-modes-warning.js"></script>
    </head>
    <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="./">Inicio</a></li>
            <li role="presentation"><a href="./iweb">Ingeniería Web</a></li>
            <li role="presentation"><a href="./acerca">Acerca de</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Proyecto final</h3>
      </div>
        <?= $tpl_content; ?>
      <footer class="footer">
        <p>&copy; Copyright, IWeb</p>
      </footer>

    </div> <!-- /container -->

    </body>
</html>

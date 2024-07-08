# views/layouts/application.php

<DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Demo PHP MVC</title>
  </head>
  <body>
    <h1>Header</h1>
    <?= @$content ?>
    <h3>Footer</h3>
  </body>
</html>

<?php
use app\assets\AppAsset;
/** @var $content string */
/** @var $this \yii\web\View */
AppAsset::register($this);
?>
<?php echo $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <?php echo $this->head() ?>
  </head>
  <body>
  <?php echo $this->beginBody() ?>
    <?php echo $content ?>
    <?php echo $this->endBody() ?> 
  </body>
</html>
<?php echo $this->endPage() ?> 
<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */

use yii\helpers\Html;

$this->title = $name;
?>

<h1><?= Html::encode($this->title) ?></h1>
<?= nl2br(Html::encode($message)) ?>
<p>The above error occurred while the Web server was processing your request.</p>
<p>Please contact us if you think this is a server error. Thank you.</p>

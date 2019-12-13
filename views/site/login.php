<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>
<?=
$countrys = Yii::$app->db->createCommand('SELECT * FROM `country` LIMIT 3')
           ->queryAll();
//echo '<br>'.$countrys.'<br>';
echo $countrys[0]['name'].'<br>';
foreach ($countrys as $value) {
    echo '<pre>';
    print_r($value);echo '</pre><br>';
};
echo '<br>';
print_r($countrys[0]);
//print_r($countrys->0);
echo '<br>';
/////////////
$names=Yii::$app->db->createCommand('SELECT  `name` FROM `country` LIMIT 5')->queryColumn();

foreach ($names as $key => $value) {
    echo $key.'=',$value,'<br>';
}
echo '/////////////<br>';
foreach ($names as $value) {
    echo '=',$value,'<br>';
}
echo '/////////////<br>';
for($i=0;$i<count($names);$i++)
    echo "$names[$i] <br>";
echo '/////////////<br>';
print_r($names);

?>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

    <div class="col-lg-offset-1" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div>
</div>

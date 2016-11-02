<h2 class="form-signin-heading"><?= __('Please enter your username for recover password') ?></h2>


<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
<?=
$this->Form->input('username',
    [
    "label" => [
        "text" => __('Enter your username'),
        "class" => "sr-only",
    ],
    "class" => "form-control",
    "placeholder" => __('Enter your username'),
])
?>
<br>
<?= $this->Form->button(__('Reset password'),
    ['class' => 'btn btn-lg btn-primary btn-block']);
?>
<br>
<?= $this->Form->end() ?>


<!-- File: src/Template/Users/login.ctp -->

<h2 class="form-signin-heading"><?= __('Please enter your username and password') ?></h2>
<br>

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
<?=
$this->Form->input('password',
    [
    "label" => [
        "text" => __('Enter your password'),
        "class" => "sr-only",
    ],
    "class" => "form-control",
    "placeholder" => __('Enter your password')])
?>
<br>
<?= $this->Form->button(__('Login'),
    ['class' => 'btn btn-lg btn-primary btn-block']);
?>
<div>
    <!-- TODO: create links -->
<?php echo $this->Html->link(__('Create account'),'/users/register', []); ?>
    or
<?php echo $this->Html->link(__('reset password'), '/users/reset'); ?>
</div>

<?= $this->Form->end() ?>


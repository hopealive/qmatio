<!-- File: src/Template/Users/login.ctp -->




<h2 class="form-signin-heading"><?= __('Please enter your username and password') ?></h2>

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
<?= $this->Form->button(__('Login'),
    ['class' => 'btn btn-lg btn-primary btn-block']);
?>
<?= $this->Form->end() ?>


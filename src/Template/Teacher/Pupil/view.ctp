<nav class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pupil'),
    ['action' => 'edit', $pupil->id])
?> </li>
        <li><?=
            $this->Form->postLink(__('Delete Pupil'),
                ['action' => 'delete', $pupil->id],
                ['confirm' => __('Are you sure you want to delete # {0}?',
                    $pupil->id)])
            ?> </li>
        <li><?= $this->Html->link(__('List Pupil'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pupil'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pupil view col-lg-12 col-md-12 columns content">
    <h3 class="col-lg-12 col-md-6 col-sm-12 col-xs-12 ">
        <?= h($pupil->name)." ". h($pupil->patronymic) ." ". h($pupil->surname) ?>
    </h3>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
        <?php $avatarUrl = "http://modeley.net/photo/4493/15442.jpg"; ?>
        <img src="<?= $avatarUrl ?>" class="col-lg-push-2 col-lg-8 col-md-6 col-sm-12 col-xs-12">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
        <table class="table table-striped">
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($pupil->id) ?></td>
            </tr>
            <tr>
                <th><?= __('Gender') ?></th>
                <td><?= $this->Number->format($pupil->gender) ?></td>
            </tr>
            <tr>
                <th><?= __('Date Birth') ?></th>
                <td><?= h($pupil->date_birth) ?></td>
            </tr>
            <tr>
                <th><?= __('Date Register') ?></th>
                <td><?= h($pupil->date_register) ?></td>
            </tr>
        </table>
    </div>
</div>

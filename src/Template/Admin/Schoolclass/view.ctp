<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?=
            $this->Html->link(__('Edit Schoolclas'),
                ['action' => 'edit', $schoolclas->id])
            ?> </li>
        <li><?=
            $this->Form->postLink(__('Delete Schoolclas'),
                ['action' => 'delete', $schoolclas->id],
                ['confirm' => __('Are you sure you want to delete # {0}?',
                    $schoolclas->id)])
            ?> </li>
        <li><?= $this->Html->link(__('List Schoolclass'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schoolclas'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schoolclass view col-lg-12 col-md-12 columns content">
    <div class="row">
        <h4>
            <small><?= __('Class name') ?>:</small>
            <?= h($schoolclas->class_name); ?>
        </h4>
    </div>
    <div class="row">
        <?php if (!empty($pupils)) { ?>
            <table class="table table-striped">
                <tr>
                    <th><?= __('Name') ?></th>
                    <th><?= __('Date Birth') ?></th>
                    <th><?= __('Date Register') ?></th>
                </tr>
                <?php
                foreach ($pupils as $pupil) {
echo "<pre>";
print_r ($pupil );
echo "</pre>";
                    $p         = $pupil['pupil'][0];
                    $pupilName = $p['surname']." ".
                        $p['name']." ".
                        $p['patronymic'];
                    ?>
                    <tr>
                        <td><?= $pupilName ?></td>
                        <td><?= $p['date_birth'] ?></td>
                        <td><?= $p['date_register'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php } ?>
    </div>
</div>

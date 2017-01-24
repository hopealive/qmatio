<nav class="col-lg-12 col-sm-12 col-xs-12 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Journal') ?></li>
        <li><?= $this->Html->link(__('New Journal'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<div class="journal index col-lg-12 col-xs-12 col-sm-12 columns content">
    <h3 class="page-header"><?= __('Journal') ?></h3>

    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('lesson_id') ?></th>
                <th><?= $this->Paginator->sort('mark_id') ?></th>
                <th><?= $this->Paginator->sort('status_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($journal as $journal): ?>
                <tr>
                    <td><?= $this->Number->format($journal->id) ?></td>
                    <td><?= $this->Number->format($journal->user_id) ?></td>
                    <td><?= $this->Number->format($journal->lesson_id) ?></td>
                    <td><?= $this->Number->format($journal->mark_id) ?></td>
                    <td><?= $this->Number->format($journal->status_id) ?></td>
                    <td class="actions">
                        <?=
                        $this->Html->link(__('View'),
                            ['action' => 'view', $journal->id])
                        ?>
                        <?=
                        $this->Html->link(__('Edit'),
                            ['action' => 'edit', $journal->id])
                        ?>
                        <?=
                        $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $journal->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?',
                                $journal->id)])
                        ?>
                    </td>
                </tr>
<?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< '.__('previous')) ?>
<?= $this->Paginator->numbers() ?>
<?= $this->Paginator->next(__('next').' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>



<?php
$datesWithLessons = [
    4, 7, 11, 14, 18, 21
];
?>
<!-- Page Heading -->
<div class="row col-lg-12 col-xs-12 col-sm-12">
    <h3 class="page-header"><?= __('Current lesson') ?>: <?php echo $currentLesson['name']; ?></h3>
</div>
<!-- /.row -->
<div class="row col-lg-12 col-xs-12 col-sm-12">
    <a class="btn btn-default" href="javascript:void(0)" role="button"><?= __('Give homework') ?></a>
</div>

<div class="row col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li class="active">
            <i class="fa fa-dashboard"></i> <?= __('Pupils'); ?>
        </li>
    </ol>
</div>

<div class="row col-lg-12 col-xs-12 col-sm-12">
    <table class="table table-striped">
        <tr>
            <th><?= __('Pupil'); ?></th>
            <?php
            foreach ($datesWithLessons as $dateWithLessons) {
                echo "<th>$dateWithLessons</th>";
            }
            ?>
        </tr>
<?php foreach ($pupils as $pupil) { ?>
            <tr>

                <td>
                    <?php
                    $viewFullName = $pupil->get('surname')." ".
                        $pupil->get('name')." ".
                        $pupil->get('patronymic');
                    ?>
    <?=
    $this->Html->link($viewFullName,
        ['controller' => 'pupil', 'action' => 'view', $pupil->get('id')])
    ?>
                </td>
                <td>Н</td>
                <td>Н</td>
                <td>Н</td>
                <td>Н</td>
                <td>Н</td>
                <td>
                    <input type="number" min="1" max="12" step="1" pattern="[0-9]*" inputmode="numeric">
                </td>
            </tr>
<?php } ?>
    </table>
</div>


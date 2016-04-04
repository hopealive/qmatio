<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Journal'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="journal index large-9 medium-8 columns content">
    <h3><?= __('Journal') ?></h3>
    <table cellpadding="0" cellspacing="0">
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
                    <?= $this->Html->link(__('View'), ['action' => 'view', $journal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $journal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $journal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $journal->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>


<?php $lesson           = "математика"; ?>
<?php
$datesWithLessons = [
    4,7,11,14,18,21
];
?>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12">
        <h1 class="page-header">
            Журнал <small>зараз (<?php echo date("Y-m-d H:i:s"); ?> ) йде урок: "<?php echo $lesson; ?>"</small>
        </h1>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <a href="#">Дати домашнє завдання</a>
</div>

<div class="row">
    <div class="col-lg-9 col-xs-9 col-sm-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Учні
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-9 col-xs-9 col-sm-12">
        <table class="table table-striped">
            <tr>
                <th>Учень</th>
                <?php
                    foreach ($datesWithLessons as $dateWithLessons) {
                        echo "<th>$dateWithLessons</th>";
                    }
                ?>
            </tr>
            <?php for ( $j = 0; $j < 25;  ++$j){ ?>
            <tr>
                <td><a href="#">Петренко Сергій Іванович</a></td>
                <td>5</td>
                <td>4</td>
                <td>н</td>
                <td>5</td>
                <td>4</td>
                <td>
                    <select>
                        <?php
                        for ($i = 12; $i > 1; --$i){
                            echo "<option value=$i>$i</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>


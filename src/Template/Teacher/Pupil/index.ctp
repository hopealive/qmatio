<nav class="col-lg-12 col-sm-12 col-xs-12 columns" id="actions-sidebar"> 
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pupil'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<div class="pupil index col-lg-12 col-md-12 columns content">
    <h3 class="page-header"><?= __('Pupil') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('surname') ?></th>
                <th><?= $this->Paginator->sort('gender') ?></th>
                <th><?= $this->Paginator->sort('date_birth') ?></th>
                <th><?= $this->Paginator->sort('date_register') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pupil as $pupil):  ?>
            <tr>
                <td><?= $this->Number->format($pupil->id) ?></td>
                <td><?= $pupil->name ?></td>
                <td><?= $pupil->surname ?></td>
                <td><?= $pupil->gender_name; ?></td>
                <td><?= h($pupil->date_birth) ?></td>
                <td><?= h($pupil->date_register) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pupil->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pupil->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pupil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pupil->id)]) ?>
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

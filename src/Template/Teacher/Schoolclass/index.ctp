<nav class="col-lg-12 col-sm-12 col-xs-12 columns" id="actions-sidebar"> 
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Schoolclas'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schoolclass index col-lg-12 col-md-12 columns content">
    <h3><?= __('Schoolclass') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('class_name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schoolclass as $schoolclas): ?>
            <tr>
                <td><?= $this->Number->format($schoolclas->id) ?></td>
                <td><?= $schoolclas->class_name; ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $schoolclas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schoolclas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schoolclas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolclas->id)]) ?>
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

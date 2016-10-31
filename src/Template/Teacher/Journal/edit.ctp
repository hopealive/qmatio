<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $journal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $journal->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Journal'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="journal form large-9 medium-8 columns content">
    <?= $this->Form->create($journal) ?>
    <fieldset>
        <legend><?= __('Edit Journal') ?></legend>
        <?php
            echo $this->Form->input('user_id');
            echo $this->Form->input('lesson_id');
            echo $this->Form->input('mark_id');
            echo $this->Form->input('status_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

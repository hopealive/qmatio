<nav class="col-lg-12 col-sm-12 col-xs-12 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Journal') ?></li>
        <li><?= $this->Html->link(__('List Journal'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<p>&nbsp;</p>
<div class="journal form large-9 medium-8 columns content">
    <?= $this->Form->create($journal) ?>
    <fieldset>
        <legend><?= __('Add Journal') ?></legend>
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

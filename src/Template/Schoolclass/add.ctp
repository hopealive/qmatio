<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Schoolclass'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="schoolclass form large-9 medium-8 columns content">
    <?= $this->Form->create($schoolclas) ?>
    <fieldset>
        <legend><?= __('Add Schoolclas') ?></legend>
        <?php
            echo $this->Form->input('preifx');
            echo $this->Form->input('class_number');
            echo $this->Form->input('suffix');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

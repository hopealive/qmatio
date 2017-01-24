<nav class="col-lg-12 col-sm-12 col-xs-12 columns" id="actions-sidebar"> 
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $schoolclas->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $schoolclas->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Schoolclass'), ['action' => 'index']) ?></li>
    </ul>
</nav>

<div class="flash col-lg-12 col-md-12 "><?= $this->Flash->render() ?></div>

<div class="schoolclass form col-lg-12 col-md-12 columns content">
    <h3 class="page-header"><?= __('Schoolclass') ?></h3>
    <?= $this->Form->create($schoolclas) ?>
    <fieldset>
        <legend><?= __('Edit Schoolclas') ?></legend>

        <div class="form-group col-lg-4 col-md-4">
            <?php echo $this->Form->input('prefix', ['type' => 'text', 'class' => 'form-control']); ?>
        </div>
        <div class="form-group col-lg-2 col-md-2">
            <?php echo $this->Form->input('class_number', ['type' => 'text', 'class' => 'form-control']); ?>
        </div>
        <div class="form-group col-lg-4 col-md-4">
            <?php echo $this->Form->input('suffix', ['type' => 'text', 'class' => 'form-control']); ?>
        </div>
        <div class="form-group col-lg-2 col-md-2">
            <?php echo $this->Form->input('is_active', [ 'type' => 'checkbox', 'class' => 'form-control']); ?>
        </div>
        <?php echo $this->Form->input('is_deleted', [ 'type' => 'hidden']); ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

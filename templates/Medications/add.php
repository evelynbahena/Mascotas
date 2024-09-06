<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medication $medication
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Medications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="medications form content">
            <?= $this->Form->create($medication) ?>
            <fieldset>
                <legend><?= __('Add Medication') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('mission');
                    echo $this->Form->control('notes');
                    echo $this->Form->control('frequency');
                    echo $this->Form->control('dose');
                    echo $this->Form->control('date_initial');
                    echo $this->Form->control('duration');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

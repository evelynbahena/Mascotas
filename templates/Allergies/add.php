<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Allergy $allergy
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Allergies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="allergies form content">
            <?= $this->Form->create($allergy) ?>
            <fieldset>
                <legend><?= __('Add Allergy') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('section');
                    echo $this->Form->control('notes');
                    echo $this->Form->control('remedy');
                    echo $this->Form->control('last_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

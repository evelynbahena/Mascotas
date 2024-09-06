<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Position $position
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $position->id_position],
                ['confirm' => __('Are you sure you want to delete # {0}?', $position->id_position), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Positions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="positions form content">
            <?= $this->Form->create($position) ?>
            <fieldset>
                <legend><?= __('Edit Position') ?></legend>
                <?php
                    echo $this->Form->control('longitude');
                    echo $this->Form->control('latitude');
                    echo $this->Form->control('status');
                    echo $this->Form->control('link');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Veterinarian $veterinarian
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $veterinarian->id_veterinarian],
                ['confirm' => __('Are you sure you want to delete # {0}?', $veterinarian->id_veterinarian), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Veterinarians'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="veterinarians form content">
            <?= $this->Form->create($veterinarian) ?>
            <fieldset>
                <legend><?= __('Edit Veterinarian') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('vet_clinic');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

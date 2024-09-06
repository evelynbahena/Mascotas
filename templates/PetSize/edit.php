<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PetSize $petSize
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $petSize->id_pet_size],
                ['confirm' => __('Are you sure you want to delete # {0}?', $petSize->id_pet_size), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pet Size'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="petSize form content">
            <?= $this->Form->create($petSize) ?>
            <fieldset>
                <legend><?= __('Edit Pet Size') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pet $pet
 * @var \Cake\Collection\CollectionInterface|string[] $breeds
 * @var \Cake\Collection\CollectionInterface|string[] $veterinarians
 * @var \Cake\Collection\CollectionInterface|string[] $petSize
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Pets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pets form content">
            <?= $this->Form->create($pet) ?>
            <fieldset>
                <legend><?= __('Add Pet') ?></legend>
                <?php
                    echo $this->Form->control('description');
                    echo $this->Form->control('date_birth', ['empty' => true]);
                    echo $this->Form->control('sterilized');
                    echo $this->Form->control('imagen');
                    echo $this->Form->control('qr_code');
                    echo $this->Form->control('fk_breed_id', ['options' => $breeds, 'empty' => true]);
                    echo $this->Form->control('fk_veterinatian_id', ['options' => $veterinarians, 'empty' => true]);
                    echo $this->Form->control('fk_pet_size_id', ['options' => $petSize, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pet $pet
 * @var string[]|\Cake\Collection\CollectionInterface $breeds
 * @var string[]|\Cake\Collection\CollectionInterface $veterinarians
 * @var string[]|\Cake\Collection\CollectionInterface $petSize
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pet->id_pet],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pet->id_pet), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pets form content">
            <?= $this->Form->create($pet) ?>
            <fieldset>
                <legend><?= __('Edit Pet') ?></legend>
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

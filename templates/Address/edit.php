<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Addres $addres
 * @var string[]|\Cake\Collection\CollectionInterface $states
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $addres->id_address],
                ['confirm' => __('Are you sure you want to delete # {0}?', $addres->id_address), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Address'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="address form content">
            <?= $this->Form->create($addres) ?>
            <fieldset>
                <legend><?= __('Edit Addres') ?></legend>
                <?php
                    echo $this->Form->control('street');
                    echo $this->Form->control('ext_number');
                    echo $this->Form->control('int_number');
                    echo $this->Form->control('postal_code');
                    echo $this->Form->control('location');
                    echo $this->Form->control('fk_state_id', ['options' => $states, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

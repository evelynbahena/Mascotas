<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Owner $owner
 * @var string[]|\Cake\Collection\CollectionInterface $credentials
 * @var string[]|\Cake\Collection\CollectionInterface $address
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $owner->id_owner],
                ['confirm' => __('Are you sure you want to delete # {0}?', $owner->id_owner), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Owners'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="owners form content">
            <?= $this->Form->create($owner) ?>
            <fieldset>
                <legend><?= __('Edit Owner') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('second_lastname');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('observation');
                    echo $this->Form->control('fk_credential_id', ['options' => $credentials, 'empty' => true]);
                    echo $this->Form->control('fk_addres_id', ['options' => $address, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

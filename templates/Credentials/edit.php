<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Credential $credential
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $credential->id_credential],
                ['confirm' => __('Are you sure you want to delete # {0}?', $credential->id_credential), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Credentials'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="credentials form content">
            <?= $this->Form->create($credential) ?>
            <fieldset>
                <legend><?= __('Edit Credential') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

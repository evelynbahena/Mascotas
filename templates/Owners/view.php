<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Owner $owner
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Owner'), ['action' => 'edit', $owner->id_owner], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Owner'), ['action' => 'delete', $owner->id_owner], ['confirm' => __('Are you sure you want to delete # {0}?', $owner->id_owner), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Owners'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Owner'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="owners view content">
            <h3><?= h($owner->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Owner') ?></th>
                    <td><?= h($owner->id_owner) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($owner->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($owner->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Second Lastname') ?></th>
                    <td><?= h($owner->second_lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($owner->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Credential') ?></th>
                    <td><?= $owner->has('credential') ? $this->Html->link($owner->credential->name, ['controller' => 'Credentials', 'action' => 'view', $owner->credential->id_credential]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Addres') ?></th>
                    <td><?= $owner->has('addres') ? $this->Html->link($owner->addres->id_address, ['controller' => 'Address', 'action' => 'view', $owner->addres->id_address]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($owner->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($owner->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Observation') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($owner->observation)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

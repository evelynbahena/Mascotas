<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Owner> $owners
 */
?>
<div class="owners index content">
    <?= $this->Html->link(__('New Owner'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Owners') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_owner') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('second_lastname') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('fk_credential_id') ?></th>
                    <th><?= $this->Paginator->sort('fk_addres_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($owners as $owner): ?>
                <tr>
                    <td><?= h($owner->id_owner) ?></td>
                    <td><?= h($owner->name) ?></td>
                    <td><?= h($owner->last_name) ?></td>
                    <td><?= h($owner->second_lastname) ?></td>
                    <td><?= h($owner->phone) ?></td>
                    <td><?= h($owner->created) ?></td>
                    <td><?= h($owner->modified) ?></td>
                    <td><?= $owner->has('credential') ? $this->Html->link($owner->credential->name, ['controller' => 'Credentials', 'action' => 'view', $owner->credential->id_credential]) : '' ?></td>
                    <td><?= $owner->has('addres') ? $this->Html->link($owner->addres->id_address, ['controller' => 'Address', 'action' => 'view', $owner->addres->id_address]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $owner->id_owner]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $owner->id_owner]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $owner->id_owner], ['confirm' => __('Are you sure you want to delete # {0}?', $owner->id_owner)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

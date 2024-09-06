<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Addres> $address
 */
?>
<div class="address index content">
    <?= $this->Html->link(__('New Addres'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Address') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_address') ?></th>
                    <th><?= $this->Paginator->sort('street') ?></th>
                    <th><?= $this->Paginator->sort('ext_number') ?></th>
                    <th><?= $this->Paginator->sort('int_number') ?></th>
                    <th><?= $this->Paginator->sort('postal_code') ?></th>
                    <th><?= $this->Paginator->sort('location') ?></th>
                    <th><?= $this->Paginator->sort('fk_state_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($address as $addres): ?>
                <tr>
                    <td><?= $this->Number->format($addres->id_address) ?></td>
                    <td><?= h($addres->street) ?></td>
                    <td><?= h($addres->ext_number) ?></td>
                    <td><?= h($addres->int_number) ?></td>
                    <td><?= h($addres->postal_code) ?></td>
                    <td><?= h($addres->location) ?></td>
                    <td><?= $addres->has('state') ? $this->Html->link($addres->state->name, ['controller' => 'States', 'action' => 'view', $addres->state->id_state]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $addres->id_address]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $addres->id_address]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $addres->id_address], ['confirm' => __('Are you sure you want to delete # {0}?', $addres->id_address)]) ?>
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

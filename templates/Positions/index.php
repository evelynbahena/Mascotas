<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Position> $positions
 */
?>
<div class="positions index content">
    <?= $this->Html->link(__('New Position'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Positions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_position') ?></th>
                    <th><?= $this->Paginator->sort('longitude') ?></th>
                    <th><?= $this->Paginator->sort('latitude') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($positions as $position): ?>
                <tr>
                    <td><?= h($position->id_position) ?></td>
                    <td><?= h($position->longitude) ?></td>
                    <td><?= h($position->latitude) ?></td>
                    <td><?= h($position->created) ?></td>
                    <td><?= $position->status === null ? '' : $this->Number->format($position->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $position->id_position]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $position->id_position]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $position->id_position], ['confirm' => __('Are you sure you want to delete # {0}?', $position->id_position)]) ?>
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

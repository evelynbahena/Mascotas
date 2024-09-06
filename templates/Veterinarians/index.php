<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Veterinarian> $veterinarians
 */
?>
<div class="veterinarians index content">
    <?= $this->Html->link(__('New Veterinarian'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Veterinarians') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_veterinarian') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('vet_clinic') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($veterinarians as $veterinarian): ?>
                <tr>
                    <td><?= h($veterinarian->id_veterinarian) ?></td>
                    <td><?= h($veterinarian->name) ?></td>
                    <td><?= h($veterinarian->phone) ?></td>
                    <td><?= h($veterinarian->vet_clinic) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $veterinarian->id_veterinarian]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $veterinarian->id_veterinarian]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $veterinarian->id_veterinarian], ['confirm' => __('Are you sure you want to delete # {0}?', $veterinarian->id_veterinarian)]) ?>
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

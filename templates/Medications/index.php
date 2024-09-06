<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Medication> $medications
 */
?>
<div class="medications index content">
    <?= $this->Html->link(__('New Medication'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Medications') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_medication') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('frequency') ?></th>
                    <th><?= $this->Paginator->sort('dose') ?></th>
                    <th><?= $this->Paginator->sort('date_initial') ?></th>
                    <th><?= $this->Paginator->sort('duration') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($medications as $medication): ?>
                <tr>
                    <td><?= h($medication->id_medication) ?></td>
                    <td><?= h($medication->name) ?></td>
                    <td><?= h($medication->frequency) ?></td>
                    <td><?= h($medication->dose) ?></td>
                    <td><?= h($medication->date_initial) ?></td>
                    <td><?= h($medication->duration) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $medication->id_medication]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medication->id_medication]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medication->id_medication], ['confirm' => __('Are you sure you want to delete # {0}?', $medication->id_medication)]) ?>
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

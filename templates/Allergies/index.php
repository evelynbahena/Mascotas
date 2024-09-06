<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Allergy> $allergies
 */
?>
<div class="allergies index content">
    <?= $this->Html->link(__('New Allergy'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Allergies') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_allergy') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('section') ?></th>
                    <th><?= $this->Paginator->sort('last_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($allergies as $allergy): ?>
                <tr>
                    <td><?= h($allergy->id_allergy) ?></td>
                    <td><?= h($allergy->name) ?></td>
                    <td><?= h($allergy->section) ?></td>
                    <td><?= h($allergy->last_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $allergy->id_allergy]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $allergy->id_allergy]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $allergy->id_allergy], ['confirm' => __('Are you sure you want to delete # {0}?', $allergy->id_allergy)]) ?>
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

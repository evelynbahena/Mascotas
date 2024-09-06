<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Breed> $breeds
 */
?>
<div class="breeds index content">
    <?= $this->Html->link(__('New Breed'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Breeds') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_breed') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($breeds as $breed): ?>
                <tr>
                    <td><?= $this->Number->format($breed->id_breed) ?></td>
                    <td><?= h($breed->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $breed->id_breed]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $breed->id_breed]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $breed->id_breed], ['confirm' => __('Are you sure you want to delete # {0}?', $breed->id_breed)]) ?>
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

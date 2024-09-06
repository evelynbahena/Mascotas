<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Color> $color
 */
?>
<div class="color index content">
    <?= $this->Html->link(__('New Color'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Color') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_color') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($color as $color): ?>
                <tr>
                    <td><?= $this->Number->format($color->id_color) ?></td>
                    <td><?= h($color->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $color->id_color]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $color->id_color]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $color->id_color], ['confirm' => __('Are you sure you want to delete # {0}?', $color->id_color)]) ?>
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

<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Notification> $notifications
 */
?>
<div class="notifications index content">
    <?= $this->Html->link(__('New Notification'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Notifications') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_notification') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($notifications as $notification): ?>
                <tr>
                    <td><?= h($notification->id_notification) ?></td>
                    <td><?= $notification->status === null ? '' : $this->Number->format($notification->status) ?></td>
                    <td><?= h($notification->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $notification->id_notification]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $notification->id_notification]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $notification->id_notification], ['confirm' => __('Are you sure you want to delete # {0}?', $notification->id_notification)]) ?>
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

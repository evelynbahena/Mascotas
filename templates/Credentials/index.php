<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Credential> $credentials
 */
?>
<div class="credentials index content">
    <?= $this->Html->link(__('New Credential'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Credentials') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_credential') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($credentials as $credential): ?>
                <tr>
                    <td><?= $this->Number->format($credential->id_credential) ?></td>
                    <td><?= h($credential->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $credential->id_credential]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $credential->id_credential]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $credential->id_credential], ['confirm' => __('Are you sure you want to delete # {0}?', $credential->id_credential)]) ?>
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

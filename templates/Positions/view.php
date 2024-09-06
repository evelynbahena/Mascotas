<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Position $position
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Position'), ['action' => 'edit', $position->id_position], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Position'), ['action' => 'delete', $position->id_position], ['confirm' => __('Are you sure you want to delete # {0}?', $position->id_position), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Positions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Position'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="positions view content">
            <h3><?= h($position->id_position) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Position') ?></th>
                    <td><?= h($position->id_position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Longitude') ?></th>
                    <td><?= h($position->longitude) ?></td>
                </tr>
                <tr>
                    <th><?= __('Latitude') ?></th>
                    <td><?= h($position->latitude) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $position->status === null ? '' : $this->Number->format($position->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($position->created) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Link') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($position->link)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Addres $addres
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Addres'), ['action' => 'edit', $addres->id_address], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Addres'), ['action' => 'delete', $addres->id_address], ['confirm' => __('Are you sure you want to delete # {0}?', $addres->id_address), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Address'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Addres'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="address view content">
            <h3><?= h($addres->id_address) ?></h3>
            <table>
                <tr>
                    <th><?= __('Street') ?></th>
                    <td><?= h($addres->street) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ext Number') ?></th>
                    <td><?= h($addres->ext_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Int Number') ?></th>
                    <td><?= h($addres->int_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postal Code') ?></th>
                    <td><?= h($addres->postal_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= h($addres->location) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= $addres->has('state') ? $this->Html->link($addres->state->name, ['controller' => 'States', 'action' => 'view', $addres->state->id_state]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Address') ?></th>
                    <td><?= $this->Number->format($addres->id_address) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

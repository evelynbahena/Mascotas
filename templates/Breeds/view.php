<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Breed $breed
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Breed'), ['action' => 'edit', $breed->id_breed], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Breed'), ['action' => 'delete', $breed->id_breed], ['confirm' => __('Are you sure you want to delete # {0}?', $breed->id_breed), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Breeds'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Breed'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="breeds view content">
            <h3><?= h($breed->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($breed->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Breed') ?></th>
                    <td><?= $this->Number->format($breed->id_breed) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

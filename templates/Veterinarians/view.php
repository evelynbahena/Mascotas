<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Veterinarian $veterinarian
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Veterinarian'), ['action' => 'edit', $veterinarian->id_veterinarian], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Veterinarian'), ['action' => 'delete', $veterinarian->id_veterinarian], ['confirm' => __('Are you sure you want to delete # {0}?', $veterinarian->id_veterinarian), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Veterinarians'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Veterinarian'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="veterinarians view content">
            <h3><?= h($veterinarian->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Veterinarian') ?></th>
                    <td><?= h($veterinarian->id_veterinarian) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($veterinarian->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($veterinarian->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vet Clinic') ?></th>
                    <td><?= h($veterinarian->vet_clinic) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

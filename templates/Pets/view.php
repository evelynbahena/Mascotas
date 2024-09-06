<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pet $pet
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pet'), ['action' => 'edit', $pet->id_pet], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pet'), ['action' => 'delete', $pet->id_pet], ['confirm' => __('Are you sure you want to delete # {0}?', $pet->id_pet), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pet'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pets view content">
            <h3><?= h($pet->id_pet) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Pet') ?></th>
                    <td><?= h($pet->id_pet) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($pet->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imagen') ?></th>
                    <td><?= h($pet->imagen) ?></td>
                </tr>
                <tr>
                    <th><?= __('Breed') ?></th>
                    <td><?= $pet->has('breed') ? $this->Html->link($pet->breed->name, ['controller' => 'Breeds', 'action' => 'view', $pet->breed->id_breed]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Veterinarian') ?></th>
                    <td><?= $pet->has('veterinarian') ? $this->Html->link($pet->veterinarian->name, ['controller' => 'Veterinarians', 'action' => 'view', $pet->veterinarian->id_veterinarian]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pet Size') ?></th>
                    <td><?= $pet->has('pet_size') ? $this->Html->link($pet->pet_size->name, ['controller' => 'PetSize', 'action' => 'view', $pet->pet_size->id_pet_size]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sterilized') ?></th>
                    <td><?= $pet->sterilized === null ? '' : $this->Number->format($pet->sterilized) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Birth') ?></th>
                    <td><?= h($pet->date_birth) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Qr Code') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($pet->qr_code)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

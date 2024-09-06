<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PetSize $petSize
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pet Size'), ['action' => 'edit', $petSize->id_pet_size], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pet Size'), ['action' => 'delete', $petSize->id_pet_size], ['confirm' => __('Are you sure you want to delete # {0}?', $petSize->id_pet_size), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pet Size'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pet Size'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="petSize view content">
            <h3><?= h($petSize->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($petSize->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Pet Size') ?></th>
                    <td><?= $this->Number->format($petSize->id_pet_size) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

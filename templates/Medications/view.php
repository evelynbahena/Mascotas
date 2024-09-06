<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medication $medication
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Medication'), ['action' => 'edit', $medication->id_medication], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Medication'), ['action' => 'delete', $medication->id_medication], ['confirm' => __('Are you sure you want to delete # {0}?', $medication->id_medication), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Medications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Medication'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="medications view content">
            <h3><?= h($medication->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Medication') ?></th>
                    <td><?= h($medication->id_medication) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($medication->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Frequency') ?></th>
                    <td><?= h($medication->frequency) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dose') ?></th>
                    <td><?= h($medication->dose) ?></td>
                </tr>
                <tr>
                    <th><?= __('Duration') ?></th>
                    <td><?= h($medication->duration) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Initial') ?></th>
                    <td><?= h($medication->date_initial) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Mission') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($medication->mission)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($medication->notes)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

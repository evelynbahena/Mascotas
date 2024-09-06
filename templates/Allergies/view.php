<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Allergy $allergy
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Allergy'), ['action' => 'edit', $allergy->id_allergy], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Allergy'), ['action' => 'delete', $allergy->id_allergy], ['confirm' => __('Are you sure you want to delete # {0}?', $allergy->id_allergy), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Allergies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Allergy'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="allergies view content">
            <h3><?= h($allergy->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Allergy') ?></th>
                    <td><?= h($allergy->id_allergy) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($allergy->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Section') ?></th>
                    <td><?= h($allergy->section) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Date') ?></th>
                    <td><?= h($allergy->last_date) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($allergy->notes)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Remedy') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($allergy->remedy)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

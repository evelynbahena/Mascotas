<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Credential $credential
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Credential'), ['action' => 'edit', $credential->id_credential], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Credential'), ['action' => 'delete', $credential->id_credential], ['confirm' => __('Are you sure you want to delete # {0}?', $credential->id_credential), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Credentials'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Credential'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="credentials view content">
            <h3><?= h($credential->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($credential->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Credential') ?></th>
                    <td><?= $this->Number->format($credential->id_credential) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

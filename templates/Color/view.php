<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Color $color
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Color'), ['action' => 'edit', $color->id_color], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Color'), ['action' => 'delete', $color->id_color], ['confirm' => __('Are you sure you want to delete # {0}?', $color->id_color), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Color'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Color'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="color view content">
            <h3><?= h($color->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($color->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Color') ?></th>
                    <td><?= $this->Number->format($color->id_color) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

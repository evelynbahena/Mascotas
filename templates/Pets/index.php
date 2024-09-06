<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pet> $pets
 */

$route = \Cake\Routing\Router::url('/');
echo $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken'));
?>
<div class="pets index content">
    <?= $this->Html->link(__('Nueva Mascota'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Mascotas') ?></h3>
    <div class="table-responsive">
          <table id="pets" align="center" style="width:100%" class="table table-hover overflow: scroll;">
           <thead>
                <tr>
                    <th scope="col" style=" width: 50px;">#</th>
                    <th scope="col" style=" width: 200px;">Nombre</th>
                    <th scope="col" style=" width: 200px;">Descripción</th>
                    <th scope="col" style=" width: 200px;">Fecha de Nacimiento</th>
                    <th scope="col" style=" width: 200px;">Esterilizado</th>
                    <th scope="col" style=" width: 200px;">Raza</th>
                    <th scope="col" style=" width: 200px;">Tamaño</th>
                    <th scope="col" style=" width: 200px;">Veterinario</th>
                    <th scope="col" style=" width: 200px;">Imagen</th>
                    <th scope="col" class="head" style="width:180px"><?= $this->Paginator->sort('Acción') ?></th>

                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach ($pets as $pet): ?>
                <tr>
                    <td><?= h($pet->id_pet) ?></td>
                    <td><?= h($pet->description) ?></td>
                    <td><?= h($pet->date_birth) ?></td>
                    <td><?= $pet->sterilized === null ? '' : $this->Number->format($pet->sterilized) ?></td>
                    <td><?= h($pet->imagen) ?></td>
                    <td><?= $pet->has('breed') ? $this->Html->link($pet->breed->name, ['controller' => 'Breeds', 'action' => 'view', $pet->breed->id_breed]) : '' ?></td>
                    <td><?= $pet->has('veterinarian') ? $this->Html->link($pet->veterinarian->name, ['controller' => 'Veterinarians', 'action' => 'view', $pet->veterinarian->id_veterinarian]) : '' ?></td>
                    <td><?= $pet->has('pet_size') ? $this->Html->link($pet->pet_size->name, ['controller' => 'PetSize', 'action' => 'view', $pet->pet_size->id_pet_size]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pet->id_pet]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pet->id_pet]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pet->id_pet], ['confirm' => __('Are you sure you want to delete # {0}?', $pet->id_pet)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

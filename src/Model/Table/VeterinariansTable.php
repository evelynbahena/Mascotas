<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Veterinarians Model
 *
 * @method \App\Model\Entity\Veterinarian newEmptyEntity()
 * @method \App\Model\Entity\Veterinarian newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Veterinarian[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Veterinarian get($primaryKey, $options = [])
 * @method \App\Model\Entity\Veterinarian findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Veterinarian patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Veterinarian[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Veterinarian|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Veterinarian saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Veterinarian[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Veterinarian[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Veterinarian[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Veterinarian[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VeterinariansTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('veterinarians');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id_veterinarian');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->allowEmptyString('name');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 100)
            ->allowEmptyString('phone');

        $validator
            ->scalar('vet_clinic')
            ->maxLength('vet_clinic', 100)
            ->allowEmptyString('vet_clinic');

        return $validator;
    }
}

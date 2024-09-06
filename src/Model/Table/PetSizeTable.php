<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PetSize Model
 *
 * @method \App\Model\Entity\PetSize newEmptyEntity()
 * @method \App\Model\Entity\PetSize newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PetSize[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PetSize get($primaryKey, $options = [])
 * @method \App\Model\Entity\PetSize findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PetSize patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PetSize[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PetSize|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PetSize saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PetSize[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PetSize[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PetSize[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PetSize[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PetSizeTable extends Table
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

        $this->setTable('pet_size');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id_pet_size');
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

        return $validator;
    }
}

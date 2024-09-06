<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Medications Model
 *
 * @method \App\Model\Entity\Medication newEmptyEntity()
 * @method \App\Model\Entity\Medication newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Medication[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Medication get($primaryKey, $options = [])
 * @method \App\Model\Entity\Medication findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Medication patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Medication[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Medication|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medication saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medication[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Medication[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Medication[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Medication[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MedicationsTable extends Table
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

        $this->setTable('medications');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id_medication');
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
            ->scalar('mission')
            ->allowEmptyString('mission');

        $validator
            ->scalar('notes')
            ->allowEmptyString('notes');

        $validator
            ->scalar('frequency')
            ->maxLength('frequency', 100)
            ->allowEmptyString('frequency');

        $validator
            ->scalar('dose')
            ->maxLength('dose', 100)
            ->allowEmptyString('dose');

        $validator
            ->dateTime('date_initial')
            ->allowEmptyDateTime('date_initial');

        $validator
            ->scalar('duration')
            ->maxLength('duration', 100)
            ->allowEmptyString('duration');

        return $validator;
    }
}

<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Allergies Model
 *
 * @method \App\Model\Entity\Allergy newEmptyEntity()
 * @method \App\Model\Entity\Allergy newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Allergy[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Allergy get($primaryKey, $options = [])
 * @method \App\Model\Entity\Allergy findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Allergy patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Allergy[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Allergy|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Allergy saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Allergy[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Allergy[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Allergy[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Allergy[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AllergiesTable extends Table
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

        $this->setTable('allergies');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id_allergy');
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
            ->scalar('section')
            ->maxLength('section', 100)
            ->allowEmptyString('section');

        $validator
            ->scalar('notes')
            ->allowEmptyString('notes');

        $validator
            ->scalar('remedy')
            ->allowEmptyString('remedy');

        $validator
            ->dateTime('last_date')
            ->allowEmptyDateTime('last_date');

        return $validator;
    }
}

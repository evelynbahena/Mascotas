<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Owners Model
 *
 * @property \App\Model\Table\CredentialsTable&\Cake\ORM\Association\BelongsTo $Credentials
 * @property \App\Model\Table\AddressTable&\Cake\ORM\Association\BelongsTo $Address
 *
 * @method \App\Model\Entity\Owner newEmptyEntity()
 * @method \App\Model\Entity\Owner newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Owner[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Owner get($primaryKey, $options = [])
 * @method \App\Model\Entity\Owner findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Owner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Owner[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Owner|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Owner saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Owner[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Owner[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Owner[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Owner[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OwnersTable extends Table
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

        $this->setTable('owners');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id_owner');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Credentials', [
            'foreignKey' => 'fk_credential_id',
        ]);
        $this->belongsTo('Address', [
            'foreignKey' => 'fk_addres_id',
        ]);
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
            ->scalar('last_name')
            ->maxLength('last_name', 100)
            ->allowEmptyString('last_name');

        $validator
            ->scalar('second_lastname')
            ->maxLength('second_lastname', 100)
            ->allowEmptyString('second_lastname');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 100)
            ->allowEmptyString('phone');

        $validator
            ->scalar('observation')
            ->allowEmptyString('observation');

        $validator
            ->integer('fk_credential_id')
            ->allowEmptyString('fk_credential_id');

        $validator
            ->integer('fk_addres_id')
            ->allowEmptyString('fk_addres_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('fk_credential_id', 'Credentials'), ['errorField' => 'fk_credential_id']);
        $rules->add($rules->existsIn('fk_addres_id', 'Address'), ['errorField' => 'fk_addres_id']);

        return $rules;
    }
}

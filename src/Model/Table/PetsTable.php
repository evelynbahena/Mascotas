<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pets Model
 *
 * @property \App\Model\Table\BreedsTable&\Cake\ORM\Association\BelongsTo $Breeds
 * @property \App\Model\Table\VeterinariansTable&\Cake\ORM\Association\BelongsTo $Veterinarians
 * @property \App\Model\Table\PetSizeTable&\Cake\ORM\Association\BelongsTo $PetSize
 *
 * @method \App\Model\Entity\Pet newEmptyEntity()
 * @method \App\Model\Entity\Pet newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pet get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pet findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pet[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pet|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pet saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pet[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pet[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pet[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pet[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PetsTable extends Table
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

        $this->setTable('pets');
        $this->setDisplayField('id_pet');
        $this->setPrimaryKey('id_pet');

        $this->belongsTo('Breeds', [
            'foreignKey' => 'fk_breed_id',
        ]);
        $this->belongsTo('Veterinarians', [
            'foreignKey' => 'fk_veterinatian_id',
        ]);
        $this->belongsTo('PetSize', [
            'foreignKey' => 'fk_pet_size_id',
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
            ->scalar('description')
            ->maxLength('description', 200)
            ->allowEmptyString('description');

        $validator
            ->date('date_birth')
            ->allowEmptyDate('date_birth');

        $validator
            ->integer('sterilized')
            ->allowEmptyString('sterilized');

        $validator
            ->scalar('imagen')
            ->maxLength('imagen', 255)
            ->allowEmptyFile('imagen');

        $validator
            ->scalar('qr_code')
            ->allowEmptyString('qr_code');

        $validator
            ->integer('fk_breed_id')
            ->allowEmptyString('fk_breed_id');

        $validator
            ->scalar('fk_veterinatian_id')
            ->maxLength('fk_veterinatian_id', 255)
            ->allowEmptyString('fk_veterinatian_id');

        $validator
            ->integer('fk_pet_size_id')
            ->allowEmptyString('fk_pet_size_id');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->allowEmptyString('name');

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
        $rules->add($rules->existsIn('fk_breed_id', 'Breeds'), ['errorField' => 'fk_breed_id']);
        $rules->add($rules->existsIn('fk_veterinatian_id', 'Veterinarians'), ['errorField' => 'fk_veterinatian_id']);
        $rules->add($rules->existsIn('fk_pet_size_id', 'PetSize'), ['errorField' => 'fk_pet_size_id']);

        return $rules;
    }
}

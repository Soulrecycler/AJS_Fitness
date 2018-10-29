<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bmi Model
 *
 * @method \App\Model\Entity\Bmi get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bmi newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bmi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bmi|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bmi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bmi[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bmi findOrCreate($search, callable $callback = null, $options = [])
 */
class BmiTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('bmi');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('result')
            ->maxLength('result', 100)
            ->requirePresence('result', 'create')
            ->notEmpty('result');

        return $validator;
    }
}

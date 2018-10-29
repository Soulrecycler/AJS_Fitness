<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Instructions Model
 *
 * @method \App\Model\Entity\Instruction get($primaryKey, $options = [])
 * @method \App\Model\Entity\Instruction newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Instruction[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Instruction|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Instruction patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Instruction[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Instruction findOrCreate($search, callable $callback = null, $options = [])
 */
class InstructionsTable extends Table
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

        $this->setTable('instructions');
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
            ->scalar('message')
            ->maxLength('message', 200)
            ->requirePresence('message', 'create')
            ->notEmpty('message');

        return $validator;
    }
}

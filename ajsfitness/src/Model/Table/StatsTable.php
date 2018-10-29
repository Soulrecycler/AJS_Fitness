<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Stats Model
 *
 * @method \App\Model\Entity\Stat get($primaryKey, $options = [])
 * @method \App\Model\Entity\Stat newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Stat[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Stat|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Stat patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Stat[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Stat findOrCreate($search, callable $callback = null, $options = [])
 */
class StatsTable extends Table
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

        $this->setTable('stats');
        $this->setDisplayField('s_id');
        $this->setPrimaryKey('s_id');
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
            ->integer('s_id')
            ->allowEmpty('s_id', 'create');

        $validator
            ->scalar('user')
            ->maxLength('user', 200)
            ->requirePresence('user', 'create')
            ->notEmpty('user');

        $validator
            ->scalar('stats')
            ->maxLength('stats', 200)
            ->requirePresence('stats', 'create')
            ->notEmpty('stats');

        return $validator;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lugares Model
 *
 * @method \App\Model\Entity\Lugare get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lugare newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lugare[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lugare|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lugare patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lugare[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lugare findOrCreate($search, callable $callback = null, $options = [])
 */
class LugaresTable extends Table
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

        $this->setTable('lugares');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

                $this->belongsTo('Negocios', [
            'foreignKey' => 'negocios_id',
            'joinType' => 'INNER'
        ]);
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        return $validator;
    }
}

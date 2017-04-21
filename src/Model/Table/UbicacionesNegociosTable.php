<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UbicacionesNegocios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Negocios
 *
 * @method \App\Model\Entity\UbicacionesNegocio get($primaryKey, $options = [])
 * @method \App\Model\Entity\UbicacionesNegocio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UbicacionesNegocio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UbicacionesNegocio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UbicacionesNegocio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UbicacionesNegocio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UbicacionesNegocio findOrCreate($search, callable $callback = null, $options = [])
 */
class UbicacionesNegociosTable extends Table
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

        $this->setTable('ubicaciones_negocios');
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
            ->requirePresence('X', 'create')
            ->notEmpty('X');

        $validator
            ->requirePresence('Y', 'create')
            ->notEmpty('Y');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['negocios_id'], 'Negocios'));

        return $rules;
    }
}

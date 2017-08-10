<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ubicacionesnegocios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Negocios
 *
 * @method \App\Model\Entity\Ubicacionesnegocio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ubicacionesnegocio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ubicacionesnegocio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ubicacionesnegocio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ubicacionesnegocio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ubicacionesnegocio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ubicacionesnegocio findOrCreate($search, callable $callback = null, $options = [])
 */
class UbicacionesnegociosTable extends Table
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

        $this->setTable('ubicacionesnegocios');
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
            ->numeric('lat')
            ->requirePresence('lat', 'create')
            ->notEmpty('lat');

        $validator
            ->numeric('lng')
            ->requirePresence('lng', 'create')
            ->notEmpty('lng');

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

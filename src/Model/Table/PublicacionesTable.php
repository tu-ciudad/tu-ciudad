<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Publicaciones Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Negocios
 * @property \Cake\ORM\Association\BelongsToMany $Tags
 *
 * @method \App\Model\Entity\Publicacione get($primaryKey, $options = [])
 * @method \App\Model\Entity\Publicacione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Publicacione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Publicacione|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Publicacione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Publicacione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Publicacione findOrCreate($search, callable $callback = null, $options = [])
 */
class PublicacionesTable extends Table
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

        $this->setTable('publicaciones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Negocios', [
            'foreignKey' => 'negocios_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'publicacione_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'publicaciones_tags'
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
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->requirePresence('cuerpo', 'create')
            ->notEmpty('cuerpo');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

        $validator
            ->decimal('precio')
            ->requirePresence('precio', 'create')
            ->notEmpty('precio');

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

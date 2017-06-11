<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Negocios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Lugares
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsToMany $Tags
 * @property \Cake\ORM\Association\BelongsToMany $Tags
 *
 * @method \App\Model\Entity\Negocio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Negocio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Negocio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Negocio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Negocio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Negocio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Negocio findOrCreate($search, callable $callback = null, $options = [])
 */
class NegociosTable extends Table
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

        $this->setTable('negocios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Lugares', [
            'foreignKey' => 'lugares_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'negocio_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'negocios_tags'
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'negocio_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'tags_negocios'
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

        $validator
            ->allowEmpty('telefono');

        $validator
            ->allowEmpty('direccion');

        $validator
            ->allowEmpty('descripcion');

        $validator
            ->allowEmpty('perfilfb');

        $validator
            ->email('email')
            ->allowEmpty('email');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['lugares_id'], 'Lugares'));
        $rules->add($rules->existsIn(['users_id'], 'Users'));

        return $rules;
    }
    public function isOwnedBy($articleId, $userId)
    {
        return $this->exists(['id' => $articleId, 'users_id' => $userId]);
    }
}

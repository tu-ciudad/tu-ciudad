<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ImagenesPublicaciones Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Publicaciones
 *
 * @method \App\Model\Entity\ImagenesPublicacione get($primaryKey, $options = [])
 * @method \App\Model\Entity\ImagenesPublicacione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ImagenesPublicacione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ImagenesPublicacione|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ImagenesPublicacione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ImagenesPublicacione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ImagenesPublicacione findOrCreate($search, callable $callback = null, $options = [])
 */
class ImagenesPublicacionesTable extends Table
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
        $this->setTable('imagenes_publicaciones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'foto' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'foto_dir', // defaults to `dir`

                ],
            ],
        ]);

        $this->belongsTo('Publicaciones', [
            'foreignKey' => 'publicaciones_id',
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
            ->requirePresence('foto', 'create')
            ->notEmpty('foto');

        $validator
            ->integer('numero')
            ->requirePresence('numero', 'create')
            ->notEmpty('numero');

        $validator
            ->allowEmpty('foto_dir');

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
        $rules->add($rules->existsIn(['publicaciones_id'], 'Publicaciones'));

        return $rules;
    }
}

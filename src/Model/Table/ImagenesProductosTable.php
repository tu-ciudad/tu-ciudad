<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ImagenesProductos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Productos
 *
 * @method \App\Model\Entity\ImagenesProducto get($primaryKey, $options = [])
 * @method \App\Model\Entity\ImagenesProducto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ImagenesProducto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ImagenesProducto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ImagenesProducto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ImagenesProducto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ImagenesProducto findOrCreate($search, callable $callback = null, $options = [])
 */
class ImagenesProductosTable extends Table
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

        $this->setTable('imagenes_productos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Josegonzalez/Upload.Upload', [
    'foto' => [
    'path' => 'webroot{DS}files{DS}{model}{DS}{field}{DS}',
        'keepFilesOnDelete' => false,
        'keepFoldersOnDelete' => false,
        'keepFilesOnUpdate' => false
    ],
]);

        $this->belongsTo('Productos', [
            'foreignKey' => 'productos_id',
            'joinType' => 'INNER'
        ]
        );
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {

        $validator->provider('upload', \Josegonzalez\Upload\Validation\UploadValidation::class);
    // OR
         $validator->provider('upload', \Josegonzalez\Upload\Validation\ImageValidation::class);
    // OR
         $validator->provider('upload', \Josegonzalez\Upload\Validation\DefaultValidation::class);

        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('foto');

        $validator
            ->integer('numero')
            ->requirePresence('numero', 'create')
            ->notEmpty('numero');

        $validator
            ->add('foto', [
                'validExtension' => [
                    'rule' => ['mimeType',['image/gif' , 'image/jpeg', 'image/png', 'image/jpg']], // default  ['gif', 'jpeg', 'png', 'jpg']
                    'last' => true,
                    'message' => __('Solo puede subir imagenes del tipo: png, jpg o jpeg')
                ]
    ]);
        
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
        $rules->add($rules->existsIn(['productos_id'], 'Productos'));

        return $rules;
    }
}

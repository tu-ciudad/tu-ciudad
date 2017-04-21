<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Filesystem\File;
/**
 * ImagenesNegocios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Negocios
 *
 * @method \App\Model\Entity\ImagenesNegocio get($primaryKey, $options = [])
 * @method \App\Model\Entity\ImagenesNegocio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ImagenesNegocio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ImagenesNegocio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ImagenesNegocio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ImagenesNegocio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ImagenesNegocio findOrCreate($search, callable $callback = null, $options = [])
 */
class ImagenesNegociosTable extends Table
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
        $this->setTable('imagenes_negocios');
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

        $validator->provider('upload', \Josegonzalez\Upload\Validation\UploadValidation::class);
    // OR
         $validator->provider('upload', \Josegonzalez\Upload\Validation\ImageValidation::class);
    // OR
         $validator->provider('upload', \Josegonzalez\Upload\Validation\DefaultValidation::class);

        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('ubicacion', 'create')
            ->notEmpty('ubicacion')
                'rule' => ['inList', ['perfil']], //si tengo que agregar una ubicacion nueva la agrego aca
                'message' => 'Ubicacion incorrecta']);

        $validator
            ->allowEmpty('foto');
        
        $validator
            ->add('foto', [
                'validExtension' => [
                    'rule' => ['mimeType',['image/gif' , 'image/jpeg', 'image/png', 'image/jpg']], // default  ['gif', 'jpeg', 'png', 'jpg']
                    'last' => true,
                    'message' => __('Solo puede subir imagenes del tipo: png, jpg o jpeg')
                ]
    ]);

        $validator->add('foto', 'fileBelowMaxSize', [
        'rule' => ['isBelowMaxSize', 10048576],
        'message' => 'This file is too large',
        'provider' => 'upload',

    ]);

            $validator->add('foto', 'fileAboveMinHeight', [
        'rule' => ['isAboveMinHeight', 200],
        'message' => 'This image should at least be 200px high',
        'provider' => 'upload'
    ]);

    $validator->add('foto', 'fileAboveMinWidth', [
        'rule' => ['isAboveMinWidth', 200],
        'message' => 'This image should not be wider than 200px',
        'provider' => 'upload'
    ]);


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
        $rules->add($rules->existsIn(['negocios_id'], 'Negocios'));

        return $rules;
    }
}

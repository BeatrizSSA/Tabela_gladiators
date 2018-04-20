<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Noticias Model
 *
 * @method \App\Model\Entity\Noticia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Noticia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Noticia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Noticia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Noticia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Noticia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Noticia findOrCreate($search, callable $callback = null, $options = [])
 */
class NoticiasTable extends Table
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

        $this->setTable('noticias');
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
            ->scalar('tipo')
            ->maxLength('tipo', 255)
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 255)
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->date('data')
            ->requirePresence('data', 'create')
            ->notEmpty('data');

        $validator
            ->scalar('bairro')
            ->maxLength('bairro', 255)
            ->requirePresence('bairro', 'create')
            ->notEmpty('bairro');

        $validator
            ->scalar('jornal')
            ->maxLength('jornal', 255)
            ->requirePresence('jornal', 'create')
            ->notEmpty('jornal');

        $validator
            ->scalar('link')
            ->maxLength('link', 255)
            ->requirePresence('link', 'create')
            ->notEmpty('link');

        return $validator;
    }
}

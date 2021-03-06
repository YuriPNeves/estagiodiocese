<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cleros Model
 *
 * @method \App\Model\Entity\Clero get($primaryKey, $options = [])
 * @method \App\Model\Entity\Clero newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Clero[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Clero|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Clero patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Clero[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Clero findOrCreate($search, callable $callback = null)
 */
class ClerosTable extends Table
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

        $this->table('cleros');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->requirePresence('imagem', 'create')
            ->notEmpty('imagem');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('funcao', 'create')
            ->notEmpty('funcao');

        return $validator;
    }
}

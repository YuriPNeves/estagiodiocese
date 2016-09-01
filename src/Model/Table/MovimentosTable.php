<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Movimentos Model
 *
 * @method \App\Model\Entity\Movimento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Movimento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Movimento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Movimento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movimento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Movimento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Movimento findOrCreate($search, callable $callback = null)
 */
class MovimentosTable extends Table
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

        $this->table('movimentos');
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
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('coordenador', 'create')
            ->notEmpty('coordenador');

        $validator
            ->requirePresence('atividades', 'create')
            ->notEmpty('atividades');

        return $validator;
    }
}

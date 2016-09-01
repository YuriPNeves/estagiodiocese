<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comunidades Model
 *
 * @method \App\Model\Entity\Comunidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Comunidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Comunidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Comunidade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comunidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Comunidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Comunidade findOrCreate($search, callable $callback = null)
 */
class ComunidadesTable extends Table
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

        $this->table('comunidades');
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
            ->requirePresence('endereco', 'create')
            ->notEmpty('endereco');

        $validator
            ->requirePresence('telefone', 'create')
            ->notEmpty('telefone');

        $validator
            ->requirePresence('imagem', 'create')
            ->notEmpty('imagem');

        $validator
            ->requirePresence('responsavel', 'create')
            ->notEmpty('responsavel');

        $validator
            ->requirePresence('matriz', 'create')
            ->notEmpty('matriz');

        $validator
            ->integer('id_clero')
            ->requirePresence('id_clero', 'create')
            ->notEmpty('id_clero');

        return $validator;
    }
}

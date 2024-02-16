<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pessoas Model
 *
 * @property \App\Model\Table\TelefonesTable&\Cake\ORM\Association\HasMany $Telefones
 *
 * @method \App\Model\Entity\Pessoa newEmptyEntity()
 * @method \App\Model\Entity\Pessoa newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Pessoa> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pessoa get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Pessoa findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Pessoa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Pessoa> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pessoa|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Pessoa saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Pessoa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pessoa>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pessoa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pessoa> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pessoa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pessoa>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pessoa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pessoa> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PessoasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('pessoas');
        $this->setDisplayField('cpf');
        $this->setPrimaryKey('id');

        $this->hasMany('Telefones', [
            'foreignKey' => 'pessoa_id',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nome_completo')
            ->maxLength('nome_completo', 100)
            ->notEmptyString('nome_completo');

        $validator
            ->scalar('cpf')
            ->minLength('cpf', 11)
            ->maxLength('cpf', 11)
            ->requirePresence('cpf', 'create')
            ->notEmptyString('cpf');
            $validator
            ->scalar('cpf')
            ->minLength('cpf', 11)
            ->maxLength('cpf', 11)
            ->requirePresence('cpf', 'create')
            ->notEmptyString('cpf');

        return $validator;
    }
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['cpf']));
        return $rules;
    }
}

<?php
namespace App\Model\Table;

use App\Model\Entity\Role;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Roles Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Permissions
 * @property \Cake\ORM\Association\BelongsToMany $Sessions
 * @property \Cake\ORM\Association\BelongsToMany $Users
 */
class RolesTable extends Table
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

        $this->table('roles');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsToMany('Permissions', [
            'foreignKey' => 'role_id',
            'targetForeignKey' => 'permission_id',
            'joinTable' => 'roles_permissions'
        ]);
        $this->belongsToMany('Sessions', [
            'foreignKey' => 'role_id',
            'targetForeignKey' => 'session_id',
            'joinTable' => 'sessions_roles'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'role_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'users_roles'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('description');

        $validator
            ->integer('lft')
            ->allowEmpty('lft');

        $validator
            ->integer('rgt')
            ->allowEmpty('rgt');

        return $validator;
    }
}

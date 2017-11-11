<?php
// src/Model/Table/UsersTable.php
namespace App\Model\Table;
use App\Model\Entity\User;
use Cake\ORM\Table;

class UsersTable extends Table
{
    public $jsonAllowedFields = array('id', 'username','first_name', 'last_name', 'address');
    public function initialize(array $config)
    {
        parent::initialize($config);
        // $this->table('users');
        // $this->displayField('id');
        // $this->primaryKey('id');
    }
}
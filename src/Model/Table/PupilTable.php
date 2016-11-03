<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\ValidatorAwareTrait;
use Cake\Validation\Validator;

class PupilTable extends Table
{
    public function validationDefault(Validator $validator)
    {
        $validator->notEmpty('name');
        $validator->notEmpty('surname');
        $validator->notEmpty('patronymic');
        $validator->notEmpty('gender');
        $validator->notEmpty('date_birth');
        $validator->notEmpty('date_register');
        $validator->notEmpty('date_update');
        return $validator;
    }
}
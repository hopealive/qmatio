<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// src/Model/Entity/User.php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Pupil extends Entity
{
    protected $_virtual = ['gender_name'];

    public function _getGenderName(){
        $genderName = "";
        if ( !empty($this->_properties['gender']) ){
            switch ( (int)$this->_properties['gender'] ){
                case 1:
                    $genderName = __("male");
                    break;
                case 2:
                    $genderName = __("female");
                    break;
            }
        }
        return $genderName;
    }

}
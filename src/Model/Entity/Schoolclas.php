<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Schoolclas Entity.
 *
 * @property int $id
 * @property string $preifx
 * @property int $class_number
 * @property string $suffix
 */
class Schoolclas extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];

    protected $_virtual = ['class_name'];

    public function _getClassName(){
        return 
            $this->_properties['prefix'].
            $this->_properties['class_number'].
            $this->_properties['suffix'];
    }
}

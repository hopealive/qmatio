<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PupilSchoolclass Entity.
 *
 * @property int $id
 * @property int $class_id
 * @property \App\Model\Entity\Class $class
 * @property int $pupil_id
 * @property \App\Model\Entity\Pupil $pupil
 */
class PupilSchoolclasses extends Entity
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
        'pupil_id' => true,
        'class_id' => true,
    ];
}

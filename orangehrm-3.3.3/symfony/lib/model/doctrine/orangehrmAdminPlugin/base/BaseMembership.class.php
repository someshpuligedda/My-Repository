<?php

/**
 * BaseMembership
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property Doctrine_Collection $EmployeeMembership
 * 
 * @method integer             getId()                 Returns the current record's "id" value
 * @method string              getName()               Returns the current record's "name" value
 * @method Doctrine_Collection getEmployeeMembership() Returns the current record's "EmployeeMembership" collection
 * @method Membership          setId()                 Sets the current record's "id" value
 * @method Membership          setName()               Sets the current record's "name" value
 * @method Membership          setEmployeeMembership() Sets the current record's "EmployeeMembership" collection
 * 
 * @package    orangehrm
 * @subpackage model\admin\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMembership extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_membership');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('EmployeeMembership', array(
             'local' => 'id',
             'foreign' => 'membershipId'));
    }
}
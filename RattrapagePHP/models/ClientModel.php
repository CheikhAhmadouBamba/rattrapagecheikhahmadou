<?php
namespace ism\models;
use ism\lib\AbstractModel;
class CompteModel extends AbstractModel{

    public function __construct() {
        parent::__construct();
        $this->tableName = "client";
        $this->primaryKey = "id";
    }
}
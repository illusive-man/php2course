<?php
namespace app\models;

use app\interfaces\IModel;
use app\services\Db;

abstract class Model implements IModel
{
    protected $db;

    /**
     * @param $db
     */
    public function  __construct()
    {
        $this->db = Db::getInstance();
    }

    public function getOne(int $id)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return $this->db->queryOne($sql, [':id' => $id]);
    }

    public function getAll(): array
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->queryAll($sql);
    }

    public function insert(array $fieldSet, array $data = [])
    {
        $tableName = $this->getTableName();
        $fieldSet = $this->getFields();
        $sql = "INSERT INTO {$tableName} ({$fieldSet}) VALUES {$data}";
        return $this->db->insert($sql);
    }

    public function update() 
    {
        $tableName = $this->getTableName();

        $sql = "UPDATE {$tableName} SET {$field} = {$data} WHERE id = :id";
        return $this->db->update($sql);
    }
}
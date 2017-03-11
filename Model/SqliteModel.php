<?php
namespace Data\Model;

abstract class SqliteModel extends SqlModel
{
/*
 * Get table fields
 */
    public function getTableFields()
    {
        $fields = [];
        $sql = "PRAGMA table_info('{$this->getTableName()}')";
        if ($stmt = $this->getReadPdo()->query($sql)) {
            while ($field = $stmt->fetchObject()) {
                $fields[$field->name] = NULL;
            }
        }
        return $fields;
    }
}

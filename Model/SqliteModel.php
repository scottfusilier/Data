<?php
namespace Data\Model;

abstract class SqliteModel extends SqlModel
{
/*
 * Sqlite platform dependent identifier quotes
 *
 */
    protected function quoteIdentifier($identifier)
    {
        return '['.$identifier.']';
    }

/*
 * Get table fields
 */
    public function getTableFields()
    {
        $fields = [];
        $sql = "PRAGMA table_info({$this->quoteIdentifier($this->getTableName())})";
        if ($stmt = $this->getReadPdo()->query($sql)) {
            while ($field = $stmt->fetchObject()) {
                $fields[$field->name] = NULL;
            }
        }
        return $fields;
    }
}

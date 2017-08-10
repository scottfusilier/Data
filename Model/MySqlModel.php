<?php
namespace Data\Model;

abstract class MySqlModel extends SqlModel
{
/*
 * MySQL platform dependent identifier quotes
 *
 */
    protected function quoteIdentifier($identifier)
    {
        return '`'.$identifier.'`';
    }
}

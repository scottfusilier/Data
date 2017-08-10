<?php
namespace Data\Model;

abstract class MsSqlModel extends SqlModel
{
/*
 * MsSQL platform dependent identifier quotes
 *
 */
    protected function quoteIdentifier($identifier)
    {
        return '"'.$identifier.'"';
    }
}

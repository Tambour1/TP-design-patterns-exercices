<?php

namespace App;

class MySQLQueryBuilder implements QueryBuilderInterface
{
    protected string $query = '';

    public function select(string $fields): QueryBuilderInterface
    {
        $this->query = "SELECT $fields";
        return $this;
    }

    public function from(string $table): QueryBuilderInterface
    {
        $this->query .= " FROM $table";
        return $this;
    }

    public function where(string $condition): QueryBuilderInterface
    {
        $this->query .= " WHERE $condition";
        return $this;
    }

    public function getQuery(): string
    {
        return $this->query;
    }
}

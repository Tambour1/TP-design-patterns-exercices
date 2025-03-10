<?php

namespace App;

class LitteralBuilder implements QueryBuilderInterface
{
    protected string $query = '';

    public function select(string $fields): QueryBuilderInterface
    {
        $this->query = "Je selectionne $fields";
        return $this;
    }

    public function from(string $table): QueryBuilderInterface
    {
        $this->query .= " de la table $table";
        return $this;
    }

    public function where(string $condition): QueryBuilderInterface
    {
        $this->query .= " où $condition";
        return $this;
    }

    public function getQuery(): string
    {
        return $this->query;
    }
}

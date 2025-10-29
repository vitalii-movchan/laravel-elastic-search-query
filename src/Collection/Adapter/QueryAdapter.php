<?php

namespace Elastic\Elasticsearch\Query\Collection\Adapter;

use Illuminate;

class QueryAdapter
{
    private Illuminate\Support\Collection $parameters;

    public function __construct(Illuminate\Support\Collection $parameters)
    {
        $this->parameters = $parameters;
    }

    public function get(string $field): string|int
    {
        return $this->parameters->get($field);
    }
}

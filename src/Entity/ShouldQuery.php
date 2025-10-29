<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Entity;

use Elastic;
use Illuminate;

/**
 * @class ShouldQuery
 * @implements Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery
 *
 * @uses Concern\ShouldQuery
 */
class ShouldQuery implements
    Illuminate\Contracts\Support\Arrayable,
    Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery
{
    use Elastic\Elasticsearch\Query\Entity\Concern\ShouldQuery;

    /**
     * @return string
     */
    public function getType(): string
    {
        return Elastic\Elasticsearch\Query\Enum\Type::Should->value;
    }

    /**
     * @param Elastic\Elasticsearch\Query\Collection\Queries $queries
     */
    public function __construct(Elastic\Elasticsearch\Query\Collection\Queries $queries)
    {
        $this->queries = $queries;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [$this->getType() => $this->getQueries()->toArray()];
    }
}

<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Entity;

use Elastic;
use Illuminate;

/**
 * @class FilterQuery
 * @implements Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery
 *
 * @uses Elastic\Elasticsearch\Query\Entity\Concern\FilterQuery
 */
class FilterQuery implements
    Illuminate\Contracts\Support\Arrayable,
    Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery
{
    use Elastic\Elasticsearch\Query\Entity\Concern\FilterQuery;

    /**
     * @param Elastic\Elasticsearch\Query\Collection\Queries $queries
     */
    public function __construct(Elastic\Elasticsearch\Query\Collection\Queries $queries)
    {
        $this->queries = $queries;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return Elastic\Elasticsearch\Query\Enum\Type::Filter->value;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [$this->getType() => $this->getQueries()->toArray()];
    }
}

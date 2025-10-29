<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Entity;

use Elastic;
use Illuminate;

/**
 * @class MustQuery
 * @implements Elastic\Elasticsearch\Query\Entity\Contract\MustQuery
 *
 * @uses Elastic\Elasticsearch\Query\Entity\Concern\MustQuery
 */
class MustQuery implements
    Illuminate\Contracts\Support\Arrayable,
    Elastic\Elasticsearch\Query\Entity\Contract\MustQuery
{
    use Elastic\Elasticsearch\Query\Entity\Concern\MustQuery;

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
        return Elastic\Elasticsearch\Query\Enum\Type::Must->value;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [$this->getType() => $this->getQueries()->toArray()];
    }
}

<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Entity;

use Elastic;
use Illuminate;

/**
 * @class MustNotQuery
 * @implements Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery
 *
 * @uses Elastic\Elasticsearch\Query\Entity\Concern\MustNotQuery
 */
class MustNotQuery implements
    Illuminate\Contracts\Support\Arrayable,
    Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery
{
    use Elastic\Elasticsearch\Query\Entity\Concern\MustNotQuery;

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
        return Elastic\Elasticsearch\Query\Enum\Type::MustNot->value;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [$this->getType() => $this->getQueries()->toArray()];
    }
}

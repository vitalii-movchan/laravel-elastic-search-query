<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Entity;

use Elastic;
use Illuminate;

/**
 * @class BoolQuery
 * @implements Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery
 *
 * @uses Elastic\Elasticsearch\Query\Entity\Concern\BoolQuery
 */
class BoolQuery implements
    Illuminate\Contracts\Support\Arrayable,
    Elastic\Elasticsearch\Query\Entity\Contract\BoolQuery
{
    use Elastic\Elasticsearch\Query\Entity\Concern\BoolQuery;

    /**
     * @param Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery $filterQuery
     * @param Elastic\Elasticsearch\Query\Entity\Contract\MustQuery $mustQuery
     * @param Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery $mustNotQuery
     * @param Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery $shouldQuery
     */
    public function __construct(
        Elastic\Elasticsearch\Query\Entity\Contract\FilterQuery $filterQuery,
        Elastic\Elasticsearch\Query\Entity\Contract\MustQuery $mustQuery,
        Elastic\Elasticsearch\Query\Entity\Contract\MustNotQuery $mustNotQuery,
        Elastic\Elasticsearch\Query\Entity\Contract\ShouldQuery $shouldQuery,
    ) {
        $this->filterQuery = $filterQuery;
        $this->mustQuery = $mustQuery;
        $this->mustNotQuery = $mustNotQuery;
        $this->shouldQuery = $shouldQuery;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return Elastic\Elasticsearch\Query\Enum\Type::Bool->value;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            $this->getType() => collect()
                ->merge($this->filterQuery->toArray())
                ->merge($this->mustQuery->toArray())
                ->merge($this->mustNotQuery->toArray())
                ->merge($this->shouldQuery->toArray())
            ->filter()->toArray(),
        ];
    }
}

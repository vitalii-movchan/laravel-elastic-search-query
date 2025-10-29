<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Entity\Concern;

use Elastic;

/**
 * @trait
 *
 * @class BoolQuery
 *
 * @uses Elastic\Elasticsearch\Query\Attribute\Concern\FilterQuery
 * @uses Elastic\Elasticsearch\Query\Attribute\Concern\MustQuery
 * @uses Elastic\Elasticsearch\Query\Attribute\Concern\MustNotQuery
 * @uses Elastic\Elasticsearch\Query\Attribute\Concern\ShouldQuery
 */
trait BoolQuery
{
    use Elastic\Elasticsearch\Query\Attribute\Concern\FilterQuery;
    use Elastic\Elasticsearch\Query\Attribute\Concern\MustQuery;
    use Elastic\Elasticsearch\Query\Attribute\Concern\MustNotQuery;
    use Elastic\Elasticsearch\Query\Attribute\Concern\ShouldQuery;
}

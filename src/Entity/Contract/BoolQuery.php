<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Entity\Contract;

use Elastic;

/**
 * @interface BoolQuery
 *
 * @extends Elastic\Elasticsearch\Query\Entity\Contract\Common\Query
 *
 * @extends Elastic\Elasticsearch\Query\Attribute\Contract\FilterQuery
 * @extends Elastic\Elasticsearch\Query\Attribute\Contract\MustQuery
 * @extends Elastic\Elasticsearch\Query\Attribute\Contract\MustNotQuery
 * @extends Elastic\Elasticsearch\Query\Attribute\Contract\ShouldQuery
 */
interface BoolQuery extends
    Elastic\Elasticsearch\Query\Entity\Contract\Common\Query,
    Elastic\Elasticsearch\Query\Attribute\Contract\FilterQuery,
    Elastic\Elasticsearch\Query\Attribute\Contract\MustQuery,
    Elastic\Elasticsearch\Query\Attribute\Contract\MustNotQuery,
    Elastic\Elasticsearch\Query\Attribute\Contract\ShouldQuery
{
}

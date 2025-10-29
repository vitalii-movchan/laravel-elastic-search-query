<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Entity\Contract;

use Elastic;

/**
 * @class FilterQuery
 *
 * @extends Elastic\Elasticsearch\Query\Entity\Contract\Common\Query
 * @extends Elastic\Elasticsearch\Query\Entity\Contract\Common\ClauseQuery
 */
interface ShouldQuery extends
    Elastic\Elasticsearch\Query\Entity\Contract\Common\Query,
    Elastic\Elasticsearch\Query\Entity\Contract\Common\ClauseQuery
{
}

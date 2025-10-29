<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Collection;

use Elastic;
use Illuminate\Support\Collection;

/**
 * @template-extends Collection<int, Elastic\Elasticsearch\Query\Entity\Contract\Common\Query>
 */
class Queries extends Collection
{
}

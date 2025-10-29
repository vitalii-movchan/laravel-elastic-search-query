<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract;

use Elastic;

/**
 * @interface Composition
 * @extends Elastic\Elasticsearch\Query\Composition\Conceptual\Contract\Composite
 */
interface Composite extends  Elastic\Elasticsearch\Query\Composition\Conceptual\Contract\Composite
{
    /**
     * @return void
     */
    public function build(): void;
}

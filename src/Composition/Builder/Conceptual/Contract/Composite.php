<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Conceptual\Contract;

use Conceptual;
use Elastic;

/**
 * @interface Composition
 * @extends Concpetual\Composition\Contract\Composite
 */
interface Composite extends Concpetual\Composition\Contract\Composite
{
    /**
     * @return void
     */
    public function build(): void;
}

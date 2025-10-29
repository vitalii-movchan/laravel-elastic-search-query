<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Event\Concern;

use Conceptual;
use Elastic;

/**
 * @class Fillable
 */
trait Filterable
{
    use Conceptual\Composition\Concern\Composite;

    /**
     * @return void
     */
    public function filter(): void
    {
        $this->getChildren()->rewind();

        while ($this->getChildren()->valid()) {
            if ($this->getChildren()->current() instanceof Elastic\Elasticsearch\Query\Composition\Builder\Event\Contract\Filterable) {
                $this->getChildren()->current()->filter();
            }

            $this->getChildren()->next();
        }
    }
}

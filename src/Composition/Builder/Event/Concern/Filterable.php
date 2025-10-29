<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Composition\Builder\Event\Concern;

use Elastic;
use Sxope\Infra\Support;

/**
 * @class Fillable
 */
trait Filterable
{
    use Support\Composition\Conceptual\Concern\Composite;

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

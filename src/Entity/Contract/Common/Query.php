<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Entity\Contract\Common;

/**
 * @interface Query
 */
interface Query
{
    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return array
     */
    public function toArray(): array;
}

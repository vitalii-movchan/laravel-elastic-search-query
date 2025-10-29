<?php

declare(strict_types=1);

namespace Elastic\Elasticsearch\Query\Validation;

use Elastic;
use Illuminate;

/**
 * @final
 * @class MatchQueryValidator
 */
final class MatchValidator implements Elastic\Elasticsearch\Query\Validation\Contract\MatchValidator
{
    /**
     * @throws Illuminate\Validation\ValidationException
     */
    public function validate(Elastic\Elasticsearch\Query\Entity\Contract\MatchQuery $query): void
    {

        $validator = Illuminate\Support\Facades\Validator::make(
            [
                'query' => $query,
            ],
            [
                'query' => [ new Elastic\Elasticsearch\Query\Validation\Rules\MatchQuery()],
            ],
        );


        if ($validator->fails()) {
            throw Illuminate\Validation\ValidationException::withMessages($validator->errors()->all());
        }
    }
}

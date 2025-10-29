Import classes
```
use SplObjectStorage;
use Sxope\Infra\Search\Elastic\Indices;
use Sxope\Infra\Search\Elastic\Query;
```

Create composite builder
```
$boolCompositeBuilder =
(
    new Query\Composition\Builder\BoolCompositeBuilder(
        new Query\Builder\BoolQueryBuilder(
            new Query\Entity\BoolQuery(
                new Query\Entity\FilterQuery(new Query\Collection\Queries([])),
                new Query\Entity\MustQuery(new Query\Collection\Queries([])),
                new Query\Entity\MustNotQuery(new Query\Collection\Queries([])),
                new Query\Entity\ShouldQuery(new Query\Collection\Queries([]))
            )
        ),
        new SplObjectStorage()
    )
)->addMustCompositeBuilder(
    (
        new Query\Composition\Builder\MustCompositeBuilder(
            new Query\Builder\MustQueryBuilder(
                new Query\Entity\MustQuery(new Query\Collection\Queries([]))
            ),
            new SplObjectStorage()
        )
    )->addMatchCompositeBuilder(
        new Query\Composition\Builder\MatchCompositeBuilder(
            new Indices\Mappings\Field\Entity\Field('string', 'name'),
                new Query\Builder\MatchQueryBuilder(
                    new Query\Entity\MatchQuery(
                        new Query\Parameter\Entity\FieldParameter('name.keyword'),
                        new Query\Parameter\Entity\QueryParameter(''),
                        new Query\Parameter\Entity\FuzzinessParameter(null),
                        new Query\Parameter\Entity\BoostParameter(null),
                        new Query\Validation\MatchValidator()
                    )
                )
            )
        )
)->addShouldCompositeBuilder(
    (
        new Query\Composition\Builder\ShouldCompositeBuilder(
            new Query\Builder\ShouldQueryBuilder(
                new Query\Entity\ShouldQuery(new Query\Collection\Queries([]))
            ),
            new SplObjectStorage()
        )
    )->addMatchCompositeBuilder(
        new Query\Composition\Builder\MatchCompositeBuilder(
            new Indices\Mappings\Field\Entity\Field('string', 'email'),
                new Query\Builder\MatchQueryBuilder(
                    new Query\Entity\MatchQuery(
                        new Query\Parameter\Entity\FieldParameter('email.keyword'),
                        new Query\Parameter\Entity\QueryParameter(''),
                        new Query\Parameter\Entity\FuzzinessParameter(null),
                        new Query\Parameter\Entity\BoostParameter(null),
                        new Query\Validation\MatchValidator()
                    )
                )
            )
        )
);
```

Fill composite builders
```
$boolCompositeBuilder->fill(new Query\Collection\Parameters(['name' => 'John Doe']));
```

Filter composite builders
```
$boolCompositeBuilder->filter();
```

Build query
```
$boolCompositeBuilder->build();
```

Get query
```
$rawBoolQuery = $boolCompositeBuilder->getBoolQuery()->toArray();
```

Output
```json
{
    "bool": {
        "must": [
            {
                "match": {
                    "field": "name.keyword",
                    "query": "John Doe"
                }
            }
        ]
    }
}
```

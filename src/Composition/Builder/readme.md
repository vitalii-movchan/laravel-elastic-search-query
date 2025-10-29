Import classes
```
use SplObjectStorage;
use Sxope\Infra\Search\Elastic\Indices;
use Sxope\Infra\Search\Elastic\Query;
```

Create composite builder
```
$boolCompositeBuilder =
    (new Query\Composition\Builder\Factory\BoolFactory())
        ->create()
        ->addMustCompositeBuilder(
            (new Query\Composition\Builder\Factory\MustFactory())
                ->create()
                ->addMatchCompositeBuilder(
                    (new Query\Composition\Builder\Factory\MatchFactory())
                        ->create()
                        ->setField(
                            new Indices\Mappings\Field\Entity\Field('string', 'name')
                        )
                        ->setFieldParameter(
                            new Query\Parameter\Entity\FieldParameter('name.keyword')
                        )
                )
                )->addShouldCompositeBuilder(
                    (new Query\Composition\Builder\Factory\ShouldFactory())
                        ->create()
                        ->addMatchCompositeBuilder(
                            (new Query\Composition\Builder\Factory\MatchFactory())
                                ->create()
                                ->setField(
                                    new Indices\Mappings\Field\Entity\Field('string', 'email')
                                )
                                ->setFieldParameter(
                                    new Query\Parameter\Entity\FieldParameter('email.keyword')
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

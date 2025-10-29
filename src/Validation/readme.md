Import classes
```
use Sxope\Infra\Search\Elastic\Query;
```

Create match query
```
$matchQuery = new Query\Entity\MatchQuery(
    new Query\Parameter\Entity\FieldParameter(''),
    new Query\Parameter\Entity\QueryParameter(''),
    new Query\Parameter\Entity\FuzzinessParameter(null),
    new Query\Parameter\Entity\BoostParameter(null),
    new Query\Validation\MatchValidator()
);
```

Validate match query
```
$matchQuery->validate();

# Illuminate\Validation\ValidationException

# Wrong field parameter!
# Wrong query parameter!
```

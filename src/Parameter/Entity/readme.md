Import classes
```
use Sxope\Infra\Search\Elastic\Query;
```

Create field parameter
```
$fieldParameter = new Query\Parameter\Entity\FieldParameter('');
```

Get field parameter value
```
$value = $fieldParameter->getValue();
# empty string
```

Update field parameter value
```
$fieldParameter->setValue('name');
```

Get field parameter value
```
$value = $fieldParameter->getValue();
# name
```

# ProcessCalcTime

# Quick start

Reference test/start.php

## How to Use

```php
require __DIR__ . "/../vendor/autoload.php";

$ProcessCalcTime = new ssmr9dt\ProcessCalcTime("All");

//calculate process
for ($i=0; $i<10000; $i++) {
    echo "aaaaa";
}

$ProcessCalcTime->finish();
```

# License
This software is released under the MIT License, see LICENSE.
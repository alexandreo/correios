# Integracao com api official dos Correios

Projeto de integração com api official dos Correios.

### Composer
```
composer require alexandreo/correios
```

## Como usar
```php

use Alexandreo\Correios\CorreioAtendeCliente;

$correioAtendeCliente = new CorreioAtendeCliente();

try {
    $data = $correioAtendeCliente->consultaCep('02038010');
    var_dump($data);
} catch (\Alexandreo\Correios\CorreioException $e) {//get error
    echo $e->getMessage();
}
```

### Methodos disponível
consultaCep

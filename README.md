# Teste Promobit

## Problema

Nosso cliente cadastrou na plataforma as variantes dos produtos sem especificação. E pediu para criarmos um seletor de variantes na página de produto. Mas a seguinte estrutura de dados não funciona bem para o desenvolvimento de um seletor de variantes.

```php
[
    'azul-XG',
    'branco-PP',
    'azul-XG',
    'preto-PP',
    'preto-M',
    'branco-G',
    'preto-G',
    'vermelho-M',
    'preto-GG',
    'azul-P',
    'preto-GG',
    'azul-XG',
]
```

Precisamos que essa estrutura seja convertida para o seguinte formato.

```php
[
    'preto' =>  [
        'PP' => 1,
        'M' => 1,
        'G' => 1,
        'GG' => 2
    ],
    'branco' => [
        'PP'=> 1,
        'G' => 1
    ],
    'vermelho' => [
        'M' => 1
    ],
    'azul' => [
        'XG' => 3,
        'P' => 1
    ]
]
```

## Como testar?

Para testar seu código, basta apenas rodar o seguinte comando:

```bash
php vendor/bin/phpunit test --colors
```

O resultado deve ser semelhante ao seguinte:

```bash
PHPUnit 8.5.21 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 26 ms, Memory: 4.00 MB

OK (1 test, 1 assertion)
```

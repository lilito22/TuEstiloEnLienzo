<?php

$rutas=[
    "GET"=>[
        '/cuadro'=>['cuadroController','index'],
        '/api/cuadro'=>['cuadroController','listarjson']
    ],
    "POST"=>[
        '/cuadro'=>['cuadroController','guardar']
    ]
];

return $rutas;
?>
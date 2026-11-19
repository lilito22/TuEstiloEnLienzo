<?php

$rutas=[
    "GET"=>[
        '/cuadro'=>['cuadroController','index']
    ],
    "POST"=>[
        '/cuadro'=>['cuadroController','guardar']
    ]
];

return $rutas;
?>
<?php
$productos = [
    'prod1' => [
        'nombre' => 'portátil gaming',
        'precio' => 899.99,
        'stock' => 15,
        'categoria' => 'electrónica'
    ],
    'prod2' => [
        'nombre' => 'mesa escritorio',
        'precio' => 120.50,
        'stock' => 8,
        'categoria' => 'hogar'
    ],
    'prod3' => [
        'nombre' => 'ratón inalámbrico',
        'precio' => 25.99,
        'stock' => 0,
        'categoria' => 'electrónica'
    ]
];

function formatPrice($price)
{
    return $price . "€";
}

function calculateIVA($price, $iva = 21)
{
    $iva = $iva / 100 + 1;
    return $price * $iva;
}


function getStock($productos)
{
    $stockMayorCero = [];
    foreach ($productos as $numProducto => $info) {
        if ($info["stock"] > 0) {
            $stockMayorCero[$numProducto] = $info;
        }
    }
    return $stockMayorCero;
}
?>
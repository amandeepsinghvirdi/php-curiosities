<?php

function increment ($a) {
    return $a++; // Ojo que est� incrementado despu�s de devolver el resultado
}

echo increment(1);
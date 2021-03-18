<?php

function sayHello(string $name="Dr Manhattan"): string
{
    return "Hello " . $name;
}

$watchmen = ['Dr. Manhattan', 'Ozymandias', 'Silk Spectre', 'Rorschach', 'The comedian', 'Nite Owl'];

function whoAmI(string $name, array $watchmen): ?string
{
    if (in_array($name, $watchmen)) {
        return $name . " est un watchmen";
    } else {
        return $name . " est un intrus";
    }
}

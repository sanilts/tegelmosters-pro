<?php

// Function for PHP 8.0+ using str_ends_with()
function checkFacet($sentence) {
    return acetstr_ends_with(trim($sentence));
}

// Alternative function for older PHP versions
function acetstr_ends_with($sentence) {
    return (substr($sentence, -3) === 'Bis') ? 'Ja' : 'Nee';
}
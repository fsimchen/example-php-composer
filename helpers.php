<?php

/**
 * Strip non-numeric characters.
 *
 * @param string|string[]|null $string
 * @return string|string[]|null
 */
function strip_non_numeric(string $string) {
    return preg_replace("/[^0-9]/", "", $string);
}

<?php

function strip_non_numeric($string) {
    return preg_replace("/[^0-9]/", "", $string);
}

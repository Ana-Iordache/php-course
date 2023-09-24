<?php
namespace Core;

class Validator {
    // this is a pure function => it's not contingent and doesn't depend opon state or values from 
    // the outside world; so we can make it static -> now we can call it without an instance
    public static function string($value, $min = 1, $max = INF) {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value) {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
?>
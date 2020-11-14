<?php

function sanitizeInputs($input) {
    return strip_tags(htmlentities($input));
}

function redirect($url) {
    header('Location: ' . '/nomina' . $url, true);
    die();
}

?>
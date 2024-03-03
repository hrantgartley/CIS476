<?php

// This PHP script file is used to collect all of the functions used by the app.
// Use these functions by including it in your php file 
// (see: include, require, include_once, require_once)

// This function is from the w3schools PHP Form Validation section
function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function calculateTotal($subtotal, $tax) {
    $total = $subtotal + $tax;
    return $total;
}

function calculateTax($bat, $rtx, $headphones, $gamingChair, $monitorStand) {
    $subtotal = $bat + $rtx + $headphones + $gamingChair + $monitorStand;
    $tax = $subtotal * 0.095;
    return $tax;
}

function validateCard() {
    $card = test_input($_POST["cnum"]);
    $valid = false;

    if (preg_match("/^5[1-5][0-9]{14}$/", $card)) {
        $_SESSION['card'] = "MasterCard";
        $valid = true;
    } elseif (preg_match("/^4[0-9]{12}(?:[0-9]{3})?$/", $card)) {
        $_SESSION['card'] = "Visa";
        $valid = true;
    } elseif (preg_match("/^3[47][0-9]{13}$/", $card)) {
        $_SESSION['card'] = "American Express";
        $valid = true;
    } else {
        $valid = false;
    }
    return $valid;
}

function validateForm(...$args) {
    $valid = true;
    foreach ($args as $postIndexVariable) {
        if (empty(test_input($postIndexVariable))) {
            $valid = false;
        }
    }
    return $valid;
}

function validateExp($exp) {
    $valid = false;
    $currentDate = date("m/y");
    // (MM/YY) format
    if (preg_match("/^(0[1-9]|1[0-2])\/[0-9]{2}$/", $exp)) {
        $expDate = DateTime::createFromFormat("m/y", $exp);
        $currentDate = DateTime::createFromFormat("m/y", $currentDate);
        if ($expDate > $currentDate) {
            $valid = true;
        }
    }
    return $valid;
}

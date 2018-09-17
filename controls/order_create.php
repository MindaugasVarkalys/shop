<?php

include 'libraries/orders.class.php';
$ordersObj = new orders();
$formErrors = null;
$data = array();
$required = array('firstName', 'lastName', 'email', 'phoneNumber', 'country', 'city', 'streetAndHouseNumber', 'postalCode');
$maxLengths = array(
    'firstName' => 30,
    'lastName' => 30,
    'email' => 50,
    'phoneNumber' => 14,
    'country' => 30,
    'city' => 30,
    'streetAndHouseNumber' => 30,
    'postalCode' => 10
);

if (!empty($_POST['submit'])) {
    include 'utils/validator.class.php';

    $validations = array(
        'firstName' => 'words',
        'lastName' => 'words',
        'email' => 'anything',
        'phoneNumber' => 'phone',
        'country' => 'words',
        'city' => 'words',
        'streetAndHouseNumber' => 'anything',
        'postalCode' => 'positivenumber'
    );

    $validator = new validator($validations, $required, $maxLengths);

    if ($validator->validate($_POST)) {
        $dataPrepared = $validator->preparePostFieldsForSQL();
        $ordersObj->insertOrder($dataPrepared);
        header("Location: index.php");
        die();
    } else {
        $formErrors = $validator->getErrorHTML();
        $data = $_POST;
    }
}
include 'templates/order_form.tpl.php';
?>
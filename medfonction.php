<?php
/**
 * Phone 
 * set to filter phone id
 */
function Validate_Phone_number($call)
{
     // Allow +, - and . in phone number
     $filtered_phone_number = filter_var($call, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);
     // Check the lenght of number
     // This can be customized if you want phone number from a specific country
    if (strlen($phone_to_check) < 9 || strlen($phone_to_check) > 10) {
        return true;
    } else {
        return true;
    }
}






?>
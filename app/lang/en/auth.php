<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
    'user' => 'User not found.',
    'verification' => 'Email has already been verified.',
    'successVerification' => 'Your email has been successfully verified.',
    'unauthorized'     => 'You dont have unauthorized',
    'updateProfile'     => [
        'success'                           =>  'Updated Profile Succesfully',
        'error_fail_timezone'               => 'The timezone and country codes do not match!',
        'error_combination_id_phone_number' => 'The combination of id_phone_number and phone_number is incorrect.',
        'error_combination_timezone'        =>  'The combination of timezone and country code is incorrect',
        'error_updated_profile'             => 'Failed to update the user profile.',
    ],
    'token'             => [
        'invalid_token'                     => 'Invalid token. Please check your token and try again',

    ],
    'checking_token'    => [
        'invalid_credential'                => 'Invalid credential email or token, please check and try again',
        'valid_credential'                  => 'Valid credential',
        'invalid_email'                     => 'Invalid credential email, please check and try again',
    ],
    'change_password'   => [
        'invalid_credential'                 => 'Invalid credential, please check and try again',
        'valid_credential'                    => 'Valid credential',
        'invalid_token'                       => 'This password reset token is invalid.',
        'invalid_input'                      =>'Your request parameter is invalid, please check and try again',
    ],
    'Updated Profile Succesfully',


];

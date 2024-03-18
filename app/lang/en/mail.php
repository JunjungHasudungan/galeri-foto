<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Password Reset Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */

    'subject_verify_email'      => 'Verify Email Address',
    'greating'                  => 'Halo, ',
    'line_subject'              => 'Click the button below to verify your email address',
    'success_reset_password'    => 'Your password has been reset.',
    'action_text'               => "If you're having trouble clicking the",
    'copy_and_paste'            => "button, copy and paste the URL below\n",
    'if_you'                    =>  " If you're having trouble clicking the button, copy and paste the URL below\n into your web browser:",
    'invalid_email'             => 'email invalid',
    'reset_password'                => [
        'greeting'                  => 'Halo',
        'subject'                   => 'Reset Password',
        'first_line'                => 'You are receiving this email because we received a password reset request for your account.',
        'action'                    => 'Click here to change your Password',
        'second_line'               => 'This password reset link will expire in',
        'thirdth_line'              => 'If you did not request a password reset, no further action is required.',
        'regard'                    => 'Thank You,'
    ],
    'change_password'                => [
        'greeting'                  => 'Halo',
        'subject'                   => 'Change Password',
        'first_line'                => 'You are receiving this email because we received a change password request for your account.',
        'action'                    => 'Click here to change your Password',
        'second_line'               => 'This change password link will expire in',
        'thirdth_line'              => 'If you did not request a change password, no further action is required.',
        'regard'                    => 'Thank You,'
    ],
    'update_password'          => [
        'greeting'                  => 'Dear',
        'subject'                   => 'password has been reset',
        'first_line'                => 'The Password for your',
        'account'                   => 'account',
        'success'                   => 'was successfully reset on',
        'thirdth_line'              => 'If you have any question, please contact',
        'regard'                    => 'Thank You,'
    ],
    'register'                      => [
        'subject'               => 'Verify Email Address',
        'greating'              => 'Hello',
        'first_line'            => 'Please click the button below to verify your email address.',
        'action'                => 'Verify Email Address',
        'second_line'           => 'If you did not create an account, no further action is required.',
    ],
    'login_google'                  => [
        'in_valid_email'                => 'Google login failed, invalid credential.',
        'error_internal_server'         => 'Google login failed, internal server error.',
    ],
    'verify_email'                  => [
        'success'               => 'Email verification success.',
        'already_verified'      => 'Email has already been verified',
    ],
    'resend_email_confirmation'     => [
        'success'               => 'Email Resend Confirmation successfully.',
        'already_verified'      => 'Email has already been verified',
    ],
    'change_email'                  => [
        'sucess'                => 'Change Email successfully'
    ]
];

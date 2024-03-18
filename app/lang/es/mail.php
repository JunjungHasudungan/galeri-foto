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

    'subject_verify_email'      => 'Verificar dirección de correo electrónico',
    'greeting'                  => 'Hola, ',
    'line_subject'              => 'Haz clic en el botón de abajo para verificar tu dirección de correo electrónico',
    'success_reset_password'    => 'Tu contrasena ha sido restablecida.',
    'action_text'               => "Si tienes problemas al hacer clic en el",
    'if_you'                    =>  "Si tienes problemas para hacer clic en el botón, copia y pega la URL a continuación\n en tu navegador web:",
    'invalid_email'             => 'Correo electrónico no válido',
    'reset_password'                => [
        'greeting'                      => 'Hola',
        'subject'                       => 'Restablecer contraseña',
        'first_line'                    => 'Estás recibiendo este correo electrónico porque recibimos una solicitud para restablecer la contraseña de tu cuenta.',
        'action'                        => 'Haz clic aquí para cambiar tu contraseña',
        'second_line'                   => 'Este enlace de restablecimiento de contraseña expirará en',
        'third_line'                    => 'Si no solicitaste un restablecimiento de contraseña, no es necesario realizar ninguna otra acción.',
        'regard'                        => 'Gracias'
    ],
    'change_password'                => [
        'greeting'                  => 'Hola',
        'subject'                   => 'Cambiar contraseña',
        'first_line'                => 'Estás recibiendo este correo electrónico porque recibimos una solicitud para cambiar la contraseña de tu cuenta.',
        'action'                    => 'Haz clic aquí para cambiar tu contraseña',
        'second_line'               => 'Este enlace de cambio de contraseña caducará en',
        'third_line'                => 'Si no solicitaste un cambio de contraseña, no es necesario tomar ninguna otra acción.',
        'regard'                    => 'Gracias'
    ],
    'update_password'               => [
        'greeting'                      => 'Hola',
        'subject'                       => 'se ha restablecido la contraseña',
        'first_line'                    => 'La contraseña de su',
        'account'                       => 'cuenta',
        'success'                       => 'se restableció con éxito el',
        'third_line'                    => 'Si tienes alguna pregunta, por favor, ponte en contacto',
        'regard'                        => 'Gracias'
    ],
    
    'register'                      => [
        'subject'                       => 'Verificar dirección de correo electrónico',
        'greeting'                      => 'Hola',
        'first_line'                    => 'Haga clic en el botón de abajo para verificar su dirección de correo electrónico.',
        'action'                        => 'Verificar dirección de correo electrónico',
        'second_line'                   => 'Si no creó una cuenta, no es necesario realizar ninguna otra acción.',
    ],
    'login_google'                  => [
        'in_valid_email'                => 'Inicio de sesión de Google fallido, credencial no válida.',
        'error_internal_server'         => 'Inicio de sesión de Google fallido, error interno del servidor.',
    ],

    'Verify_email'                  => [
        'success'                       => 'Verificación de correo electrónico exitosa.',
        'already_verified'              => 'El correo electrónico ya ha sido verificado.',
    ],
    'resend_email_confirmation'     => [
        'success'                       => 'Confirmacion de reenvio de correo electronico exitosa.',
        'already_verified'              => 'El correo electronico ya ha sido verificado.',
    ],

    'change_email' => [
        'success' => 'Cambio de correo electrónico exitoso'
    ]
];

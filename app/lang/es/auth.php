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
    'failed'                    => 'Estas credenciales no coinciden con nuestros registros.',
    'password'                  => 'La contraseña proporcionada es incorrecta.',
    'throttle'                  => 'Demasiados intentos de inicio de sesión. Por favor, inténtalo de nuevo en :seconds segundos.',
    'verification'              => 'El correo electrónico ya ha sido verificado.',
    'unauthorized'              => 'No tienes autorización',
    'updateProfile'         => [
        'success'                           =>  'Perfil actualizado exitosamente', 
        'error_fail_timezone'               => '¡Los códigos de zona horaria y país no coinciden!',
        'error_combination_id_phone_number' => 'La combinación de zona horaria y código de país es incorrecta.',
        'error_combination_timezone'        => 'La combinación de id_phone_number y phone_number es incorrecta.',
        'error_updated_profile'             => 'Fallo al actualizar el perfil del usuario.',
    ],
    'token'             => [
        'invalid_token'                     => 'Token no válido. Por favor, verifique su token e inténtelo de nuevo.',
    ],
     'checking_token'    => [
        'invalid_credential'                => 'Email o token de credenciales no validos, por favor, verifique e intente de nuevo.',  
        'valid_credential'                  => 'Credencial válida',
        'invalid_token'                     => 'Este token de restablecimiento de contraseña no es válido.',
        'invalid_email'                     => 'Credencial de correo electrónico no válida, por favor verifique e intente de nuevo'
      ],
      'change_password' => [
        'invalid_credential'                => 'Credencial no valida, por favor, compruebe e intentelo de nuevo',
        'valid_credential'                  => 'Credencial valida',
        'invalid_token'                     => 'Este token de restablecimiento de contraseña no es valido',
        'invalid_input'                     => 'Su parametro de solicitud no es valido, por favor, verifique e inténtelo de nuevo',

    ],
];

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'es - The :attribute field must be accepted.',
    'accepted_if' => 'es - The :attribute field must be accepted when :other is :value.',
    'active_url' => 'es - The :attribute field must be a valid URL.',
    'after' => 'es - The :attribute field must be a date after :date.',
    'after_or_equal' => 'es - The :attribute field must be a date after or equal to :date.',
    'alpha' => 'es - The :attribute field must only contain letters.',
    'alpha_dash' => 'es - The :attribute field must only contain letters, numbers, dashes, and underscores.',
    'alpha_num' => 'es - The :attribute field must only contain letters and numbers.',
    'array' => 'es - The :attribute field must be an array.',
    'ascii' => 'es - The :attribute field must only contain single-byte alphanumeric characters and symbols.',
    'before' => 'es - The :attribute field must be a date before :date.',
    'before_or_equal' => 'es - The :attribute field must be a date before or equal to :date.',
    'between' => [
        'array' => 'es - The :attribute field must have between :min and :max items.',
        'file' => 'es - The :attribute field must be between :min and :max kilobytes.',
        'numeric' => 'es - The :attribute field must be between :min and :max.',
        'string' => 'es - The :attribute field must be between :min and :max characters.',
    ],
    'boolean' => 'es - The :attribute field must be true or false.',
    'can' => 'es - The :attribute field contains an unauthorized value.',
    'confirmed' => 'The :attribute a confirmación del campo no coincide',
    'current_password' => 'es - The password is incorrect.',
    'date' => 'es - The :attribute field must be a valid date.',
    'date_equals' => 'es - The :attribute field must be a date equal to :date.',
    'date_format' => 'es - The :attribute field must match the format :format.',
    'decimal' => 'es - The :attribute field must have :decimal decimal places.',
    'declined' => 'es - The :attribute field must be declined.',
    'declined_if' => 'es - The :attribute field must be declined when :other is :value.',
    'different' => 'es - The :attribute field and :other must be different.',
    'digits' => 'es - The :attribute field must be :digits digits.',
    'digits_between' => 'es - The :attribute field must be between :min and :max digits.',
    'dimensions' => 'es - The :attribute field has invalid image dimensions.',
    'distinct' => 'es - The :attribute field has a duplicate value.',
    'doesnt_end_with' => 'es - The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'es - The :attribute field must not start with one of the following: :values.',
    'email' => 'es - The :attribute field must be a valid email address.',
    'ends_with' => 'es - The :attribute field must end with one of the following: :values.',
    'enum' => 'The selected :attribute no es válido.',
    'exists' => 'El seleccionado :attribute no es válido.',
    'file' => 'es - The :attribute field must be a file.',
    'filled' => 'es - The :attribute field must have a value.',
    'gt' => [
        'array' => 'es - The :attribute field must have more than :value items.',
        'file' => 'es - The :attribute field must be greater than :value kilobytes.',
        'numeric' => 'es - The :attribute field must be greater than :value.',
        'string' => 'es - The :attribute field must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'es - The :attribute field must have :value items or more.',
        'file' => 'es - The :attribute field must be greater than or equal to :value kilobytes.',
        'numeric' => 'es - The :attribute field must be greater than or equal to :value.',
        'string' => 'es - The :attribute field must be greater than or equal to :value characters.',
    ],
    'image' => 'es - The :attribute field must be an image.',
    'in' => 'The selected :attribute no es válido.',
    'in_array' => 'es - The :attribute field must exist in :other.',
    'integer' => 'es - The :attribute field must be an integer.',
    'ip' => 'es - The :attribute field must be a valid IP address.',
    'ipv4' => 'es - The :attribute field must be a valid IPv4 address.',
    'ipv6' => 'es - The :attribute field must be a valid IPv6 address.',
    'json' => 'es - The :attribute field must be a valid JSON string.',
    'lowercase' => 'es - The :attribute field must be lowercase.',
    'lt' => [
        'array' => 'es - The :attribute field must have less than :value items.',
        'file' => 'es - The :attribute field must be less than :value kilobytes.',
        'numeric' => 'es - The :attribute field must be less than :value.',
        'string' => 'es - The :attribute field must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'es - The :attribute field must not have more than :value items.',
        'file' => 'es - The :attribute field must be less than or equal to :value kilobytes.',
        'numeric' => 'es - The :attribute field must be less than or equal to :value.',
        'string' => 'es - The :attribute field must be less than or equal to :value characters.',
    ],
    'mac_address' => 'es - The :attribute field must be a valid MAC address.',
    'max' => [
        'array' => 'es - The :attribute field must not have more than :max items.',
        'file' => 'es - The :attribute field must not be greater than :max kilobytes.',
        'numeric' => 'es - The :attribute field must not be greater than :max.',
        'string' => 'The :attribute fcampo no debe ser mayor que :max characters.',
    ],
    'max_digits' => 'es - The :attribute field must not have more than :max digits.',
    'mimes' => 'es - The :attribute field must be a file of type: :values.',
    'mimetypes' => 'es - The :attribute field must be a file of type: :values.',
    'min' => [
        'array' => 'es - The :attribute field must have at least :min items.',
        'file' => 'es - The :attribute field must be at least :min kilobytes.',
        'numeric' => 'es - The :attribute field must be at least :min.',
        'string' => 'The :attribute el campo debe tener al menos :min caracteres',
    ],
    'min_digits' => 'es - The :attribute field must have at least :min digits.',
    'missing' => 'es - The :attribute field must be missing.',
    'missing_if' => 'es - The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'es - The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'es - The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'es - The :attribute field must be missing when :values are present.',
    'multiple_of' => 'es - The :attribute field must be a multiple of :value.',
    'not_in' => 'The selected :attribute no es válido.',
    'not_regex' => 'The :attribute field format no es válido.',
    'numeric' => 'The :attribute field must be a number.',
    'password' => [
        'letters' => 'La :attribute debe contener al menos una letra.',
        'mixed' => 'La :attribute debe contener al menos una letra mayúscula y una letra minúscula.',
        'numbers' => 'La :attribute debe contener al menos un número.',
        'symbols' => 'La :attribute debe contener al menos un símbolo.',
        'uncompromised' => 'es - La given :attribute has appeared in a data leak. Please choose a different :attribute.',
        'consecutiveCharacters' => 'La :attribute no debe contener caracteres consecutivos',
    ],
    'present' => 'es - The :attribute field must be present.',
    'prohibited' => 'es - The :attribute field is prohibited.',
    'prohibited_if' => 'es - The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'es - The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'es - The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format no es válido.',
    'required' => 'La :attribute Campo obligatorio.',
    'required_array_keys' => 'es - The :attribute field must contain entries for: :values.',
    'required_if' => 'es - The :attribute field is required when :other is :value.',
    'required_if_accepted' => 'es - The :attribute field is required when :other is accepted.',
    'required_unless' => 'es - The :attribute field is required unless :other is in :values.',
    'required_with' => 'es - The :attribute field is required when :values is present.',
    'required_with_all' => 'es - The :attribute field is required when :values are present.',
    'required_without' => 'es - The :attribute field is required when :values is not present.',
    'required_without_all' => 'es - The :attribute field is required when none of :values are present.',
    'same' => 'es - The :attribute field must match :other.',
    'size' => [
        'array' => 'es - The :attribute field must contain :size items.',
        'file' => 'es - The :attribute field must be :size kilobytes.',
        'numeric' => 'es - The :attribute field must be :size.',
        'string' => 'es - The :attribute field must be :size characters.',
    ],
    'starts_with' => 'es - The :attribute field must start with one of the following: :values.',
    'string' => 'es - The :attribute field must be a string.',
    'timezone' => 'es - The :attribute field must be a valid timezone.',
    'unique' => 'The :attribute ya ha sido tomado.',
    'uploaded' => 'es - The :attribute failed to upload.',
    'uppercase' => 'es - The :attribute field must be uppercase.',
    'url' => 'es - The :attribute field must be a valid URL.',
    'ulid' => 'es - The :attribute field must be a valid ULID.',
    'uuid' => 'es - The :attribute field must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'es - custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

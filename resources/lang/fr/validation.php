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

    'accepted'             => ':attribute doit &ecirc;tre accept&eacute;.',
    'active_url'           => ':attribute n\'est pas une adresse de site Web valide.',
    'after'                => ':attribute doit &ecirc;tre une date apr&egrave;s :date.',
    'after_or_equal'       => ':attribute Doit &ecirc;tre une date apr&egrave;s ou &eacute;gale &agrave; :date.',
    'alpha'                => ':attribute ne peut contenir que des lettres.',
    'alpha_dash'           => ':attribute ne peut contenir que des lettres, des chiffres et des tirets.',
    'alpha_num'            => ':attribute ne peut contenir que des lettres et des chiffres.',
    'array'                => ':attribute doit &ecirc;tre un tableau.',
    'before'               => ':attribute doit &ecirc;tre une date avant :date.',
    'before_or_equal'      => ':attribute doit &ecirc;tre une date avant ou &eacute;gale &agrave; :date.',
    'between'              => [
        'numeric' => ':attribute doit être entre :min et :max.',
        'file'    => ':attribute doit être entre :min et :max kilobytes.',
        'string'  => ':attribute doit être entre :min et :max caractères.',
        'array'   => ':attribute doit avoir entre :min et :max éléments.',
    ],
    'boolean'              => ':attribute le champ doit avoir une valeur vraie ou fausse.',
    'confirmed'            => 'Le champ de confirmation :attribute ne correspond pas.',
    'date'                 => ':attribute n\'est pas une date valide.',
    'date_format'          => ':attribute ne correspond pas au format :format.',
    'different'            => ':attribute et :other doivent être différents.',
    'digits'               => ':attribute doivent avoir :digits chiffres.',
    'digits_between'       => ':attribute doivent êtres entre :min et :max chiffres.',
    'dimensions'           => ':attribute a des dimensions d\'image invalides.',
    'distinct'             => 'Le champ :attribute a une valeur en double.',
    'email'                => ':attribute doit être une adresse e-mail valide.',
    'exists'               => 'La valeur de :attribute n\'est pas valide.',
    'file'                 => ':attribute Doit être un fichier.',
    'filled'               => 'Le champ :attribute doit avoir une valeur.',
    'image'                => ':attribute doit être une image.',
    'in'                   => 'selected :attribute is invalid.',
    'in_array'             => ':attribute field does not exist in :other.',
    'integer'              => ':attribute must be an integer.',
    'ip'                   => ':attribute must be a valid IP address.',
    'json'                 => ':attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ':attribute ne peut pas être supérieure à :max.',
        'file'    => ':attribute ne peut pas être supérieure à :max kilobytes.',
        'string'  => ':attribute ne peut pas être supérieure à :max caractères.',
        'array'   => ':attribute ne peut pas avoir plus que :max éléments.',
    ],
    'mimes'                => ':attribute doit être un fichier de type: :values.',
    'mimetypes'            => ':attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => ':attribute doit être au moins :min.',
        'file'    => ':attribute doit être au moins :min kilobytes.',
        'string'  => ':attribute doit être au moins :min caractères.',
        'array'   => ':attribute doit avoir au moins :min éléments.',
    ],
    'not_in'               => 'selected :attribute is invalid.',
    'numeric'              => ':attribute doit être un nombre.',
    'present'              => 'Le champ :attribute doit être présent.',
    'regex'                => ':attribute format is invalid.',
    'required'             => ':attribute est un champ requis.',
    'required_if'          => ':attribute est requis quand :other est :value.',
    'required_unless'      => ':attribute est un champ obligatoire à moins que :other est en :values.',
    'required_with'        => ':attribute est requis quand :values is présent.',
    'required_with_all'    => ':attribute est requis quand :values est présent.',
    'required_without'     => ':attribute est requis quand :values n\'est pas présent.',
    'required_without_all' => ':attribute est requis quand aucun(e) de :values sont présent.',
    'same'                 => ':attribute et :other doivent correspondre.',
    'size'                 => [
        'numeric' => ':attribute doit être :size.',
        'file'    => ':attribute doit être :size kilobytes.',
        'string'  => ':attribute doit être :size caractères.',
        'array'   => ':attribute doit comprendre :size éléments.',
    ],
    'string'               => ':attribute doit être une chaîne de caractères.',
    'timezone'             => ':attribute doit être un fuseau horaire valide.',
    'unique'               => ':attribute a déjà été pris.',
    'uploaded'             => ':attribute n\'a pas réussi à télécharger.',
    'url'                  => 'Le format du champ :attribute n\'est pas valide.',

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
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];

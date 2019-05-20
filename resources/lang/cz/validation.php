<?php

return array(

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

    "accepted"             => ":attribute musí být přijat.",
    "active_url"           => ":attribute není platná ULR.",
    "after"                => ":attribute musí být datum po datu :date.",
    "alpha"                => ":attribute může obsahovat pouze písmena.",
    "alpha_dash"           => ":attribute může obsahovat pouze písmena, čísla a pomlčky.",
    "alpha_num"            => ":attribute může obsahovat pouze písmena a čísla.",
    "array"                => ":attribute musí být pole.",
    "before"               => ":attribute musí být datum před datem :date.",
    "between"              => array(
        "numeric" => ":attribute musí být mezi :min a :max.",
        "file"    => ":attribute musí být mezi :min a :max kB.",
        "string"  => ":attribute musí být mezi :min a :max znaků.",
        "array"   => ":attribute musí být mezi :min a :max položek.",
    ),
    "confirmed"            => "attribute confirmation does not match.",
    "date"                 => ":attribute není platné datum.",
    "date_format"          => ":attribute neodpovídá formátu :format.",
    "different"            => ":attribute a :other se musí lišit.",
    "digits"               => ":attribute musí být :digits číslic.",
    "digits_between"       => ":attribute musí být mezi :min a :max číslic.",
    "email"                => ":attribute musí být platná mailová adresa.",
    "exists"               => "Vybraný :attribute není platný.",
    "image"                => ":attribute musí být obrázek.",
    "in"                   => "Vybraný :attribute není platný.",
    "integer"              => ":attribute musí být celé číslo.",
    "ip"                   => ":attribute musí být platná IP adresa.",
    "max"                  => array(
        "numeric" => "The :attribute nesmí být větší než :max.",
        "file"    => "The :attribute nesmí být větší než :max kB.",
        "string"  => "The :attribute nesmí být větší než :max znaků.",
        "array"   => "The :attribute nesmí být větší než :max položek.",
    ),
    "mimes"                => ":attribute musí být soubor typu: :values.",
    "min"                  => array(
        "numeric" => "The :attribute musí být alespoň :min.",
        "file"    => "The :attribute musí být alespoň :min kB.",
        "string"  => "The :attribute musí být alespoň :min znaků.",
        "array"   => "The :attribute musí být alespoň :min položek.",
    ),
    "not_in"               => "Vybraný :attribute je neplatný.",
    "numeric"              => ":attribute musí být číslo.",
    "regex"                => "Formát :attribute je neplatný.",
    "required"             => ":attribute je povinný.",
    "required_if"          => ":attribute je povinný, když :other má hodnotu :value.",
    "required_with"        => ":attribute je povinný, když :values je vyplněna.",
    "required_with_all"    => ":attribute je povinný, když :values jsou vyplněny.",
    "required_without"     => ":attribute je povinný, když :values není vyplněna.",
    "required_without_all" => ":attribute je povinný, když žádný z  :values není vyplněný.",
    "same"                 => ":attribute a :other si musí odpovídat.",
    "size"                 => array(
        "numeric" => ":attribute musí být :size.",
        "file"    => ":attribute musí být :size kB.",
        "string"  => ":attribute musí být :size znaků.",
        "array"   => ":attribute musí obsahovat :size položek.",
    ),
    "unique"               => ":attribute již byl použit.",
    "url"                  => "Formát :attribute je neplatný.",

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

    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-message',
        ),
    ),

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

    'attributes' => array(),

);

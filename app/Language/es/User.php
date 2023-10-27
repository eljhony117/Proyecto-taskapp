<?php


return [
    'email'                 => ['is_unique' => 'Este correo ya esta utlizado '],

    'password_confirmation' => ['required'=> 'Porfa, confirme la contraseña',
                                'matches' => 'porfa, verifique si es la misma contraseña'
        ]
];

?>
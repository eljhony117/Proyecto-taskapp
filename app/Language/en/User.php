<?php


return [
    'email'                 => ['is_unique' => 'This email is already taken'],

    'password_confirmation' => ['required'=> 'Please, confirm the password',
                                'matches' => 'Please verify its the same password'
        ]
];

?>
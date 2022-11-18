<?php
    return array(
    'error' => 'ErrorController/index',
    '/' => 'IndexController/index',
    'dashboard' => 'DashboardController/index',
    'logout' => 'LogoutController/index',
    //Ordinateur
    'ordinateurs' => 'OrdinateursController/index',
    'ordinateurs/create' => 'OrdinateursController/create',
    'ordinateurs/update/{$1}' => 'OrdinateursController/update',
    'ordinateurs/delete/{$1}' => 'OrdinateursController/delete',
    //User
    'utilisateurs' => 'UtilisateurController/index',
    'utilisateurs/create' => 'UtilisateurController/create',
    'utilisateurs/update/{$1}' => 'UtilisateurController/update',
    'utilisateurs/delete/{$1}' => 'UtilisateurController/delete',
    //Reservation
    'reservations' => 'ReservationController/index',
    'reservations/create' => 'ReservationController/create',
    'reservations/update' => 'ReservationController/update',
    'reservations/delete' => 'ReservationController/delete',
);

?>
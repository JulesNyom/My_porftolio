<?php
class HomeController {
    public function index () {
        $experiences = [
            [
            'titre' => 'Développeur web et mobile',
            'Organisation' => 'indépendant',
            'période' => '2024 à maintenant',
            'Description' => 'Je conçois et développe des applications pour mon propre compte.',
            'skills' => 'PHP, Laravel, React, Git, Java, Sprint boot, React native.'
            ]
        ];
        require __DIR__ . '/../Views/home.php';
    }
}

// Instantiate and call the controller
$controller = new HomeController();
$controller->index();
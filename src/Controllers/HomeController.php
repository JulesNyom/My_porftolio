<?php
class HomeController {
    public function index() {
        $experiences = [
            [
                'title' => 'Web Developer',
                'company' => 'independent',
                'period' => '2024 - Present',
                'description' => 'Developed modern web applications using PHP, Laravel, React and SpringBoot.',
                'skills' => ['PHP', 'JavaScript', 'React', 'SpringBoot', 'React native', 'Tailwind CSS']
            ],
            // Add more experiences here
        ];
        
        require __DIR__ . '/../Views/home.php';
    }
}

// Instantiate and call the controller
$controller = new HomeController();
$controller->index();
<?php
// Simple user management system
class User {
    private $name;
    private $email;
    private $age;
    
    public function __construct($name, $email, $age) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function isAdult() {
        return $this->age >= 18;
    }
}

// Array of sample users
$users = [
    new User("Alice Johnson", "alice@example.com", 25),
    new User("Bob Smith", "bob@example.com", 17),
    new User("Carol Davis", "carol@example.com", 32)
];

// Function to filter adult users
function getAdultUsers($users) {
    return array_filter($users, function($user) {
        return $user->isAdult();
    });
}

// Display adult users
$adultUsers = getAdultUsers($users);
echo "<h2>Adult Users:</h2>\n";
foreach ($adultUsers as $user) {
    echo "<p>" . $user->getName() . " (" . $user->getEmail() . ")</p>\n";
}

// Generate random number and check if even
$randomNum = rand(1, 100);
echo "<p>Random number: $randomNum</p>\n";
echo "<p>Is even: " . ($randomNum % 2 == 0 ? "Yes" : "No") . "</p>\n";
?>
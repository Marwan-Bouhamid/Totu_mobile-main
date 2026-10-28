<?php
    require_once "../../backend/classes/User.php";
    require_once "../../backend/classes/Auteur.php";
    class TestUser{
        private $users;

        public function __construct() {
            $this->users=[
                new User(1, "Doe", "John", "john.doe@example.com", "password", "profile.jpg"),
                new Auteur(2, "Smith", "Jane", "jane.smith@example.com", "password", "profile.jpg", "Biography for Jane Smith")
            ];
        }

        public function testGetRoleName() {
            foreach ($this->users as $user) {
                echo "role: " . $user->getRoleName() . "\n";
            }
        }
    }

    $testUser = new TestUser();
    $testUser->testGetRoleName();
?>
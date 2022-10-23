<?php
    //  ORIENTED PROGRAMMING.
    
    /* From PHP5 onwards you can write PHP in either a procedural or object oriented way. 
    OOP consists of classes that can hold ;properties; and 'methods;. 
    Objects can be created from classes. */

    // 1. 'User': this 'Class' will contain properties.
    class User {
        // 1a. 'properties': store attributes belonging to an 'object' within a 'Class'.
        /* 1b. 'access modifiers': can be 'public', 'private' or 'protected; 
            'public': can be accessed from anywhere. 
            'private': can only be accessed from inside the Class. 
            'protected': can only be accessed from inside the class & by inheriting classes. */
        public $username;
        public $email;
        public $password;
        // 1c. 'setProperties()': method function that belongs to the 'User' class.
        function setProperties($username, $email, $password) {
            $this->username = $username; 
            $this->email = $email; 
            $this->password = $password; 
        }
        // 1d. 'outputProperties()': method function that belongs to the 'User' class.
        function outputProperties() {
            return "$this->username ~ $this->email ~ $this->password"; 
        }
    }
    // 1e. 'object': instantiate 2 instances of the object.
    $user1 = new User();
    $user2 = new User();
    // 1f. 'properties': define each property for the instance.
    $user1->username = 'jimmy-buck'; 
    $user1->email = 'jimmy@buck.com'; 
    $user1->password = 'beetroot';
    // 1g. 'setProperties()': define each property using the 'setProperties' method.
    $user2->setProperties('no-name', 'no-name@no-where.com', 'no-password');
    // 1h. '$user1': output user properties using 'var_dump', 'echo' & 'method'.
    var_dump($user1);
    echo '<hr>' . $user1->username;
    echo '<hr>' . $user1->outputProperties() . '<hr>';
    // 1i. '$user2': output user properties using 'var_dump', 'echo' & 'method'.
    var_dump($user2);
    echo '<hr>' . $user2->username;
    echo '<hr>' . $user2->outputProperties() . '<hr>';

    // 2. 'Staff': this 'Class' will contain properties.
    class Staff {
        // 2a. 'properties': store attributes belonging to an 'object' within a 'Class'.
        /* 2b. 'access modifiers': can be 'public', 'private' or 'protected; 
            'public': can be accessed from anywhere. 
            'private': can only be accessed from inside the Class. 
            'protected': can only be accessed from inside the class & by inheriting classes. */
        // 2c. 'constructor()': is a particular type of method that runs when the object instance is created.
        public function __construct($staffName, $email, $password) {
            $this->staffName = $staffName; 
            $this->email = $email; 
            $this->password = $password;
        }
        // 2d. 'outputProperties()': method function that belongs to the 'User' class.
        function outputProperties() {
            return "$this->staffName ~ $this->email ~ $this->password"; 
        }
    }
    // 2e. 'object': instantiate 2 instances of the object while including the properties in 1 go.
    $staff1 = new Staff('jimmy-buck', 'jimmy@buck.com', 'beetroot');
    $staff2 = new Staff('no-name', 'no-name@no-where.com', 'no-password');
    // 2f. '$staff1': output staff properties using 'var_dump', 'echo' & 'method'.
    var_dump($staff1);
    echo '<hr>' . $staff1->staffName;
    echo '<hr>' . $staff1->outputProperties() . '<hr>';
    // 2g. '$staff2': output staff properties using 'var_dump', 'echo' & 'method'.
    var_dump($staff2);
    echo '<hr>' . $staff2->staffName;
    echo '<hr>' . $staff2->outputProperties() . '<hr>';

    // 3. 'inheritance': a class can inherit properties from another class using the 'extends' keyword.
    class Employee extends Staff {
        public function __construct($staffName, $email, $password, $title) {
            // 3a. 'parent::': inherits the properties from the parent class.
            parent::__construct($staffName, $email, $password);
            $this->title = $title;
        }
        // 3b. 'outputTitle': outputs an employee's 'title'.
        public function outputTitle() {
            return "$this->title . <hr>";
        }
    }
    // 3c. 'object': instantiate an instance of the a 'Employee' object.
    $employee1 = new Employee('Benny', 'benny@easteregg.com', 'bunny-hop', 'Chief Egg Tracker');
    // 3d. '$staff1': output staff properties using 'var_dump', 'echo' & 'method'.
    var_dump($employee1);
    echo '<hr>' . $employee1->staffName;
    echo '<hr>' . $employee1->outputProperties() . $employee1->title . '<hr>';
?>
<?php
    namespace Roles;

    abstract class UserAbstract {
        protected $id;
        protected $username;
        protected $hash_password;
        protected $password;
        protected $email;
        protected $phone_number;
        protected $user_type;

        abstract public function signIn();
    }
?>
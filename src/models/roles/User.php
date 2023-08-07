<?php
    namespace Roles;

    use Roles\UserAbstract;

    class User extends UserAbstract {
        public function signIn() {
            echo '<pre>';
            var_dump($_POST);
            echo '</pre>';
        }
    }
?>
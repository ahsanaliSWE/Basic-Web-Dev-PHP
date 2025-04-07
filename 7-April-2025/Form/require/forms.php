<?php
    class Forms{

        private $action;
        private $method;

        public function set_action($action){
            $this->action = $action;
        }

        public function set_method($method){
            $this->method = $method;
        }

        public function login(){
             ?>
                <fieldset>
                    <legend>Login</legend>
                    <form method="<?php echo $this->method; ?>" action="<?php echo $this->action; ?>">
                        <table>
                            <tr>
                                <td>Email:</td>
                                <td><input type="email" name="email"></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password"name="password"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="Login" value="Login">
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
             <?php
        }

        public function signUp(){
            ?>
                <fieldset>
                    <legend>SignUp</legend>
                    <form method="<?php echo $this->method; ?>" action="<?php echo $this->action; ?>">
                        <table>
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" name="name"></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><input type="email" name="email"></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password"name="password"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="Signup" value="Sign Up">
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            <?php
        }

        public function forgetPassword(){
            ?>
                <fieldset>
                    <legend>Forget Password</legend>
                    <form method="<?php echo $this->method; ?>" action="<?php echo $this->action; ?>">
                        <table>
                            <tr>
                                <td>Email:</td>
                                <td><input type="email" name="email"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="ForgetPassword" value="Forget Password?">
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            <?php
        }

        public function changePassword(){
            ?>
                <fieldset>
                    <legend>Change Password</legend>
                    <form method="<?php echo $this->method; ?>" action="<?php echo $this->action; ?>">
                        <table>
                            <tr>
                                <td>Old Password:</td>
                                <td><input type="password" name="old_password"></td>
                            </tr>
                            <tr>
                                <td>New Password:</td>
                                <td><input type="password" name="new_password"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="ChangePassword" value="Change Password">
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            <?php
        }

    }

?>

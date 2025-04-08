<?php
	class Forms
	{
		public $action	=	NULL;
		public $method	=	NULL;
		
		public function set_action($action)
		{
			$this->action = $action;
		}
		
		public function set_method($method)
		{
			$this->method = $method;
		}
		
		public function get_action()
		{
			return $this->action;
		}
		
		public function get_method()
		{
			return $this->method;
		}
		
		public function login()
		{
			?>
				<fieldset style="width:400px; height:auto">
					<legend>Login Here!...</legend>
					<form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>">
						<table>
							<tr>
								<td><b>Email: </b></td>
								<td><input type="email" name="email" /></td>
							</tr>
							<tr>
								<td><b>Password: </b></td>
								<td><input type="password" name="password" /></td>
							</tr>
							<tr>
								<td colspan="2" align="center">
									<input type="submit" name="login" value="Login" />
								</td>
							</tr>
						</table>
					</form>
				</fieldset>
			<?php
		}

		public function signUp()
		{
			?>
				<fieldset style="width:400px; height:auto">
					<legend>SignUp Here!...</legend>
					<form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>">
						<table>
							<tr>
								<td><b>First Name: </b></td>
								<td><input type="text" name="first_name" /></td>
							</tr>
							<tr>
								<td><b>Last Name: </b></td>
								<td><input type="text" name="last_name" /></td>
							</tr>
							<tr>
								<td><b>Email: </b></td>
								<td><input type="email" name="email" /></td>
							</tr>
							<tr>
								<td><b>Password: </b></td>
								<td><input type="password" name="password" /></td>
							</tr>
							<tr>
								<td><b>Gender: </b></td>
								<td>
									Male <input type="radio" name="gender" value="Male" />
									Female <input type="radio" name="gender" value="Female" />
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center">
									<input type="submit" name="signUp" value="Sign Up" />
								</td>
							</tr>
						</table>
					</form>
				</fieldset>
			<?php
		}

		public function changePassword()
		{
			?>
				<fieldset style="width:400px; height:auto">
					<legend>Change Password!...</legend>
					<form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>">
						<table>
							<tr>
                                <td>Email:</td>
                                <td><input type="email" name="email"></td>
                            </tr>
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
		
		public function forgetPassword()
		{
			?>
				<fieldset style="width:400px; height:auto">
					<legend>Forget Password!...</legend>
					<form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>">
						<table>
                            <tr>
                                <td>Email:</td>
                                <td><input type="email" name="email"></td>
                            </tr>
							<tr>
                                <td>New Password:</td>
                                <td><input type="password" name="password"></td>
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
	}
?>





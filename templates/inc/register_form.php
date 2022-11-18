<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create new user</title>
</head>
<body>

		<h1>Register as a new member</h1>
		<form action="/?page=add_user" method="post">

<p>
			<label for="firstName">First Name:</label>
			<input type="text" name="first_name" id="firstName">
			</p>


<p>
			<label for="lastName">Last Name:</label>
			<input type="text" name="last_name" id="lastName">
			</p>



<p>
			<label for="emailAddress">Email Address:</label>
			<input type="email" name="email" id="emailAddress">
			</p>

            <p>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </p>

			<input type="submit" value="Submit">
		</form>

</body>
</html>


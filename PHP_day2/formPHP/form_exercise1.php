<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- - Exercise : 
	
		-- Part 1 :
	   		Create a page:
	        - signin.php: User registration page, with the following fields:
	            - Name
	            - First name
	            - E-mail
	            - Password
	            - Confirmation of password
	            - Checkbox "Subscribe to the newsletter"

		-- Part 2 :
			1. If we arrive on the page without the form being submitted, we will post the form, otherwise we will display the summary.

			2. Add validators on the different fields of the form:
				- The name and the first name are mandatory.
				- The e-mail must be between 8 and 50 characters long and should contains @
				- The fields "Password" and "Confirmation" must be identical and have at least 8 characters

			Bonus: Make the form values ​​reappear with each submission, in case of error.
    */ -->

    <!-- Part 1 -->

    <br>
    <br>

<h2>Beautiful form</h2>


    <form action="signin.php" method="POST">
            <input type="text" name="firstName" placeholder="Give your first name" 
            value="<?php echo $firstName ?>">
            <br>
            <input type="text" name="name" placeholder="Give your last name"  
            value="<?php echo $name ?>">
            <br>
            <input type="text" name="email" placeholder="Email">
            <br>
            <input type="password" name="password" placeholder="password">
            <br>
            <input type="submit" value="SEND">
            <input type="checkbox" id="scales" name="scales"
         checked>
         <label for="scales">Subscribe to the newsletter"</label>
         <br>
           
    </form>










</body>
</html>



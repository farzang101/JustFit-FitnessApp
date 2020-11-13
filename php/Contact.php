<!DOCTYPE html>
<html lang="">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/Contact.css">
        <link rel="stylesheet" href="../css/HeaderFooter.css">
    </head>
            <br><br><br><br>

    <body>
        <?php include ('../html/Header.html'); ?>
    
    
    
            

	<!-- Header Begin -->
	


        <form action="" method="POST">
        

    <center>

        <fieldset>
        <legend>Contact US</legend>
        <div class="container">
        <table>
        <tr>
        <td>
        <label for="txtName">Name</label>

        <br>

        <input type="text" id="txtName" class="txtbox" required placeholder="Enter Name" />

        </td>

        </tr>

        <tr>

        <td>

        <label for="txtContactNumber">Mobile</label>

        <br>

        <input type="text" id="txtContactNumber" class="txtbox" required placeholder="Enter Contact Number" />

        </td>

        </tr>

        <tr>

        <td>

        <label for="txtEmail">Email</label>

        <br>

        <input type="Email" id="txtEmail" class="txtbox" placeholder="Enter Email" required/>

        </td>

        </tr>

        <tr>

        <td>

        <label for="txtMessage">Message</label>

        <br>

        <textarea id="txtMessage" class="txtbox" required placeholder="Enter Message" rows="4" cols="50"></textarea>

        </td>

        </tr>

        <tr>

        <td colspan="2" align="center">

        <input type="Submit" id="btnSubmit" class="btn" />

        <input type="reset" id="reset" class="btn" />

        </td>

        </tr>         

        </table>

        </div>

        </fieldset>

        </center>

        </form>

        <!-- footer for the page -->

        <div class="footer">

        <p>&copy; CPSC-362 Group F - All Rights Reserved-2020</p>

        </div>

                <?php include ('../html/Footer.html'); ?>

</body>

</html>

   

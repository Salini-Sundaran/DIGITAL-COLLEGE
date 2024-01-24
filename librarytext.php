<html>
<head>
<style>
body
{
 	background-size:cover;
	background-repeat:no-repeat;
}
li a{
	color:white;
}
</style>
<body style="background-image: url('images/2.jpeg');">
<div style="
    background-color: #000000b8;
    color: white;
    list-style: none;
">
<title>library text</title>
</head>
<body>
<td><align="left">
<li><a href="staffhome.php">Home</a></li>
<li><a href="librarytext.php">Library Text</a></li>
<li><a href="vlib.php">View Text</a></li>
<li><a href="vstaff.php">My Profile</a></li>
<li><a href="index.php">Log Out</a></li>

<center>
<h1>Library Text</h1>



                    <form action="libaction.php" onSubmit=" return check()">
                        <table>
                            <tr>
                                <td>Department:</td>
                                <td><select name="t1" id="t1" required="yes">
                                        <option value="BCA">BCA</option>
                                        <option value="BSCIT">BSC.IT</option>
                                        <option value="BBA">BBA</option>
                                        <option value="BCOM">B.COM</option>
                                    </select></td>
                            </tr>
                            <tr>

                                <td>Semester:</td>
                                <td><select name="t4" id="t4" required="yes">
                                        <option value="0">-----Select----</option>
                                        <option value="Sem1">Sem1</option>
                                        <option value="Sem2">Sem2</option>
                                        <option value="Sem3">Sem3</option>
                                        <option value="Sem4">Sem4</option>
                                        <option value="Sem5">Sem5</option>
                                        <option value="Sem6">Sem6</option>
                                    </select></td>
<tr>
                                <td>Subject:</td>
                                <td><input type="text" name="t2" id="t2" required="yes"/></td>
                            </tr>
<tr>
                                <td>Pdf:</td>
                                <td><input type="file" name="file" id="file" required="yes"/></td>
                            </tr>	
<tr>
                                <td>Date:</td>
                                <td><input type="date" name="t3" id="t3" required="yes"/></td>
								
                            </tr>
							<tr>
							<td align="center" colspan="3"><input type="submit" name="submit" value="submit"></td></tr>
</table>
</form>
</center>
</body>
</html>	
<script type="text/Javascript">
            var numbers=/^[0-9]+$/;
            var letters=/^[a-z A-Z]+$/;
            function check(){
                if(!document.getElementById("t2").value.match(letters))
				 {
               
                
            alert("Please input alphabet characters only,enter Subject name")
                }
else
                    {
                        return true;
                    }
                  
			}
           
        </script>
				
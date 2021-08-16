<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>event</title>
</head>
<body  background= "gallery.jpg" >
    <font size="4"; color="white">
     <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
   
<center>
    
    
    
    <table border="5">
        <tr>
            <td>
                <img src="italian.jpg" width="250" height="250">
            </td>
            <td>
                <img src="chinese.jpg" width="250" height="250">
            </td>
            <td>
                <img src="indian.jpg" width="250" height="250">
            </td>

        
        
        <tr style="font-family: 'Comic Sans MS'; color: white; font-size : 20px;">
            <td> <input type="radio" name="food" id="Italian" value="Italian">
                <label for="Italian">Italian</label>

            </td>
            <td>
            <input type="radio" name="food" id="Chinese" value="Chinese">
                <label for="Chinese">Chinese</label> 
            </td>
            <td>
                <input type="radio" name="food" id="Indian" value="Indian">
                <label for="Indian">Indian</label> 
            </td>
            

            
            

        </tr>

        
    </table>
    <br>
    

    
    </center>
    <br>
    
</form>
</font>
    </body>
</html>
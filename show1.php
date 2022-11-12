<?php 
$con=mysqli_connect("localhost","root","","ujjain");
?>
<html>
<head>
    
    
    <title>show table</title>
    
    
    
    </head>
<body>
    
        <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Email</td>
            <td>City</td>
            </tr>
        
        <?php
              $q=mysqli_query($con,"select * from student1");
              while($res=mysqli_fetch_assoc($q)){
              ?>    
              
         <tr>
             <td><?php echo $res["Id"]; ?> </td>
             <td><?php echo $res["name"]; ?> </td>
             <td><?php echo $res["phone"]; ?></td>
             <td><?php echo $res["email"]; ?> </td>
             <td><?php echo $res["city"]; ?> </td>
             <?php }    ?>
			  
			  </tr>
         
        </table>
                 
    
    
    
    </body>









</html>
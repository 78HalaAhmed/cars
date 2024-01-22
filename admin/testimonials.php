<?php
include_once("includes/logged.php");
 
 try{
    include_once("includes/conn.php");
    $sql="SELECT * FROM `testimonials`";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Testimonials</title>
    <link rel="stylesheet" href="cars.css">
</head>
<body>
    <body>
        <div id="wrapper">
         <h1>Testimonials List</h1>
         
         <table id="keywords" cellspacing="0" cellpadding="0">
           <thead>
             <tr>
               <th><span>Name</span></th>
               <th><span>Position</span></th>
               <th><span>Delete</span></th>
               <th><span>Update</span></th>
             </tr>
           </thead>
           <tbody>
            <?php
            foreach($stmt->fetchAll()as $row){
                $id=$row["id"];
               $name=$row["name"];
               $Position=$row["position"];

           ?>
             <tr>
               <td class="lalign"><?php echo $name ?></td>
               <td><?php echo $Position ?></td>
               <td><a href="delete.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure you want to delete?')"><img src="../img/delete.jpg" alt=""></a></td>
               <td><a href="UpdateTestimonials.php?id=<?php echo $id ?>"><img src="../img/update.jpg" alt=""></a></td>
            </tr>
             <?php
             }
             ?>
           </tbody>
         </table>
        </div> 
       </body>
</body>
</html>

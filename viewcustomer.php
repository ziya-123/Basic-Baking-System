

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <title>Display</title>
</head>
<style>
.center-div{
    margin:40px;
    background:#FAEBD7;
    border-radius:20px;
    
}
h3{
    color:white;
    text-align:center;
}
h1{
    text-align:center;
    text-transform:capitalize;
   color:maroon;
   padding:10px;
}
.container{
    padding:30px;
    background: -webkit-linear-gradient(left,#A52A2A ,  #200dcfc0 );
    border-radius:20px;
}
th{
    padding:20px;
}
td{
    padding:10px;
}
@media only screen and (max-width: 640px) and (min-width:360px) {
 
.container{
    padding:30px;
    background: -webkit-linear-gradient(left,#A52A2A ,  #200dcfc0 );
    border-radius:20px;
}
.center-div{
    margin:10px;
    background:#FAEBD7;
    background: #FAEBD7;
    border-radius:20px;
    
}
h1{
    padding:10px;
}

}
@media only screen and (max-width: 678px) and (min-width:425px) {
    .container{
    padding:30px;
    background: -webkit-linear-gradient(left,#A52A2A ,  #200dcfc0 );
    border-radius:20px;
}
.center-div{
    margin:10px;
    background:#FAEBD7;
    border-radius:20px;
    
}
h1{
    padding:10px;
}
}
@media only screen and (max-width: 570px) and (min-width:320px) {
    .container{
    padding:10px;
    background: -webkit-linear-gradient(left,#A52A2A ,  #200dcfc0 );
    border-radius:20px;
} 
.center-div{
    margin:10px;
    background:#FAEBD7;
    border-radius:20px;
    
} 
h1{
    padding:10px;
}  
}
a{
    color:white;
}
</style>
<body>
<h1>View Customer</h1>
    
    <div class="container">
    <h3>TSF</h3>
    <div class="center-div">
    <div class="table-responsive">
    <table>
    <thead>
    <th>Name</th>
    <th>Accountno</th>
    <th>Amount</th>
    

    </thead>
    <tbody>
    <?php
include "connection.php";

$selectquery="select * from  bankingtable";
$query=mysqli_query($con,$selectquery);
$num=mysqli_num_rows($query);
while($res=mysqli_fetch_array($query)){
    ?>
    <tr>
    <td><?php echo $res['Name'] ?></td>
    <td><?php echo $res['Accountno'] ?></td>
    <td><?php echo $res['Amount'] ?></td>
    
    
    </tr>
    <?php
}

?>
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    
</body>
</html>

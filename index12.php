
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            background: radial-gradient(circle farthest-side,rgb(173, 114, 173),blueviolet);
        }
        #topbar{
    
    background: linear-gradient(rgb(215, 186, 241),rgb(233, 6, 165));
    word-spacing: 25px;
    font-size: 20px;
    color: white;
    padding-top: 20px;
    padding-bottom: 20px;
    margin: 16px 12px 0 16px;
        }
        .href3{
    color: white;
    outline: none;
    text-decoration: none;
}

h1{
    font-size: 55px;
    text-align: center;
}
p{
    text-align: center;
    font-size: 25px;
}
#btn1{
            margin-left: 12px;
            margin-top: 25px;
            background-color: #800080;
            font-size: 20px;
			
            border-radius:20px;
            padding-top: 16px;
            padding-bottom: 16px;
            padding-left: 30px;
            padding-right: 30px;
            color: white;
    }
    .span{
    
    cursor: pointer;
    word-spacing: 15px;
}
form{
    text-align: center;
}
.in{
    width: 26%;
    height: 30px;
}
#btn1:hover{
    color: tomato;
}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" >TSF Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="basicbanking.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewcustomer.php">Transactions  </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index12.php">Money Transfer</a>
        </li>
        
		 
      
      </ul>
    </div>
  </div>
</nav>


    <form method="POST">
        <p class="para">Sender</p>
        <input class="in"type="text" name="Name" placeholder="Enter Name Here" required>
        <p class="para">Receiver</p>
        <input class="in" type="number" name="Accountno" placeholder="Enter account no" required>
        <p class="para">Amount</p>
        <input class="in" type="text" name="Amount" placeholder="Enter Amount Here" required><br>
        <input id="btn1"  type="submit" name="submit"  value="Submit"/>
        
    </form>
</body>
</html>
<?php
include "connection.php";
if(isset($_POST['submit'])){
    $name=$_POST['Name'];
    $accountno=$_POST['Accountno'];
    $amount=$_POST['Amount'];
	$insert=" INSERT INTO bankingtable(Name, Accountno, Amount) VALUES ('$name','$accountno','$amount')";
	$res=mysqli_query($con,$insert);
	if($res)
              {
            ?>
            <script>
            alert("Transaction is  succesfully");
            </script>
            <?php
             }
             else
             {
             ?>
            <script>
            alert("Transaction is not done");
           </script>
            <?php
       
       }
    
	}


?>
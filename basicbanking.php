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
    padding-left: 12px;
    padding-right: 12px;
    margin: 16px 12px 0 16px;
}
.span{
    
    cursor: pointer;
    word-spacing: 15px;
}

h1{
    text-align: right;
    padding-top: 50px;
    color: white;
    padding-right: 50px;
}
p{
   text-align: right;
    word-spacing: 5px;
    color: white;
    font-size: 28px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    padding-right: 50px;
}
.img1{
    width: 500px;
    height: 250px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    opacity: 0.7;
    
}
.navbar-brand{
    color: white;
    outline: none;
    text-decoration: none;
}
.navbar-brand:hover{
    color:tomato;
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
                <a class="nav-link "  href="basicbanking.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="viewcustomer.php">Transactions  </a>
                
              </li>
              <li class="nav-item">
                  
                <a class="nav-link" href="index12.php">Money Transfer</a>
              </li>
              <li class="nav-item">
                  
                  <a class="nav-link" href="bankabout.php">About Us</a>
                </li>
              
               
            
            </ul>
          </div>
        </div>
      </nav>
      <div id="header">
    <h1>WELCOME TO TSF BANK</h1>
        <P>A Customer is the most<br>important visitor<br>on our premises</P>
    </div>
    <div id="img">
    <img  class="img1"src="https://www.softwaresuggest.com/blog/wp-content/uploads/2019/02/realtime-banking.png">
    </div>
</body>
</html>




<!DOCTYPE html>
<html>
<head>
    <title>My Tech-Store </title>
    
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="mytechstoreregis.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="header">
  <div class="container">
   <div class="row">
         <div class="col">
        
         <img src="user4.png" id="userimg">
         <h2>Registration Form</h2> 
         <form action="validate.php"  method="post" class="loginform">
               <div class="form-group">
                    
                        <input type="text" class="form-control" placeholder="Enter Your Name" name="username" >
                 </div>
                <div class="form-group">
                    
                        <input type="email" class="form-control" placeholder="Enter Email Address" name="email" >
                 </div>

                 <div class="form-group">
                    <input type="number" class="form-control" placeholder="Enter Mobile Number"  name="number" >
                 </div>
                 <div class="form-group">
                         <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password" >
                         <i class="fa fa-lock" aria-hidden="true" onclick="Toggle()" id="garbage" ></i> 
                                 
                  </div>
                  <div class="form-group">
                   <button type="submit" class="btn btn-primary loginbutton" name="submit">SignUp</button>
                  </div>
          </form>

          <h5>Already  have account? Login Now!</h5>


         <div>
      </div>
  </div>
</div>
  <script> 
    // Change the type of input to password or text 
        function Toggle() { 

          //  if(document.getElementById(iconID).className=="fa fa-lock"){
           //    document.getElementById(iconID).className = "fa fa-unlock";
               
              
            var temp = document.getElementById("pwd"); 
            if  (temp.type === "password") { 
                temp.type = "text"; 
                if(document.getElementById("garbage").className=="fa fa-lock"){
                      document.getElementById("garbage").className = "fa fa-unlock";}
               

            } 
            else { 
                temp.type = "password"; 
                if(document.getElementById("garbage").className=="fa fa-unlock"){
                      document.getElementById("garbage").className = "fa fa-lock";}
              
            } 
        } 

      


</script> 


 


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
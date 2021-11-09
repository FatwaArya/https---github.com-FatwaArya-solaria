
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./register.css"> -->
    <title>Register</title>
    <style>
      a{
    text-decoration: none;
}
    </style>
    <link rel="icon" href="/assets/4x/space.png" type = "image/x-icon">

</head>
<body>
    <section class="vh-100" style=" background-image: url('../assets/hero.svg') ;
    
   
    
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: cover;
    background-color: #040D21;
    
    ">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="w-500">
        <div class="card card text-white bg-dark mb-3" style="border-radius: 25px;">
          <div class="p" >
            <div class="d-flex justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-2 mx-1 mx-md-4 mt-4" >Solaria!</p>
              

                <form action="register.post.php"  method="POST" >

                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Your Username</label>
                      <input type="text" id="form3Example3c" class="form-control" name="username"/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Your name</label>
                      <input type="text" id="form3Example3c" class="form-control" name="name"/>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Your Email</label>
                      <input type="email" id="form3Example3c" class="form-control" name="email"/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Password</label>
                      <input type="password" id="form3Example4c" class="form-control" name="password"/>
                    </div>
                  </div>





                    <div class="d-flex justify-content-sm-between mx-3 pb-4">
                      <button type="submit" class=" btn btn-primary btn-m btn btn-dark btn-lg  border border-info "  >Register</button>
                      <p class="or"> </p>
                      <a href="login.php" class="d-inline-flex text-decoration-none">Already have an account? login here</a>
                      
                    </div>



                </form>

              </div>
           
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<h1 style="display: flex;justify-content: center;align-items: center;color: #ff8b04;">Applied Schemes</h1>
<!DOCTYPE html>
<html>

<head>
    <title>HORIZON</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+SC&family=Dancing+Script:wght@500&family=Oswald&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">

    <!-- Google Fonts links     -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<style>
    .nav-link {
        color: #ff8b04 !important;
    }
    .nav-item {
        color: #ff8b04 !important;
    }

    .nav-item :hover {
        color: #ff2a00 !important;
    }
</style>

<body>
    <header id="home" bg-warning>
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 border-bottom fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand fs-2" href="index.php"><span class="text-warning cursive">HORIZON </span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center">
                        <li class="nav-item">
                            <a class="nav-link active " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#about">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login2.php">Login</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="apply.php">Apply</a>

                        </li>


                </div>
            </div>
        </nav>
    </header>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


<head>
<title>Booking Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="C:\Users\91877\Desktop\Pathology1\booking .css">
<style>
      body {
  font-family: Arial;
  font-size: 16px;
  padding: 6px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}



.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 100%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
   max-width:500px;
margin:auto;
}

.container1 {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
   max-width:600px;
margin:auto;
}
input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=datetime-local] {
  width: 100%;
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}


input[type=email],textarea, select {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type=number] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=time] {
  width: 100%;
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=date] {
  width: 100%;
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}



.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}





/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 400px) {
  .row {
    flex-direction: column;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<div class="row">
  <div class="col-75">
    <div class="container">
      <center><h2>Application form </h2></center>
      <form  action="register.php
      " method="POST">
        <div class="row">
          <div class="col-50">
            <input type="text" id="fname" required  name="name" placeholder="Name" required>  
          </div>
         </div>
         <div class="row">
            <div class="col-50">
              <input type="text" id="gender" required  name="gender" placeholder="Gender" required>  
            </div>
            <div class="row">
                <div class="col-50">
                  <input type="number" id="age" name="age" required placeholder="Age" required>  
                </div>
                </div>

              <div class="row">
            <div class="col-50">
                <input type="email" name="email" required placeholder="Email" required>
            </div>
            </div>
            <div class="col-50">
               <input type="number" name="phone" required placeholder="Phone" required>
           </div>
           </div>
            <div class="row">
              <div class="col-50">
                <input type="text" id="address" name="address" placeholder="Address">
              </div>     
         </div>
         <div class="row">
             <div class="col-50">
                 <input type="text" name="city" required placeholder="City">
             </div>
             <div class="col-50">
                <input type="text" name="state" required placeholder="State">
            </div>
         </div>
         <div class="row">
            <div class="col-50">
                <input type="number" name="pin_code" required placeholder="Pin Code">
                </div>
            <div class="row">
                <div class="col-50">
                    <input type="text" name="country" required placeholder="Country">
                </div>
                </div>

                      
                <div class="row">
                    <div class="col-50">
                        <input type="date" name="date" required placeholder="Date" required>
                        </div>
                       <div><h4>Prefered Slot</h4>
                        <select name="prefered_slot" class="form-control" required placeholder="">
                            <option value="7:00 - 8:00">7:00 - 8:00</option>
                            <option value="7:30 - 8:30">7:30 - 8:30</option>
                            <option value="8:00 - 9:00">8:00 - 9:00</option>
                            <option value="8:30 - 9:30">8:30 - 9:30</option>
                            <option value="9:00 - 10:00">9:00 - 10:00</option>
                            <option value="9:30 - 10:30">9:30 - 10:30</option>
                            <option value="10:00 - 11:00">10:00 - 11:00</option>
                            <option value="10:30 - 11:30">10:30 - 11:30</option>
                            <option value="11:00 - 12:00">11:00 - 12:00</option>
                            <option value="11:30 - 12:30">11:30 - 12:30</option>
                            <option value="12:00 - 13:00">12:00 - 13:00</option>
                            <option value="12:30 - 13:30">12:30 - 13:30</option>
                            <option value="13:00 - 14:00">13:00 - 14:00</option>
                            <option value="13:30 - 14:30">13:30 - 14:30</option>
                            <option value="14:00 - 15:00">14:00 - 15:00</option>
                            <option value="14:30 - 15:30">14:30 - 15:30</option>
                            <option value="15:00 - 16:00">15:00 - 16:00</option>
                            <option value="15:30 - 16:30">15:30 - 16:30</option>
                            <option value="16:00 - 17:00">16:00 - 17:00</option>
                            
                            </select>


                            </div>

                            <div><h4>Prefered  Test</h4>
                                <select name="prefered_Test" class="form-control" required placeholder="" required>
                                    <option value="Blood_Test">Blood Test</option>
                                    <option value="Thyroid">Thyroid</option>
                                    <option value="Heart">Kidney Function Test</option>
                                    <option value="Bones">Liver Function test</option>
                                    <option value="Kindey_function_test">Cardic profile test</option>
                                    <option value="Immunity">Diabetic profile basic </option>
                            </div>
        <button><input type="submit" onclick="alert('Your Test has been booked Successfully !')" value="Book Now" class="btn"><div class="col-12" ></button> 
                            
          
           </a>
      </div>
       </div>
       </div>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>




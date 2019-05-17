
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
    <link rel="stylesheet" href="http://www.zeuscodes.in/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://www.zeuscodes.in/assets/css/public.min.css">
    <title>Registration</title>

    <style>   .modal {
   display: none;
   position: fixed;
   z-index: 1;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: auto;
   background-color: rgb(0,0,0);
   background-color: rgba(0,0,0,0.4);
   padding-top: 60px;
}


.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button (x) */

.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */ 

.animate {
 -webkit-animation: animatezoom 0.6s;
 animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
 from {-webkit-transform: scale(0)}
 to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel
button on extra small screens */ 

@media screen and(max-width: 300px){
    span.psw {
       display: block;
       float: none;
    }
  </style>

</head>
<body>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139137570-1"></script>

  
    <div id="loader-container">
    <div class="spinner">
    <div class="dot1"></div>
    <div class="dot2"></div>
    </div>
    </div>
    
    <header id="public-header">
        <nav id="nav1" class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="12.png" width="110" height="110"></a>
            <button class="navbar-toggler" id="open-mob-nav" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div  class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#/">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                     <li class="nav-item">
                        <a onclick="document.getElementById('id01')
                        .style.display='block'" style="width:auto;">Register</a> 
                    </li>
                </ul>
            </div>
        </nav>
    </header><main class="page-content" id="work">
    <section id="work-header">
        <div class="container text-center">
            <h1 class="section-title">Registration</h1>
        </div>
    </section>
    <section id="process">
        <div class="container">
            <div id="id01" class="modal">

        <form class="modal-content animate"
        action="action_page.php">
        <div class="imgcontainer">
             <span onclick="document
        .getElementById('id01')

        .style.display='none'"
         class="close" title="Close Modal">
         &times;</span>

       <table align="center" cellpadding="10">
         <tr>
           <td>First Name:</td>
           <td> <input type="text" id="name" name="name" placeholder="Enter your first name"></td>
         </tr>
           <tr>
             <td>Last Name:</td>
             <td><input type="text" id="name" name="name" placeholder="Enter your last name"></td>
           </tr>
             <tr>
               <td>Date of Birth:</td>
               <td><input type="date" id="name" name="date"></td>
             </tr>
               <tr>
                 <td>Email:</td>
                  <td><input type="text" id="name" name="name" placeholder="Enter valid email"></td>
               </tr>
                 <tr>
                   <td>Password:</td>
                   <td><input type="password" id="name" name="pass" placeholder="Enter Password"></td>
                 </tr>
                  <tr>
                    <td>Re-enter Password:</td>
                     <td><input type="password" id="name" name="pass" placeholder="Enter Password"></td>
                  </tr>
                   <tr>
                     <td>Mobile Number</td>
                     <td><input type="number" id="name" name="number"></td>
                   </tr>
                    <tr>
                      <td>Gender:</td>
                      <td> Male<input type="radio" name="male">  Female<input type="radio" name="female"></td>
                    </tr>
                      <tr>
                        <td>Address:</td>
                        <td><textarea rows="6" cols="25"></textarea></td>
                      </tr>
                         <tr>
                           <td>City:</td>
                           <td><input type="text" id="name" name="city" placeholder="Enter City"></td>
                         </tr>
                         <tr>
                           <td>Course:</td>
                           <td><input type="text" id="name" name="course" placeholder="Enter course"></td>
                         </tr>
                         <tr>
                           <td align="center" colspan="2">
                             <input type="submit" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="reset">
                           </td>
                         </tr>
<style>
a.btn.btn-link{background-color: yellow; border-radius: 0; cursor: pointer;} .card-header{background-color: yellow; }</style>
</footer>
<script src="http://www.zeuscodes.in/assets/js/jquery.min.js"></script>
<script src="http://www.zeuscodes.in/assets/js/bootstrap.min.js"></script>
<script src="http://www.zeuscodes.in/assets/js/public.min.js"></script>
 <script>

// Get the modal 

var modal = document.getElementById
('id01');

// When the user clicks anywhere
outside of the modal, close it 

window.onclick = function(event) {
    if (event.target == modal) {
     modal.style.display = "none";
    }
}
</script>
</body>
</html>
@extends('layout.layout')
@section('title')
	Profile
@endsection

@section('content')

	{{-- <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5>Name: {{$name}}</h5>
     <h5>Age: {{$age}}</h5>
      <h5>Course: {{$course}}</h5>
          <h5>Section: {{$section}}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div> --}}

  <!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: poppins;
            }
            #about-section {
                width: 100%;
                height: auto;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 80px 12%;
            }
            .about-left img{
                width: 450px;
                height: auto;
                transform: translateY(50px);
            }
            .about-right {
                width: 54%;
            }

            .about-right ul li {
                display: flex;
                align-items: center;
            }

            .about-right h1 {
                color: #e74d06;
                font-size: 37px;
                margin-bottom: 5px;
            }

            .about-right p {
                color: #444;
                line-height: 26px;
                font-size: 15px;
            }

            .about-right .address {
                margin: 25px 0;
            }

            .about-right .address ul li {
                margin-bottom: 5px;
            }

            .address .address-logo {
                margin-right: 15px;
                color: #e74d06;
            }

            .address .saprater {
                margin: 0 35px;
            }

            .about-right .expertise ul {
                width: 80%;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .expertise h3 {
                margin-bottom: 10px;
            }

            .expertise .expertise-logo {
                font-size: 19px;
                margin-right: 10px;
                color: #e74d06;
            }

            .card{
              margin-top: 50px;
              width: 400px;
              background: #fff;
              padding: 40px;
              border-radius: 15px;
              text-align: center;
              color: #333;
            }
            .card h1{
              font-weight: 500;
              color: #000;
            }
            .card img{
              width: 180px;
              height: 180px;
              border-radius: 50%;
              margin-top: 40px;
              margin-bottom: 30px;
            }
            label{
              display: block;
              width: 200px;
              background: #e3362c;
              color: #fff;
              padding: 12px;
              margin: 10px auto;
              border-radius: 5px;
              cursor: pointer;
            }
            input{
              display: none;
            }
        </style>
    </head>

    <body>
        <section id="about-section">
            <!-- about left  -->
            <div class="about-left">
              <div class="hero">
                <div class="card">
                  <h3>{{$name}}</h3>
                  <p>@leandroclor</p>
                   <img src="" alt="About Img"/>
                   <label for="input-file">Update image</label>
                   <input type="file" accept="image/jpeg, image/png, image/jpg" id="input-file">
                </div>
              </div>
            </div>

            <!-- about right  -->
            <div class="about-right">
                <h1>Profile</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Debitis fugiat a dolorem at similique maxime dolorum dolore
                    enim dicta voluptatibus, illum recusandae, vel optio tempore
                    ipsum incidunt eum. Aspernatur, repellendus.
                </p>
                <div class="address">
                    <ul>
                        <li>
                            <span class="address-logo">
                                <i class="fas fa-graduation-cap"></i>
                            </span>
                            <p>Course</p>
                            <span class="saprater">:</span>
                            <p> {{$course}}</p>
                        </li>
                        <li>
                            <span class="address-logo">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </span>
                            <p>Year/Section</p>
                            <span class="saprater">:</span>
                            <p>{{$section}}</p>
                        </li>
                        <li>
                            <span class="address-logo">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                            <p>Phone No</p>
                            <span class="saprater">:</span>
                            <p>63+916-302-9176</p>
                        </li>
                        <li>
                            <span class="address-logo">
                                <i class="far fa-envelope"></i>
                            </span>
                            <p>Email</p>
                            <span class="saprater">:</span>
                            <p>leandroestabillo142@gmail.com</p>
                        </li>
                        <li>
                            <span class="address-logo">
                                <i class="fas fa-calendar-alt"></i>
                            </span>
                            <p>Birthday</p>
                            <span class="saprater">:</span>
                            <p>{{$age}}</p>
                        </li>
                        
                    </ul>
                </div>
                <div class="expertise">
                    <h3>My Expertise</h3>
                    <ul>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-html5"></i>
                            </span>
                            <p>HTML</p>
                        </li>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-css3-alt"></i>
                            </span>
                            <p>CSS</p>
                        </li>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-node-js"></i>
                            </span>
                            <p>Java Script</p>
                        </li>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-php"></i>
                            </span>
                            <p>PHP</p>
                        </li>
                    </ul>
                </div>
            </div>
            <script>
              let profilepic = document.getElementByID("profile-pic");
              let inputFile = document.getElementByID("input-file");

              inputFile.onchange = function(){
                profilepic.src = URL.createObjectURL(inputFile.files[0]);
              }
            </script>
        </section>
    </body>

</html>


  @endsection
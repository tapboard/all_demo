@extends('layout.layout')
@section('title')
	Control Structure
@endsection

@section('content')
<br>
<br>
grade:{{$grade = 74}}
	 <br>
	 <br>
@if($grade >= 97 && $grade <= 100)
    your grade is 1.00
@elseif($grade >= 94 && $grade <= 96)
    your grade is 1.25
@elseif($grade >= 91 && $grade <= 93)
    your grade is 1.50
@elseif($grade >= 88 && $grade <= 90)
    your grade is 1.75
@elseif($grade >= 85 && $grade <= 87)
    your grade is 2.00
@elseif($grade >= 82 && $grade <= 84)
    your grade is 2.25
@elseif($grade >= 79 && $grade <= 81)
    your grade is 2.50
@elseif($grade >= 76 && $grade <= 78)
    your grade is 2.75
@elseif($grade == 75)
    your grade is 3.00
@elseif( $grade >=0 && $grade<= 74)
    your grade is 5.00
@else
    invalid
@endif

<br>
<br>
<br>
@for($x = 5; $x >= 1; $x--)
<br>
    @for($y = 5; $y >= $x; $y--)
        {{ $x }}


    @endfor
@endfor

    <!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    {{-- <link rel="stylesheet" type="text/css"
          href="{{asset('css/style.css')}}"> --}}
          <style type="text/css">
              
              /* style.css */
body {
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: sans-serif;
    line-height: 1.5;
    min-height: 100vh;
    background: #f3f3f3;
    flex-direction: column;
    margin: 0;
}

.main {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    padding: 10px 20px;
    transition: transform 0.2s;
    width: 500px;
    text-align: center;
}

h1 {
    color: #4CAF50;
}

label {
    display: block;
    width: 100%;
    margin-top: 10px;
    margin-bottom: 5px;
    text-align: left;
    color: #555;
    font-weight: bold;
}

#pass {
    color: red;
    font-size: 12px;
}

input {
    display: block;
    width: 100%;
    margin-bottom: 15px;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ddd;
    border-radius: 5px;
}

select {
    display: block;
    width: 100%;
    margin-bottom: 15px;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    padding: 15px;
    border-radius: 10px;
    margin-top: 15px;
    margin-bottom: 15px;
    border: none;
    color: white;
    cursor: pointer;
    background-color: #4CAF50;
    width: 100%;
    font-size: 16px;
}

.wrap {
    display: flex;
    justify-content: center;
    align-items: center;
}

          </style>
</head>

<body>
    <div class="main">
        <form action="">
            <label for="first">First Name:</label>
            <input type="text" id="first"
                   name="first"
                   placeholder="Enter your first name" required>
            <span id="error" style="color: red;"></span>


            <label for="last">Last Name:</label>
            <input type="text" id="last"
                   name="last"
                   placeholder="Enter your last name" required>
            <span id="error" style="color: red;"></span>

            <label for="email">Email:</label>
            <input type="email" id="email"
                   name="email"
                   placeholder="Enter your email" required>

            <label for="dob">Date of Birth:</label>
            <input type="date"
                   id="dob" name="dob"
                   placeholder="Enter your DOB" required>

            <label for="password">Password:</label>
            <input type="password" id="password"
                   name="password"
                   placeholder="Enter your password"
                   pattern="^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])\S{8,}$" required
                   title="Password must contain at least one number,
                    one alphabet, one symbol, and be at
                    least 8 characters long">

            <label for="repassword">Re-type Password:</label>
            <input type="password" id="repassword"
                   name="repassword"
                   placeholder="Re-Enter your password" required>
            <span id="pass"></span>

            <label for="mobile">Contact:</label>
            <input type="text" id="mobile"
                   name="mobile"
                   placeholder="Enter your Mobile Number" required
                   maxlength="10">

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <div class="wrap">
                <button type="submit" onclick="solve()">
                    Submit
                </button>
            </div>
        </form>
    </div>
    <script>
        document.getElementById("first").addEventListener("input", function () {
            var firstName = this.value.trim();
            var errorSpan = document.getElementById("error");
            if (firstName.length === 1) {
                errorSpan.textContent = "First name should be more than one character.";
                document.getElementById("first").setCustomValidity("First name should be more than one character.");
            } else {
                errorSpan.textContent = "";
                document.getElementById("first").setCustomValidity("");
            }
        });
        document.getElementById("last").addEventListener("input", function () {
            var lastname = this.value.trim();
            var Span = document.getElementById("error");
            if (lastname.length === 1) {
                Span.textContent = "last name should be more than one character.";
                document.getElementById("last").setCustomValidity("First name should be more than one character.");
            } else {
                Span.textContent = "";
                document.getElementById("last").setCustomValidity("");
            }
        });
    </script>
    <script src="~/js/JavaScript.js"></script>
</body>

</html>

@endsection








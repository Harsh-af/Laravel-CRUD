<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #0a0927;
            color: #f7f7f7;
            font-weight: 900;
        }
        .main-div{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .logo{
            display: flex;
            /* flex-direction: column; */
            justify-content: center;
            align-items: center;
            font-weight: 900;
            gap: 25px;
            margin-bottom: 60px;
            /* font-family: monospace; */
        }
        .container{
            /* border: 0.5px solid #e6e6e6; */
            border-radius: 10px;
            padding: 70px 100px 50px 100px;
            box-shadow: 0 0 20px 2px rgba(220, 1, 44, 0.5);
            transition: all 0.3s ease-in;
        }
        .container:hover{
            box-shadow: 0 0 35px 5px rgba(220, 1, 44, 0.8);
        }
        .data{
            font-weight: 700;
            font-size: 17px;
        }
        .input{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 800;
            padding: 10px;
            margin-top: 10px;
            border-radius: 10px;
            border: none;
            color: #f0f0f0;
            background-color: #201f47;
            width: 250px;
        }
        .signin{
            border: none; 
            background: linear-gradient(135deg, #154284, #A50044); 
            color:#f0f0f0; 
            padding: 10px 20px; 
            border-radius: 50px; 
            font-family: 'Nunito', sans-serif; 
            font-weight: 900; 
            margin-top: 50px; 
            margin-left: 90px;
            transition: all 0.3s ease-in;
        }
        .signin:hover{
            transform: scale(1.1);
            box-shadow: 0 0 10px rgba(165, 0, 68, 0.8);
            cursor: pointer;
        }
        .signup{
            font-weight: 100;
            font-size: 12px;
            margin-left: 110px;
            color: grey;
            text-decoration: underline;
        }
        .signup:hover{
            color: #f0f0f0;
            cursor: pointer;
        }
    </style>
</head>
<body class="main-div">
        <div class="logo">
            <img style="width: 60px" src="https://upload.wikimedia.org/wikipedia/en/thumb/4/47/FC_Barcelona_%28crest%29.svg/640px-FC_Barcelona_%28crest%29.svg.png"/>
            <div style="background-color: grey; width: 1px; height: 100%"></div>
            <h1>FC BARCELONA</h1>
        </div>
    <div class="container">
        <div class="w-full max-w-xs">
            <form class="bg-#f0f0f0 shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label class="data" for="email">
                        Email Address
                    </label>
                    <br/>
                    <input class="input" style="margin-bottom: 30px" id="email" type="email" name="email" placeholder="Email Address" required autofocus>
                </div>
                <div class="mb-6">
                    <label class="data" for="password">
                        Password
                    </label>
                    <br/>
                    <input class="input" id="password" type="password" name="password" placeholder="Password" required>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="signin">Sign In</button>
                    <p class="signup">Sign up</p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

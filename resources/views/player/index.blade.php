<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;}video{max-width:100%;height:auto}.bg-#f7f7f7{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-#f7f7f7{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                /* font-family: 'Nunito', sans-serif; */
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                background-color: #0a0927;
                color: #f7f7f7;
                font-weight: 900;
            }
            .players-table {
                border-collapse: collapse;
                /* border: 20px solid #0a0927; */
                width: 100%;
                margin: 0px 200px 0px 0px;
            }

            .players-table th{
                /* border: 1px solid #ddd; */
                padding: 8px;
                text-align: left;
            }
            .players-table td {
                /* border: 1px solid #ddd; */
                padding: 8px;
                text-align: left;
                padding-top: 15px;
            }

            .players-table th {
                background: linear-gradient(135deg, #154284, #A50044); 
            }

            .input{
                border-radius: 50px; 
                border: 1px solid #7a88a3;
                background-color: #201f47;
                /* border: 1px solid #A50044; */
                color: #f7f7f7;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-weight: 900;
                padding: 10px 15px;
                font-size: 17px;
                border: none;
            }
            .data{
                color: #f7f7f7;
                font-size: 18.5px;
            }
            .login{
                margin-right: 70px;
                margin-left: 580px;
                margin-top: 15px;
                border: 1px solid #e6e6e6;
                color: #e6e6e6;
                border-radius: 7px;
                height: fit-content;
                width: fit-content;
                padding: 3px 13px;
                font-weight: 500;
                font-size: 13px;
                transition: all 0.3s ease;
            }
            .login:hover{
                background-color: #e6e6e6;
                color: #0a0927;
            }
        </style>
    </head>
    <body class="antialiased">
        <div style="display: flex; justify-content: end; margin-top: 30px">
            <img style="width: 100px; " src="https://upload.wikimedia.org/wikipedia/en/thumb/4/47/FC_Barcelona_%28crest%29.svg/640px-FC_Barcelona_%28crest%29.svg.png"/>
            <a class="login" href="/login">Log In</a>
        </div>
        <form action="{{ route('players_store') }}" method="POST" style="margin: 100px;">
            @csrf
            <label for="name" class="data">Name:</label>
            <input type="text" id="name" name="name" class="input" style="margin-left: 40px;" required><br><br>
            
            <label for="age" class="data">Age:</label>
            <input type="number" id="age" name="age" class="input" style="margin-left: 55px;" required><br><br>
            
            <label for="position" class="data">Position:</label>
            <input type="text" id="position" name="position" class="input" style="margin-left: 20px;" required><br><br>

            <button type="submit" style="background: linear-gradient(135deg, #154284, #A50044); color:white; padding: 10px 20px; border-radius: 50px; font-family: 'Nunito', sans-serif; font-weight: 900">Add Player</button>
        </form>
        <table class="players-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($players as $player)
                    <tr>
                        <td>{{ $player->name }}</td>
                        <td>{{ $player->age }}</td>
                        <td>{{ $player->position }}</td>
                        <td>
                            <div style="display: flex;">
                                <form action="{{ route('players_destroy', $player->id) }}" method="post" id="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this player?');" style="border-radius: 50px; font-family: 'Nunito', sans-serif; font-weight: 900; color: #f7f7f7; background: linear-gradient(135deg, #154284, #A50044); ">Delete</button>
                                </form>
                                <form action="{{ route('players_edit', $player->id) }}" method="get"  style="display: inline;">
                                    <button type="submit" style="border-radius: 50px; font-family: 'Nunito', sans-serif; font-weight: 900; color: #f7f7f7; margin-left: 10px; background: linear-gradient(135deg, #154284, #A50044); ">Edit</button>
                                </form>
                                
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="margin: 0 auto; margin-top: 1rem">
            <center>
            @if (session('showSuccess'))
                <div id="successMessage" style="color: green; font-weight: bold;" class="alert alert-success">
                    {{ session('success') }}
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('successMessage').style.display = 'none';
                    }, 3000);
                </script>
            @endif


                @if ($errors->any())
                <div style="color: red; font-weight: bold;" class="alert alert-danger">
                {{ $errors->first() }}
                </div>
                @endif
            </center>
        </div>
    </body>


</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="{{ asset('ibjlogoonly.ico') }}">
    <title>Edit Record</title>
    <style>
        body {
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                background-color: #0a0927;
                color: #f7f7f7;
                font-weight: 900;
            }
        .top {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }
        #updateButton{
            cursor: default;
        }
        .data{
            font-weight: bold; 
            font-size: 20px; 
            margin-left: 70px
        }
        .record{
            font-size: 20px; 
            font-weight: 100;
            color: #f0f0f0;
            margin-left: 30px; 
            margin-top: 20px; 
            border: 1px solid grey; 
            border-radius: 50px; 
            padding: 10px 20px;
            border: none;
            background-color: #201f47;
        }
        .home-button{
            font-size: 20px; margin-left: 10px; color: #f7f7f7; border-radius: 50px; background-color: #201f47;    font-size: 17px; font-weight:bolder; text-decoration: none; margin-top: 35px; padding: 10px 20px; margin-left: 70px
        }
        .update-button{
            font-weight: bold; opacity: 0.5; cursor: pointer; font-size: 20px; margin-left: 10px; margin-top: 35px; color: #f7f7f7; background: linear-gradient(135deg, #154284, #A50044); border-radius: 50px; border: none; padding: 10px 20px; font-size: 17px; font-weight:bolder
        }
    </style>
    <script>
        function disableUpdateButton() {
            var form = document.getElementById('editForm');
            var updateButton = document.getElementById('updateButton');

            if (form.checkValidity()) {
                updateButton.disabled = false;
                updateButton.style.opacity = 1;
            updateButton.style.cursor = pointer;
            } else {
                updateButton.disabled = true;
                updateButton.style.opacity = 0.1;
            }
        }

        function enableUpdateButton() {
            var updateButton = document.getElementById('updateButton');
            updateButton.style.display = 'block'; 
            updateButton.disabled = false;
            updateButton.style.opacity = 1;
            updateButton.style.cursor = pointer;
        }
    </script>
</head>
<body>
    <div style="display: flex; justify-content: center; margin-top: 30px">
        <img style="width: 100px; " src="https://upload.wikimedia.org/wikipedia/en/thumb/4/47/FC_Barcelona_%28crest%29.svg/640px-FC_Barcelona_%28crest%29.svg.png"/>
    </div>
    <div style="margin-bottom: 5rem;">
        <h1 style="margin-left:20px; margin-bottom: 30px; font-weight: bold; font-size: 50px;">Edit Record</h1>
        <form action="{{ route('players_update', $player->id) }}" method="post" id="editForm" oninput="disableUpdateButton()">
            @csrf
            @method('PUT')
            <div>
                <label class="data" for="name">Name :</label>
                <input class="record" style="margin-left: 50px;" type="text" name="name" value="{{ $player->name }}">
            </div>
            <div>
                <label class="data" for="age">Age:</label>
                <input class="record" style="margin-left: 70px;" type="number" name="age" value="{{ $player->age }}" onchange="enableUpdateButton()">
            </div>
            <div>
                <label class="data" for="position">Position:</label>
                <input class="record" type="text" name="position" value="{{ $player->position }}" onchange="enableUpdateButton()">
            </div>
            <div style="display: flex; flex-direction: row">
                <a href="{{ url('/') }}" class="home-button">Home</a>
                <button id="updateButton" class="update-button" type="submit" disabled>Update</button>
            </div>
        </form>
        <br>
    </div>

    <!-- <script>
        function enableUpdateButton() {
            var updateButton = document.getElementById('updateButton');
            updateButton.style.display = 'block'; 
        }
    </script> -->
</body>
</html>

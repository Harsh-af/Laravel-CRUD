<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="{{ asset('ibjlogoonly.ico') }}">
    <title>Edit Record</title>
    <style>
        body {
                font-family: 'Nunito', sans-serif;
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
            margin-left: 30px; 
            margin-top: 20px; 
            border: 1px solid grey; 
            border-radius: 50px; 
            padding: 10px 20px;
        }
        .home-button{
            font-size: 20px; margin-left: 10px; color: #1338BE; border-radius: 50px; border: 1px solid #1338BE; background-color: white;    font-size: 17px; font-weight:bolder; text-decoration: none; margin-top: 35px; padding: 10px 20px; margin-left: 70px
        }
        .update-button{
            font-weight: bold; opacity: 0.5; cursor: pointer; font-size: 20px; margin-left: 10px; margin-top: 35px; background-color: #1338BE; border-radius: 50px; border: none; color: white; padding: 10px 20px; font-size: 17px; font-weight:bolder
        }
    </style>
    <script>
        function disableUpdateButton() {
            var form = document.getElementById('editForm');
            var updateButton = document.getElementById('updateButton');

            if (form.checkValidity()) {
                updateButton.disabled = false;
                updateButton.style.opacity = 1;
            } else {
                updateButton.disabled = true;
                updateButton.style.opacity = 0.5;
            }
        }

        function enableUpdateButton() {
            var updateButton = document.getElementById('updateButton');
            updateButton.disabled = false;
            updateButton.style.opacity = 1;
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
                <label class="data" for="メール">Name :</label>
                <input class="record" type="text" name="email" value="{{ $player->name }}" readonly>
            </div>
            <div>
                <label class="data" for="タイトル">Position:</label>
                <input class="record" type="text" name="title" value="{{ $player->position }}" onchange="enableUpdateButton()">
            </div>
            <div>
                <label class="data" for="氏名">Age:</label>
                <input class="record" type="text" name="name" value="{{ $player->age }}" onchange="enableUpdateButton()">
            </div>
            <div style="display: flex; flex-direction: row">
                <a href="{{ url('/') }}" class="home-button">Home</a>
                <button id="updateButton" class="update-button" type="submit" disabled>アップデート</button>
            </div>
        </form>
        <br>
    </div>

    <script>
        function enableUpdateButton() {
            var updateButton = document.getElementById('updateButton');
            updateButton.style.display = 'block'; 
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hobbies</title>

    <style>
        body {text-align: center; background: #bd8f53;
    color: white;}
        h2   {font-family:calibri; }
        p    {font-family:bell MT; }
        </style>

</head>
<body>
    <div>
        <h2>{{ $data['h1'] }}</h2>
        <p> I love cooking</p>
    </div>
    <div>
        <h2>{{ $data['h2'] }}</h2>
        <p>New Hobby</p>
    </div>
    <div>
        <h2>{{ $data['h3'] }}</h2>
        <p>hehe</p>
    </div>
    <div>
      <h1><button class="button_about" onclick="location.href='{{ url('about_me') }}'">About Me</button></h1>
      <h1><button class="button_skills">Skills</button></h1>
      <h1><button class="button_hobbies">Hobbies</button></h1>
    </div>
</body>
</html>
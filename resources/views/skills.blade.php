<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skills</title>

    <style>
        body {text-align: center;
  padding: 10rem 2rem;
  background: #314028;
  color: white}
        h2   {font-family:calibri; }
        p    {font-family:bell MT; }
        </style>

</head>
<body>
    <div>
        <h2>50%</h2>
        <p> Java {{ $data['PL'] }}</p>
        <p>C++ {{ $data['PL'] }}</p>
    </div>
    <div>
        <h2>30%</h2>
        <p>Python {{ $data['PL'] }}</p>
    </div>
    <div>
        <h2>20%</h2>
        <p>IOT Arduino</p>
    </div>
    <div>
        <h2>80%</h2>
        <p>Media Editing</p>
    </div>
    <div>
        <h2>20%</h2>
        <p>Google Ads</p>
    </div>
    <div>
        <h2>60%</h2>
        <p>Microsoft Office</p>
    </div>
    <div>
        <h1><button class="button_about" onclick="location.href='{{ route('about_me') }}'">About Me</button></h1>
        <h1><button class="button_skills" onclick="location.href='{{ route('skills') }}'">Skills</button></h1>
        <h1><button class="button_hobbies" onclick="location.href='{{ route('hobbies') }}'">Hobbies</button></h1>
      </div>
</body>
</html>
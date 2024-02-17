<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me</title>

    <style>
        body {background-color: #fcf5e7; justify-content: center;
  align-items: center;
  text-align: center;display: flex;}
        h1   {color: black; font-family:calibri; }
        p    {color: black; font-family:bell MT; }
        </style>

</head>
<body>
    
    <div class="about_me">
        <h1>{{ $data['greetings'] }}</h1>
      <h2>Welcome to my website, I'm so glad you stopped by.</h2>
      <p>I'm {{ $data['name'] }}, a {{ $data['age'] }} college student who's super into web development</p>
      <p>I've been tinkering with HTML, CSS, and JavaScript for a while now and I absolutely love it.</p>
      <p> Creating websites that are not only visually appealing but also user-friendly is my jam!</p>
      <p> I'm always up for a coding challenge and enjoy collaborating with others to create awesome web solutions.</p>
      <p> Check out my portfolio and let's chat about your next web works!</p> 
      <p>Can't wait to create something amazing together!</p>
       <div>
      <h1><button class="button_about" onclick="location.href='{{ route('about_me') }}'">About Me</button></h1>
      <h1><button class="button_skills" onclick="location.href='{{ route('skills') }}'">Skills</button></h1>
      <h1><button class="button_hobbies" onclick="location.href='{{ route('hobbies') }}'">Hobbies</button></h1>
    </div>
   
      
</body>
</html>
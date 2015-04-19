<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Welcome to To-Do list</title>
    <style>
	@import url(//fonts.googleapis.com/css?family=Lato:700);
      body {
        margin:0;
        font-family:'Lato', sans-serif;
        text-align:center;
        color: #999; }
    </style>
  </head>

  <body>
  	<h1>Welcome to your to-do list</h1>
    <ul>
      @foreach ($lists as $list)
        <li>{{ $list }}</li> 
      @empty
        <li>You don't have any lists saved.</li>
      @endforelse
    </ul>

  </body>

</html>
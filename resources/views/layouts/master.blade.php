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
  <div class="container">
    <div class="col-md-9">
      @yield('content')
	</div>
    
    <div class="col-md-3">
      @section('advertisement')
      <p>Ad #1</p>
      @show 
	</div>
  </div>
</body>

</html>

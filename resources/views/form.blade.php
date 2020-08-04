<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>test blade</title>

      
    </head>
    <body>
      <form action="/sapa" method="post">
      @csrf
      <input type="text" name="nama">
      <input type="submit" value="masuk">  
      </form>
    </body>
</html>

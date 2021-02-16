<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
</head>
<body>
<h1>Article</h1>

<form method="post"  action="/article/check">
    @csrf
    <input type="text" name = "email" id ="email" placeholder="Введите емайл">
    <input type="text" name = 'surname' id ='surname' placeholder="Enter your name">
    <input type="text" name = 'name' id ='name' placeholder="Enter your name">
    <input type="text" name="message" id="message" class="form-control" placeholder="Enter the message"><br>
    <button type="submit">Send</button>
<h2>All articles</h2>
 @foreach($article as $el)
    <div class="alert-danger"></div>
        <h2>Message is :{{$el->message}}</h2>
        <p>Name is {{$el->name}}</p>
        <p>Surname is {{$el->surname}}</p>
        <p>Email are{{$el->email}}</p>

    @endforeach


</form>
</body>
</html>

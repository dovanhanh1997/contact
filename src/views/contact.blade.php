<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Contact</h1>
<form action="{{route('contact')}}" method="post">
    <input name="name" type="text" placeholder="name">
    <input name="email" type="text" placeholder="email">
    <textarea name="message" placeholder="message" id="" cols="30" rows="10"></textarea>
    <button type="submit">submit</button>
</form>

</body>
</html>

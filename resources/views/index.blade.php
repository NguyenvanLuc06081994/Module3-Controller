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
<div class="main-content">
    <h1>Application Check Email</h1>
    <form action="{{route('checkEmail')}}" method="post">
        @csrf
        <label for="email-input">Email : </label>
        <input id="email-input" type="text" name="email" placeholder="Input Your Email">
        <input type="submit" value="Check">
    </form>
    @if(isset($isEmail))
        Result: {{$isEmail ? 'Email duoc dinh dang dung' : 'Email dinh dang sai'}}
        @endif
</div>
</body>
</html>

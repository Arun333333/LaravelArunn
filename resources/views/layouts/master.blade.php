
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
@yield("bodycontent")
<div class="links"></div>
<a href="/about">About</a>
<a href="/profile">profile</a>
<a href="/extension2">extension2</a>

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
</head>
<body>
<h1><?=$giác hơi giác hơi giác hơi?></h1>
<div class="container">
@foreach ($users as $user)
        {{ $user->name }}
    @endforeach
</div>

{{ $users->links() }}
</body>
</html>
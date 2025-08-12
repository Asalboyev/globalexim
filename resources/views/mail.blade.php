<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        p {
            font-size: 18px;
        }
        ul li {
            font-size: 14px;
        }
        span {
            font-size: 14px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <p>Новый запрос с сайта globalexim.uz</p>
    <ul>
        @if(isset($name))
        <li>Имя: <span>{{ $name }}</span></li>
        @endif
        <br>
        @if(isset($phone_number))
        <li>Номер телефона: <span>{{$phone_number}}</span></li>
        @endif
        <br>
        @if(isset($email))
        <li>Email: <span>{{ $email }}</span></li><br>
        @endif
        <br>
        @if(isset($theme))
        <li>Theme: <span>{{ $theme }}</span></li><br>
        @endif
        <br>
        @if(isset($form_message))
        <li>Message: <span>{{ $form_message }}</span></li><br>
        @endif
    </ul>
</body>
</html>

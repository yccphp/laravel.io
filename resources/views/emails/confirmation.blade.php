<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>

<h2>请验证你在 Laravel.ren 上注册的账户</h2>

<p>
    您在 Laravel.ren 上创建了一个账户.<br>
    请点击下面链接验证您的邮箱
</p>
<p><a href="{{ route('auth.confirm', $confirmationCode) }}">{{ route('auth.confirm', $confirmationCode) }}</a></p>

</body>
</html>

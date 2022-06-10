<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{csrf_token()}}" />
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}" />
</head>

<body>
    <div id="app">
        <home-component></home-component>
    </div>
    <script src="{{mix('js/app.js')}}" type="text/javascript"></script>
</body>

</html>
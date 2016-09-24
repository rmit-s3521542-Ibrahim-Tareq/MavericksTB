<!DOCTYPE html>
<html>
<head>
    <title>Mavericks Inc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="http://bootswatch.com/darkly/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/') }}/css/animate.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/style.css">

    @yield('additionalCss')

</head>

<body>
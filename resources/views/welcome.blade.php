<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>
    @if ($location)
        <p><b class="px-4">ip: </b>{{ $location->ip }}</p>
        <p><b class="px-4">countryName: </b>{{ $location->countryName }}</p>
        <p><b class="px-4">countryCode: </b>{{ $location->countryCode }}</p>
        <p><b class="px-4">regionName: </b>{{ $location->regionName }}</p>
        <p><b class="px-4">regionCode: </b>{{ $location->regionCode }}</p>
        <p><b class="px-4">cityName: <b>{{ $location->cityName }}</p>
        <p><b class="px-4">zipCode: <b>{{ $location->zipCode }}</p>
        <p><b class="px-4">latitude: </b>{{ $location->latitude }}</p>
        <p><b class="px-4">longitude: <b>{{ $location->longitude }}</p>
        <p><b class="px-4">areaCode: <b>{{ $location->areaCode }}</p>
        <p><b class="px-4">timezone: </b>{{ $location->timezone }}</p>
    @else
        <p><b>NO IP SHOWN</b></p>
    @endif
</body>

</html>

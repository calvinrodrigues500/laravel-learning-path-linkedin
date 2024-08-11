<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	@extends('layouts.nav')
	<h3>This is a home page for the {{config('app.name')}} app</h3>
	@yield('body')
</body>
</html>
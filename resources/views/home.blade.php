<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>
<body class='flex'>
<!-- Sidebar Start -->
    <x-sidebar.base />
<!-- Sidebar End -->
<!-- Main Start -->
<main class='flex flex-col text-wrap'>
    Here's Main
    <x-main.table :products="$products"/>
</main>
<!-- Main End -->
</body>
</html>

@extends('layouts.default')
@section('page')
<head>
    <title>Home</title>
</head>
<body class='flex'>
<!-- Sidebar Start -->
    <x-sidebar.base />
<!-- Sidebar End -->
<!-- Main Start -->
<main class='flex flex-col text-wrap'>
    <x-main.table :dataArr="$products"/>
</main>
<!-- Main End -->
</body>

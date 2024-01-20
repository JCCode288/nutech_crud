@extends('layouts.default')
@section('page')
<head>
    <title>Categories</title>
</head>
<body class='flex'>
<!-- Sidebar Start -->
    <x-sidebar.base />
<!-- Sidebar End -->
<!-- Main Start -->
<main class='flex flex-col text-wrap'>
    <x-main.table :dataArr="$categories"/>
</main>
<!-- Main End -->
</body>

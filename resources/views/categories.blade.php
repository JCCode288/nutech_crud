@extends('layouts.default')
@section('page')

    <body class='flex bg-gray-50 dark:bg-slate-800'>
        <!-- Sidebar Start -->
        <x-sidebar.base />
        <!-- Sidebar End -->
        <!-- Main Start -->
        <main class='flex relative flex-col text-wrap bg-inherit h-full w-full'>
            <x-categories.table :dataArr="$categories" />
        </main>
        <!-- Main End -->
    </body>

@extends('layouts.default')
@section('page')

    <body class='flex bg-gray-50 dark:bg-slate-800'>
        <!-- Sidebar Start -->
        <x-sidebar.base />
        <!-- Sidebar End -->
        <!-- Main Start -->
        <main class='flex flex-col text-wrap bg-inherit relative h-full w-full align-middle justify-center'>
            <x-categories.form :title="'Add Category'" />

        </main>
        <!-- Main End -->
    </body>

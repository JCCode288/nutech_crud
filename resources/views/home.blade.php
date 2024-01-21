@extends('layouts.default')
@section('page')

    <body class='flex bg-gray-50 dark:bg-slate-800'>
        <!-- Sidebar Start -->
        <x-sidebar.base />
        <!-- Sidebar End -->
        <!-- Main Start -->
        <main class='flex flex-col text-wrap bg-inherit'>
            <x-main.table :dataArr="$products" />
        </main>
        <!-- Main End -->

        @session('loginSuccess')
            <x-sweet-alert :title="'Login Success'" :message="session('loginSuccess')" :type="'success'" />
        @endsession
    </body>

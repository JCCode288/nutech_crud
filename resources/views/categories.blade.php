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
        @session('addCategorySuccess')
            <x-alert.notif :title="'Success'" :message="session('addCategorySuccess')" :type="'success'" />
        @endsession
        @session('delCategorySuccess')
            <x-alert.notif :title="'Success'" :message="session('delCategorySuccess')" :type="'success'" />
        @endsession
    </body>

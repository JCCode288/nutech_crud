@extends('layouts.default')
@section('page')

    <body class='flex bg-gray-50 dark:bg-slate-800'>
        <!-- Sidebar Start -->
        <x-sidebar.base />
        <!-- Sidebar End -->
        <!-- Main Start -->
        <main class='flex relative flex-col text-wrap bg-inherit'>
            <x-main.table :dataArr="$products" />
        </main>
        <!-- Main End -->

        @session('loginSuccess')
            <x-alert.notif :title="'Login Success'" :message="session('loginSuccess')" :type="'success'" />
        @endsession

        @session('addProductSuccess')
            <x-alert.notif :title="'Success'" :message="session('addProductSuccess')" :type="'success'" />
        @endsession

        @session('errorNotFound')
            <x-alert.notif :title="'Not Found'" :message="session('errorNotFound')" :type="'error'" />
        @endsession

        @session('editProductSuccess')
            <x-alert.notif :title="'Success'" :message="session('editProductSuccess')" :type="'success'" />
        @endsession

        @session('delProductFailed')
            <x-alert.notif :title="'Delete Failed'" :message="session('delProductFailed')" :type="'error'" />
        @endsession

        @session('delProductSuccess')
            <x-alert.notif :title="'Success'" :message="session('delProductSuccess')" :type="'success'" />
        @endsession
    </body>

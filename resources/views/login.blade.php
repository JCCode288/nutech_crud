@extends('layouts.default')
@section('page')

    <body class='container'>
        <h1>Login Page</h1>
        <x-login.form />
        @session('error')
            <x-alert.notif :title="'Login Failed'" :message="session('error')" :type="'error'" />
        @endsession
        @session('successLogout')
            <x-alert.notif :title="'Logout Success'" :message="session('successLogout')" :type="'success'" />
        @endsession
        @session('successLogout')
            <x-alert.notif :title="'Logout Success'" :message="session('successLogout')" :type="'success'" />
        @endsession
        @session('registerSuccess')
            <x-alert.notif :title="'Register Success'" :message="session('registerSuccess')" :type="'success'" />
        @endsession
    </body>

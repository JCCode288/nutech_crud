@extends('layouts.default')
@section('page')

<body class='container'>
    <h1>Login Page</h1>
    <x-login.form />
@session('error')
<x-sweet-alert :title="'Login Failed'" :message="session('error')" :type="'error'" />
@endsession
@session('successLogout')
<x-sweet-alert :title="'Logout Success'" :message="session('successLogout')" :type="'success'" />
@endsession
@session('successLogout')
<x-sweet-alert :title="'Logout Success'" :message="session('successLogout')" :type="'success'" />
@endsession
@session('registerSuccess')
<x-sweet-alert :title="'Register Success'" :message="session('registerSuccess')" :type="'success'" />
@endsession
</body>

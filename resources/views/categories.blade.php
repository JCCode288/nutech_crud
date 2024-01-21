@extends('layouts.default')
@section('page')

    <script>
        function deleteCategory(id, name, csrfToken) {
            Swal.fire({
                title: `Are you sure want to delete ${name} category?`,
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    const form = document.createElement("form");
                    form.action = `/category/del/${id}`;
                    form.method = "POST";
                    form.style.display = "none";

                    const csrfTokenField = document.createElement("input");
                    csrfTokenField.type = "hidden";
                    csrfTokenField.name = "_token";
                    csrfTokenField.value = csrfToken;
                    form.appendChild(csrfTokenField);

                    const methodField = document.createElement('input');
                    methodField.type = 'hidden';
                    methodField.name = '_method';
                    methodField.value = 'DELETE';
                    form.appendChild(methodField);

                    document.body.appendChild(form);

                    form.submit();

                    document.body.removeChild(form);
                }
            });
        }
    </script>

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

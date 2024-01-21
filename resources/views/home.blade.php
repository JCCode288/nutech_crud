@extends('layouts.default')
@section('page')

    <script>
        function deleteProduct(id, name, csrfToken) {
            Swal.fire({
                title: `Are you sure want to delete ${name}?`,
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    const form = document.createElement("form");
                    form.action = `/product/del/${id}`;
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

        /**
         * @params {string} data
         */
        function exportToExcel(data, csrfToken) {
            data = JSON.parse(data).data


            const form = document.createElement("form");
            form.action = `/product/excel`;
            form.method = "POST";
            form.style.display = "none";

            const dataInput = document.createElement('input');
            dataInput.type = 'hidden';
            dataInput.name = 'data';
            dataInput.value = JSON.stringify(data);
            form.appendChild(dataInput);

            const csrfTokenField = document.createElement("input");
            csrfTokenField.type = "hidden";
            csrfTokenField.name = "_token";
            csrfTokenField.value = csrfToken;
            form.appendChild(csrfTokenField);

            document.body.appendChild(form);

            form.submit()
        }
    </script>

    <body class='flex bg-gray-50 dark:bg-slate-800'>
        <!-- Sidebar Start -->
        <x-sidebar.base />
        <!-- Sidebar End -->
        <!-- Main Start -->
        <main class='flex relative flex-col text-wrap bg-inherit'>
            <x-main.table :dataArr="$products" :categories="$categories" :nextPage="$nextPage" :prevPage="$prevPage" />
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

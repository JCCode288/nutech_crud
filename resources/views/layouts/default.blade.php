<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Nutech Test - Jendy Caprico
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        /**
         * @params {string} data
         */
        function exportToExcel(data, csrfToken, url = `/product/excel`, ) {
            data = JSON.parse(data).data

            const form = document.createElement("form");
            form.action = url
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
</head>
@yield('page')

</html>

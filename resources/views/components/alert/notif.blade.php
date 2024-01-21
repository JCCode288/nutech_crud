<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: "{{ $title }}",
            text: "{{ $message }}",
            icon: "{{ $type }}",
            showCloseButton: false,
            timer: 1000
        });
    })
</script>

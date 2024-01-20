<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: "{{ $title }}",
            text: "{{ $message }}",
            icon: "{{ $type }}"
        });
    })
</script>

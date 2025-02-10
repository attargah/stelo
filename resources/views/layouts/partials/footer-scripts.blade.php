

<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.16.0/dist/sweetalert2.all.min.js
"></script>



@if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Hata!',
            html: `{!! implode('<br>', $errors->all()) !!}`,
        });
    </script>
@endif

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Başarılı!',
            text: '{{ session("success") }}',
        });
    </script>
@endif



@stack('scripts')

    <!-- Replace your current Bootstrap JS with this -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}

    <!-- Include DataTables CSS and JS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>


    <!--Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

    <!-- Toast -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    @if(session()->has('error_msg'))
    <script>
        toastr.options.preventDuplicates = true;
        toastr.error("{{ session('error_msg') }}");
    </script>
    @endif

    @error('code')
    <script>
        toastr.options.preventDuplicates = true;
        toastr.error('Code already exists');
    </script>
    @enderror

    @if(session()->has('success_msg'))
    <script>
        toastr.options.preventDuplicates = true;
        toastr.success("{{ session('success_msg') }}");
    </script>
    @endif

    @if(session()->has('download_file'))
    <script>
        $("#download_filename").val("{{ session('download_file') }}");
        $("#downloadForm").submit();
    </script>
    @endif
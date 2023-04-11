@extends('layout.index')
@section('content')
    {{-- <div class="spinner-border text-warning mt-5" role="status">
        <span class="visually-hidden">Loading...</span>
    </div> --}}


    <div id="data-books"></div>

    <script>
        $(document).ready(function() {
            // loader()
            get_books()
        })

        // function loader() {
        //     $(window).on('load', () => {
        //         $('#loader').fadeOut(1500, () => {
        //             $(this).css('display', 'none')
        //         })
        //     })
        // }

        function get_books() {
            $.get("{{ url('read-books') }}", {}, function(data, status) {
                $("#data-books").html(data)
            })
        }
    </script>
@endsection

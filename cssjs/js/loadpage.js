$(document).ready(function() {
        let pageCurrent = localStorage.getItem('pageCurrent');
        $(document).on('click', ".page-link", function(event) {
            event.preventDefault();
            event.stopPropagation();
            event.stopImmediatePropagation();
            let page = $(this).attr('href').split('page=')[1];
            localStorage.setItem('pageCurrent', page);
            fetch_datas(page);
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function fetch_datas(page) {
            var _token = $("input[name=_token]").val();
            $.ajax({
                url: "{{ url('admin/fetch') }}",
                method: "POST",
                data: {
                    _token: _token,
                    page: page,
                    table: $("#table").val(),
                },
                cache: false,
                success: function(data) {
                    $("#mainData").html(data);
                },
            });
        }
});
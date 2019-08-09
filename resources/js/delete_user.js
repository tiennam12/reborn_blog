$(document).ready(function(){

    $('.btn-del-user').click(function() {
        if (confirm('You are sure?')) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var userId = $(this).data('user-id');
            var url = '/admin/users/' + userId;

            $.ajax({
                url: url,
                type: 'DELETE',
                success: function(result) {
                    if (result.status) {
                        $('.row_' + userId).remove();
                    } else {
                        alert(result.msg);
                    }
                },
                error: function() {
                    location.reload();
                }
            });
        }
    });
});

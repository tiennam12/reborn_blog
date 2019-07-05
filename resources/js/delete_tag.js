$(document).ready(function(){

    $('.btn-del-tag').click(function() {
        if (confirm('You are sure?')) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var tagId = $(this).data('tag-id');
            var url = '/tags/' + tagId;

            $.ajax({
                url: url,
                type: 'DELETE',
                success: function(result) {

                    if (result.status) {
                        $('.row_' + tagId).remove();
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

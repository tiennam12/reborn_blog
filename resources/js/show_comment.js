$(document).ready(function() {
    $('#comment').click(function(e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        var content = tinyMCE.activeEditor.getContent();
        var postID = $('#post_id').val();
        var url = '/comments/';
        var html = '';
        tinyMCE.activeEditor.setContent('');

        $.ajax({
            url: url,
            type: "POST",
            data: {content:content, post_id:postID},
            success: function(result) {
                var commentHtml = '<div class="row comment-item">'
                    + '<div class="col-sm-1">'
                    + '<img src=' + imagePath + '/' + result.comment.user.image + ' ' + 'alt="" class="rounded-circle mr-2" width="50px" height="50px">'
                    + '</div>'
                    + '<div class="col-sm-11">'
                    + '<div class="card-title text-info">'
                    + '<a href="#" class="user_comment">' + result.comment.user.fullname + '</a>'
                    + '<p class="time_created">' + result.comment.created_at + '</p>'
                    + '</div>'
                    + '<div class="card-text">'
                    + '<p>' + result.comment.content + '</p>'
                    + '</div>'
                    + '</div>'
                    + '</div>';

                $('.comment-component').append(commentHtml);
            }
        });
    });
});

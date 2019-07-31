$(document).ready(function() {

    $('#upload_form').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url:"{{ route('ajaxupload.action') }}",
            method:"POST",
            data:new FormData(this),
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(data) {
                const pos = simplemde.codemirror.getCursor();
                    simplemde.codemirror.replaceRange('![]('+(data.image_path)+')', pos);
            }
        })
    });

});

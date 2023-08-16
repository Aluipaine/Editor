$(document).ready(function() {
    $('#kommentti__filesubmit').click(function() {
        
        // Read selected files
        var totalfiles = document.getElementById('comment__files').files.length;
        for (var index = 0; index < totalfiles; index++) {
            form_data = new FormData();
            form_data.append("comment__files", document.getElementById('comment__files').files[index]);
            $('#comment__preview_files').append('<a class="asiakirja_first" target="_blank" href="https://teditori.gromi.fi/uploads/' + document.getElementById('comment__files').files[index]['name'] + '">' + 'https://teditori.gromi.fi/uploads/' + document.getElementById('comment__files').files[index]['name'] + '</a><br>');
        
            // AJAX request
            $.ajax({
                url: '/upload.php',
                type: 'POST',
                data: form_data,
                contentType: 'multipart/form-data',
                // dataType: 'json',
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    // $('#comment__preview_files').append('<a class="asiakirja_first" target="_blank" href="https://teditori.gromi.fi/uploads/' + response[index] + '">Avaa</a>');
                    // $('#comment__preview_files').append('<input class="asiakirja_second" type="text" placeholder="Anna kommentti asiakirjalle (valinnainen)" name="1_asiakirja-commentary" id="1_asiakirja-commentary-' + index + '">');
                }
            });
        }
    });
});
/**
 * Executes file upload functionality when a button with class 'ready_btn' is clicked.
 * @returns None
 */
$(document).ready(function() {
    $('.ready_btn').click(function() {
        if(new_com_id == 0) {
            return;
        }
        if(new_com_id && new_com_id == 0) {
            that_element_class = new_com_id;
            new_com_id = null;
        }
        else {
            that_element_class = $(this).attr("name") + '_previewfiles';
        }
        totalfiles = $(this).parent().children()[1].children[0].children[0].children[1].files.length;
        console.log(totalfiles);
        for (var index = 0; index < totalfiles; index++) {
            form_data = new FormData();
            cur_comment_file = $(this).parent().children()[1].children[0].children[0].children[1].files;
            form_data.append("files", cur_comment_file[index]);
            
            $.ajax({
                url: '/upload.php',
                type: 'POST',
                data: form_data,
                contentType: 'multipart/form-data',
                // dataType: 'json',
                contentType: false,
                processData: false,
                success: function(response) {
                    document.querySelector("." +that_element_class).innerHTML += '<a class="asiakirja_first" target="_blank" href="https://editori.westface.fi/uploads/' + response + '">' + 'https://editori.westface.fi/uploads/' + response + '</a><br>';
                    console.log(response);
                }
            });
        }
    });
});

/**
 * Sets up an event listener for when a button with the class 'sendcommentfiles' is clicked.
 * It then retrieves the files from the input field with the class 'newcomment__files' and sends them via AJAX to the server for uploading.
 * @returns None
 */
$(document).ready(function() {
    $('.sendcommentfiles').click(function() {

        previewelement_class = 'newcomment__previewfiles';
        totalfiles =  $(this).parent().closest(".newcomment__files")[0].files.length;
        cur_comment_files =  $(this).parent().closest(".newcomment__files")[0].files;

        console.log(totalfiles);
        for (var index = 0; index < totalfiles; index++) {
            form_data = new FormData();
            
            form_data.append("files", cur_comment_files[index]);
            
            $.ajax({
                url: '/upload.php',
                type: 'POST',
                data: form_data,
                contentType: 'multipart/form-data',
                // dataType: 'json',
                contentType: false,
                processData: false,
                success: function(response) {
                    document.querySelector("." +previewelement_class).innerHTML += '<a class="asiakirja_first" target="_blank" href="https://editori.westface.fi/uploads/' + response + '">' + 'https://editori.westface.fi/uploads/' + response + '</a><br>';
                    console.log(response);
                }
            });
        }
    });
});
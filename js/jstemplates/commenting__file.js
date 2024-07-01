/**
 * Executes file upload functionality when a button with class 'ready_btn' is clicked.
 * @returns None
 */
$(document).ready(function () {
	$(".ready_btn").click(function () {
		if (new_com_id == 0) {
			return
		}
		if (new_com_id && new_com_id == 0) {
			that_element_class = new_com_id
			new_com_id = null
		} else {
			that_element_class = $(this).attr("name") + "_previewfiles"
		}
		totalfiles = $(this).parent().children()[1].children[0].children[0]
			.children[1].files.length
		console.log(totalfiles)
		for (var index = 0; index < totalfiles; index++) {
			form_data = new FormData()
			cur_comment_file = $(this).parent().children()[1].children[0].children[0]
				.children[1].files
			form_data.append("files", cur_comment_file[index])

			$.ajax({
				url: "/upload.php",
				type: "POST",
				data: form_data,
				contentType: "multipart/form-data",
				// dataType: 'json',
				contentType: false,
				processData: false,
				success: function (response) {
					document.querySelector("." + that_element_class).innerHTML +=
						'<a class="asiakirja_first" target="_blank" href="https://editori.westface.fi/uploads/' +
						response +
						'">' +
						"https://editori.westface.fi/uploads/" +
						response +
						"</a><br>"
					console.log(response)
				},
			})
		}
	})
})

/**
 * Sets up an event listener for when a button with the class 'sendcommentfiles' is clicked.
 * It then retrieves the files from the input field with the class 'newcomment__files' and sends them via AJAX to the server for uploading.
 * @returns None
 */

// $(document).ready(function() {
//     $('.sendcommentfiles').click(function()
function preparefiles_sendcomment(e) {
	console.log(e)
	// previewelement_class = "newcomment__previewfiles_new"
	// totalfiles = $(e).parent().find(".newcomment__files")[0].files.length
	// cur_comment_files = $(e).parent().find(".newcomment__files")[0].files

	// console.log(cur_comment_files)
	// for (var index = 0; index < totalfiles; index++) {
	// 	form_data = new FormData()
	// 	console.log(cur_comment_files[index])
	// 	form_data.append("files", cur_comment_files[index])

	// 	$.ajax({
	// 		url: "/upload.php",
	// 		type: "POST",
	// 		data: form_data,
	// 		contentType: "multipart/form-data",
	// 		// dataType: 'json',
	// 		contentType: false,
	// 		processData: false,
	// 		success: function (response) {
	// 			document.querySelector("." + previewelement_class).innerHTML +=
	// 				'<div class="asiakirja_first"' +
	// 				"" +
	// 				'">' +
	// 				"<img src='https://editori.westface.fi/uploads/" +
	// 				response +
	// 				"'><p style='opacity:0;'>https://editori.westface.fi/uploads/" +
	// 				response +
	// 				"</p><div class='preview_delete' onclick='this.parentElement.remove();'>x</div></div><br>"
	// 		},
	// 	})
	// }
	// console.log(form_data)
	comment__create_new(e.parentElement.parentElement)
}

function renameFile(originalFile, newName) {
	return new File([originalFile], newName, {
		type: originalFile.type,
		lastModified: originalFile.lastModified,
	})
}

function preparefile(e) {
	console.log(e)
	tobreak = false
	previewelement_class = "newcomment__previewfiles_new"
	totalfiles = $(e).parent().find(".newcomment__files")[0].files.length
	cur_comment_files = $(e).parent().find(".newcomment__files")[0].files

	console.log(cur_comment_files)
	for (var index = 0; index < totalfiles; index++) {
		form_data = new FormData()
		let filename_question = prompt(
			"Nimeä tiedostosi",
			current_apartment + Math.floor(1000 + Math.random() * 9000)
		)
		if (filename_question == null || filename_question == "") {
			console.log("User cancelled the prompt.")
			tobreak = true
			break
		}
		extension = cur_comment_files[index].name.split(".")[1]
		newname_forfile = current_apartment + "." + extension
		test = new File([cur_comment_files[index]], newname_forfile)
		form_data.append("files", test)

		$.ajax({
			url: "/upload.php",
			type: "POST",
			data: form_data,
			contentType: "multipart/form-data",
			// dataType: 'json',
			contentType: false,
			processData: false,
			success: function (response) {
				document.querySelector("." + previewelement_class).innerHTML +=
					'<div class="asiakirja_first"' +
					"" +
					">" +
					"<img src='https://editori.westface.fi/uploads/" +
					response +
					"'><p style='opacity:0;'>https://editori.westface.fi/uploads/" +
					response +
					"</p><div class='preview_delete' onclick='this.parentElement.remove();'></div></div><br>"
			},
		})
	}
	if (tobreak === true) {
		tobreak = false
		return
	}
	console.log(form_data)
}

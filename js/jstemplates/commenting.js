kommentti_count = 0
function removeHTMLTags(htmlString) {
	// Create a new DOMParser instance
	const parser = new DOMParser()
	// Parse the HTML string into a DOM document
	const doc = parser.parseFromString(
		htmlString.replaceAll(" ", "").replaceAll(" ", ""),
		"text/html"
	)
	// Extract the text content from the parsed document
	const textContent = doc.body.textContent || ""
	return textContent.trim() // Trim any leading or trailing whitespace
}

/**
 * Creates a new comment element based on the provided parameters and appends it to the DOM.
 * @param {string} mode - The mode of the comment.
 * @param {string} type - The type of the comment.
 * @param {string} mode_name - The name of the mode.
 * @param {number} mode_ycord - The y-coordinate of the mode.
 * @param {number} mode_xcord - The x-coordinate of the mode.
 * @param {number} mode_hcord - The height coordinate of the mode.
 * @param {number} mode_wcord - The width coordinate of the mode.
 * @param {number} mode_count - The count of the mode.
 * @param
 */
// Создание комментария
function comment__create(
	mode,
	type,
	mode_name,
	mode_ycord,
	mode_xcord,
	mode_hcord,
	mode_wcord,
	mode_count,
	mode_id,
	mode_specifications,
	ir_mitta_comment,
	ir_mitta_cfrom,
	ir_mitta_cto
) {
	new_com_id = 0
	const newDiv = document.createElement("span")
	const newDiv__comment = document.createElement("span")
	const newDiv__hidden_attention = document.createElement("input")
	const newDiv__hidden_attentioncommmets = document.createElement("input")
	let id =
		"com" + Math.random().toString(16).slice(2).toLowerCase().toLowerCase()

	comment__container = document.createElement("div")
	comment__text = document.createElement("p")
	comment__from = document.createElement("strong")
	comment__to = document.createElement("strong")
	comment__container.classList.add("comment__container")
	comment__from.classList.add("comment__from")
	comment__to.classList.add("comment__to")
	newDiv.appendChild(comment__container)

	comment__container.appendChild(comment__text)
	comment__container.appendChild(comment__from)
	comment__container.appendChild(comment__to)

	if (document.querySelector("#comment__answer_to").value == "") {
		newDiv.appendChild(newDiv__hidden_attention)
		newDiv.appendChild(newDiv__hidden_attentioncommmets)
		newDiv__comment_settings = document.createElement("i")
		newDiv__comment_del = document.createElement("i")
		newDiv__comment_settings.innerHTML =
			"<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M7.00159 9.45C6.33358 9.45 5.69293 9.19188 5.22058 8.73241C4.74822 8.27295 4.48286 7.64978 4.48286 7C4.48286 6.35022 4.74822 5.72705 5.22058 5.26759C5.69293 4.80812 6.33358 4.55 7.00159 4.55C7.6696 4.55 8.31025 4.80812 8.7826 5.26759C9.25495 5.72705 9.52032 6.35022 9.52032 7C9.52032 7.64978 9.25495 8.27295 8.7826 8.73241C8.31025 9.19188 7.6696 9.45 7.00159 9.45ZM12.3485 7.679C12.3773 7.455 12.3989 7.231 12.3989 7C12.3989 6.769 12.3773 6.538 12.3485 6.3L13.8669 5.159C14.0037 5.054 14.0396 4.865 13.9533 4.711L12.514 2.289C12.4277 2.135 12.2334 2.072 12.075 2.135L10.2831 2.835C9.90892 2.562 9.52032 2.324 9.06695 2.149L8.80068 0.294C8.7719 0.126 8.62077 0 8.1086 0H5.56231C5.38241 0 5.23128 0.126 5.2025 0.294L4.93623 2.149C4.48286 2.324 4.09425 2.562 3.72004 2.835L1.92815 2.135C1.76983 2.072 1.57552 2.135 1.48917 2.289L0.0498936 4.711C-0.0436593 4.865 -0.000480936 5.054 0.13625 5.159L1.65468 6.3C1.6259 6.538 1.60431 6.769 1.60431 7C1.60431 7.231 1.6259 7.455 1.65468 7.679L0.13625 8.841C-0.000480936 8.946 -0.0436593 9.135 0.0498936 9.289L1.48917 11.711C1.57552 11.865 1.76983 11.921 1.92815 11.865L3.72004 11.158C4.09425 11.438 4.48286 11.676 4.93623 11.851L5.2025 13.706C5.23128 13.874 5.38241 14 5.56231 14H8.1086C8.62077 14 8.7719 13.874 8.80068 13.706L9.06695 11.851C9.52032 11.669 9.90892 11.438 10.2831 11.158L12.075 11.865C12.2334 11.921 12.4277 11.865 12.514 11.711L13.9533 9.289C14.0396 9.135 14.0037 8.946 13.8669 8.841L12.3485 7.679Z' fill='#222222'/></svg>"
		newDiv__comment_del.innerHTML =
			"<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z' fill='#EB1010'/></svg>"
		newDiv__comment_settings.classList.add("m_btn")
		newDiv__comment_settings.classList.add("newDiv__comment_settings")
		newDiv__comment_del.classList.add("newDiv__comment_del")

		newDiv.dataset.commentname =
			document.querySelector("#kommentti__name").value
		newDiv.dataset.files = document.querySelector(
			"#comment__preview_files"
		).innerHTML
		newDiv.dataset.from = document.querySelector(
			"#kommentti_comment_from"
		).value
		newDiv.dataset.to = document.querySelector("#kommentti_comment_to").value
		// newDiv.dataset.priority = document.querySelector("#comment__priority").value;
		newDiv.dataset.deadline = document.querySelector("#comment__deadline").value
		newDiv.dataset.aihe = document.querySelector(
			'input[name="mitta__huomiot"]:checked'
		).value
		newDiv.dataset.content = document
			.querySelector("#kommentti_comment")
			.value.replaceAll("/(?:\r\n|\r|\n)/g", ", ")

		document.querySelector("#box-wrapper > main").prepend(newDiv)
		newDiv__comment_del.setAttribute("name", id)
		newDiv__comment_del.setAttribute(
			"onclick",
			"obj = this.getAttribute('name');delete_comment(obj);"
		)
		newDiv__comment_settings.setAttribute(
			"onclick",
			"open_comment('" +
				id +
				"','" +
				newDiv.dataset.commentname +
				"','" +
				newDiv.dataset.files +
				"','" +
				newDiv.dataset.from +
				"','" +
				newDiv.dataset.to +
				"','" +
				newDiv.dataset.priority +
				"','" +
				newDiv.dataset.deadline +
				"','" +
				newDiv.dataset.content.replaceAll("/(?:\r\n|\r|\n)/g", ", ") +
				"','" +
				id +
				"');"
		)

		input_step = document.querySelector("#step_drawscreen").value
		kommentti_count += 1
		newDiv__comment.innerHTML =
			document.querySelector("#kommentti__name").value + "#" + kommentti_count
		newDiv__hidden_attention.type = "hidden"
		newDiv__hidden_attention.name = "attentions"
		newDiv__hidden_attentioncommmets.type = "hidden"
		newDiv__hidden_attentioncommmets.name = "commmets"
		document
			.querySelector(".drawarea__controls_elementsone")
			.prepend(newDiv__comment)
		document
			.querySelector(".drawarea__controls_elementsone")
			.prepend(newDiv__hidden_attention)
		document
			.querySelector(".drawarea__controls_elementsone")
			.prepend(newDiv__hidden_attentioncommmets)

		newDiv.style.left =
			eval(document.querySelector("#cord_left").value) / 5 + "px"

		newDiv.style.bottom =
			eval(document.querySelector("#cord_up").value) / 5 + "px"

		if (document.querySelector("#cord_up").value == "") {
			newDiv.style.bottom = 0
		}

		if (document.querySelector("#kommentti_comment").value != "") {
			newDiv__hidden_attentioncommmets.value +=
				document.querySelector("#kommentti_comment").value +
				"<br> Tältä: " +
				document.querySelector("#kommentti_comment_from").value +
				"<br> Tälle: " +
				document.querySelector("#kommentti_comment_to").value
			comment__text.innerHTML =
				document.querySelector("#kommentti_comment").value
			comment__from.innerHTML = document.querySelector(
				"#kommentti_comment_from"
			).value
			comment__to.innerHTML = document.querySelector(
				"#kommentti_comment_to"
			).value
		}
		newDiv.setAttribute("onclick", "this.classList.toggle('comment__visible')")
		newDiv.classList.add("com")
		newDiv.dataset.no = kommentti_count

		newDiv__comment_settings.setAttribute("name", id)
		newDiv__comment_del.setAttribute("name", id)
		newDiv__comment.setAttribute("name", id)
		newDiv.setAttribute("id", id)
		newDiv__comment.appendChild(newDiv__comment_settings)
		newDiv__comment.appendChild(newDiv__comment_del)
		// const inH = document.createElement('input');
		// const inW = document.createElement('input');
		// inH.setAttribute('type', 'num');
		// inW.setAttribute('type', 'num');
		// touchedElement('#box-wrapper > main', '#drawarea_w', '#drawarea_h', newDiv, 'elem', inH, inW );
		if (newDiv.dataset.from !== document.querySelector("#current_user").value) {
			newDiv__comment_del.style.display = "none"
		}

		document.querySelector("#kommentti__filesubmit").click()
	}

	project_id = document.querySelector("#rooms > input.id").value
	_attachments = document.querySelector("#comment__preview_files").innerText
	// _urgency = document.querySelector("#comment__priority").value;
	_ending_time = ""
	_deadline = document.querySelector("#comment__deadline").value
	room_id = document.querySelector(".kommentti_nappula").getAttribute("id")
	x_y =
		parseFloat(document.querySelector("#cord_left").value) +
		"|" +
		parseFloat(document.querySelector("#cord_up").value)
	_name = document.querySelector("#kommentti__name").value
	_aihe = document.querySelector('input[name="mitta__huomiot"]:checked').value
	_answer_to = document.querySelector("#comment__answer_to").value
	setTimeout(function () {
		formData = {
			comment_id: id,
			project_id: project_id,
			room: room_id + ">" + mode_room,
			name: _name,
			x_y: x_y,
			content: document
				.querySelector("#kommentti_comment")
				.value.replaceAll(",", " - "),
			attachments: _attachments,
			comment_from: document
				.querySelector("#kommentti_comment_from")
				.value.replaceAll(",", " - "),
			comment_to: document
				.querySelector("#kommentti_comment_to")
				.value.replaceAll(",", " - ")
				.toLowerCase(),
			ending_time: _ending_time,
			deadline: _deadline,
			aihe: _aihe,
			answer_to: _answer_to,
		}

		$.ajax({
			type: "POST",
			url: "/vendor/addcomment.php",
			data: formData,
			error: function (jqxhr, status, exception) {
				alert("Tietokantavirhe, soita numeroon +358449782028")
				console.log(formData)
			},
		}).done(function (data) {
			// alert('Seinä ' + current_room + ' tallennettu');
			// console.log("saved Data: " + data);
		})
	}, 500)
}
/**
 * Changes the coordinates of new div elements and retrieves the value of an input element.
 * This function selects specific elements from the DOM using querySelector and updates their positions.
 * It also retrieves the value of an input element with the id 'step_drawscreen'.
 * @returns None
 */
function change__newdiv_cord_comment() {
	const drawscreen_section_one = document.querySelector(
		"#drawscreen_section_one"
	)
	const drawscreen_section_two = document.querySelector(
		"#drawscreen_section_two"
	)
	const drawscreen_section_three = document.querySelector(
		"#drawscreen_section_three"
	)
	const drawscreen_section_eight = document.querySelector(
		"#drawscreen_section_eight"
	)
	const input_step = document.querySelector("#step_drawscreen").value
}

/**
 * This function handles null comment cord.
 * It selects elements from the DOM based on their IDs and sets values accordingly.
 * If the input step is "drawscreen_section_one", it sets the values of cord_up and cord_left to "0".
 * @returns None
 */
function null__comment_cord() {
	const drawscreen_section_one = document.querySelector(
		"#drawscreen_section_one"
	)
	const drawscreen_section_two = document.querySelector(
		"#drawscreen_section_two"
	)
	const drawscreen_section_three = document.querySelector(
		"#drawscreen_section_three"
	)
	const input_step = document.querySelector("#step_drawscreen").value

	if (input_step == "drawscreen_section_one") {
		document.querySelector("#cord_up").value = "0"
		document.querySelector("#cord_left").value = "0"
	}
}

/**
 * Retrieves the coordinates of specific elements based on the input step provided.
 * @returns None
 */
function give__comment_cord() {
	const drawscreen_section_one = document.querySelector(
		"#drawscreen_section_one"
	)
	const drawscreen_section_two = document.querySelector(
		"#drawscreen_section_two"
	)
	const drawscreen_section_three = document.querySelector(
		"#drawscreen_section_three"
	)
	input_step = document.querySelector("#step_drawscreen").value
	if (input_step == "drawscreen_section_one") {
		getElementCoords("#cord_up", "#cord_left")
	}
	if (input_step == "drawscreen_section_two") {
		getElementCoords("#aukotcord_low", "#aukotcord_left")
	}
	if (input_step == "drawscreen_section_three") {
		getElementCoords("#lvcord_low", "#lvcord_left")
	}
}

/**
 * Checks the input value against the maximum value allowed and updates the styling accordingly.
 * @param {HTMLElement} inp - The input element to check.
 * @returns None
 */
function commentcord__check(inp) {
	console.log(
		"Cord check inp " +
			parseFloat(inp.value) +
			" --- " +
			parseFloat(inp.getAttribute("max"))
	)

	if (parseFloat(inp.value) > parseFloat(inp.dataset.maximum)) {
		inp.style.border = "3px dashed red"
		document.querySelector(
			"#drawscreen_section_one .drawarea__controls_btn"
		).style.display = "none"
	} else {
		inp.style.border = "unset"
		inp.style.borderBottom = "1px solid #000"
		document.querySelector(
			"#drawscreen_section_one .drawarea__controls_btn"
		).style.display = "flex"
	}
}

/**
 * Checks if an element with the id 'kommentti_comment_from' exists in the document.
 * If it does, it retrieves the value of the element and sets it as the value of the element.
 * @returns None
 */
if (document.querySelector("#kommentti_comment_from")) {
	user = document.querySelector("#kommentti_comment_from").value
	document.querySelector("#kommentti_comment_from").value = user
}

function delete_comment(id) {
	cur_mp = document.querySelector("#" + id)
	cur_mp.remove()
	names = document.getElementsByName(id)
	for (var i = 0; i < names.length; i++) {
		names[i].remove()
	}
}

/**
 * Opens a comment modal with the specified details and loads answers related to the comment.
 * @param {string} id - The ID of the comment.
 * @param {string} name - The name of the commenter.
 * @param {string} tiedostot - The files attached to the comment.
 * @param {string} from - The sender of the comment.
 * @param {string} to - The recipient of the comment.
 * @param {string} priority - The priority of the comment.
 * @param {string} deadline - The deadline of the comment.
 * @param {string} aihe - The subject of the comment.
 * @param {string} content - The content of the comment.
 * @
 */
function open_comment(
	id,
	name,
	tiedostot,
	from,
	to,
	priority,
	deadline,
	aihe,
	content,
	comment_id
) {
	document.querySelector("#comment__answer_to").value = id
	document
		.querySelector("#drawscreen_section_one > div.modal-container")
		.classList.add("two")
	document
		.querySelector("#drawscreen_section_one > div.modal-container")
		.classList.remove("out")
	document.querySelector("body").classList.add("modal-active")
	document.querySelector("body").classList.add("commentmodal_active")
	document.querySelector(".commentbox__name").value = name
	com_id = comment_id
	document.querySelector(".kuittaus_nappula").setAttribute("name", comment_id)
	document.querySelector(".commentbox__tiedostot").innerHTML = tiedostot
	document.querySelector(".commentbox__from").innerHTML = from //OK
	document.querySelector(".commentbox__to").innerHTML = to //OK
	document.querySelector(".commentbox__priority").innerHTML = priority //OK
	document.querySelector(".commentbox__deadline").innerHTML = deadline //OK
	document.querySelector(".commentbox__aihe").innerHTML = aihe //OK
	document.querySelector(".commentbox__content").value = content //OK

	$.ajax({
		url: "/getanswers.php",
		type: "post",
		data: {
			answer_to: id,
			user: document.querySelector("#current_user").value,
		},
		success: (answers) => {
			let answersDiv = document.querySelector("#commentbox__answers")
			answersDiv.innerHTML = "<h6>Vastaukset:</h6>"

			answers.split("~").forEach((answer) => {
				let grand_array = answer.split(",")

				if (grand_array.length < 13) {
					return // continue
				}

				let answer_name = grand_array[3]
				let answer_files = grand_array[6]
					.replaceAll("/(?:\r\n|\r|\n)/g", ", ")
					.replaceAll("\n", " ")
				let answer_from = grand_array[7]
				let answer_to = grand_array[8]
				let answer_priority = grand_array[9]
				let answer_aihe = grand_array[12]
				let answer_deadline = grand_array[13]
				let answer_content = grand_array[5].replaceAll(
					"/(?:\r\n|\r|\n)/g",
					"  "
				)

				let answer_child_id = grand_array[0]
				console.log("answer_parent " + answer_child_id)

				answersDiv.innerHTML += `
        <hr style="margin-top: 50px;">
        <section class="commentbox comment_answer">
          <h2 class="commentbox__name">${answer_name}</h2>
          <div class="row">
              <div class="col-3">
                <h4>Tiedostot:</h4>
                <span class="commentbox__tiedostot">${answer_files}</span>
              </div>
              <div class="col-3">
                  <h4>Keneltä:</h4>
                  <span class="commentbox__from">${answer_from}</span>
              </div>
              <div class="col-3">
                  <h4>Kenelle:</h4>
                  <span class="commentbox__to">${answer_to}</span>
              </div>
              <div class="col-3">
                  <h4>Aihe:</h4>
                  <span class="commentbox__aihe">${answer_aihe}</span>
              </div>
              <div class="col-3">
                  <h4>Deadline:</h4>
                  <span class="commentbox__deadline">${answer_deadline}</span>
              </div>
          </div>
          <div class="commentbox__text">
              <h4>Sisältö:</h4>
              <p class="commentbox__content">${answer_content}</p>
          </div>
          <div class="row center">
              <div class="col-4"><div class="modal_close_btn drawarea__controls_btn sulkemis_nappula" onclick="document.querySelector('#reclamation__popup').classList.remove('two');document.querySelector('#reclamation__popup').classList.add('out');">Sulje</div></div>
              <div class="col-4"><div class="modal_close_btn drawarea__controls_btn kuittaus_nappula" name="${answer_child_id}" onclick="comment__kuittaus(this.getAttribute('name'));">Kuittaan tehdyksi</div></div>
          </div>
        </section>`
			})
		},
	})
}

/**
 * Function to mark a comment as acknowledged by sending a POST request to the server.
 * @param {HTMLElement} comment_id - The HTML element representing the comment to be acknowledged.
 * @returns None
 */
function comment__kuittaus(comment_id) {
	date = new Date()

	let _day = date.getDate()
	let _month = date.getMonth() + 1
	let year = date.getFullYear()

	let _hour = date.getHours()
	let _min = date.getMinutes()
	let _sec = date.getSeconds()
	if (_month < 10) {
		month = "0" + _month
	} else {
		month = _month
	}
	if (_day < 10) {
		day = "0" + _day
	} else {
		day = _day
	}
	if (_hour < 10) {
		hour = "0" + _hour
	} else {
		hour = _hour
	}
	if (_min < 10) {
		min = "0" + _min
	} else {
		min = _min
	}
	if (_sec < 10) {
		sec = "0" + _sec
	} else {
		sec = _sec
	}
	currentDate = `${day}-${month}-${year} ${hour}:${min}:${sec}`
	setTimeout(function () {
		formData = {
			comment_id: comment_id.getAttribute("name"),
			ending_time: currentDate,
		}
		console.log(formData)
		$.ajax({
			type: "POST",
			url: "vendor/comment__kuittaus.php",
			data: formData,
			error: function (jqxhr, status, exception) {
				alert("Tietokantavirhe, soita numeroon +358449782028")
			},
		}).done(function (data) {
			alert("Kommentti Kuitattu")
			location.reload()
		})
	}, 500)
}

// tila_btns = document.querySelectorAll(".house__wall_status");
// for (let i = 0; i < tila_btns.length; i++) {
//   tila_btns[i].addEventListener("click", );
// }

// function tila_functionbundle(arg) {
//   apartment = arg;
//   // initalize_cross(arg);
//   initializeroom_comments(arg);
// }

/**
 * Initializes room comments based on the room and menu provided.
 * @param {HTMLElement} room - The room element to initialize comments for.
 * @param {HTMLElement} menu - The menu element associated with the room.
 * @returns None
 */
function initializeroom_comments(room, menu) {
	ir_no = room.dataset.room

	console.log("initializeroom_comments")

	mode_room = ir_no.toLowerCase()
	document.querySelector("#step_drawscreen").value = "drawscreen_section_one"
	if (mode_room == "a") {
		ir_value = apartment.dataset.aroom
	}
	if (mode_room == "b") {
		ir_value = apartment.dataset.broom
	}
	if (mode_room == "c") {
		ir_value = apartment.dataset.croom
	}
	if (mode_room == "d") {
		ir_value = apartment.dataset.droom
	}
	if (mode_room == "k") {
		ir_value = apartment.dataset.kroom
	}
	if (mode_room == "l") {
		ir_value = apartment.dataset.lroom
	}

	room_status = ir_value.split(",")[1]
	// INITIALIZE CURRENT STATUS DA
	da_roomnav = document.querySelectorAll(".house__wall")
	for (var i = da_roomnav.length - 1; i >= 0; i--) {
		da_roomnav[i].classList.remove("current__housewall")
	}
	da_curnav = document.querySelectorAll(".tohide__room_" + mode_room)
	for (var i = da_curnav.length - 1; i >= 0; i--) {
		da_curnav[i].classList.add("current__housewall")
	}
	// START CLEARING
	coms = canvas.querySelectorAll(".com")

	for (var i = 0; i < coms.length; i++) {
		coms[i].remove()
	}

	comments__controlelems = document.querySelectorAll(
		"div.drawarea__controls_elementsone.drawarea__things > span"
	)

	for (let i = 0; i < comments__controlelems.length; i++) {
		comments__controlelems[i].remove()
	}

	// STOP CLEARING
	if (ir_value.length > 5) {
		kommentti_count = 0
		ir_coms = document.querySelector("#open_comments").value.split("~")

		//Comments
		for (var i = 0; i < ir_coms.length; i++) {
			// if (ir_coms[i].length > 4) {
			//   console.log(ir_coms[i].split(",")[2].split(">")[0].replaceAll(" ","").replaceAll("-","").toLowerCase());
			//   console.log(document.querySelector("#rooms > input.room").value.replaceAll(" ","").replaceAll("-","").toLowerCase());
			// }
			if (
				ir_coms[i].length > 4 &&
				ir_coms[i]
					.split(",")[2]
					.split(">")[0]
					.replaceAll(" ", "")
					.replaceAll("-", "")
					.toLowerCase() ==
					document
						.querySelector("#rooms > input.room")
						.value.replaceAll(" ", "")
						.replaceAll("-", "")
						.toLowerCase()
			) {
				console.log("ROOM OK ")
				name_splitted = ir_coms[i].split(",")[2].split(">")[1]
				if (ir_coms[i].length > 5 && name_splitted == mode_room) {
					grande_array = ir_coms[i]

					comment__restore(grande_array)
					refresh__drawcontrols()
				}
			}
		}
	}

	ir_no = room.dataset.room
	mode_room = ir_no.toLowerCase()

	if (mode_room == "a") {
		ir_value = apartment.dataset.aroom
	}
	if (mode_room == "b") {
		ir_value = apartment.dataset.broom
	}
	if (mode_room == "c") {
		ir_value = apartment.dataset.croom
	}
	if (mode_room == "d") {
		ir_value = apartment.dataset.droom
	}
	if (mode_room == "k") {
		ir_value = apartment.dataset.kroom
	}
	if (mode_room == "l") {
		ir_value = apartment.dataset.lroom
	}

	refresh__drawcontrols()
}

/**
 * Restores a comment based on the provided data in the grand_array.
 * @param {string} ga - The string containing the data for the comment.
 * @returns None
 */
function comment__restore(ga) {
	grand_array = ga.split(",")

	if (grand_array[14] == "") {
		const newDiv = document.createElement("span")
		const newDiv__comment = document.createElement("span")
		const newDiv__hidden_attention = document.createElement("input")
		const newDiv__hidden_attentioncommmets = document.createElement("input")
		let id = grand_array[0]

		newDiv__comment_settings = document.createElement("i")
		newDiv__comment_del = document.createElement("i")

		comment__container = document.createElement("div")
		comment__text = document.createElement("p")
		comment__from = document.createElement("strong")
		comment__to = document.createElement("strong")
		comment__container.classList.add("comment__container")
		comment__from.classList.add("comment__from")
		comment__to.classList.add("comment__to")
		newDiv.appendChild(comment__container)

		comment__container.appendChild(comment__text)
		comment__container.appendChild(comment__from)
		comment__container.appendChild(comment__to)
		newDiv.appendChild(newDiv__hidden_attention)
		newDiv.appendChild(newDiv__hidden_attentioncommmets)

		newDiv__comment_settings.innerHTML =
			"<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M7.00159 9.45C6.33358 9.45 5.69293 9.19188 5.22058 8.73241C4.74822 8.27295 4.48286 7.64978 4.48286 7C4.48286 6.35022 4.74822 5.72705 5.22058 5.26759C5.69293 4.80812 6.33358 4.55 7.00159 4.55C7.6696 4.55 8.31025 4.80812 8.7826 5.26759C9.25495 5.72705 9.52032 6.35022 9.52032 7C9.52032 7.64978 9.25495 8.27295 8.7826 8.73241C8.31025 9.19188 7.6696 9.45 7.00159 9.45ZM12.3485 7.679C12.3773 7.455 12.3989 7.231 12.3989 7C12.3989 6.769 12.3773 6.538 12.3485 6.3L13.8669 5.159C14.0037 5.054 14.0396 4.865 13.9533 4.711L12.514 2.289C12.4277 2.135 12.2334 2.072 12.075 2.135L10.2831 2.835C9.90892 2.562 9.52032 2.324 9.06695 2.149L8.80068 0.294C8.7719 0.126 8.62077 0 8.1086 0H5.56231C5.38241 0 5.23128 0.126 5.2025 0.294L4.93623 2.149C4.48286 2.324 4.09425 2.562 3.72004 2.835L1.92815 2.135C1.76983 2.072 1.57552 2.135 1.48917 2.289L0.0498936 4.711C-0.0436593 4.865 -0.000480936 5.054 0.13625 5.159L1.65468 6.3C1.6259 6.538 1.60431 6.769 1.60431 7C1.60431 7.231 1.6259 7.455 1.65468 7.679L0.13625 8.841C-0.000480936 8.946 -0.0436593 9.135 0.0498936 9.289L1.48917 11.711C1.57552 11.865 1.76983 11.921 1.92815 11.865L3.72004 11.158C4.09425 11.438 4.48286 11.676 4.93623 11.851L5.2025 13.706C5.23128 13.874 5.38241 14 5.56231 14H8.1086C8.62077 14 8.7719 13.874 8.80068 13.706L9.06695 11.851C9.52032 11.669 9.90892 11.438 10.2831 11.158L12.075 11.865C12.2334 11.921 12.4277 11.865 12.514 11.711L13.9533 9.289C14.0396 9.135 14.0037 8.946 13.8669 8.841L12.3485 7.679Z' fill='#222222'/></svg>"
		newDiv__comment_del.innerHTML =
			"<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z' fill='#EB1010'/></svg>"
		newDiv__comment_settings.classList.add("m_btn")
		newDiv__comment_settings.classList.add("newDiv__comment_settings")
		newDiv__comment_del.classList.add("newDiv__comment_del")

		newDiv.dataset.commentname = grand_array[3]
		newDiv.dataset.files = grand_array[6]
			.replaceAll("/(?:\r\n|\r|\n)/g", ", ")
			.replaceAll("\n", " ")
		newDiv.dataset.from = grand_array[7]
		newDiv.dataset.to = grand_array[8]
		newDiv.dataset.priority = grand_array[9]
		newDiv.dataset.aihe = grand_array[12]
		newDiv.dataset.deadline = grand_array[13]
		newDiv.dataset.content = grand_array[5].replaceAll(
			"/(?:\r\n|\r|\n)/g",
			"  "
		)

		newDiv__comment_del.setAttribute("name", id)
		newDiv__comment_del.setAttribute(
			"onclick",
			"obj = this.getAttribute('name');delete_comment(obj);"
		)
		newDiv__comment_settings.setAttribute(
			"onclick",
			"open_comment('" +
				id +
				"','" +
				newDiv.dataset.commentname +
				"','" +
				newDiv.dataset.files +
				"','" +
				newDiv.dataset.from +
				"','" +
				newDiv.dataset.to +
				"','" +
				newDiv.dataset.priority +
				"','" +
				newDiv.dataset.deadline +
				"','" +
				newDiv.dataset.aihe +
				"','" +
				newDiv.dataset.content.replaceAll("/(?:\r\n|\r|\n)/g", ", ") +
				"','" +
				id +
				"');"
		)

		console.log("newDiv:", newDiv)
		console.log("dataset:", newDiv.dataset)

		kommentti_count += 1
		newDiv__comment.innerHTML = newDiv.dataset.commentname
		newDiv__comment.classList.add(id)
		newDiv__hidden_attention.type = "hidden"
		newDiv__hidden_attention.name = "attentions"
		newDiv__hidden_attentioncommmets.type = "hidden"
		newDiv__hidden_attentioncommmets.name = "commmets"

		newDiv.style.left = eval(grand_array[4].split("|")[0]) / 5 + "px"
		newDiv.style.bottom = eval(grand_array[4].split("|")[1]) / 5 + "px"

		if (grand_array[5] != "") {
			newDiv__hidden_attentioncommmets.value +=
				grand_array[5] +
				"<br> Tältä: " +
				grand_array[7] +
				"<br> Tälle: " +
				grand_array[8]
			comment__text.innerHTML = grand_array[5]
			comment__from.innerHTML = grand_array[7]

			comment__to.innerHTML = grand_array[8]
		}
		newDiv.setAttribute("onclick", "this.classList.toggle('comment__visible')")
		newDiv.classList.add("com")
		newDiv.dataset.no = kommentti_count

		newDiv__comment_settings.setAttribute("name", id)
		newDiv__comment_del.setAttribute("name", id)
		newDiv__comment.setAttribute("name", id)
		newDiv.setAttribute("id", id)
		newDiv__comment.appendChild(newDiv__comment_settings)
		newDiv__comment.appendChild(newDiv__comment_del)

		document
			.querySelector(".drawarea__controls_elementsone")
			.prepend(newDiv__comment)
		document
			.querySelector(".drawarea__controls_elementsone")
			.prepend(newDiv__hidden_attention)
		document
			.querySelector(".drawarea__controls_elementsone")
			.prepend(newDiv__hidden_attentioncommmets)

		if (newDiv.dataset.from !== document.querySelector("#current_user").value) {
			newDiv__comment_del.style.display = "none"
		}
		document.querySelector("#box-wrapper > main").prepend(newDiv)
	}
}

// function fetch_added_users() {
//   $.ajax({
//     url: "/get-added-users.php",
//     type: "post",
//     data: {
//       project_id: document.querySelector("#current_project_id").value
//     },
//     success: (users) => {
//       console.log("USERS:" + users);
//       users = JSON.parse(users);
//       let comment_to = document.querySelector("#kommentti_comment_to");
//       comment_to.innerHTML = '';
//       try {
//         users.forEach((user) => {
//         comment_to.innerHTML += `<option value="${user}">${user}</option>`;
//       });
//       } catch (error) {
//         console.log(error);
//       }

//     }
//   });
// }

/**
 * Initializes building comments based on the specified mode.
 * @param {string} mode - The mode to determine how to initialize the building comments.
 * Modes can be 'all', 'all_raktyo', or any other specific mode.
 * @returns None
 */
function initializebuilding_comments(mode) {
	ir_coms = document.querySelector("#open_comments").value.split("~")
	rooms_probs = document.querySelectorAll(".project__building_room")

	for (let rp = 0; rp < rooms_probs.length; rp++) {
		rooms_probs[rp].classList.remove("prob")
		rooms_probs[rp].classList.remove("problem")
	}

	_hours_estimate = 0
	_hours_estimates = document.querySelectorAll(".commentbox__hours")

	for (let h_e = 0; h_e < _hours_estimates.length; h_e++) {
		if (isNaN(_hours_estimates[h_e].value) == false) {
			_hours_estimate += parseFloat(_hours_estimates[h_e].value)
		}
	}

	document.querySelector("#hours__estimate").innerHTML =
		parseFloat(_hours_estimate) + "h"

	console.log(mode)

	if (mode === "all") {
		for (let q = 0; q < ir_coms.length; q++) {
			if (ir_coms[q].length > 5) {
				a_name = removeHTMLTags(ir_coms[q])
					.replaceAll("--Tila", "")
					.replaceAll(" <br> ", "")
					.replaceAll(" <br>", "")
					.replaceAll("<br> ", "")
					.replaceAll("<br", "")
					.replaceAll(" ", "")
					.toLowerCase()
					.split(",")[2]
					.split(">")[0]
					.replaceAll(" ", "")
				console.log("a_name: " + a_name)
				console.log("removeHTMLTags(ir_coms[q]): " + removeHTMLTags(ir_coms[q]))
				// a_name = ir_coms[q].replaceAll("--Tila","").replaceAll(" ","").replaceAll(" ","").replaceAll("/","").replaceAll("<br","").toLowerCase().split(",")[2].split(">")[0];
				problem_apartment = document.querySelector(
					"." +
						a_name
							.replaceAll(" ", "")
							.replaceAll("<br>", "")
							.replaceAll("/", "")
				)
				problem_apartment.classList.remove("bg-1")
				problem_apartment.classList.remove("bg-2")

				if (ir_coms[q].split(",")[9] == "critical") {
					problem_apartment.classList.add("problem")
				} else {
					problem_apartment.classList.add("prob")
				}
			}
		}

		statuses = document.querySelectorAll(".house__wall_status")
		for (let s = 0; s < statuses.length; s++) {
			statuses[s].classList.remove("prob")
		}

		console.log("initializebuilding_comments()")
	} else if (mode === "all_raktyo") {
		for (let q = 0; q < ir_coms.length; q++) {
			if (ir_coms[q].length > 5) {
				a_name = removeHTMLTags(ir_coms[q])
					.replaceAll("--Tila", "")
					.replaceAll(" <br> ", "")
					.replaceAll(" <br>", "")
					.replaceAll("<br> ", "")
					.replaceAll("<br", "")
					.replaceAll(" ", "")
					.toLowerCase()
					.split(",")[2]
					.split(">")[0]
					.replaceAll(" ", "")
				if (
					ir_coms[q].split(",")[8].toLowerCase() === "rakennustyo" ||
					ir_coms[q].split(",")[8].toLowerCase() === "rakennustyo2" ||
					ir_coms[q].split(",")[8].toLowerCase() === "rakennustyo3"
				) {
					// a_name = ir_coms[q].replaceAll("--Tila","").replaceAll(" ","").replaceAll(" ","").replaceAll("/","").replaceAll("<br","").toLowerCase().split(",")[2].split(">")[0];
					problem_apartment = document.querySelector(
						"." +
							a_name
								.replaceAll(" ", "")
								.replaceAll("<br>", "")
								.replaceAll("/", "")
					)
					problem_apartment.classList.remove("bg-1")
					problem_apartment.classList.remove("bg-2")

					if (ir_coms[q].split(",")[9] == "critical") {
						problem_apartment.classList.add("problem")
					} else {
						problem_apartment.classList.add("prob")
					}
				}
			}
		}

		statuses = document.querySelectorAll(".house__wall_status")
		for (let s = 0; s < statuses.length; s++) {
			statuses[s].classList.remove("prob")
		}

		// tables = document.querySelectorAll(".tablepreview");

		// for (let t = 0; t < tables.length; t++) {
		//   pbr = tables[t].querySelectorAll(".project__building_room");
		//   pbr_array = [];
		//   for (let r = 0; r < pbr.length; r++) {
		//     if(isNaN(parseFloat(pbr[r].dataset.y)) == false) {
		//       pbr_array.push(parseFloat(pbr[r].dataset.y));
		//     }
		//   }
		//   max_pbrarray = Math.min(...pbr_array);
		//   rowcount = 10 - max_pbrarray;
		//   tables[t].style.maxHeight = "calc("+rowcount+"*80px)";

		// }
	} else {
		for (let q = 0; q < ir_coms.length; q++) {
			if (ir_coms[q].length > 5) {
				a_name = removeHTMLTags(ir_coms[q])
					.replaceAll("--Tila", "")
					.replaceAll(" <br> ", "")
					.replaceAll(" <br>", "")
					.replaceAll("<br> ", "")
					.replaceAll("<br", "")
					.replaceAll(" ", "")
					.toLowerCase()
					.split(",")[2]
					.split(">")[0]
					.replaceAll(" ", "")
				if (ir_coms[q].split(",")[8].toLowerCase() === mode.toLowerCase()) {
					// a_name = ir_coms[q].replaceAll("--Tila","").replaceAll(" ","").replaceAll(" ","").replaceAll("/","").replaceAll("<br","").toLowerCase().split(",")[2].split(">")[0];
					problem_apartment = document.querySelector(
						"." +
							a_name
								.replaceAll(" ", "")
								.replaceAll("<br>", "")
								.replaceAll("/", "")
					)
					problem_apartment.classList.remove("bg-1")
					problem_apartment.classList.remove("bg-2")

					if (ir_coms[q].split(",")[9] == "critical") {
						problem_apartment.classList.add("problem")
					} else {
						problem_apartment.classList.add("prob")
					}
				}
			}
		}

		statuses = document.querySelectorAll(".house__wall_status")
		for (let s = 0; s < statuses.length; s++) {
			statuses[s].classList.remove("prob")
		}

		// tables = document.querySelectorAll(".tablepreview");

		// for (let t = 0; t < tables.length; t++) {
		//   pbr = tables[t].querySelectorAll(".project__building_room");
		//   pbr_array = [];
		//   for (let r = 0; r < pbr.length; r++) {
		//     if(isNaN(parseFloat(pbr[r].dataset.y)) == false) {
		//       pbr_array.push(parseFloat(pbr[r].dataset.y));
		//     }
		//   }
		//   max_pbrarray = Math.min(...pbr_array);
		//   rowcount = 10 - max_pbrarray;
		//   tables[t].style.maxHeight = "calc("+rowcount+"*80px)";

		// }
	}
}
initializebuilding_comments("all")

/**
 * Function to toggle visibility of a comment box and set its content based on the mode.
 * @param {HTMLElement} id - The HTML element representing the comment box.
 * @param {string} mode - The mode of the comment box ('mode1' or 'mode2').
 * @returns None
 */
function comment__help(id, mode) {
	name = id.getAttribute(`name`)
	gp = id.parentElement.parentElement.parentElement
	gp.querySelector(".commentbox__help").classList.toggle("visible")
	// document.querySelector("#reclamation__popup").classList.remove("out");

	if (mode == "mode1") {
		gp.querySelector(".kommentti__name").value = "Vastaus: "
		gp.querySelector(".commentbox__help_who").innerHTML = "Kenelle"
		gp.querySelector(".commentbox__help_options").innerHTML =
			'<option value="Marko">Marko</option><option value="Vesi">Vesi</option><option value="Sähkö">Sähkö</option><option value="IV">IV</option><option value="Lukko">Lukko</option><option value="PV">PV</option><option value="Toimisto">Toimisto</option>'
		gp.querySelector(".commentbox__help_order").style.display = "none"
		gp.querySelector(".commentbox__help_order_2").style.display = "none"
		gp.querySelector(".commentbox__help_order_3").style.display = "none"
		gp.querySelector(".commentbox__help_order_4").style.display = "none"
		gp.querySelector(".commentbox__help_order_5").style.display = "none"
		gp.querySelector(".commentbox__text > h4").innerHTML = "Kommentin sisältö:"
	}
	if (mode == "mode2") {
		gp.querySelector(".kommentti__name").value = "Tilauspyyntö: "
		gp.querySelector(".commentbox__help_who").innerHTML = "Kauppa:"
		gp.querySelector(".commentbox__help_options").innerHTML =
			'<option value="Stark">Stark</option><option value="Westface">Westface</option><option value="P20 Varasto">P20 Varasto</option><option value="P20 K-krs">P20 K-krs</option><option value="Peltineloset">Peltineloset</option><option value="Kannatuspalvelu">Kannatuspalvelu</option><option value="Toimisto">Toimisto</option><option value="Muu">Muu</option>'
		gp.querySelector(".commentbox__help_order").style.display = "block"
		gp.querySelector(".commentbox__help_order_2").style.display = "block"
		gp.querySelector(".commentbox__help_order_3").style.display = "block"
		gp.querySelector(".commentbox__help_order_4").style.display = "block"
		gp.querySelector(".commentbox__help_order_5").style.display = "flex"
		gp.querySelector(".commentbox__text > h4").innerHTML =
			"Käyttötarkoitus (lyhyesti):"
	}
}

// $.ajax({
//   url: "/getanswers.php",
//   type: "post",
//   data: {
//     answer_to: id,
//     user: document.querySelector("#current_user").value
//   },
//   success: (answers) => {
//     let answersDiv = document.querySelector("#commentbox__answers");
//     answersDiv.innerHTML = "<h6>Vastaukset:</h6>";

//     answers.split("~").forEach((answer) => {
//       let grand_array = answer.split(",");

//       if (grand_array.length < 13) {
//         return; // continue
//       }

//       let answer_name = grand_array[3];
//       let answer_files = grand_array[6].replaceAll("/(?:\r\n|\r|\n)/g", ", ").replaceAll("\n", " ");
//       let answer_from = grand_array[7];
//       let answer_to = grand_array[8];
//       let answer_priority = grand_array[9];
//       let answer_aihe = grand_array[12];
//       let answer_deadline = grand_array[13];
//       let answer_content = grand_array[5].replaceAll("/(?:\r\n|\r|\n)/g", "  ");

//       let answer_child_id = grand_array[0];
//       console.log("answer_parent "+answer_child_id);
//       // Sorry for that, I don't know how to use DOM and I have a burning deadline.
//       // P.S. Your code is good and understandable, respect for this.
//       answersDiv.innerHTML += `
//       <hr style="margin-top: 50px;">
//       <section class="commentbox comment_answer">
//         <h2 class="commentbox__name">${answer_name}</h2>
//         <div class="row">
//             <div class="col-3">
//               <h4>Tiedostot:</h4>
//               <span class="commentbox__tiedostot">${answer_files}</span>
//             </div>
//             <div class="col-3">
//                 <h4>Keneltä:</h4>
//                 <span class="commentbox__from">${answer_from}</span>
//             </div>
//             <div class="col-3">
//                 <h4>Kenelle:</h4>
//                 <span class="commentbox__to">${answer_to}</span>
//             </div>
//             <div class="col-3">
//                 <h4>Aihe:</h4>
//                 <span class="commentbox__aihe">${answer_aihe}</span>
//             </div>
//             <div class="col-3">
//                 <h4>Deadline:</h4>
//                 <span class="commentbox__deadline">${answer_deadline}</span>
//             </div>
//         </div>
//         <div class="commentbox__text">
//             <h4>Sisältö:</h4>
//             <p class="commentbox__content">${answer_content}</p>
//         </div>
//         <div class="row center">
//             <div class="col-4"><div class="modal_close_btn drawarea__controls_btn sulkemis_nappula" onclick="document.querySelector('#reclamation__popup').classList.remove('two');document.querySelector('#reclamation__popup').classList.add('out');">Sulje</div></div>
//             <div class="col-4"><div class="modal_close_btn drawarea__controls_btn kuittaus_nappula" name="${answer_child_id}" onclick="comment__kuittaus(this.getAttribute('name'));">Kuittaan tehdyksi</div></div>
//         </div>
//       </section>`
//     });
//   }
// });

/**
 * Creates a simpler comment based on the parent ID and the current element.
 * @param {string} parent_id - The ID of the parent element.
 * @param {HTMLElement} this_element - The current element.
 * @returns None
 */
function comment__create_simpler(parent_id, this_element) {
	document.querySelector("body").classList.toggle("bg")

	let id =
		"com" + Math.random().toString(16).slice(2).toLowerCase().toLowerCase()
	parent_answer = this_element.parentElement
	commentbox__help_order = parent_answer.querySelector(
		".commentbox__help_order"
	)
	new_com_id = parent_answer
	if (commentbox__help_order.style.display == "none") {
		setTimeout(function () {
			project_id = parseFloat(
				document.querySelector("#current_project_id").value
			)
			room_id = document.querySelector("#roomname").value.replaceAll(" ", "")
			_attachments = parent_answer.querySelector(
				".comment__preview_files"
			).innerText
			_ending_time = ""
			_deadline = parent_answer.querySelector(".comment__deadline").value
			_x_y = "5|5"
			_content = parent_answer
				.querySelector(".kommentti_comment")
				.value.replaceAll(",", " - ")
			_name = parent_answer.querySelector(".kommentti__name").value
			_comment_from = parent_answer
				.querySelector(".kommentti_comment_from")
				.value.replaceAll(",", " - ")
			_comment_to = parent_answer
				.querySelector(".kommentti_comment_to")
				.value.replaceAll(",", " - ")
			_urgency = "no_critical"
			_aihe = _comment_from + " kommentit"
			_answer_to = this_element.getAttribute("name")

			formData = {
				comment_id: id,
				project_id: project_id,
				room: room_id,
				name: _name,
				x_y: _x_y,
				content: _content,
				attachments: _attachments,
				comment_from: _comment_from,
				comment_to: _comment_to,
				urgency: _urgency,
				ending_time: _ending_time,
				deadline: _deadline,
				aihe: _aihe,
				answer_to: _answer_to,
				time_estimate: "",
				status: "aloitettu",
			}

			$.ajax({
				type: "POST",
				url: "vendor/addcomment.php",
				data: formData,
				error: function (jqxhr, status, exception) {
					alert("Tietokantavirhe, soita numeroon +358449782028")
					console.log(formData)
				},
			}).done(function (data) {})
		}, 1500)

		setTimeout(function () {
			formData = {
				comment_id: this_element.getAttribute("name"),
				comment_status: "Odottaa",
			}
			$.ajax({
				type: "POST",
				url: "../vendor/modifycommentstatus.php",
				data: formData,
				error: function (jqxhr, status, exception) {
					alert("Tietokantavirhe, soita numeroon +358449782028")
					console.log(formData)
				},
			}).done(function (data) {
				// alert(data);
				location.reload()
			})
		}, 1800)
	} else if (commentbox__help_order.style.display == "block") {
		setTimeout(function () {
			new_com_id_ = parent_answer.dataset.name

			_project_id = parseFloat(
				document.querySelector("#current_project_id").value
			)
			_room = document
				.querySelector("#roomname")
				.value.replaceAll(" ", "")
				.replaceAll(",", " - ")
			_item = parent_answer
				.querySelector(".order_what")
				.value.replaceAll(",", " - ")
			_kpl = parent_answer
				.querySelector(".order_count")
				.value.replaceAll(",", " - ")
			_shop = parent_answer
				.querySelector(".commentbox__help_options")
				.value.replaceAll(",", " - ")
			_purpose = parent_answer
				.querySelector(".kommentti_comment")
				.value.replaceAll(",", " - ")
			_start = ""
			_status = "Pyydetty"
			_deadline = parent_answer
				.querySelector(".comment__deadline")
				.value.replaceAll(",", " - ")
			_attachments = parent_answer
				.querySelector(".comment__preview_files")
				.innerText.replaceAll(",", " - ")
			_hinta = parent_answer
				.querySelector(".order_price")
				.value.replaceAll(",", " - ")
			_pituus =
				parent_answer
					.querySelector(".order_measures_1")
					.value.replaceAll(",", " - ") +
				" x " +
				parent_answer
					.querySelector(".order_measures_2")
					.value.replaceAll(",", " - ") +
				" x " +
				parent_answer
					.querySelector(".order_measures_3")
					.value.replaceAll(",", " - ")
			_userfrom = parent_answer
				.querySelector(".kommentti_comment_from")
				.value.replaceAll(",", " - ")
			_userto = parent_answer
				.querySelector(".order_to")
				.value.replaceAll(",", " - ")
			formData = {
				comment_id: new_com_id_,
				project_id: _project_id,
				room: _room,
				item: _item,
				kpl: _kpl,
				shop: _shop,
				purpose: _purpose,
				start: _start,
				status: _status,
				deadline: _deadline,
				attachments: _attachments,
				hinta: _hinta,
				pituus: _pituus,
				userfrom: _userfrom,
				userto: _userto,
			}
			$.ajax({
				type: "POST",
				url: "vendor/addorder.php",
				data: formData,
				error: function (jqxhr, status, exception) {
					alert("Tietokantavirhe, soita numeroon +358449782028")
					console.log(formData)
				},
			}).done(function (data) {
				alert("Tilauspyyntö lähetetty!")
				location.reload()
			})
		}, 1500)
		setTimeout(function () {
			formData = {
				comment_id: this_element.getAttribute("name"),
				comment_status: "Materiaalit",
			}
			$.ajax({
				type: "POST",
				url: "../vendor/modifycommentstatus.php",
				data: formData,
				error: function (jqxhr, status, exception) {
					alert("Tietokantavirhe, soita numeroon +358449782028")
					console.log(formData)
				},
			}).done(function (data) {
				// alert(data);
				location.reload()
			})
		}, 1800)
	}
}

/**
 * Creates a new comment with the provided document and argument.
 * @param {Document} doc - The document object to work with.
 * @param {Element} arg - The argument element to use for creating the comment.
 * @returns None
 */
function comment__create_new(doc, arg) {
	document.querySelector("body").classList.add("bg")
	select = doc.querySelector(".kommentti_comment_newto")
	var result = ""
	var options = select && select.options
	var opt
	selected = 0
	for (var i = 0, iLen = options.length; i < iLen; i++) {
		opt = options[i]
		if (opt.selected) {
			if (selected > 0) {
				result += "|"
			}
			selected += 1
			result += opt.value || opt.text
		}
	}

	console.log(doc)
	new_com_id =
		"com" + Math.random().toString(16).slice(2).toLowerCase().toLowerCase()
	new_com_id_ = new_com_id

	newcom = doc

	doc
		.querySelector(".comment__preview_files")
		.classList.add(new_com_id + "_previewfiles")
	doc.querySelector(".comment__preview_files").classList.add(new_com_id)

	if (arg) {
		project_id = parseFloat(
			document.querySelector("#current_project_id").value
		)
		room_id = arg.innerHTML
		_attachments = doc.querySelector(".comment__preview_files").innerText
		_ending_time = ""
		_deadline = doc.querySelector(".comment__deadline").value
		_x_y = doc.querySelector(".vko_estimate").value
		_content = doc
			.querySelector(".kommentti_comment")
			.value.replaceAll(",", " - ")
		_name = doc.querySelector(".kommentti__name").value
		_comment_from = doc
			.querySelector(".kommentti_comment_from")
			.value.replaceAll(",", " - ")

		_comment_to = result.replaceAll(",", " - ")
		if (doc.querySelector(".is_thecomment_critical").checked) {
			_urgency = "critical"
		} else {
			_urgency = "no_critical"
		}
		_aihe = _comment_from + " kommentit"
		_answer_to = ""
		_time_estimate = doc.querySelector(".time_estimate").value

		formData = {
			comment_id: new_com_id_,
			project_id: project_id,
			room: room_id,
			name: _name,
			x_y: _x_y,
			content: _content,
			attachments: _attachments,
			comment_from: _comment_from,
			comment_to: _comment_to,
			urgency: _urgency,
			ending_time: _ending_time,
			deadline: _deadline,
			aihe: _aihe,
			answer_to: _answer_to,
			time_estimate: _time_estimate,
		}
		console.log(formData)
		$.ajax({
			type: "POST",
			url: "/vendor/addcomment.php",
			data: formData,
			error: function (jqxhr, status, exception) {
				alert("Tietokantavirhe, soita numeroon +358449782028")
				console.log(formData)
			},
		}).done(function (data) {
			alert("Kommentti lisätty")
			document.querySelector("body").classList.remove("bg")
			console.log(formData)
		})
	} else {
		setTimeout(function () {
			project_id = parseFloat(
				document.querySelector("#current_project_id").value
			)
			room_id = document.querySelector("#roomname").value.replaceAll(" ", "")
			_attachments = doc.querySelector(".comment__preview_files").innerText
			_ending_time = ""
			_deadline = doc.querySelector(".comment__deadline").value
			_x_y = doc.querySelector(".vko_estimate").value
			_content = doc
				.querySelector(".kommentti_comment")
				.value.replaceAll(",", " - ")
			_name = doc.querySelector(".kommentti__name").value
			_comment_from = doc
				.querySelector(".kommentti_comment_from")
				.value.replaceAll(",", " - ")

			_comment_to = result.replaceAll(",", " - ")
			if (doc.querySelector(".is_thecomment_critical").checked) {
				_urgency = "critical"
			} else {
				_urgency = "no_critical"
			}
			_aihe = _comment_from + " kommentit"
			_answer_to = ""
			_time_estimate = doc.querySelector(".time_estimate").value

			formData = {
				comment_id: new_com_id_,
				project_id: project_id,
				room: room_id,
				name: _name,
				x_y: _x_y,
				content: _content,
				attachments: _attachments,
				comment_from: _comment_from,
				comment_to: _comment_to,
				urgency: _urgency,
				ending_time: _ending_time,
				deadline: _deadline,
				aihe: _aihe,
				answer_to: _answer_to,
				time_estimate: _time_estimate,
			}

			console.log(formData)

			$.ajax({
				type: "POST",
				url: "/vendor/addcomment.php",
				data: formData,
				error: function (jqxhr, status, exception) {
					alert("Tietokantavirhe, soita numeroon +358449782028")
					console.log(formData)
				},
			}).done(function (data) {
				alert("Kommentti lisätty")
				location.reload()
				console.log(formData)
			})
		}, 2500)
	}
	// }
}

/**
 * Copies the content of a comment element to a new comment element.
 * @param {Element} element - The comment element to copy from.
 * @returns None
 */
function copy_comment(element) {
	comment_thing = element.parentElement.parentElement.parentElement
	newcomment = document.querySelector(".commentbox__new.commentbox__newsecond")
	newcomment.querySelector(".kommentti__name").value =
		comment_thing.querySelector(".commentbox__name").value
	newcomment.querySelector(".comment__deadline").value =
		comment_thing.querySelector(".comment_deadline").innerText
	newcomment.querySelector(".kommentti_comment").value =
		comment_thing.querySelector(".commentbox__content").value
	newcomment.querySelector(".kommentti_comment_from").value =
		comment_thing.querySelector(".commentbox__from").innerText
	newcomment.querySelector(".kommentti_comment_to").value =
		comment_thing.querySelector(".commentbox__to").innerText
	newcomment.querySelector(".comment__deadline.time_estimate").value =
		comment_thing.querySelector(".commentbox__hours").value
	newcomment.querySelector(".comment__preview_files").innerHTML =
		comment_thing.querySelector(".commentbox__tiedostot").innerHTML
}

/**
 * Toggles the 'active' class of the '.laskuta__ostot' element and updates the text and background color of the '#or_main_label' element accordingly.
 * If the '.laskuta__ostot' element has the 'active' class after toggling, the text is set to "Sulje" and the background color is set to red.
 * If the '.laskuta__ostot' element does not have the 'active' class after toggling, the text is set to "Laskuta kaikki ostot" and the background color is set to green.
 */
function laskuta_ostot_open() {
	document.querySelector(".laskuta__ostot").classList.toggle("active")
	elem = document.querySelector("#or_main_label")
	if (document.querySelector(".laskuta__ostot").classList.contains("active")) {
		elem.innerHTML = "Sulje"
		elem.style.background = "red"
	} else {
		elem.innerHTML = "Laskuta kaikki ostot"
		elem.style.background = "green"
	}
}

/**
 * Function to handle the logic for displaying and updating invoice rows based on user interaction.
 * @param {Element} elem - The element that triggered the function.
 * @returns None
 */
function send_laskutus(elem) {
	elem.classList.toggle("active")
	laskutusrivit = document.querySelector(".laskutusrivit")
	p_elem = elem.parentElement
	laskutus_cls = elem.parentElement.classList
	laskutus_shop = p_elem.querySelectorAll("td")[5].cloneNode(true)
	laskutus_price = p_elem.querySelectorAll("td")[11].cloneNode(true)
	laskutus_item = p_elem.querySelectorAll("td")[3].cloneNode(true)

	newdiv = document.createElement("tr")
	newdiv.classList.add(
		"laskutusrivit" +
			laskutus_shop.innerText
				.toLowerCase()
				.replaceAll("ä", "a")
				.replaceAll("ö", "o")
				.replaceAll(" ", "") +
			"_" +
			laskutus_cls
	)
	newdiv.classList.add("laskutusrivi")
	newdiv.dataset.identification = laskutus_cls

	newdiv.appendChild(laskutus_item)
	newdiv.appendChild(laskutus_shop)
	newdiv.appendChild(laskutus_price)

	if (elem.classList.contains("active")) {
		elem.style.background = "green"
		document
			.querySelector(
				"#laskutusrivit_" +
					laskutus_shop.innerText
						.toLowerCase()
						.replaceAll("ä", "a")
						.replaceAll("ö", "o")
						.replaceAll(" ", "")
			)
			.parentElement.querySelector("h6").innerHTML = laskutus_shop.innerText
		document
			.querySelector(
				"#laskutusrivit_" +
					laskutus_shop.innerText
						.toLowerCase()
						.replaceAll("ä", "a")
						.replaceAll("ö", "o")
						.replaceAll(" ", "")
			)
			.appendChild(newdiv)
		summat = laskutusrivit.querySelectorAll("td.pricetopay")

		summa = 0
		for (let s = 0; s < summat.length; s++) {
			summa += parseFloat(summat[s].innerText)
		}

		document.querySelector(".laskutusrivit_summa > b").innerHTML = summa + "€"
	} else {
		elem.style.background = "white"
		document
			.querySelector(
				".laskutusrivit" +
					laskutus_shop.innerText.toLowerCase() +
					"_" +
					laskutus_cls
			)
			.remove()
		summat = laskutusrivit.querySelectorAll("td.pricetopay")

		summa = 0
		for (let s = 0; s < summat.length; s++) {
			summa += parseFloat(summat[s].innerText)
		}

		document.querySelector(".laskutusrivit_summa > b").innerHTML = summa + "€"
	}
}

/**
 * Sends invoice data to the server by making AJAX POST requests for each invoice row.
 * Also sends the shopping list data to the server after a delay.
 * @returns None
 */
function send_laskutus_data() {
	laskutusrivit = document.querySelectorAll(".laskutusrivi")

	for (let i = 0; i < laskutusrivit.length; i++) {
		// VENDOR CCHANGE STATUSES

		setTimeout(function () {
			_id = laskutusrivit[i].dataset.identification
			formData = {
				identification: _id,
			}

			$.ajax({
				type: "POST",
				url: "/vendor/change_shoppinglist_status.php",
				data: formData,
				error: function (jqxhr, status, exception) {
					alert("Tietokantavirhe, soita numeroon +358449782028")
					console.log(formData)
				},
			}).done(function (data) {
				alert(data)
				//location.reload();
			})
		}, 150)
	}

	setTimeout(function () {
		_table = document.querySelector(".laskutusrivit").innerHTML
		_project_id = document.querySelector("#rooms > input.id").value

		formData = {
			project_id: _project_id,
			table: _table,
		}

		$.ajax({
			type: "POST",
			url: "/vendor/send_shoppinglist.php",
			data: formData,
			error: function (jqxhr, status, exception) {
				alert("Tietokantavirhe, soita numeroon +358449782028")
				console.log(formData)
			},
		}).done(function (data) {
			alert(data)
			location.reload()
		})
	}, 250)
}

/**
 * Changes the status of a ticket based on the item clicked.
 * @param {Element} item - The item that was clicked to change the status.
 * @param {string} name - The name of the ticket.
 * @returns None
 */
function changestatus(item, name) {
	ticket = item.parentElement.parentElement.parentElement.parentElement

	if (item.innerText.toLowerCase() == "aloita") {
		item.parentElement.parentElement.style.background = "red"
		item.innerText = "Keskeytä"
		_comment_status = "Aloitettu"

		ticket.querySelector(".comment__status").innerHTML = "Aloitettu"
		ticket.querySelector(".comment__status").style.borderColor = "yellow"
	} else if (item.innerText.toLowerCase() == "keskeytä") {
		item.parentElement.parentElement.style.background = "orange"
		item.innerText = "Aloita"
		_comment_status = "Keskeytetty"

		fourp_open(name)
	} else {
		item.parentElement.parentElement.style.background = "red"
		item.innerText = "Keskeytä"
		_comment_status = "Aloitettu"

		ticket.querySelector(".comment__status").innerHTML = "Aloitettu"
		ticket.querySelector(".comment__status").style.borderColor = "yellow"
	}
	if (_comment_status != "Keskeytetty") {
		setTimeout(function () {
			formData = {
				comment_id: name,
				comment_status: _comment_status,
			}
			$.ajax({
				type: "POST",
				url: "../vendor/modifycommentstatus.php",
				data: formData,
				error: function (jqxhr, status, exception) {
					alert("Tietokantavirhe, soita numeroon +358449782028")
					console.log(formData)
				},
			}).done(function (data) {
				// alert(data);
				//location.reload();
			})
		}, 1000)
	}
}

/**
 * Changes the hours of a task in the database.
 * @param {HTMLElement} item - The HTML element containing the new hours value.
 * @param {string} name - The name of the task to update.
 * @returns None
 */
function change_task_hours(item, name) {
	formData = {
		comment_id: name,
		comment_hours: parseFloat(item.value),
	}
	$.ajax({
		type: "POST",
		url: "../vendor/modifytaskhours.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			alert("Tietokantavirhe, soita numeroon +358449782028")
			console.log(formData)
		},
	}).done(function (data) {
		//console.log(data);
	})
}

/**
 * Updates the text content of a task item on the webpage and sends the updated data to the server.
 * @param {string} item - The identifier of the task item to be updated.
 * @returns None
 */
function change_task_texts(item) {
	_comment_heading = document.querySelector(
		".commentbox." + item + " .commentbox__name"
	).value
	_comment_content = document.querySelector(
		".commentbox." + item + " .commentbox__content"
	).value
	document.querySelector(
		".commentbox." + item + " .commentbox__content"
	).innerHTML = _comment_content
	formData = {
		comment_id: item,
		comment_heading: _comment_heading,
		comment_content: _comment_content,
	}
	$.ajax({
		type: "POST",
		url: "../vendor/modifytasktexts.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			alert("Tietokantavirhe, soita numeroon +358449782028")
			console.log(formData)
		},
	}).done(function (data) {
		//console.log(data);
	})
}

/**
 * Changes the assignation of a task based on the selected options in a dropdown menu.
 * @param {string} item - The identifier of the task to be assigned.
 * @returns None
 */
function change_task_assignation(item) {
	select = document.querySelector(".change_task_assignation." + item)
	var result = []
	var options = select && select.options
	var opt
	selected = 0
	for (var i = 0, iLen = options.length; i < iLen; i++) {
		opt = options[i]

		if (opt.selected) {
			if (selected > 0) {
				result += "|"
			}
			selected += 1
			result += opt.value || opt.text
		}
	}
	// _comment_to = document.querySelector(".commentbox."+item+" .commentbox__to").value;
	_comment_to = result

	formData = {
		comment_id: item,
		comment_to: _comment_to,
	}
	$.ajax({
		type: "POST",
		url: "../vendor/modifytaskresponsible.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			alert("Tietokantavirhe, soita numeroon +358449782028")
			console.log(formData)
		},
	}).done(function (data) {
		//console.log(data);
	})
}

/**
 * Changes the criticality of a task based on the item's checked status.
 * @param {number} com_id - The comment ID of the task.
 * @param {object} item - The item whose criticality is being changed.
 * @returns None
 */
function change_task_criticality(com_id, item) {
	_urgency = ""
	if (item.checked === false) {
		_urgency = "no_critical"
	} else if (item.checked === true) {
		_urgency = "critical"
	}
	console.log(_urgency)

	formData = {
		comment_id: com_id,
		urgency: _urgency,
	}
	$.ajax({
		type: "POST",
		url: "../vendor/modifytaskcriticality.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			alert("Tietokantavirhe, soita numeroon +358449782028")
			console.log(formData)
		},
	}).done(function (data) {
		//console.log(data);
	})
}

/**
 * Deletes a comment without marking it as acknowledged.
 * @param {HTMLElement} item - The HTML element representing the comment to be deleted.
 * @returns None
 */
function comment__deletekuittaamatta(item) {
	com_id_ = item.getAttribute("name")
	statuschange_ = "poistettu_kuittaamatta"

	formData = {
		comment_id: com_id_,
		comment_status: statuschange_,
	}
	$.ajax({
		type: "POST",
		url: "../vendor/modifycommentstatus_poistakuittaamatta.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			alert("Tietokantavirhe, soita numeroon +358449782028")
			console.log(formData)
		},
	}).done(function (data) {
		//console.log(data);
		alert("Poistettu kuittaamatta")
		location.reload()
	})
}

/**
 * Changes the task vko value for a given item and comment ID using an AJAX POST request.
 * @param {any} item - The item to update the vko value for.
 * @param {string} com_id_ - The comment ID associated with the item.
 * @returns None
 */
function change_task_vko(item, com_id_) {
	vko_ = item.value

	formData = {
		comment_id: com_id_,
		vko_arvio: vko_,
	}
	$.ajax({
		type: "POST",
		url: "../vendor/modifycommentvko.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			alert("Tietokantavirhe, soita numeroon +358449782028")
			console.log(formData)
		},
	}).done(function (data) {
		//console.log(data);
		// alert('Poistettu kuittaamatta');
		// location.reload();
	})
}

/**
 * Changes the task tta value for a given item and comment ID using an AJAX POST request.
 * @param {any} item - The item to change the tta value for.
 * @param {string} com_id_ - The comment ID to associate with the tta value.
 * @returns None
 */
function change_task_tta(item, com_id_) {
	tta_ = item.value

	formData = {
		comment_id: com_id_,
		tta: tta_,
	}
	$.ajax({
		type: "POST",
		url: "../vendor/modifycomment_tta.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			alert("Tietokantavirhe, soita numeroon +358449782028")
			console.log(formData)
		},
	}).done(function (data) {
		//console.log(data);
		// alert('Poistettu kuittaamatta');
		// location.reload();
	})
}

/**
 * Function to change the specifications of a task by sending an AJAX request to update the task details.
 * Retrieves the task details from the DOM elements and sends them to the server for modification.
 * @returns None
 */
function change_task_specs() {
	com_id_ = document.querySelector(".commentasking__section").dataset
		.currentcomment
	h_remaining_ = document.querySelector("#commentasking__lefthours").value
	pvm_remaining_ = document.querySelector("#commentasking__pvm").value
	readiness_ = document.querySelector("#commentasking__readiness").value

	formData = {
		comment_id: com_id_,
		h_remaining: h_remaining_,
		pvm_remaining: pvm_remaining_,
		readiness: readiness_,
	}

	setTimeout(function () {
		$.ajax({
			type: "POST",
			url: "../vendor/modifycomment_specs.php",
			data: formData,
			error: function (jqxhr, status, exception) {
				alert("Tietokantavirhe, soita numeroon +358449782028")
				console.log(formData)
			},
		}).done(function (data) {
			//console.log(data);
			// alert('Poistettu kuittaamatta');
			// location.reload();
		})

		setTimeout(function () {
			formData = {
				comment_id: com_id_,
				comment_status: "Keskeytetty",
			}

			$.ajax({
				type: "POST",
				url: "../vendor/modifycommentstatus.php",
				data: formData,
				error: function (jqxhr, status, exception) {
					alert("Tietokantavirhe, soita numeroon +358449782028")
					console.log(formData)
				},
			}).done(function (data) {
				// alert(data);
				// location.reload();

				document.querySelector("." + com_id_ + " .comment__status").innerHTML =
					"keskeytetty"
				document.querySelector(
					"." + com_id_ + " .comment__status"
				).style.borderColor = "red"
			})
		}, 500)
	}, 250)
}

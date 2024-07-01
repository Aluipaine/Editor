/**
 * Converts each letter in a given string to a corresponding Greek letter.
 * @param {string} str - The input string to convert.
 * @returns The converted string with Greek letters.
 */
const convertLetter = (str) => {
	const map = {
		a: "α",
		b: "β",
		d: "δ",
		e: "ε",
		i: "ι",
		k: "κ",
		n: "η",
		o: "θ",
		p: "ρ",
		r: "π",
		t: "τ",
		u: "μ",
		char: "υ",
		w: "ω",
		x: "χ",
		y: "γ",
	}
	return str.replace(/./g, (char) => {
		if (map[char.toLowerCase()]) {
			return char === char.toUpperCase() ? map[char.toLowerCase()] : map[char]
		}
		return char.toLowerCase()
	})
}

function encode_utf8(s) {
	return unescape(encodeURIComponent(s))
}

function decode_utf8(s) {
	return decodeURIComponent(escape(s))
}

/**
 * Saves materials data to the server using an AJAX POST request.
 * @param {string} key - The key used to identify the materials data.
 * @returns None
 */
function admin__savematerials(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".materials__tbody tr:not(.headingrow)"
	)
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value + ","
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}

	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_materials",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves user data by sending a POST request to the server with the updated user information.
 * @param {string} key - The key used for authentication or identification.
 * @returns None
 */
function admin__saveusers(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(".a_userlist tr:not(.headingrow)")
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value.replaceAll(",", "") + ","
		}
		if (a == materialtabletr.length - 1) {
			material_array += ""
		} else {
			material_array += "~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__usersedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the systems data to the server using an AJAX POST request.
 * @param {string} key - The key used to identify the system data.
 * @returns None
 */
function admin__savesystems(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".systems__tbody tr:not(.headingrow)"
	)

	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value + ","
		}

		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_systems",
		material_array: material_array,
	}
	console.log(formData)

	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the range of materials in the admin panel.
 * @param {string} key - The key for the materials being saved.
 * @returns None
 */
function admin__saverangat(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".ranka__tbody tr:not(.headingrow)"
	)
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value + ","
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_rangat",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the range data for a specific key in the admin settings.
 * @param {string} key - The key for which the range data is being saved.
 * @returns None
 */
function admin__saverangat_one(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".ranka__tbody_one tr:not(.headingrow)"
	)
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value + ","
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_rangat_1",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the range of materials in a table to the database using an AJAX POST request.
 * @param {string} key - The key used to identify the materials being saved.
 * @returns None
 */
function admin__saverangat_two(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".ranka__tbody_two tr:not(.headingrow)"
	)
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value + ","
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_rangat_2",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the range of materials in the admin panel by sending a POST request to the server.
 * @param {string} key - The key used to identify the materials being saved.
 * @returns None
 */
function admin__saverangat_three(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".ranka__tbody_three tr:not(.headingrow)"
	)
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value + ","
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_rangat_3",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the material data for a specific key in the admin settings.
 * @param {string} key - The key for which the material data is being saved.
 * @returns None
 */
function admin__saverangat_four(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".ranka__tbody_four tr:not(.headingrow)"
	)
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value + ","
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_rangat_4",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the data for the given key by sending an AJAX POST request to the server.
 * @param {string} key - The key to save the data under.
 * @returns None
 */
function admin__saverangat_five(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".ranka__tbody_five tr:not(.headingrow)"
	)
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value + ","
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_rangat_5",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the material data for a specific key in the admin settings.
 * @param {string} key - The key for which the material data is being saved.
 * @returns None
 */
function admin__saverangat_six(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".ranka__tbody_six tr:not(.headingrow)"
	)
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value + ","
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_rangat_6",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the material data for a specific key in the admin settings.
 * @param {string} key - The key for which the material data is being saved.
 * @returns None
 */
function admin__saverangat_seven(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".ranka__tbody_seven tr:not(.headingrow)"
	)
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value + ","
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_rangat_7",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the material data for a specific key in the admin settings.
 * @param {string} key - The key for which the material data is being saved.
 * @returns None
 */
function admin__saverangat_eight(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".ranka__tbody_eight tr:not(.headingrow)"
	)
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value + ","
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_rangat_8",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the Reika frame data to the server by sending an AJAX POST request.
 * @param {string} key - The key used to identify the Reika frame data.
 * @returns None
 */
function admin__savereikaframet(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".reikaframe__tbody tr:not(.headingrow)"
	)
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			if (b == materialtabletd.length - 1) {
				material_array += materialtabletd[b].value
			} else {
				material_array += materialtabletd[b].value + ","
			}
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_reikaframe",
		material_array: material_array.toLowerCase(),
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the lapiviennit data to the server using an AJAX POST request.
 * @param {string} key - The key used to identify the data being saved.
 * @returns None
 */
function admin__savelapiviennit(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".lapiviennit__tbody tr:not(.headingrow)"
	)
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			if (b == materialtabletd.length - 1) {
				material_array += materialtabletd[b].value
			} else {
				material_array += materialtabletd[b].value + ","
			}
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_lapiviennit",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the material data for levytysreunat in the admin panel.
 * @param {string} key - The key for the material data.
 * @returns None
 */
function admin__savelevytysreunat(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".levytysreunat__tbody tr:not(.headingrow)"
	)
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value + ","
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_levytysreunat",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the saumatpysty settings in the admin panel by sending a POST request with the updated data.
 * @param {string} key - The key used to identify the settings being saved.
 * @returns None
 */
function admin__savesaumatpysty(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".saumapysty__tbody tr:not(.headingrow)"
	)
	inputs = document.querySelectorAll(
		".saumapysty__tbody input[name='saumapysty']:not(:checked)"
	)
	inputs.forEach((input) => {
		input.value = ""
	})

	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value + ","
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_saumatpysty",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Admin function to save material data for a specific key.
 * @param {string} key - The key associated with the material data.
 * @returns None
 */
function admin__savesaumatvaaka(key) {
	material_array = ""

	materialtabletr = document.querySelectorAll(
		".saumavaaka__tbody tr:not(.headingrow)"
	)
	inputs = document.querySelectorAll(
		".saumavaaka__tbody input[name='saumavaaka']:not(:checked)"
	)
	inputs.forEach((input) => {
		input.value = ""
	})
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value + ","
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_saumatvaaka",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the seam direction setting based on the user's selection.
 * @param {string} key - The key used for saving the setting.
 * @returns None
 */
function save_saumasuunta(key) {
	material_array = ""

	if (document.querySelector("#settings__sauma_pysty").checked === true) {
		material_array = "levytys_pystyyn"
	}
	if (document.querySelector("#settings__sauma_vaaka").checked === true) {
		material_array = "levytys_vaakaan"
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_saumasuunta",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the selected material type based on the checkboxes in the settings form.
 * @param {string} key - The key to save the material type under.
 * @returns None
 */
function save_saumatyyppi(key) {
	material_array = ""

	if (document.querySelector("#settings__saumahanta-oik").checked === true) {
		material_array += "oik~~"
	} else if (
		document.querySelector("#settings__saumahanta-vas").checked === true
	) {
		material_array += "vas~~"
	} else if (
		document.querySelector("#settings__saumahanta-tasoitus").checked === true
	) {
		material_array += "tasoitus~~"
	}

	if (document.querySelector("#settings__saumahanta-yla").checked === true) {
		material_array += "yla"
	} else if (
		document.querySelector("#settings__saumahanta-ala").checked === true
	) {
		material_array += "ala"
	} else if (
		document.querySelector("#settings__saumahanta-vaakatasoitus").checked ===
		true
	) {
		material_array += "vaakatasoitus"
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_saumatyyppi",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the selected material options for saumakulku based on user input.
 * @param {string} key - The key used for saving the data.
 * @returns None
 */
function save_saumakulku(key) {
	material_array = ""

	if (document.querySelector("#saumoitus__sauma_one").checked === true) {
		material_array += "yli~~"
	} else if (document.querySelector("#saumoitus__sauma_two").checked === true) {
		material_array += "mukaan~~"
	}

	if (document.querySelector("#saumoitus__sauma_one_v").checked === true) {
		material_array += "yli"
	} else if (
		document.querySelector("#saumoitus__sauma_three").checked === true
	) {
		material_array += "mukaan"
	}

	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_saumakulku",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the data related to materials in a table by sending an AJAX POST request.
 * @param {Event} e - The event object that triggered the function.
 * @param {string} key - The key associated with the data being saved.
 * @returns None
 */
function save_aukko(e, key) {
	material_array = ""

	// _id = e.parentElement.parentElement.parentElement.parentElement.getAttribute("id");
	materialtabletr =
		e.parentElement.parentElement.parentElement.parentElement.querySelectorAll(
			"tr:not(.headingrow)"
		)
	console.log(materialtabletr)
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			if (b == materialtabletd.length - 1) {
				material_array += materialtabletd[b].value
			} else {
				material_array += materialtabletd[b].value + ","
			}
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: e.dataset.key,
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves a list of materials to the database using an AJAX POST request.
 * @param {string} key - The key used to identify the list of materials.
 * @returns None
 */
function admin__savelistatpysty(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".listat2a__tbody tr:not(.headingrow)"
	)
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value + ","
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_listatpysty",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the list of materials in a specific format to the database using an AJAX POST request.
 * @param {string} key - The key used to identify the list of materials.
 * @returns None
 */
function admin__savelistatvaaka(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".listat2b__tbody tr:not(.headingrow)"
	)
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value + ","
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_listatvaaka",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves a list of materials to the database using an AJAX POST request.
 * @param {string} key - The key used to identify the list of materials.
 * @returns None
 */
function admin__savelistat(key) {
	material_array = ""
	materialtabletr = document.querySelectorAll(
		".listat__tbody tr:not(.headingrow)"
	)
	for (let a = 0; a < materialtabletr.length; a++) {
		materialtabletd = materialtabletr[a].querySelectorAll(
			"input:not(.fileinput)"
		)
		material_array += "["
		for (let b = 0; b < materialtabletd.length; b++) {
			material_array += materialtabletd[b].value + ","
		}
		if (a == materialtabletr.length - 1) {
			material_array += "]"
		} else {
			material_array += "]~~"
		}
	}
	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_listat",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the length direction settings in the admin panel.
 * @param {string} key - The key for the settings to be saved.
 * @returns None
 */
function admin__savepituussuunnan(key) {
	material_array = ""

	inputs = document.querySelectorAll(".pituussuunnan input")

	for (let i = 0; i < inputs.length; i++) {
		material_array += (i == 0 ? "" : ",") + inputs[i].value
	}

	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_pituussuunnan",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the direction of the width in the admin settings.
 * @param {string} key - the key to save the direction of the width
 * @returns None
 */
function admin__saveleveyssuunnan(key) {
	material_array = ""

	inputs = document.querySelectorAll(".leveyssuunnan input")

	for (let i = 0; i < inputs.length; i++) {
		material_array += (i == 0 ? "" : ",") + inputs[i].value
	}

	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_leveyssuunnan",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Saves the settings for the admin by sending a POST request with the provided key and material array.
 * @param {string} key - The key for the settings.
 * @returns None
 */
function admin__savereunaasetukset(key) {
	material_array = ""

	inputs = document.querySelectorAll(".poraukset input")

	for (let i = 0; i < inputs.length; i++) {
		material_array += (i == 0 ? "" : ",") + inputs[i].value
	}

	id_ = preset_id
	formData = {
		prid: id_,
		mkey: "s_reunaasetukset",
		material_array: material_array,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__settingsedit.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}

/**
 * Append a new material row to the materials table.
 * This function creates a new row with input fields for a material entry and appends it to the materials table.
 * @returns None
 */
function appendnewmaterial() {
	t = document.querySelector(".materials__tbody")

	count = t.querySelectorAll("tr").length

	row = document.createElement("tr")
	row.innerHTML =
		`
        <td>
        <input type="checkbox" name="admin_material" value="" onclick="this.checked ? this.value = 'on' : this.value = '';admin__savematerials();" id="material_` +
		count +
		`">
        <label for="material_` +
		count +
		`"></label>
        </td>
        <td>
            <input type="text" value="" class="lineinput" oninput="admin__savematerials();">
        </td>
        <td>
            <input type="text" value="" class="lineinput" oninput="admin__savematerials();">
        </td>
        <td>
            <input type="text" value="" class="lineinput" oninput="admin__savematerials();">
        </td>
        <td>
            <input type="text" value="" class="lineinput" oninput="admin__savematerials();">
        </td>
        <td>
            <input type="text" value="" class="lineinput" oninput="admin__savematerials();">
        </td>
        <td>
            <input type="text" value="" class="lineinput" oninput="admin__savematerials();">
        </td>
        <td>
            <input type="text" value="" class="lineinput" oninput="admin__savematerials();">
        </td>
        <td>
            <input type="file" class="fileinput">
            <input type="hidden" class="fileinput_value">
            <div class="send_material_btn">Ammu kuva sisään</div>
        </td>
        <td>
            <input type="text" value="" class="lineinput" oninput="admin__savematerials();">
        </td>
        <td>
            <input type="text" value="" class="lineinput" oninput="admin__savematerials();">
        </td>
        `

	t.appendChild(row)
}

/**
 * Appends a new row of input fields to the aukkotable element.
 * The new row contains input fields for various data types with an oninput event
 * that triggers the save_aukko function.
 * If a row with display "table" is found in the aukkotable, a new row is appended to it.
 * @returns None
 */
function appendnewaukkosetting() {
	aukkotable = document.querySelectorAll(".aukko-table")

	for (let a = 0; a < aukkotable.length; a++) {
		if (aukkotable[a].style.display === "table") {
			au = aukkotable[a]
			break
		}
	}
	count = au.querySelectorAll("tr").length

	row = document.createElement("tr")

	row.innerHTML = `
        <td><input type="text" value="" class="lineinput" oninput="save_aukko(this);"></td>
        <td><input type="number" value="" class="lineinput" oninput="save_aukko(this);"></td>
        <td><input type="number" value="" class="lineinput" oninput="save_aukko(this);"></td>
        <td><input type="text" value="" class="lineinput" oninput="save_aukko(this);"></td>
        <td><input type="text" value="" class="lineinput" oninput="save_aukko(this);"></td>
        <td><input type="text" value="" class="lineinput" oninput="save_aukko(this);"></td>
        <td><input type="text" value="" class="lineinput" oninput="save_aukko(this);"></td>
    `
	au.appendChild(row)
}

/**
 * Appends a new row to the saumapysty__tbody element in the document.
 * The new row contains radio buttons, labels, and input fields for user input.
 * Each input field has an associated event listener to save the input value.
 * @returns None
 */
function appendnewpystysaumasetting() {
	t = document.querySelector(".saumapysty__tbody")

	count = t.querySelectorAll("tr").length

	row = document.createElement("tr")
	row.innerHTML =
		`
    <td>
        <input name="saumapysty" type="radio" value="" onclick="this.checked ? this.value = 'on' : this.value = '';admin__savesaumatpysty();" id="saumatpysty_` +
		count +
		`">
        <label for="saumatpysty_` +
		count +
		`"></label>
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__savesaumatpysty();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__savesaumatpysty();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__savesaumatpysty();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__savesaumatpysty();">
    </td>`

	t.appendChild(row)
}

/**
 * Append a new setting row to the saumavaaka table.
 * This function creates a new row with input fields and appends it to the saumavaaka table.
 * @returns None
 */
function appendnewvaakasaumasetting() {
	t = document.querySelector(".saumavaaka__tbody")

	count = t.querySelectorAll("tr").length

	row = document.createElement("tr")
	row.innerHTML =
		`
    <td>
        <input name="saumavaaka" type="radio" value="" onclick="this.checked ? this.value = 'on' : this.value = '';admin__savesaumatvaaka();" id="saumatvaaka_` +
		count +
		`">
        <label for="saumatvaaka_` +
		count +
		`"></label>
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__savesaumatvaaka();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__savesaumatvaaka();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__savesaumatvaaka();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__savesaumatvaaka();">
    </td>`

	t.appendChild(row)
}

/**
 * Append a new ranka setting row to the table.
 * This function creates a new row with multiple input fields for a ranka setting and appends it to the table.
 * Each input field has an associated event listener that triggers the admin__saverangat function on input.
 * @returns None
 */
function appendnewrankasetting() {
	t = document.querySelector(".ranka__tbody")
	count = t.querySelectorAll("tr").length

	row = document.createElement("tr")
	row.innerHTML =
		`
    <td>
        <input type="checkbox" value="" onclick="this.checked ? this.value = 'on' : this.value = '';admin__saverangat();" id="ranka_` +
		count +
		`">
        <label for="ranka_` +
		count +
		`"></label>
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__saverangat();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__saverangat();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__saverangat();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__saverangat();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__saverangat();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__saverangat();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__saverangat();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__saverangat();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__saverangat();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__saverangat();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__saverangat();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__saverangat();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__saverangat();">
    </td>`

	t.appendChild(row)
}

/**
 * Append a new list item to the lapiviennit__tbody element in the document.
 * This function creates a new row with various input elements and checkboxes.
 * Each input element has event listeners attached to trigger the admin__savelapiviennit function on input.
 * @returns None
 */
function appendnewlvitem() {
	t = document.querySelector(".lapiviennit__tbody")
	count = t.querySelectorAll("tr").length

	row = document.createElement("tr")
	row.innerHTML =
		`
      <td>
          <input type="checkbox" value="" onclick="this.checked ? this.value = 'on' : this.value = '';admin__savelapiviennit();" id="lapivienti_` +
		count +
		`">
          <label for="lapivienti_` +
		count +
		`"></label>
      </td>
      <td>
          <input type="text" value="" class="lineinput" oninput="admin__savelapiviennit();">
      </td>
      <td>
          <input type="text" value="" class="lineinput" oninput="admin__savelapiviennit();">
      </td>
      <td>
          <input type="text" value="" class="lineinput" oninput="admin__savelapiviennit();">
      </td>
      <td>
          <input type="text" value="" class="lineinput" oninput="admin__savelapiviennit();">
      </td>
      <td>
          <input type="checkbox"  onclick="this.checked ? this.value = 'on' : this.value = '';admin__savelapiviennit();" id="lapivienti_dust_` +
		count +
		`">
          <label for="lapivienti_dust_` +
		count +
		`"></label>
      </td>
      <td>
          <input type="text" value="" class="lineinput" oninput="admin__savelapiviennit();change_aukkolista(this,7);" list="listat_list">
      </td>
      <td>
          <input type="text" value="" class="lineinput" oninput="admin__savelapiviennit();">
      </td>
      <td>
          <input type="text" value="" class="lineinput" oninput="admin__savelapiviennit();">
      </td>
      <td>
          <input type="text" value="" class="lineinput" oninput="admin__savelapiviennit();change_aukkolista(this,10);" list="listat_list">
      </td>
      <td>
          <input type="text" value="" class="lineinput" oninput="admin__savelapiviennit();">
      </td>
      <td>
          <input type="text" value="" class="lineinput" oninput="admin__savelapiviennit();">
      </td>
    `

	t.appendChild(row)
}

/**
 * Append a new row to the table with input fields for a new setting in the pystyla list.
 * This function creates a new row with multiple input fields and checkboxes for the user to interact with.
 * @returns None
 */
function appendnewpystylistasetting() {
	t = document.querySelector(".listat2a__tbody")

	count = t.querySelectorAll("tr").length

	row = document.createElement("tr")
	row.innerHTML =
		`
  <td>
      <input type="checkbox" value="" onclick="this.checked ? this.value = 'on' : this.value = '';admin__savelistatpysty();" id="listat2a_` +
		count +
		`">
      <label for="listat2a_` +
		count +
		`"></label>
  </td>
  <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistatpysty();">
  </td>
  <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistatpysty();">
  </td>
  <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistatpysty();">
  </td>
  <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistatpysty();">
  </td>
  <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistatpysty();">
  </td>
  <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistatpysty();">
  </td>
  <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistatpysty();">
  </td>
  <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistatpysty();">
  </td>
  <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistatpysty();">
  </td>
  <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistatpysty();">
  </td>
  <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistatpysty();">
  </td>
  `

	t.appendChild(row)
}

/**
 * Append a new row to the vaakalistasetting table with input fields and checkboxes.
 * @returns None
 */
function appendnewvaakalistasetting() {
	t = document.querySelector(".listat2b__tbody")

	count = t.querySelectorAll("tr").length

	row = document.createElement("tr")
	row.innerHTML =
		`
    <td>
        <input type="checkbox" value="" onclick="this.checked ? this.value = 'on' : this.value = '';admin__savelistatvaaka();" id="listat2b_` +
		count +
		`">
        <label for="listat2b_` +
		count +
		`"></label>
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__savelistatvaaka();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__savelistatvaaka();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__savelistatvaaka();">
    </td>
    <td>
        <input type="text" value="" class="lineinput" oninput="admin__savelistatvaaka();">
    </td>
  `

	t.appendChild(row)
}

/**
 * Appends a new list item setting to the table.
 * This function creates a new row with multiple input fields for each setting.
 * Each input field has a class "lineinput" and triggers the admin__savelistat function on input.
 * @returns None
 */
function appendnewlistasetting() {
	t = document.querySelector(".listat__tbody")

	count = t.querySelectorAll("tr").length

	row = document.createElement("tr")
	row.innerHTML = `
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
    <td>
      <input type="text" value="" class="lineinput" oninput="admin__savelistat();">
    </td>
  `

	t.appendChild(row)
}

function delete__addeduser(e) {}

/**
 * Deletes an added user from the admin panel.
 * @param {Event} e - The event object that triggered the function.
 * @returns None
 */
function admin__delete_addeduser(e) {
	_prid = e.parentElement.parentElement.parentElement.parentElement.dataset.prid
	_user = e.parentElement.innerText.replace("x", "")

	formData = {
		prid: _prid,
		user: _user,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__deleteuser.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		e.parentElement.remove()
		console.log(data)
	})
}
/**
 * Function to handle changing a user associated with a specific PR ID in the admin panel.
 * @param {Event} e - The event object triggering the function.
 * @returns None
 */
function admin__changeprusr(e) {
	_prid = e.dataset.prid
	_user = e.value

	formData = {
		prid: _prid,
		user: _user,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__changeprusr.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log(data)
	})
}

/**
 * This function is used to change the settings based on the given letter and ID.
 * It updates various settings related to different types of elements like doors, windows, pillars, beams, etc.
 * @param {string} letter - The letter representing the type of setting to be changed.
 * @param {string} l_id - The ID of the setting to be changed.
 * @returns None
 */
function s_change_malli(letter, l_id) {
	preset_id = parseFloat(l_id)
	rankatype_array = [
		"",
		"Saumaranka",
		"Väliranka",
		"Päättöranka",
		"Kulmaranka",
		"ikkunaranka",
	]

	trs = [
		"lapiviennit__tbody",
		"systems__tbody",
		"reikaframe__tbody",
		"levytysreunat__tbody",
		"ranka__tbody_eight",
		"ranka__tbody_seven",
		"ranka__tbody_six",
		"ranka__tbody_five",
		"ranka__tbody_four",
		"ranka__tbody_three",
		"ranka__tbody_two",
		"ranka__tbody_one",
		"materials__tbody",
		"saumapysty__tbody",
		"saumavaaka__tbody",
		"ranka__tbody",
		"listat2a__tbody",
		"listat2b__tbody",
	]
	for (let a = 0; a < trs.length; a++) {
		tds = document.querySelectorAll("." + trs[a] + " tr:not(.headingrow)")

		tds.forEach((td) => {
			td.remove()
		})
	}

	hs = document.querySelector("#hole_set")
	hs.innerHTML = ""

	formData = {
		preset_id: preset_id,
	}
	$.ajax({
		type: "POST",
		url: "vendor/get-presetsettings.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (settings) {
		let settings_array = settings.split("],[")

		settings.split("],[").forEach((setting) => {
			key = setting.split('","')[2]
			v_ = setting
				.replaceAll(String.fromCharCode(92), "")
				.replaceAll(/u00f6/g, decode_utf8(encode_utf8("\u00f6")))
				.replaceAll(/u00e4/g, decode_utf8(encode_utf8("\u00e4")))
				.replaceAll("[", "")
				.replaceAll("]", "")
				.split('","')[3]

			if (key == "s_materials") {
				t = document.querySelector(".materials__tbody")
				v_.split("~~").forEach((v) => {
					v = v.replaceAll('"', "").split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}
					row.innerHTML +=
						`
            <td>
              <input type="checkbox" name="admin_material" value="" onclick="this.checked ? this.value = 'on' : this.value = '';admin__savematerials();" id="material_` +
						count +
						`" ${checked}>
              <label for="material_` +
						count +
						`"></label>
            </td>`
					row.innerHTML += `
              <td>
                  <input type="text" value="${v[1]}" class="lineinput" oninput="admin__savematerials();">
              </td>
              <td>
                  <input type="text" value="${v[2]}" class="lineinput" oninput="admin__savematerials();">
              </td>
              <td>
                  <input type="text" value="${v[3]}" class="lineinput" oninput="admin__savematerials();">
              </td>
              <td>
                  <input type="text" value="${v[4]}" class="lineinput" oninput="admin__savematerials();">
              </td>
              <td>
                  <input type="text" value="${v[5]}" class="lineinput" oninput="admin__savematerials();">
              </td>
              <td>
                  <input type="text" value="${v[6]}" class="lineinput" oninput="admin__savematerials();">
              </td>
              <td>
                  <input type="text" value="${v[7]}" class="lineinput" oninput="admin__savematerials();">
              </td>
              `

					if (v.length > 5 && v[8].length > 5) {
						row.innerHTML +=
							'<td><img src="/uploads/' +
							v[8] +
							'" style="max-width: 100px"><input type="hidden" class="fileinput_value" value="' +
							v[8] +
							'"><div onclick="this.parentElement.querySelector(`input`).value=``;admin__savematerials();location.reload();" class="admin__nollausbtn">Nollaa kuva</div></td>'
					} else {
						row.innerHTML += `
                <td>
                    <input type="file" class="fileinput">
                    <input type="hidden" class="fileinput_value" value="">
                    <div class="send_material_btn">Ammu kuva sisään</div>
                </td>`
					}
					row.innerHTML += `
              <td>
                  <input type="text" value="${v[9]}" class="lineinput" oninput="admin__savematerials();" list="listat_list">
              </td>
              <td>
                  <input type="text" value="${v[10]}" class="lineinput" oninput="admin__savematerials();" list="listat_list">
              </td>
              `
					t.appendChild(row)
				})
			}

			if (key == "s_saumakulku") {
				sauma__xkulku = document.getElementsByName("sauma__saumoitus_x")
				sauma__ykulku = document.getElementsByName("sauma__saumoitus_y")

				v_ = v_.replaceAll('"', "")

				if (v_.split("~~")[0] == "yli") {
					sauma__xkulku[0].checked = true
				} else if (v_.split("~~")[0] == "mukaan") {
					sauma__xkulku[1].checked = true
				}

				if (v_.split("~~")[1] == "yli") {
					sauma__ykulku[0].checked = true
				} else if (v_.split("~~")[1] == "mukaan") {
					sauma__ykulku[1].checked = true
				}
			}

			if (key == "s_saumasuunta") {
				v_ = v_.replaceAll('"', "")

				if (v_ == "levytys_pystyyn") {
					document.querySelector("#settings__sauma_pysty").checked = true
				} else if (v_ == "levytys_vaakaan") {
					document.querySelector("#settings__sauma_vaaka").checked = true
				}
			}

			if (key == "s_saumatyyppi") {
				saumat__xkulku = document.getElementsByName("sauma__xtype")
				saumat__ykulku = document.getElementsByName("sauma__ytype")

				v_ = v_.replaceAll('"', "")

				if (v_.split("~~")[0] == "oik") {
					saumat__xkulku[0].checked = true
				} else if (v_.split("~~")[0] == "vas") {
					saumat__xkulku[1].checked = true
				} else if (v_.split("~~")[0] == "tasoitus") {
					saumat__xkulku[2].checked = true
				}
				if (v_.split("~~")[1] == "yla") {
					saumat__ykulku[0].checked = true
				} else if (v_.split("~~")[1] == "ala") {
					saumat__ykulku[1].checked = true
				} else if (v_.split("~~")[1] == "vaakatasoitus") {
					saumat__ykulku[2].checked = true
				}
			}

			if (key == "s_saumatpysty") {
				t = document.querySelector(".saumapysty__tbody")
				v_.split("~~").forEach((v) => {
					v = v.replaceAll('"', "").split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}
					row.innerHTML +=
						`
            <td>
              <input name="saumapysty" type="radio" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__savesaumatpysty();" id="saumatpysty_` +
						count +
						`" ${checked}>
              <label for="saumatpysty_` +
						count +
						`"></label>
            </td>`
					row.innerHTML += `
              <td>
                  <input type="text" value="${v[1]}" class="lineinput" oninput="admin__savesaumatpysty();">
              </td>
              <td>
                  <input type="text" value="${v[2]}" class="lineinput" oninput="admin__savesaumatpysty();">
              </td>
              <td>
                  <input type="text" value="${v[3]}" class="lineinput" oninput="admin__savesaumatpysty();">
              </td>
              <td>
                  <input type="text" value="${v[4]}" class="lineinput" oninput="admin__savesaumatpysty();">
              </td>
              `
					t.appendChild(row)
				})
			}

			if (key == "s_saumatvaaka") {
				t = document.querySelector(".saumavaaka__tbody")
				v_.split("~~").forEach((v) => {
					v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}
					row.innerHTML +=
						`
            <td>
              <input name="saumavaaka" type="radio" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__savesaumatvaaka();" id="saumatvaaka_` +
						count +
						`" ${checked}>
              <label for="saumatvaaka_` +
						count +
						`"></label>
            </td>`
					row.innerHTML += `
              <td>
                  <input type="text" value="${v[1]}" class="lineinput" oninput="admin__savesaumatvaaka();">
              </td>
              <td>
                  <input type="text" value="${v[2]}" class="lineinput" oninput="admin__savesaumatvaaka();">
              </td>
              <td>
                  <input type="text" value="${v[3]}" class="lineinput" oninput="admin__savesaumatvaaka();">
              </td>
              <td>
                  <input type="text" value="${v[4]}" class="lineinput" oninput="admin__savesaumatvaaka();">
              </td>
              `
					t.appendChild(row)
				})
			}

			if (key == "s_rangat") {
				t = document.querySelector(".ranka__tbody")
				v_.split("~~").forEach((v) => {
					v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}

					r_options = ""
					for (let i = 0; i < rankatype_array.length; i++) {
						if (v[13] == rankatype_array[i]) {
							r_options +=
								"<option selected>" + rankatype_array[i] + "</option>"
						} else {
							r_options += "<option>" + rankatype_array[i] + "</option>"
						}
					}
					row.innerHTML +=
						`
            <td>
              <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__saverangat();" id="ranka_` +
						count +
						`" ${checked}>
              <label for="ranka_` +
						count +
						`"></label>
            </td>`
					row.innerHTML += `
            <td>
                <input type="text" value="${v[1]}" class="lineinput" oninput="admin__saverangat();">
            </td>
            <td>
                <input type="text" value="${v[2]}" class="lineinput" oninput="admin__saverangat();">
            </td>
            <td>
                <input type="text" value="${v[3]}" class="lineinput" oninput="admin__saverangat();">
            </td>
            <td>
                <input type="text" value="${v[4]}" class="lineinput" oninput="admin__saverangat();">
            </td>
            <td>
                <input type="text" value="${v[5]}" class="lineinput" oninput="admin__saverangat();">
            </td>
            <td>
                <input type="text" value="${v[6]}" class="lineinput" oninput="admin__saverangat();">
            </td>
            <td>
                <input type="text" value="${v[7]}" class="lineinput" oninput="admin__saverangat();">
            </td>
            <td>
                <input type="text" value="${v[8]}" class="lineinput" oninput="admin__saverangat();">
            </td>
            <td>
                <input type="text" value="${v[9]}" class="lineinput" oninput="admin__saverangat();">
            </td>
            <td>
                <input type="text" value="${v[10]}" class="lineinput" oninput="admin__saverangat();">
            </td>

            <td>
                <input type="text" value="${v[11]}" class="lineinput" oninput="admin__saverangat();">
            </td>
            <td>
                <input type="text" value="${v[12]}" class="lineinput" oninput="admin__saverangat();">
            </td>
            <td>
                <input type="text" value="${v[13]}" class="lineinput" oninput="admin__saverangat();">
            </td>
            <td>
                <input type="text" value="${v[14]}" class="lineinput" oninput="admin__saverangat();">
            </td>
            <td>
                <input type="text" value="${v[15]}" class="lineinput" oninput="admin__saverangat();">
            </td>
            <td>
                <input type="text" value="${v[16]}" class="lineinput" oninput="admin__saverangat();">
            </td>
            <td>
                <input type="text" value="${v[17]}" class="lineinput" oninput="admin__saverangat();">
            </td>


            `
					t.appendChild(row)
					if (v.length > 0) {
						document.querySelector("#ranka_list").innerHTML +=
							"<option class='" +
							v[2].toLowerCase() +
							"_userselection' data-optiondata='" +
							v[1] +
							"~~" +
							v[2] +
							"~~" +
							v[3] +
							"~~" +
							v[4] +
							"~~" +
							v[5] +
							"~~" +
							v[6] +
							"~~" +
							v[7] +
							"~~" +
							v[8] +
							"~~" +
							v[9] +
							"~~" +
							v[10] +
							"~~" +
							v[11] +
							"~~" +
							v[12] +
							"~~" +
							v[13] +
							"~~" +
							v[14] +
							"~~" +
							v[15] +
							"~~" +
							v[16] +
							"~~" +
							v[17] +
							"'>" +
							v[2] +
							"</option>"
					}
				})
			}
			if (key == "s_rangat_1") {
				t = document.querySelector(".ranka__tbody_one")
				v_.split("~~").forEach((v) => {
					v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}

					r_options = ""
					for (let i = 0; i < rankatype_array.length; i++) {
						if (v[13] == rankatype_array[i]) {
							r_options +=
								"<option selected>" + rankatype_array[i] + "</option>"
						} else {
							r_options += "<option>" + rankatype_array[i] + "</option>"
						}
					}

					row.innerHTML +=
						`
            <td>
              <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__saverangat_one();" id="ranka_one_` +
						count +
						`" ${checked}>
              <label for="ranka_one_` +
						count +
						`"></label>
            </td>`
					row.innerHTML += `
            <td>
                <input type="text" value="${v[1]}" class="lineinput" oninput="admin__saverangat_one();">
            </td>
            <td>
                <input type="text" value="${v[2]}" class="lineinput" oninput="admin__saverangat_one();" list="ranka_list"  onchange="give__rankaspecs(this);">
            </td>
            <td>
                <input type="text" value="${v[3]}" class="lineinput" oninput="admin__saverangat_one();">
            </td>
            <td>
                <input type="text" value="${v[4]}" class="lineinput" oninput="admin__saverangat_one();">
            </td>
            <td>
                <input type="text" value="${v[5]}" class="lineinput" oninput="admin__saverangat_one();">
            </td>
            <td>
                <input type="text" value="${v[6]}" class="lineinput" oninput="admin__saverangat_one();">
            </td>
            <td>
                <input type="text" value="${v[7]}" class="lineinput" oninput="admin__saverangat_one();">
            </td>
            <td>
                <input type="text" value="${v[8]}" class="lineinput" oninput="admin__saverangat_one();">
            </td>
            <td>
                <input type="text" value="${v[9]}" class="lineinput" oninput="admin__saverangat_one();">
            </td>
            <td>
                <input type="text" value="${v[10]}" class="lineinput" oninput="admin__saverangat_one();">
            </td>
            <td>
                <input type="text" value="${v[11]}" class="lineinput" oninput="admin__saverangat_one();">
            </td>

            `
					t.appendChild(row)
				})
			}
			if (key == "s_rangat_2") {
				t = document.querySelector(".ranka__tbody_two")
				v_.split("~~").forEach((v) => {
					v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}
					r_options = ""
					for (let i = 0; i < rankatype_array.length; i++) {
						if (v[13] == rankatype_array[i]) {
							r_options +=
								"<option selected>" + rankatype_array[i] + "</option>"
						} else {
							r_options += "<option>" + rankatype_array[i] + "</option>"
						}
					}

					row.innerHTML +=
						`
            <td>
              <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__saverangat_two();" id="ranka_two_` +
						count +
						`" ${checked}>
              <label for="ranka_two_` +
						count +
						`"></label>
            </td>`
					row.innerHTML += `
            <td>
                <input type="text" value="${v[1]}" class="lineinput" oninput="admin__saverangat_two();">
            </td>
            <td>
                <input type="text" value="${v[2]}" class="lineinput" oninput="admin__saverangat_two();" list="ranka_list"  onchange="give__rankaspecs(this);">
            </td>
            <td>
                <input type="text" value="${v[3]}" class="lineinput" oninput="admin__saverangat_two();">
            </td>
            <td>
                <input type="text" value="${v[4]}" class="lineinput" oninput="admin__saverangat_two();">
            </td>
            <td>
                <input type="text" value="${v[5]}" class="lineinput" oninput="admin__saverangat_two();">
            </td>
            <td>
                <input type="text" value="${v[6]}" class="lineinput" oninput="admin__saverangat_two();">
            </td>
            <td>
                <input type="text" value="${v[7]}" class="lineinput" oninput="admin__saverangat_two();">
            </td>
            <td>
                <input type="text" value="${v[8]}" class="lineinput" oninput="admin__saverangat_two();">
            </td>
            <td>
                <input type="text" value="${v[9]}" class="lineinput" oninput="admin__saverangat_two();">
            </td>
            <td>
                <input type="text" value="${v[10]}" class="lineinput" oninput="admin__saverangat_two();">
            </td>
            <td>
                <input type="text" value="${v[11]}" class="lineinput" oninput="admin__saverangat_two();">
            </td>
            `
					t.appendChild(row)
				})
			}
			if (key == "s_rangat_3") {
				t = document.querySelector(".ranka__tbody_three")
				v_.split("~~").forEach((v) => {
					v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}

					r_options = ""
					for (let i = 0; i < rankatype_array.length; i++) {
						if (v[13] == rankatype_array[i]) {
							r_options +=
								"<option selected>" + rankatype_array[i] + "</option>"
						} else {
							r_options += "<option>" + rankatype_array[i] + "</option>"
						}
					}
					row.innerHTML +=
						`
            <td>
              <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__saverangat_three();" id="ranka_three_` +
						count +
						`" ${checked}>
              <label for="ranka_three_` +
						count +
						`"></label>
            </td>`
					row.innerHTML += `
            <td>
                <input type="text" value="${v[1]}" class="lineinput" oninput="admin__saverangat_three();">
            </td>
            <td>
                <input type="text" value="${v[2]}" class="lineinput" oninput="admin__saverangat_three();" list="ranka_list"  onchange="give__rankaspecs(this);">
            </td>
            <td>
                <input type="text" value="${v[3]}" class="lineinput" oninput="admin__saverangat_three();">
            </td>
            <td>
                <input type="text" value="${v[4]}" class="lineinput" oninput="admin__saverangat_three();">
            </td>
            <td>
                <input type="text" value="${v[5]}" class="lineinput" oninput="admin__saverangat_three();">
            </td>
            <td>
                <input type="text" value="${v[6]}" class="lineinput" oninput="admin__saverangat_three();">
            </td>
            <td>
                <input type="text" value="${v[7]}" class="lineinput" oninput="admin__saverangat_three();">
            </td>
            <td>
                <input type="text" value="${v[8]}" class="lineinput" oninput="admin__saverangat_three();">
            </td>
            <td>
                <input type="text" value="${v[9]}" class="lineinput" oninput="admin__saverangat_three();">
            </td>
            <td>
                <input type="text" value="${v[10]}" class="lineinput" oninput="admin__saverangat_three();">
            </td>
            <td>
                <input type="text" value="${v[11]}" class="lineinput" oninput="admin__saverangat_three();">
            </td>
            `
					t.appendChild(row)
				})
			}
			if (key == "s_rangat_4") {
				t = document.querySelector(".ranka__tbody_four")
				v_.split("~~").forEach((v) => {
					v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}

					r_options = ""
					for (let i = 0; i < rankatype_array.length; i++) {
						if (v[13] == rankatype_array[i]) {
							r_options +=
								"<option selected>" + rankatype_array[i] + "</option>"
						} else {
							r_options += "<option>" + rankatype_array[i] + "</option>"
						}
					}
					row.innerHTML +=
						`
            <td>
              <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__saverangat_four();" id="ranka_four_` +
						count +
						`" ${checked}>
              <label for="ranka_four_` +
						count +
						`"></label>
            </td>`
					row.innerHTML += `
            <td>
                <input type="text" value="${v[1]}" class="lineinput" oninput="admin__saverangat_four();">
            </td>
            <td>
                <input type="text" value="${v[2]}" class="lineinput" oninput="admin__saverangat_four();" list="ranka_list"  onchange="give__rankaspecs(this);">
            </td>
            <td>
                <input type="text" value="${v[3]}" class="lineinput" oninput="admin__saverangat_four();">
            </td>
            <td>
                <input type="text" value="${v[4]}" class="lineinput" oninput="admin__saverangat_four();">
            </td>
            <td>
                <input type="text" value="${v[5]}" class="lineinput" oninput="admin__saverangat_four();">
            </td>
            <td>
                <input type="text" value="${v[6]}" class="lineinput" oninput="admin__saverangat_four();">
            </td>
            <td>
                <input type="text" value="${v[7]}" class="lineinput" oninput="admin__saverangat_four();">
            </td>
            <td>
                <input type="text" value="${v[8]}" class="lineinput" oninput="admin__saverangat_four();">
            </td>
            <td>
                <input type="text" value="${v[9]}" class="lineinput" oninput="admin__saverangat_four();">
            </td>
            <td>
                <input type="text" value="${v[10]}" class="lineinput" oninput="admin__saverangat_four();">
            </td>
            <td>
                <input type="text" value="${v[11]}" class="lineinput" oninput="admin__saverangat_four();">
            </td>
            `
					t.appendChild(row)
				})
			}
			if (key == "s_rangat_5") {
				t = document.querySelector(".ranka__tbody_five")
				v_.split("~~").forEach((v) => {
					v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}

					r_options = ""
					for (let i = 0; i < rankatype_array.length; i++) {
						if (v[13] == rankatype_array[i]) {
							r_options +=
								"<option selected>" + rankatype_array[i] + "</option>"
						} else {
							r_options += "<option>" + rankatype_array[i] + "</option>"
						}
					}
					row.innerHTML +=
						`
            <td>
              <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__saverangat_five();" id="ranka_five_` +
						count +
						`" ${checked}>
              <label for="ranka_five_` +
						count +
						`"></label>
            </td>`
					row.innerHTML += `
            <td>
                <input type="text" value="${v[1]}" class="lineinput" oninput="admin__saverangat_five();">
            </td>
            <td>
                <input type="text" value="${v[2]}" class="lineinput" oninput="admin__saverangat_five();" list="ranka_list"  onchange="give__rankaspecs(this);">
            </td>
            <td>
                <input type="text" value="${v[3]}" class="lineinput" oninput="admin__saverangat_five();">
            </td>
            <td>
                <input type="text" value="${v[4]}" class="lineinput" oninput="admin__saverangat_five();">
            </td>
            <td>
                <input type="text" value="${v[5]}" class="lineinput" oninput="admin__saverangat_five();">
            </td>
            <td>
                <input type="text" value="${v[6]}" class="lineinput" oninput="admin__saverangat_five();">
            </td>
            <td>
                <input type="text" value="${v[7]}" class="lineinput" oninput="admin__saverangat_five();">
            </td>
            <td>
                <input type="text" value="${v[8]}" class="lineinput" oninput="admin__saverangat_five();">
            </td>
            <td>
                <input type="text" value="${v[9]}" class="lineinput" oninput="admin__saverangat_five();">
            </td>
            <td>
                <input type="text" value="${v[10]}" class="lineinput" oninput="admin__saverangat_five();">
            </td>
            <td>
                <input type="text" value="${v[11]}" class="lineinput" oninput="admin__saverangat_five();">
            </td>

            `
					t.appendChild(row)
				})
			}
			if (key == "s_rangat_6") {
				t = document.querySelector(".ranka__tbody_six")
				v_.split("~~").forEach((v) => {
					v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}

					r_options = ""
					for (let i = 0; i < rankatype_array.length; i++) {
						if (v[13] == rankatype_array[i]) {
							r_options +=
								"<option selected>" + rankatype_array[i] + "</option>"
						} else {
							r_options += "<option>" + rankatype_array[i] + "</option>"
						}
					}
					row.innerHTML +=
						`
            <td>
              <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__saverangat_six();" id="ranka_six_` +
						count +
						`" ${checked}>
              <label for="ranka_six_` +
						count +
						`"></label>
            </td>`
					row.innerHTML += `
            <td>
                <input type="text" value="${v[1]}" class="lineinput" oninput="admin__saverangat_six();">
            </td>
            <td>
                <input type="text" value="${v[2]}" class="lineinput" oninput="admin__saverangat_six();" list="ranka_list"  onchange="give__rankaspecs(this);">
            </td>
            <td>
                <input type="text" value="${v[3]}" class="lineinput" oninput="admin__saverangat_six();">
            </td>
            <td>
                <input type="text" value="${v[4]}" class="lineinput" oninput="admin__saverangat_six();">
            </td>
            <td>
                <input type="text" value="${v[5]}" class="lineinput" oninput="admin__saverangat_six();">
            </td>
            <td>
                <input type="text" value="${v[6]}" class="lineinput" oninput="admin__saverangat_six();">
            </td>
            <td>
                <input type="text" value="${v[7]}" class="lineinput" oninput="admin__saverangat_six();">
            </td>
            <td>
                <input type="text" value="${v[8]}" class="lineinput" oninput="admin__saverangat_six();">
            </td>
            <td>
                <input type="text" value="${v[9]}" class="lineinput" oninput="admin__saverangat_six();">
            </td>
            <td>
                <input type="text" value="${v[10]}" class="lineinput" oninput="admin__saverangat_six();">
            </td>
            <td>
                <input type="text" value="${v[11]}" class="lineinput" oninput="admin__saverangat_six();">
            </td>
            `
					t.appendChild(row)
				})
			}
			if (key == "s_rangat_7") {
				t = document.querySelector(".ranka__tbody_seven")
				v_.split("~~").forEach((v) => {
					v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}

					r_options = ""
					for (let i = 0; i < rankatype_array.length; i++) {
						if (v[13] == rankatype_array[i]) {
							r_options +=
								"<option selected>" + rankatype_array[i] + "</option>"
						} else {
							r_options += "<option>" + rankatype_array[i] + "</option>"
						}
					}

					row.innerHTML +=
						`
            <td>
              <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__saverangat_seven();" id="ranka_seven_` +
						count +
						`" ${checked}>
              <label for="ranka_seven_` +
						count +
						`"></label>
            </td>`
					row.innerHTML += `
            <td>
                <input type="text" value="${v[1]}" class="lineinput" oninput="admin__saverangat_seven();">
            </td>
            <td>
                <input type="text" value="${v[2]}" class="lineinput" oninput="admin__saverangat_seven();" list="ranka_list"  onchange="give__rankaspecs(this);">
            </td>
            <td>
                <input type="text" value="${v[3]}" class="lineinput" oninput="admin__saverangat_seven();">
            </td>
            <td>
                <input type="text" value="${v[4]}" class="lineinput" oninput="admin__saverangat_seven();">
            </td>
            <td>
                <input type="text" value="${v[5]}" class="lineinput" oninput="admin__saverangat_seven();">
            </td>
            <td>
                <input type="text" value="${v[6]}" class="lineinput" oninput="admin__saverangat_seven();">
            </td>
            <td>
                <input type="text" value="${v[7]}" class="lineinput" oninput="admin__saverangat_seven();">
            </td>
            <td>
                <input type="text" value="${v[8]}" class="lineinput" oninput="admin__saverangat_seven();">
            </td>
            <td>
                <input type="text" value="${v[9]}" class="lineinput" oninput="admin__saverangat_seven();">
            </td>
            <td>
                <input type="text" value="${v[10]}" class="lineinput" oninput="admin__saverangat_seven();">
            </td>
            <td>
                <input type="text" value="${v[11]}" class="lineinput" oninput="admin__saverangat_seven();">
            </td>
            `
					t.appendChild(row)
				})
			}
			if (key == "s_rangat_8") {
				t = document.querySelector(".ranka__tbody_eight")
				v_.split("~~").forEach((v) => {
					v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}

					r_options = ""
					for (let i = 0; i < rankatype_array.length; i++) {
						if (v[13] == rankatype_array[i]) {
							r_options +=
								"<option selected>" + rankatype_array[i] + "</option>"
						} else {
							r_options += "<option>" + rankatype_array[i] + "</option>"
						}
					}
					row.innerHTML +=
						`
            <td>
              <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__saverangat_eight();" id="ranka_eight_` +
						count +
						`" ${checked}>
              <label for="ranka_eight_` +
						count +
						`"></label>
            </td>`
					row.innerHTML += `
            <td>
                <input type="text" value="${v[1]}" class="lineinput" oninput="admin__saverangat_eight();">
            </td>
            <td>
                <input type="text" value="${v[2]}" class="lineinput" oninput="admin__saverangat_eight();" list="ranka_list"  onchange="give__rankaspecs(this);">
            </td>
            <td>
                <input type="text" value="${v[3]}" class="lineinput" oninput="admin__saverangat_eight();">
            </td>
            <td>
                <input type="text" value="${v[4]}" class="lineinput" oninput="admin__saverangat_eight();">
            </td>
            <td>
                <input type="text" value="${v[5]}" class="lineinput" oninput="admin__saverangat_eight();">
            </td>
            <td>
                <input type="text" value="${v[6]}" class="lineinput" oninput="admin__saverangat_eight();">
            </td>
            <td>
                <input type="text" value="${v[7]}" class="lineinput" oninput="admin__saverangat_eight();">
            </td>
            <td>
                <input type="text" value="${v[8]}" class="lineinput" oninput="admin__saverangat_eight();">
            </td>
            <td>
                <input type="text" value="${v[9]}" class="lineinput" oninput="admin__saverangat_eight();">
            </td>
            <td>
                <input type="text" value="${v[10]}" class="lineinput" oninput="admin__saverangat_eight();">
            </td>
            <td>
                <input type="text" value="${v[11]}" class="lineinput" oninput="admin__saverangat_eight();">
            </td>
            `
					t.appendChild(row)
				})
			}

			if (key == "s_listatpysty") {
				t = document.querySelector(".listat2a__tbody")
				v_.split("~~").forEach((v) => {
					v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}
					row.innerHTML +=
						`
            <td>
              <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__savelistatpysty();" id="listat2a_` +
						count +
						`" ${checked}>
              <label for="listat2a_` +
						count +
						`"></label>
            </td>`
					row.innerHTML += `
            <td>
                <input type="text" value="${v[1]}" class="lineinput" oninput="admin__savelistatpysty();">
            </td>
            <td>
                <input type="text" value="${v[2]}" class="lineinput" oninput="admin__savelistatpysty();">
            </td>
            <td>
                <input type="text" value="${v[3]}" class="lineinput" oninput="admin__savelistatpysty();">
            </td>
            <td>
                <input type="text" value="${v[4]}" class="lineinput" oninput="admin__savelistatpysty();">
            </td>
            <td>
                <input type="text" value="${v[5]}" class="lineinput" oninput="admin__savelistatpysty();give__listaspecs(this);" list="listat_list">
            </td>
            <td>
                <input type="text" value="${v[6]}" class="lineinput" oninput="admin__savelistatpysty();">
            </td>
            <td>
                <input type="text" value="${v[7]}" class="lineinput" oninput="admin__savelistatpysty();">
            </td>
            <td>
                <input type="text" value="${v[8]}" class="lineinput" oninput="admin__savelistatpysty();">
            </td>
            <td>
                <input type="text" value="${v[9]}" class="lineinput" oninput="admin__savelistatpysty();">
            </td>
            <td>
                <input type="text" value="${v[10]}" class="lineinput" oninput="admin__savelistatpysty();">
            </td>
            <td>
                <input type="text" value="${v[11]}" class="lineinput" oninput="admin__savelistatpysty();">
            </td>
            <td>
                <input type="text" value="${v[12]}" class="lineinput" oninput="admin__savelistatpysty();">
            </td>
            `
					t.appendChild(row)
				})
			}

			if (key == "s_listatvaaka") {
				t = document.querySelector(".listat2b__tbody")
				v_.split("~~").forEach((v) => {
					v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}
					row.innerHTML +=
						`
            <td>
              <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__savelistatvaaka();" id="listat2b_` +
						count +
						`" ${checked}>
              <label for="listat2b_` +
						count +
						`"></label>
            </td>`
					row.innerHTML += `
            <td>
              <input type="text" value="${v[1]}" class="lineinput" oninput="admin__savelistatvaaka();">
            </td>
            <td>
                <input type="text" value="${v[2]}" class="lineinput" oninput="admin__savelistatvaaka();">
            </td>
            <td>
                <input type="text" value="${v[3]}" class="lineinput" oninput="admin__savelistatvaaka();">
            </td>
            <td>
                <input type="text" value="${v[4]}" class="lineinput" oninput="admin__savelistatvaaka();">
            </td>
            <td>
                <input type="text" value="${v[5]}" class="lineinput" oninput="admin__savelistatvaaka(); give__listaspecs(this);" list="listat_list">
            </td>
            <td>
                <input type="text" value="${v[6]}" class="lineinput" oninput="admin__savelistatvaaka();">
            </td>
            <td>
                <input type="text" value="${v[7]}" class="lineinput" oninput="admin__savelistatvaaka();">
            </td>
            <td>
                <input type="text" value="${v[8]}" class="lineinput" oninput="admin__savelistatvaaka();">
            </td>
            <td>
                <input type="text" value="${v[9]}" class="lineinput" oninput="admin__savelistatvaaka();">
            </td>
            <td>
                <input type="text" value="${v[10]}" class="lineinput" oninput="admin__savelistatvaaka();">
            </td>
            <td>
                <input type="text" value="${v[11]}" class="lineinput" oninput="admin__savelistatvaaka();">
            </td>
            <td>
                <input type="text" value="${v[12]}" class="lineinput" oninput="admin__savelistatvaaka();">
            </td>
            `
					t.appendChild(row)
				})
			}
			if (key == "s_listat") {
				t = document.querySelector(".listat__tbody")
				v_.split("~~").forEach((v) => {
					v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}

					row.innerHTML += `
            <td>
                <input type="text" value="${v[0]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            <td>
                <input type="text" value="${v[1]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            <td>
                <input type="text" value="${v[2]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            <td>
                <input type="text" value="${v[3]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            <td>
                <input type="text" value="${v[4]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            <td>
                <input type="text" value="${v[5]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            <td>
                <input type="text" value="${v[6]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            <td>
                <input type="text" value="${v[7]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            <td>
                <input type="text" value="${v[8]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            <td>
                <input type="text" value="${v[9]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            <td>
                <input type="text" value="${v[10]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            <td>
                <input type="text" value="${v[11]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            <td>
                <input type="text" value="${v[12]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            <td>
                <input type="text" value="${v[13]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            <td>
                <input type="text" value="${v[14]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            <td>
                <input type="text" value="${v[15]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            <td>
                <input type="text" value="${v[16]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            <td>
                <input type="text" value="${v[17]}" class="lineinput" oninput="admin__savelistat();">
            </td>
            `
					t.appendChild(row)
					if (v.length > 0) {
						document.querySelector("#listat_list").innerHTML +=
							"<option class='" +
							v[1]
								.replaceAll("/", "_")
								.replaceAll(" ", "_")
								.replaceAll("ä", "a")
								.replaceAll("ö", "o")
								.toLowerCase() +
							"_userselection' data-optiondata='" +
							v[1] +
							"~~" +
							v[2] +
							"~~" +
							v[3] +
							"~~" +
							v[4] +
							"~~" +
							v[5] +
							"~~" +
							v[6] +
							"~~" +
							v[7] +
							"~~" +
							v[8] +
							"~~" +
							v[9] +
							"~~" +
							v[10] +
							"~~" +
							v[11] +
							"~~" +
							v[12] +
							"~~" +
							v[13] +
							"~~" +
							v[14] +
							"~~" +
							v[15] +
							v[16] +
							"~~" +
							v[17] +
							"'>" +
							v[1] +
							"</option>"
					}
				})
			}

			if (key == "s_levytysreunat") {
				t = document.querySelector(".levytysreunat__tbody")
				v_.split("~~").forEach((v) => {
					v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}
					row.innerHTML +=
						`
            <td>
              <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__savelevytysreunat();" id="lvreunat_` +
						count +
						`" ${checked}>
              <label for="lvreunat_` +
						count +
						`"></label>
            </td>`
					row.innerHTML += `
            <td>
                <input type="text" value="${v[1]}" class="lineinput" oninput="admin__savelevytysreunat();">
            </td>
            <td>
                <input type="text" value="${v[2]}" class="lineinput" oninput="admin__savelevytysreunat();">
            </td>
            <td>
                <input type="text" value="${v[3]}" class="lineinput" oninput="admin__savelevytysreunat();">
            </td>
            <td>
                <input type="text" value="${v[4]}" class="lineinput" oninput="admin__savelevytysreunat();">
            </td>
            <td>
                <input type="text" value="${v[5]}" class="lineinput" oninput="admin__savelevytysreunat();">
            </td>
            <td>
                <input type="text" value="${v[6]}" class="lineinput" oninput="admin__savelevytysreunat();">
            </td>
            <td>
                <input type="text" value="${v[7]}" class="lineinput" oninput="admin__savelevytysreunat();">
            </td>
            <td>
                <input type="text" value="${v[8]}" class="lineinput" oninput="admin__savelevytysreunat();">
            </td>
            <td>
                <input type="text" value="${v[9]}" class="lineinput" oninput="admin__savelevytysreunat();">
            </td>
            <td>
                <input type="text" value="${v[10]}" class="lineinput" oninput="admin__savelevytysreunat();">
            </td>
            <td>
                <input type="text" value="${v[11]}" class="lineinput" oninput="admin__savelevytysreunat();">
            </td>
            <td>
                <input type="text" value="${v[12]}" class="lineinput" oninput="admin__savelevytysreunat();">
            </td>
            <td>
                <input type="text" value="${v[13]}" class="lineinput" oninput="admin__savelevytysreunat();">
            </td>
            `
					t.appendChild(row)
				})
			}

			for (let i = 1; i < 6; i++) {
				if (key == "s_aukot_" + i) {
					if (i == 1) {
						h2 = "<h2>Oviaukon asetukset</h2>"
						typeclass = "ovi"
					} else if (i == 2) {
						h2 = "<h2>Ikkuna-aukon asetukset</h2>"
						typeclass = "ikkuna"
					} else if (i == 3) {
						h2 = "<h2>Pilariaukon asetukset</h2>"
						typeclass = "pilari"
					} else if (i == 4) {
						h2 = "<h2>Palkkiaukon asetukset</h2>"
						typeclass = "palkki"
					} else if (i == 5) {
						h2 = "<h2>Ilmastointiaukon asetukset</h2>"
						typeclass = "ilmastointi"
					}

					newsection = document.createElement("section")
					newsection.classList = typeclass + "_section"
					newsection.dataset.aukkotype = typeclass
					newsection.dataset.count = i

					newsection_h4 = document.createElement("h4")
					newsection_h4.classList = typeclass + "__asetusheading"
					newsection_h4.innerHTML = typeclass + " aukko-asetus, Tyyppi <b></b>"

					newsection_table = document.createElement("table")
					newsection_table.classList.add("tabs__target_table")
					newsection_table.classList.add("aukko-table")
					newtr = document.createElement("tr")
					newtr.classList = "headingrow"
					newtr.innerHTML = `
                <td>Aukkojen tyypit</td>
                <td>Max</td>
                <td>Min</td>
                <td>L2A Ranka</td>
                <td>L2A Rangan pituus</td>
                <td>L2A +	Rangan laatu</td>
                <td>L2B Ranka</td>
                <td>L2B Rangan pituus</td>
                <td>L2B +	Rangan laatu</td>
                <td>L2A Listat</td>
                <td>L2A Listan pituus +</td>
                <td>L2A Listan laatu</td>
                <td>L2B Listat</td>
                <td>L2B Listan pituus +</td>
                <td>L2B Listan laatu</td>
                `

					count_rows = 0

					newsection.appendChild(newsection_h4)
					newsection.appendChild(newsection_table)
					newsection_table.appendChild(newtr)

					v_.split("~~").forEach((v) => {
						counting_item = 0
						if (count_rows == 4) {
							newsection_h4 = document.createElement("h4")
							newsection_h4.classList = typeclass + "__asetusheading"
							newsection_h4.innerHTML =
								typeclass + " aukko-asetus, Tyyppi <b></b>"

							newsection_table = document.createElement("table")
							newsection_table.classList.add("tabs__target_table")
							newsection_table.classList.add("aukko-table")
							newtr = document.createElement("tr")
							newtr.classList = "headingrow"
							newtr.innerHTML = `
                <td>Aukkojen tyypit</td>
                <td>Max</td>
                <td>Min</td>
                <td>L2A Ranka</td>
                <td>L2A Rangan pituus</td>
                <td>L2A +	Rangan laatu</td>
                <td>L2B Ranka</td>
                <td>L2B Rangan pituus</td>
                <td>L2B +	Rangan laatu</td>
                <td>L2A Listat</td>
                <td>L2A Listan pituus +</td>
                <td>L2A Listan laatu</td>
                <td>L2B Listat</td>
                <td>L2B Listan pituus +</td>
                <td>L2B Listan laatu</td>`
							newsection_table.appendChild(newtr)
							count_rows = 0
							newsection.appendChild(newsection_h4)
							newsection.appendChild(newsection_table)

							count_rows = 0
						}
						v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")
						newtr = document.createElement("tr")
						if (v.length > 1) {
							v.forEach((vchild) => {
								counting_item += 1
								if (counting_item == 2 || counting_item == 3) {
									newtr.innerHTML += `
                  <td>
                    <input type="number" data-key="s_aukot_${i}" value="${vchild}" class='lineinput' oninput='save_aukko(this);'>
                  </td>`
								} else if (counting_item == 4) {
									newtr.innerHTML += `
                    <td>
                      <input type='text' list="ranka_list" data-key="s_aukot_${i}" value="${vchild}" class='lineinput' oninput='change_aukkoranka(this,${counting_item});save_aukko(this);'>
                    </td>`
								} else if (counting_item == 7) {
									newtr.innerHTML += `
                    <td>
                      <input type='text' list="ranka_list" data-key="s_aukot_${i}" value="${vchild}" class='lineinput' oninput='change_aukkoranka(this,${counting_item});save_aukko(this);'>
                    </td>`
								} else if (counting_item == 10) {
									newtr.innerHTML += `
                    <td>
                      <input type='text' list="listat_list" data-key="s_aukot_${i}" value="${vchild}" class='lineinput' oninput='change_aukkolista(this,${counting_item});save_aukko(this);'>
                    </td>`
								} else if (counting_item == 13) {
									newtr.innerHTML += `
                    <td>
                      <input type='text' list="listat_list" data-key="s_aukot_${i}" value="${vchild}" class='lineinput' oninput='change_aukkolista(this,${counting_item});save_aukko(this);'>
                    </td>`
								} else {
									newtr.innerHTML += `
                    <td>
                      <input type='text' data-key="s_aukot_${i}" value="${vchild}" class='lineinput' oninput='save_aukko(this);'>
                    </td>`
								}
							})
						}
						newsection_table.appendChild(newtr)
						count_rows += 1
					})

					// newdiv = document.createElement("div");
					// newdiv.classList = "newtableshere";

					start_btn = document.createElement("div")
					start_btn.classList = "start_btn"
					start_btn.setAttribute("onclick", "appendnewaukkoitem(this);")
					start_btn.innerHTML = "Lisää uusi " + typeclass + "-asetus"

					// newsection.appendChild(newdiv);
					newsection.appendChild(start_btn)
					hs.appendChild(newsection)
				}
			}

			if (key == "s_reikaframe") {
				t = document.querySelector(".reikaframe__tbody")
				v_.split("~~").forEach((v) => {
					v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[1] == "on") {
						checked = "checked"
					}
					row.innerHTML +=
						`


            <td>
                <input type="text" value="${v[0]}" class="lineinput" oninput="admin__savereikaframet();">
            </td>

            <td>
              <input type="checkbox" value="${v[1]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__savereikaframet();" id="reikaframe_` +
						count +
						`" ${checked}>
              <label for="reikaframe_` +
						count +
						`"></label>
            </td>

            `
					t.appendChild(row)
				})
			}

			if (key == "s_lapiviennit") {
				t = document.querySelector(".lapiviennit__tbody")
				v_.split("~~").forEach((v) => {
					v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}
					checked2 = ""
					if (v[5] == "on") {
						checked2 = "checked"
					}
					row.innerHTML +=
						`
            <td>
              <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__savelapiviennit();" id="lapivienti_` +
						count +
						`" ${checked}>
              <label for="lapivienti_` +
						count +
						`"></label>
            </td>
            <td>
                <input type="text" value="${v[1]}" class="lineinput" oninput="admin__savelapiviennit();">
            </td>
            <td>
                <input type="text" value="${v[2]}" class="lineinput" oninput="admin__savelapiviennit();">
            </td>
            <td>
                <input type="text" value="${v[3]}" class="lineinput" oninput="admin__savelapiviennit();">
            </td>
            <td>
                <input type="text" value="${v[4]}" class="lineinput" oninput="admin__savelapiviennit();">
            </td>
            <td>
              <input type="checkbox" value="${v[5]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__savelapiviennit();" id="lapivienti_dust_` +
						count +
						`" ${checked2}>
              <label for="lapivienti_dust_` +
						count +
						`"></label>
            </td>
            <td>
                  <input type="text" value="${v[6]}" class="lineinput" oninput="admin__savelapiviennit();change_aukkolista(this,7);" list="listat_list">
              </td>
              <td>
                  <input type="text" value="${v[7]}" class="lineinput" oninput="admin__savelapiviennit();">
              </td>
              <td>
                  <input type="text" value="${v[8]}" class="lineinput" oninput="admin__savelapiviennit();">
              </td>
              <td>
                  <input type="text" value="${v[9]}" class="lineinput" oninput="admin__savelapiviennit();change_aukkolista(this,10);" list="listat_list">
              </td>
              <td>
                  <input type="text" value="${v[10]}" class="lineinput" oninput="admin__savelapiviennit();">
              </td>
              <td>
                  <input type="text" value="${v[11]}" class="lineinput" oninput="admin__savelapiviennit();">
              </td>
            `
					t.appendChild(row)
				})
			}

			if (key == "s_systems") {
				t = document.querySelector(".systems__tbody")
				v_.split("~~").forEach((v) => {
					v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

					count = t.querySelectorAll("tr").length
					row = document.createElement("tr")
					checked = ""
					if (v[0] == "on") {
						checked = "checked"
					}
					row.innerHTML += `
            <td>
              <input type="checkbox" name="admin_system"  value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';admin__savesystems();" id="system_${count}" ${checked}>
              <label for="system_${count}"></label>
            </td>

            <td>
                <input type="text" value="${v[1]}" class="lineinput" oninput="admin__savesystems();">
            </td>
            <td>
                <input type="text" value="${v[2]}" class="lineinput" oninput="admin__savesystems();">
            </td>
            <td>
                <input type="text" value="${v[3]}" class="lineinput" oninput="admin__savesystems();">
            </td>
            `
					t.appendChild(row)
				})
			}

			if (key == "s_pituussuunnan") {
				const inputs = document.querySelectorAll(".pituussuunnan input")
				const data = v_.slice(0, -1).split(",")

				for (let i = 0; i < inputs.length; i++) {
					inputs[i].value = data[i]
				}
			}

			if (key == "s_leveyssuunnan") {
				const inputs = document.querySelectorAll(".leveyssuunnan input")
				const data = v_.slice(0, -1).split(",")

				for (let i = 0; i < inputs.length; i++) {
					inputs[i].value = data[i]
				}
			}

			if (key == "s_reunaasetukset") {
				const inputs = document.querySelectorAll(".poraukset input")
				const data = v_.slice(0, -1).split(",")

				for (let i = 0; i < inputs.length; i++) {
					inputs[i].value = data[i]
				}
			}
		})

		$(".send_material_btn").click(function () {
			totalfiles = $(this).parent().find(".fileinput")[0].files.length
			material_files = $(this).parent().find(".fileinput")[0].files
			material_filesval = $(this).parent().find(".fileinput_value")[0]

			for (var a = 0; a < totalfiles; a++) {
				form_data = new FormData()
				form_data.append("files", material_files[a])

				$.ajax({
					url: "/upload.php",
					type: "POST",
					data: form_data,
					contentType: "multipart/form-data",
					// dataType: 'json',
					contentType: false,
					processData: false,
					success: function (response) {
						material_filesval.value = response
						admin__savematerials()
						alert("ladattu!")
					},
				})
			}
		})

		givenewtype()
	})
}

const sleep = (ms) => new Promise((resolve) => setTimeout(resolve, ms))

/**
 * Function to handle the creation of a new malli.
 * This function performs a series of actions including creating a new input element, making an AJAX POST request,
 * and calling multiple admin functions to save data.
 * @returns None
 */
function s_newmalli() {
	console.log("data")
	i = document.querySelectorAll(".tmpbtn").length

	letter = String.fromCharCode(64 + i)
	document.querySelector(".adminpreset_settings").innerHTML += `
  <input name="admin__presets" type="radio" class="tmpbtn" value="${letter}" id="template-button-${letter}" data-letterid="${preset_id}">
  <label onclick="s_change_malli('${letter}');" for="template-button-${letter}">${letter}</label>`
	document.querySelector(`#template-button-${letter}`).click()

	formData = {
		index: letter,
	}
	console.log(formData)
	$.ajax({
		type: "POST",
		url: "vendor/admin__changetemplate.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log(data)
		;(async () => {
			preset_id = data
			console.log("PRESET ID!: " + preset_id)
			// await sleep(1000);
			admin__savematerials()
			// await sleep(1000);
			admin__saveusers()
			// await sleep(1000);
			admin__savesystems()
			// await sleep(1000);
			admin__saverangat()
			// await sleep(1000);
			admin__saverangat_one()
			// await sleep(1000);
			admin__saverangat_two()
			// await sleep(1000);
			admin__saverangat_three()
			// await sleep(1000);
			admin__saverangat_four()
			// await sleep(1000);
			admin__saverangat_five()
			// await sleep(1000);
			admin__saverangat_six()
			// await sleep(1000);
			admin__savereikaframet()
			// await sleep(1000);
			admin__savelapiviennit()
			// await sleep(1000);
			admin__savelevytysreunat()
			// await sleep(1000);
			admin__savesaumatpysty()
			// await sleep(1000);
			admin__savesaumatvaaka()
			// await sleep(1000);
			save_saumasuunta()
			// await sleep(1000);
			save_saumatyyppi()
			// await sleep(1000);
			save_saumakulku()
			// await sleep(1000);
			inputs = document.querySelectorAll("#hole_set input")
			for (let i = 0; i < inputs.length; i++) {
				try {
					save_aukko(inputs[i])
					// await sleep(50);
				} catch (error) {
					console.log(error)
				}
			}
			admin__savelistatpysty()
			// await sleep(50);
			admin__savelistatvaaka()
			// await sleep(50);
			s_change_malli(letter, data)
		})()
	})
}

preset_id = 100
s_change_malli(`DEFAULT`, `100`)

function saumoitus__examplephoto() {
	var examplephoto = document.getElementById("sauma__saumoitus_photo")
	if (document.getElementById("settings__sauma_pysty").checked) {
		examplephoto.src = "/img/saumoitus/s1.jpg"
	}
	if (document.getElementById("settings__sauma_vaaka").checked) {
		examplephoto.src = "/img/saumoitus/s1.jpg"
	}
	// other variables
	if (document.getElementById("settings__sauma_pysty").checked) {
		if (document.getElementById("settings__saumahanta-oik").checked) {
			if (document.getElementById("saumoitus__sauma_one").checked) {
				examplephoto.src = "/img/saumoitus/s1.jpg"
			} else if (
				document.getElementById("saumoitus__sauma_two").checked &&
				document.getElementById("saumoitus__sauma_three").checked
			) {
				examplephoto.src = "/img/saumoitus/s4.jpg"
			} else if (document.getElementById("saumoitus__sauma_two").checked) {
				examplephoto.src = "/img/saumoitus/s2.jpg"
			} else if (document.getElementById("saumoitus__sauma_three").checked) {
				examplephoto.src = "/img/saumoitus/s3.jpg"
			}
		} else if (document.getElementById("settings__saumahanta-vas").checked) {
			if (document.getElementById("saumoitus__sauma_one").checked) {
				examplephoto.src = "/img/saumoitus/s1v.jpg"
			} else if (
				document.getElementById("saumoitus__sauma_two").checked &&
				document.getElementById("saumoitus__sauma_three").checked
			) {
				examplephoto.src = "/img/saumoitus/s4v.jpg"
			} else if (document.getElementById("saumoitus__sauma_two").checked) {
				examplephoto.src = "/img/saumoitus/s2v.jpg"
			} else if (document.getElementById("saumoitus__sauma_three").checked) {
				examplephoto.src = "/img/saumoitus/s3v.jpg"
			}
		} else if (
			document.getElementById("settings__saumahanta-tasoitus").checked
		) {
			if (document.getElementById("saumoitus__sauma_one").checked) {
				examplephoto.src = "/img/saumoitus/s1t.jpg"
			} else if (
				document.getElementById("saumoitus__sauma_two").checked &&
				document.getElementById("saumoitus__sauma_three").checked
			) {
				examplephoto.src = "/img/saumoitus/s4t.jpg"
			} else if (document.getElementById("saumoitus__sauma_two").checked) {
				examplephoto.src = "/img/saumoitus/s2t.jpg"
			} else if (document.getElementById("saumoitus__sauma_three").checked) {
				examplephoto.src = "/img/saumoitus/s3t.jpg"
			}
		}
	}
	if (document.getElementById("settings__sauma_vaaka").checked) {
		if (document.getElementById("settings__saumahanta-oik").checked) {
			if (document.getElementById("saumoitus__sauma_one").checked) {
				examplephoto.src = "/img/saumoitus/vs1.jpg"
			} else if (
				document.getElementById("saumoitus__sauma_two").checked &&
				document.getElementById("saumoitus__sauma_three").checked
			) {
				examplephoto.src = "/img/saumoitus/vs4.jpg"
			} else if (document.getElementById("saumoitus__sauma_two").checked) {
				examplephoto.src = "/img/saumoitus/vs2.jpg"
			} else if (document.getElementById("saumoitus__sauma_three").checked) {
				examplephoto.src = "/img/saumoitus/vs3.jpg"
			}
		} else if (document.getElementById("settings__saumahanta-vas").checked) {
			if (document.getElementById("saumoitus__sauma_one").checked) {
				examplephoto.src = "/img/saumoitus/vs1v.jpg"
			} else if (
				document.getElementById("saumoitus__sauma_two").checked &&
				document.getElementById("saumoitus__sauma_three").checked
			) {
				examplephoto.src = "/img/saumoitus/vs4v.jpg"
			} else if (document.getElementById("saumoitus__sauma_two").checked) {
				examplephoto.src = "/img/saumoitus/vs2v.jpg"
			} else if (document.getElementById("saumoitus__sauma_three").checked) {
				examplephoto.src = "/img/saumoitus/vs3v.jpg"
			}
		} else if (
			document.getElementById("settings__saumahanta-tasoitus").checked
		) {
			if (document.getElementById("saumoitus__sauma_one").checked) {
				examplephoto.src = "/img/saumoitus/vs1t.jpg"
			} else if (
				document.getElementById("saumoitus__sauma_two").checked &&
				document.getElementById("saumoitus__sauma_three").checked
			) {
				examplephoto.src = "/img/saumoitus/vs4t.jpg"
			} else if (document.getElementById("saumoitus__sauma_two").checked) {
				examplephoto.src = "/img/saumoitus/vs2t.jpg"
			} else if (document.getElementById("saumoitus__sauma_three").checked) {
				examplephoto.src = "/img/saumoitus/vs3t.jpg"
			}
		}
	}
}

saumoitus__examplephoto()

function give__rankaspecs(e) {
	elements_array = document
		.querySelector("." + e.value.toLowerCase() + "_userselection")
		.dataset.optiondata.split("~~")
	console.log(elements_array)
	e.parentElement.parentElement.querySelectorAll("input")[2].value =
		elements_array[1] //name
	// e.parentElement.parentElement.querySelectorAll("input")[3].value = elements_array[2]; //tilauscode
	e.parentElement.parentElement.querySelectorAll("input")[4].value =
		elements_array[3] //material
	// e.parentElement.parentElement.querySelectorAll("input")[5].value = elements_array[4]; // paksuus
	e.parentElement.parentElement.querySelectorAll("input")[6].value =
		elements_array[4] //laatu
	e.parentElement.parentElement.querySelectorAll("input")[7].value =
		elements_array[5] //värinimi
	// e.parentElement.parentElement.querySelectorAll("input")[8].value = elements_array[7]; //ncs

	console.log(e.parentElement.parentElement.querySelectorAll("input"))
}
function give__listaspecs(e) {
	elements_array = document
		.querySelector(
			"." +
				e.value
					.replaceAll("/", "_")
					.replaceAll(" ", "_")
					.replaceAll("ä", "a")
					.replaceAll("ö", "o")
					.toLowerCase() +
				"_userselection"
		)
		.dataset.optiondata.split("~~")
	console.log(elements_array)
	e.parentElement.parentElement.querySelectorAll("input")[4].value =
		elements_array[15] //Vähennä mistä ehdotus
	e.parentElement.parentElement.querySelectorAll("input")[5].value =
		elements_array[0] //name
	// e.parentElement.parentElement.querySelectorAll("input")[6].value = elements_array[1]; //tilauscode
	e.parentElement.parentElement.querySelectorAll("input")[7].value =
		elements_array[2] //material
	// e.parentElement.parentElement.querySelectorAll("input")[5].value = elements_array[4]; // paksuus
	e.parentElement.parentElement.querySelectorAll("input")[9].value =
		elements_array[3] //laatu
	e.parentElement.parentElement.querySelectorAll("input")[10].value =
		elements_array[4] //värinimi
	e.parentElement.parentElement.querySelectorAll("input")[11].value =
		elements_array[6] //ncs

	console.log(e.parentElement.parentElement.querySelectorAll("input"))
}

function appendnewaukkoitem(e) {
	tables = e.parentElement.querySelectorAll("table")
	lasttable =
		e.parentElement.querySelectorAll("table")[
			parseFloat(e.parentElement.querySelectorAll("table").length) - 1
		]

	i = e.parentElement.dataset.count
	newtr = document.createElement("tr")
	newtr.innerHTML =
		`
  <tr>
    <td><input type="text" value="" data-key='s_aukot_` +
		i +
		`' class="lineinput" oninput="save_aukko(this);"></td>
    <td><input type="text" value="" data-key='s_aukot_` +
		i +
		`' class="lineinput" oninput="save_aukko(this);"></td>
    <td><input type="text" value="" data-key='s_aukot_` +
		i +
		`' class="lineinput" oninput="save_aukko(this);"></td>
    <td><input type="text" value="" data-key='s_aukot_` +
		i +
		`' class="lineinput" oninput="save_aukko(this);"></td>
    <td><input type="text" value="" data-key='s_aukot_` +
		i +
		`' class="lineinput" oninput="save_aukko(this);"></td>
    <td><input type="text" value="" data-key='s_aukot_` +
		i +
		`' class="lineinput" oninput="save_aukko(this);"></td>
    <td><input type="text" value="" data-key='s_aukot_` +
		i +
		`' class="lineinput" oninput="save_aukko(this);"></td>
    <td><input type="text" value="" data-key='s_aukot_` +
		i +
		`' class="lineinput" oninput="save_aukko(this);"></td>
    <td><input type="text" value="" data-key='s_aukot_` +
		i +
		`' class="lineinput" oninput="save_aukko(this);"></td>
    <td><input type="text" value="" data-key='s_aukot_` +
		i +
		`' class="lineinput" oninput="save_aukko(this);"></td>
    <td><input type="text" value="" data-key='s_aukot_` +
		i +
		`' class="lineinput" oninput="save_aukko(this);"></td>
    <td><input type="text" value="" data-key='s_aukot_` +
		i +
		`' class="lineinput" oninput="save_aukko(this);"></td>
    <td><input type="text" value="" data-key='s_aukot_` +
		i +
		`' class="lineinput" oninput="save_aukko(this);"></td>
    <td><input type="text" value="" data-key='s_aukot_` +
		i +
		`' class="lineinput" oninput="save_aukko(this);"></td>
    <td><input type="text" value="" data-key='s_aukot_` +
		i +
		`' class="lineinput" oninput="save_aukko(this);"></td>
  </tr>
  `

	if (lasttable.querySelectorAll("tr").length >= 5) {
		h4 = document.createElement("h4")
		h4.classList = e.parentElement.dataset.aukkotype + "__asetusheading"
		h4.innerHTML =
			e.parentElement.dataset.aukkotype + `aukko-asetus, Tyyppi <b></b>`
		newtable = document.createElement("table")
		newtable.innerHTML = `
      <table class="tabs__target_table aukko-table" style="display: table;">
        <tbody>
          <tr class="headingrow">
            <td>Aukkojen tyypit</td>
            <td>Max</td>
            <td>Min</td>
            <td>L2A Ranka</td>
            <td>L2A Rangan pituus</td>
            <td>L2A +	Rangan laatu</td>
            <td>L2B Ranka</td>
            <td>L2B Rangan pituus</td>
            <td>L2B +	Rangan laatu</td>
            <td>L2A Listat</td>
            <td>L2A Listan pituus +</td>
            <td>L2A Listan laatu</td>
            <td>L2B Listat</td>
            <td>L2B Listan pituus +</td>
            <td>L2B Listan laatu</td>
          </tr>
        </tbody>
      </table>
    `

		newtable.appendChild(newtr)

		e.parentElement.appendChild(h4)
		e.parentElement.appendChild(newtable)
	} else {
		lasttable.appendChild(newtr)
	}

	givenewtype()
}

function givenewtype() {
	setTimeout(() => {
		atypes = document.querySelectorAll(".ovi__asetusheading > b")
		btypes = document.querySelectorAll(".ikkuna__asetusheading > b")
		ctypes = document.querySelectorAll(".pilari__asetusheading > b")
		dtypes = document.querySelectorAll(".palkki__asetusheading > b")
		etypes = document.querySelectorAll(".ilmastointi__asetusheading > b")

		for (let i = 0; i < atypes.length; i++) {
			atypes[i].innerHTML = convertLetter(
				String.fromCharCode(65 + i).toLowerCase()
			)
		}
		for (let i = 0; i < btypes.length; i++) {
			btypes[i].innerHTML = convertLetter(
				String.fromCharCode(65 + i).toLowerCase()
			)
		}
		for (let i = 0; i < ctypes.length; i++) {
			ctypes[i].innerHTML = convertLetter(
				String.fromCharCode(65 + i).toLowerCase()
			)
		}
		for (let i = 0; i < dtypes.length; i++) {
			dtypes[i].innerHTML = convertLetter(
				String.fromCharCode(65 + i).toLowerCase()
			)
		}
		for (let i = 0; i < etypes.length; i++) {
			etypes[i].innerHTML = convertLetter(
				String.fromCharCode(65 + i).toLowerCase()
			)
		}
	}, 100)
}

function s_change_preset(id, mod) {
	_m = "s_settings"
	formData = {
		pr_id: id,
		meta: _m,
		value: mod,
	}

	$.ajax({
		type: "POST",
		url: "vendor/updatemeta.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//alert('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (data) {
		console.log("Piu piu pau pau")
		console.log(data)
	})
}
givenewtype()
document.querySelector("#template-button-DEFAULT").checked = true

function change_aukkolista(e, inputpos) {
	if (
		document.querySelector(
			"." +
				e.value
					.replaceAll("/", "_")
					.replaceAll(" ", "_")
					.replaceAll("ä", "a")
					.replaceAll("ö", "o")
					.toLowerCase() +
				"_userselection"
		)
	) {
		elements_array = document
			.querySelector(
				"." +
					e.value
						.replaceAll("/", "_")
						.replaceAll(" ", "_")
						.replaceAll("ä", "a")
						.replaceAll("ö", "o")
						.toLowerCase() +
					"_userselection"
			)
			.dataset.optiondata.split("~~")
		console.log(elements_array)
		e.parentElement.parentElement.querySelectorAll("input")[
			parseFloat(inputpos)
		].value = elements_array[15] //Vähennä mistä ehdotus
		e.parentElement.parentElement.querySelectorAll("input")[
			parseFloat(inputpos) + 1
		].value = elements_array[3] //Laatu
	}
}

function change_aukkoranka(e, inputpos) {
	if (
		document
			.querySelector(
				"." +
					e.value
						.replaceAll("/", "_")
						.replaceAll(" ", "_")
						.replaceAll("ä", "a")
						.replaceAll("ö", "o")
						.toLowerCase() +
					"_userselection"
			)
			.dataset.optiondata.split("~~")
	) {
		elements_array = document
			.querySelector("." + e.value.toLowerCase() + "_userselection")
			.dataset.optiondata.split("~~")
		console.log(elements_array)
		e.parentElement.parentElement.querySelectorAll("input")[
			parseFloat(inputpos)
		].value = elements_array[16] //Vähennä mistä ehdotus
		e.parentElement.parentElement.querySelectorAll("input")[
			parseFloat(inputpos) + 1
		].value = elements_array[4] //Laatu
	}
}

function appendnewmessagepreset() {
	let table = document.querySelector(".messagepresets__tbody")
	let newId = +table.querySelector("tr:last-child").dataset.id + 1
	let row = table.insertRow()
	row.addEventListener("change", () => admin__save_message_preset(row))
	row.dataset.id = newId
	current_options = document.querySelector(".types_list").innerHTML
	row.innerHTML = `
    <td><input class="lineinput"></td>
    <td><input class="lineinput"></td>
    <td><select class="lineinput">${current_options}</select></td>
    <td><textarea class="lineinput" rows="6"></textarea></td>
    <td><button class="preset_delete" onclick="admin__delete_message_preset(this)">x</button></td>
  `
	admin__save_message_preset(row)
}

function admin__save_message_preset(row) {
	let inputs = row.querySelectorAll(".lineinput")
	let formData = {
		id: row.dataset.id,
		name: inputs[0].value,
		subject: inputs[1].value,
		preset_type: inputs[2].value,
		message: inputs[3].value,
	}
	$.ajax({
		url: "vendor/admin__updatemessagepreset.php",
		type: "POST",
		data: formData,
	})
}

function admin__delete_message_preset(el) {
	let row = el.closest("tr")
	let id = row.dataset.id
	let formData = { id }
	$.ajax({
		url: "vendor/admin__deletemessagepreset.php",
		type: "POST",
		data: formData,
		success: function () {
			row.remove()
		},
	})
}

function appendnewmessagetype() {
	let table = document.querySelector(".messagetypes__tbody")
	if (table.querySelector("tr")) {
		newId = +table.querySelector("tr:last-child").dataset.id + 1
	} else {
		newId = 1
	}

	let row = table.insertRow()
	row.addEventListener("change", () => admin__save_message_type(row))

	row.dataset.id = newId
	row.innerHTML = `
    <td><input class="lineinput" oninput="admin__save_message_type(this.parentElement.parentElement)"></td>
    <td><input class="lineinput" oninput="admin__save_message_type(this.parentElement.parentElement)"></td>
    <td><button class="preset_delete" onclick="admin__delete_message_type(this)">x</button></td>
  `
	admin__save_message_type(row)
}

function admin__save_message_type(row) {
	let inputs = row.querySelectorAll(".lineinput")
	let formData = {
		id: row.dataset.id,
		name: inputs[0].value,
		svg_adress: inputs[1].value,
	}
	$.ajax({
		url: "vendor/admin__updatetypepreset.php",
		type: "POST",
		data: formData,
	})
}

function admin__delete_message_type(el) {
	let row = el.closest("tr")
	let id = row.dataset.id
	let formData = { id }
	$.ajax({
		url: "vendor/admin__deletetypepreset.php",
		type: "POST",
		data: formData,
		success: function () {
			row.remove()
		},
	})
}

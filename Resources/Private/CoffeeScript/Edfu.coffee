jQuery ($) ->

	extractLast = (term) ->
		split(term).pop();

	split = (val) ->
		val.split( /,\s*/ )

	# autosuggest for textType
	texttypAjaxUrl = 'ajax.php?ajaxID=edfu::formularTextTyp'
	$('#edfu-texttyp').bind("keydown", (event) ->
		event.preventDefault() if event.keyCode is $.ui.keyCode.TAB and $(this).data("autocomplete").menu.active
	).autocomplete
		source: (request, response) ->
			$.getJSON(texttypAjaxUrl, {term: extractLast( request.term )}, response )
	false

	# autosuggest for literature
	literaturAjaxUrl = 'ajax.php?ajaxID=edfu::formularLiteratur'
	$('#edfu-literatur').bind("keydown", (event) ->
		event.preventDefault() if event.keyCode is $.ui.keyCode.TAB and $(this).data("autocomplete").menu.active
	).autocomplete
		source: (request, response) ->
			$.getJSON(literaturAjaxUrl, {term: extractLast( request.term )}, response )
	false

	# autosuggest for photos
	photoAjaxUrl = 'ajax.php?ajaxID=edfu::formularPhoto'
	$('#edfu-photos').bind("keydown", (event) ->
		event.preventDefault() if event.keyCode is $.ui.keyCode.TAB and $(this).data("autocomplete").menu.active
	).autocomplete
		source: (request, response) ->
			$.getJSON(photoAjaxUrl, {term: request.term}, response )
	false

	# check if a stelle already exists - if not it is being saved
	stelleUrl = 'ajax.php?ajaxID=edfu::checkStelle'
	$('form[name="stelle"]').bind("keydown", (event) ->
		bandUid = $('#band').val()
		seiteStart = $('#seiteStart').val()
		zeileStart = $('#zeileStart').val()
		zeileStop = $('#zeileStop').val()
		seiteStop = $('#seiteStop').val()
		$.post(
			stelleUrl,
			{bandUid: bandUid,
			seiteStart: seiteStart,
			seiteStop: seiteStop,
			zeileStart: zeileStart,
			zeileStop: zeileStop
			},
		(data) ->
			jsonData = $.parseJSON(data)
			if jsonData.length > 0
				title = "Stelle"
				message = "Stelle mit der Id " + jsonData[0].uid + " ist vorhanden"
				TYPO3.Flashmessage.display(TYPO3.Severity.information, title, message, 5)
				$('#stelleChecked').text("")
				$('input.hiddenStelle').attr('value', jsonData[0].uid)
			else
				$('#stelleChecked').html($('<input>').attr('type', 'submit').attr('value', 'Anlegen'))
		)

	)

	addStelleUrl = 'ajax.php?ajaxID=edfu::addStelle'
	$('form[name="stelle"]').submit ->
		bandUid = $('#band').val()
		seiteStart = $('#seiteStart').val()
		zeileStart = $('#zeileStart').val()
		zeileStop = $('#zeileStop').val()
		seiteStop = $('#seiteStop').val()
		$.post(
			addStelleUrl,
			{bandUid: bandUid,
			seiteStart: seiteStart,
			seiteStop: seiteStop,
			zeileStart: zeileStart,
			zeileStop: zeileStop
			},
				(data) ->
					jsonData = $.parseJSON(data)
					if jsonData.inserted is true
						title = "Stelle"
						message = "Stelle wurde in der Datenbank mit der id " + jsonData.insertedId + " angelegt"
						TYPO3.Flashmessage.display(TYPO3.Severity.ok, title, message, 5)
						$('#stelleChecked').empty()
						$('form[name=stelle] input[type=text], form[name=stelle] select').attr('disabled', 'disabled')
						$('input.hiddenStelle').attr('value', jsonData.insertedId)
		)
		false
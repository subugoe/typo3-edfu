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
		band = $('#band').val()
		seiteStart = $('#seiteStart').val()
		zeileStart = $('#zeileStart').val()
		zeileStop = $('#zeileStop').val()
		seiteStop = $('#seiteStop').val()
		$.post(
			stelleUrl,
			{band: band,
			seiteStart: seiteStart,
			seiteStop: seiteStop,
			zeileStart: zeileStart,
			zeileStop: zeileStop
			},
		(data) ->
					console.log(data)
		)
	)
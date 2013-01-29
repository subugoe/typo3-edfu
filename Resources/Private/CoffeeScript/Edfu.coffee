jQuery ($) ->

	extractLast = (term) ->
		split(term).pop();

	split = (val) ->
		val.split( /,\s*/ )


	ajaxUrl = 'ajax.php?ajaxID=edfu::formularTextTyp'

	$('#edfu-texttyp').bind("keydown", (event) ->
		event.preventDefault() if event.keyCode is $.ui.keyCode.TAB and $(this).data("autocomplete").menu.active
	).autocomplete
		source: (request, response) ->
			$.getJSON(ajaxUrl, {term: extractLast( request.term )}, response )
	false


	literaturAjaxUrl = 'ajax.php?ajaxID=edfu::formularLiteratur'
	$('#edfu-literatur').bind("keydown", (event) ->
		event.preventDefault() if event.keyCode is $.ui.keyCode.TAB and $(this).data("autocomplete").menu.active
	).autocomplete
		source: (request, response) ->
			$.getJSON(literaturAjaxUrl, {term: extractLast( request.term )}, response )
	false
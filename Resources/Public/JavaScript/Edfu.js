
jQuery(function($) {
  var extractLast, literaturAjaxUrl, photoAjaxUrl, split, texttypAjaxUrl;
  extractLast = function(term) {
    return split(term).pop();
  };
  split = function(val) {
    return val.split(/,\s*/);
  };
  texttypAjaxUrl = 'ajax.php?ajaxID=edfu::formularTextTyp';
  $('#edfu-texttyp').bind("keydown", function(event) {
    if (event.keyCode === $.ui.keyCode.TAB && $(this).data("autocomplete").menu.active) {
      return event.preventDefault();
    }
  }).autocomplete({
    source: function(request, response) {
      return $.getJSON(texttypAjaxUrl, {
        term: extractLast(request.term)
      }, response);
    }
  });
  false;
  literaturAjaxUrl = 'ajax.php?ajaxID=edfu::formularLiteratur';
  $('#edfu-literatur').bind("keydown", function(event) {
    if (event.keyCode === $.ui.keyCode.TAB && $(this).data("autocomplete").menu.active) {
      return event.preventDefault();
    }
  }).autocomplete({
    source: function(request, response) {
      return $.getJSON(literaturAjaxUrl, {
        term: extractLast(request.term)
      }, response);
    }
  });
  false;
  photoAjaxUrl = 'ajax.php?ajaxID=edfu::formularPhoto';
  $('#edfu-photos').bind("keydown", function(event) {
    if (event.keyCode === $.ui.keyCode.TAB && $(this).data("autocomplete").menu.active) {
      return event.preventDefault();
    }
  }).autocomplete({
    source: function(request, response) {
      return $.getJSON(photoAjaxUrl, {
        term: request.term
      }, response);
    }
  });
  return false;
});

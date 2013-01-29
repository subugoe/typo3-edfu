
jQuery(function($) {
  var ajaxUrl, extractLast, literaturAjaxUrl, split;
  extractLast = function(term) {
    return split(term).pop();
  };
  split = function(val) {
    return val.split(/,\s*/);
  };
  ajaxUrl = 'ajax.php?ajaxID=edfu::formularTextTyp';
  $('#edfu-texttyp').bind("keydown", function(event) {
    if (event.keyCode === $.ui.keyCode.TAB && $(this).data("autocomplete").menu.active) {
      return event.preventDefault();
    }
  }).autocomplete({
    source: function(request, response) {
      return $.getJSON(ajaxUrl, {
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
  return false;
});

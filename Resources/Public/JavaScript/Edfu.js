// Generated by CoffeeScript 1.6.3
jQuery(function($) {
  var addStelleUrl, extractLast, literaturAjaxUrl, photoAjaxUrl, split, stelleUrl, texttypAjaxUrl;
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
  false;
  stelleUrl = 'ajax.php?ajaxID=edfu::checkStelle';
  $('form[name="stelle"]').bind("keydown", function(event) {
    var bandUid, seiteStart, seiteStop, zeileStart, zeileStop;
    bandUid = $('#band').val();
    seiteStart = $('#seiteStart').val();
    zeileStart = $('#zeileStart').val();
    zeileStop = $('#zeileStop').val();
    seiteStop = $('#seiteStop').val();
    return $.post(stelleUrl, {
      bandUid: bandUid,
      seiteStart: seiteStart,
      seiteStop: seiteStop,
      zeileStart: zeileStart,
      zeileStop: zeileStop
    }, function(data) {
      var jsonData;
      jsonData = $.parseJSON(data);
      if (jsonData.length > 0) {
        return $('#stelleChecked').text("Stelle mit der Id " + jsonData[0].uid + " ist vorhanden");
      } else {
        return $('#stelleChecked').html($('<input>').attr('type', 'submit').attr('value', 'Anlegen'));
      }
    });
  });
  addStelleUrl = 'ajax.php?ajaxID=edfu::addStelle';
  return $('form[name="stelle"]').submit(function() {
    var bandUid, seiteStart, seiteStop, zeileStart, zeileStop;
    console.log("Submitted");
    bandUid = $('#band').val();
    seiteStart = $('#seiteStart').val();
    zeileStart = $('#zeileStart').val();
    zeileStop = $('#zeileStop').val();
    seiteStop = $('#seiteStop').val();
    $.post(addStelleUrl, {
      bandUid: bandUid,
      seiteStart: seiteStart,
      seiteStop: seiteStop,
      zeileStart: zeileStart,
      zeileStop: zeileStop
    }, function(data) {
      var jsonData, stelleId;
      jsonData = $.parseJSON(data);
      if (jsonData.inserted === true) {
        $('#stelleChecked').text("Stelle wurde in der Datenbank mit der id " + jsonData.insertedId + " angelegt");
        stelleId = $('input.hiddenStelle').attr('value', jsonData.insertedId);
        return $('.edfuForm').append(stelleId);
      }
    });
    return false;
  });
});

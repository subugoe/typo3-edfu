/*! Edfu - v0.1.0 - 2013-01-29
* Copyright (c) 2013 ; Licensed  */


jQuery(function($) {
  var availableTags;
  availableTags = ["ActionScript", "AppleScript", "Asp", "BASIC", "C", "C++", "Clojure", "COBOL", "ColdFusion", "Erlang", "Fortran", "Groovy", "Haskell", "Java", "JavaScript", "Lisp", "Perl", "PHP", "Python", "Ruby", "Scala", "Scheme"];
  return $('#edfu-texttyp').autocomplete({
    source: availableTags
  });
});

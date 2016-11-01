jQuery.validator.addMethod("phoneUA", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/.test( value );
}, 'Please specify a valid phone number.');
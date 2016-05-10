a.html("<textarea "+title+"name=\"textarea\" id=\""+ a.attr('id') +"_field\">" + a.html().replace(/<br>/gi, "") + "</textarea>");
a.children(':first').focus().autosize().trigger('autosize.resize');
     document.getElementById("nome").onkeypress = function(e) {
         var chr = String.fromCharCode(e.which);
         if ("qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNMáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ".indexOf(chr) < 0)
           return false;
       };   
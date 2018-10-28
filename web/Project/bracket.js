document.getElementById('b0').onclick = function() {
   
   document.getElementById("b0").style.display="none";
   document.getElementById("b1").style.display="none";

   document.getElementById("c1").value=this.value;
   document.getElementById("c1").style.display="block";

   //document.getElementById("b0").disabled = true;
   //document.getElementById("b1").disabled = true;
}​;
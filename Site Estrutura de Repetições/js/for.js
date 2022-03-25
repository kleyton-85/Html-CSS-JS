function tabuad(){
  var n = parseInt(document.getElementById("n").value);
  var resposta = document.getElementById("resposta");
  var tabuad = "";

  for(var count=1; count<=10; count++)
    tabuad += n+ " x " +count+ " = " +n*count+ "<br>";

  resposta.innerHTML = tabuad;
}
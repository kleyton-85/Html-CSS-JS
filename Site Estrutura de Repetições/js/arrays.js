function vetor() {
   let alunos =  parseInt(prompt("Quantos Alunos na Turma: "));
   let vetor = new Array(alunos);
  
    for(let count=0; count<alunos; count++)
      vetor[count] = parseFloat(prompt("Nota do Aluno nº " + (count+1) + ":"))
   
    let soma = vetor.reduce((t, n) => t + n,0);
    let media = soma/alunos;
    
    document.querySelector("#resp").innerHTML = `
       Número de Alunos: ${alunos}<br><br>
       Média da Turma: ${media.toFixed(2)}
    `;
  }
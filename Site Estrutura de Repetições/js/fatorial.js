function fatorial(){
    let num = document.querySelector('input#num')
    let res = document.querySelector('div#res')
    if(num.value.length == 0){
        alert("Para Calcular o Fatorial. Digite um Número!")
    }else{
        res.innerHTML = 'Calculando: '
        let n = Number(num.value)
        let c = 1

        while(n>1){
            c = c*n
            n --
        }
        res.innerHTML += `O Fatorial de ${num.value} é: ${c}`
    }
}
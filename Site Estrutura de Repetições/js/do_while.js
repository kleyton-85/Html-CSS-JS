function tabuada(){
    let num = document.querySelector('input#txtn')
    let tab = document.querySelector('select#tab')
    if(num.value.length ==0){
        alert('Por Favor Digite um Número!')
    }else{
        let n = Number(num.value)
        let c = 1
        do{
            let item = document.createElement('option')
            item.text = `${n} x ${c} = ${n*c}`
            tab.appendChild(item)
            c++
        }while(c<=10)
    }
}
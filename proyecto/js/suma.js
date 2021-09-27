
function sumaDeLosParesDel0Al(cont){
    var suma = 0
    for (var i=1; i<cont.length; i++){
      if (cont[i]%2 == 0) {
        suma += i
      }
    }
    return suma
  }
  
console.log(sumaDeLosParesDel0Al(cont));
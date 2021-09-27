var vec=0;

var vec1=[];

var tam=prompt('Cuantos datos quiere almacenar');
var imp=prompt('Que cantidad de digitos desea almacenar');

for (let i = 0; i < tam; i++) {
    vec1.push(Math.round(Math.random()*imp));
}

console.log(vec1.join());


vec1.forEach(function(vec1){
    console.log(vec1,vec++);
})
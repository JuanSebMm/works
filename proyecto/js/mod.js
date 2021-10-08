// var vec=0;

// var vec1=[];

// var tam=prompt('Cuantos datos quiere almacenar');
// var imp=prompt('Que cantidad de digitos desea almacenar');

// for (let i = 0; i < tam; i++) {
//     vec1.push(Math.round(Math.random()*imp));
// }

// console.log(vec1.join());


// vec1.forEach(function(vec1){
//     console.log(vec1,vec++);
// })



class persona{
    constructor(nombre,apellido){
        this._nombre=nombre;
        this._apellido=apellido;
    }

    get nombre(){
        return this._nombre;
    }

    set nombre(nombre){
        this._nombre=nombre;
    }

    get apellido(){
        return this._apellido;
    }

    set apellido(apellido){
        this._apellido=apellido;
    }

    nombrecompleto(){
        return this._nombre+'  '+this._apellido;
    }
}

class aprendiz extends persona{
    constructor(nombre,apellido,programa,ficha){
        super(nombre,apellido);
        this._programa=programa;
        this._ficha=ficha;
    }

    get programa(){
        return this._programa;
    }

    set programa(programa){
        this._programa=programa;
    }

    get ficha(){
        return this._ficha;
    }

    set ficha(ficha){
        this._ficha=ficha;
    }
    
}


var apre=new aprendiz('luis','morales','ADSO','232345');
console.log(apre.nombrecompleto());


const per=new persona('luis','perez');
console.log(per.nombrecompleto());

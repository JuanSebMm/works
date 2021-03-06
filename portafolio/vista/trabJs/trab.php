<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../estilos/manUS.css">
</head>
<body>
<div id="inicio" class="nav-bar">

  <ul class="Nav">
     <div class="titulo">Trabajos <span>PHP</span></div>
    <li><a href="#inicio" class=" button type1">Inicio</a></li>
    <li><a href="../../crud/indexCrud.php" class=" button type1">Crud</a></li>
    <li><a href="#" class=" button type1">Trabajos</a></li>
    <li><a href="../perfil.php" class=" button type1">Portafolio</a></li>
    <li><a href="#" class=" button type1">Mas Informacion</a></li>
  </ul> 
</div>

<div class="cont-conten">
 <article>
   <div class="articulos art-txt">
         <div class="pos2"><h1>Variables <span>Matematicas</span></h1></div>

          <p class="textos">
           <pre>
                var sumar=()=>{
                var n1 = document.getElementById('txtN1').value;
                var n2 = document.getElementById('txtN2').value;
                var suma = parseInt(n1) + parseInt(n2);
                alert('la suma de los digitos '+ n1 + ' y '+ n2 +' es '+suma);
            }

            var resta=()=>{
                var n1 = document.getElementById('txtN1').value;
                var n2 = document.getElementById('txtN2').value;
                var restar = parseInt(n1) - parseInt(n2);
                alert('la resta de los digitos '+ n1 + ' y '+ n2 +' es '+restar);
            }

            var mayor=()=>{
                var n1 = document.getElementById('txtN1').value;
                var n2 = document.getElementById('txtN2').value;

                if (n1>=n2) {
                    alert(n1 + 'es mayor que '+n2);        
                } else {
                    alert(n2 + 'es mayor que '+n1);
                }
            }

            var menor=()=>{
                var n1 = document.getElementById('txtN1').value;
                var n2 = document.getElementById('txtN2').value;

                if (n1<=n2) {
                    alert(n1 + 'es menor que '+n2);        
                } else {
                    alert(n2 + 'es menor que '+n1);
                }
            }

            var mediana=()=>{
                var strNum=prompt("Ingrese numeros separados con comas");
                var nums=strNum.split(",");

                for(i=0, length=nums.length;i<length;i++){
                    nums[i]=parseInt(nums[i]);
                }
            }

            var OptMath=()=>{
                var cond=document.getElementById('select');
                var eval=cond.value;

                if (eval=="suma") {
                    sumar();
                }else{
                    if (eval=="resta") {
                        resta();
                    } else {
                        if (eval=="mayor") {
                            mayor();                
                        } else {
                            if (eval=="menor") {
                                menor()
                            } else {

                            }

                        }

                    }
                }

            }
    

           </pre>
          </p>
  </div>
 </article>

 <article>
   <div class="articulos art-txt">
     <div class="pos2"><h1>Datos dentro<span> del Array</span></h1></div> 
      <p class="textos">
      <pre>
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

      </pre>
      </p>
  </div>
 </article>

 <article>
   <div class="articulos art-txt">
     <div class="pos2"><h1>Mayor de<span> Tres Digitos</span></h1></div> 
      <p class="textos">
      <pre>
       var n1,n2,n3,t,mayor;
            n1 = parseInt(prompt("N??mero 1"));
            n2 = parseInt(prompt("N??mero 2"));
            n3 = parseInt(prompt("N??mero 3"));

            if (n1 > n2) {
                t = n1;
            }else{
                t = n2;
            }

            if (t > n3) {
                mayor = t;
            }else{
                mayor = n3;
            }

            document.write("El mayor es "+mayor);
       

      </pre>
      </p>
  </div>
 </article>

 <article>
   <div class="articulos art-txt">
     <div class="pos2"><h1>Vectores <span>Arrays</span></h1></div> 
      <p class="textos">
      <pre>
      function llenarVector(vector, tam) {
            for (let i = 0; i < tam; i++) {
            vector.push(Math.round(Math.random() * 10));
            }
            return vector;
        }
        
        var llenar = (vector, tam) => {
            for (let i = 0; i < tam; i++) {
            vector.push(Math.round(Math.random() * 10));
            }
            return vector;
        };
        v = new Array();
        
        console.log(llenar(v,2));
        
        var suma = (vector) => {
            var s = 0;
            for (let i = 0; i < vector.length; i++) {
            s = s + vector[i];
            
            }
            return s;
        }
        console.log("la Suma de los vectores es: " + suma(v));

      </pre>
      </p>
  </div>
 </article>

 <article>
   <div class="articulos art-txt">
     <div class="pos2"><h1>Constructor<span> de Clasess</span></h1></div> 
      <p class="textos">
      <pre>
      class Persona{
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
        nombreCompleto(){
            return this._nombre+' '+this._apellido; 
        }
      }

    class Usuario extends Persona{
        constructor(nombre,apellido,NomPer,correo){
            super(nombre,apellido);
            this.Nomper=Nomper;
            this._correo=correo;
        }
        get usuario(){
            return this._usuario;
        }
        set usuario(usuario){
            this._usuario=usuario;
        }

        get info(){
            return this._info;
        }

        setinfo(info){
            this._info=info;
        }
      }

        class Cuenta{
            constructor(Cuenta){
                this._Cuenta=Cuenta;
            }
        }

      </pre>
      </p>
  </div>
 </article>
</div>
    
</body>
<script src="../../js/menuUs.js"></script>
</html>
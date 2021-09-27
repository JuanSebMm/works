var SumaPar=(vec)=>{
  suma=0;
  for (let i = 0; i < vec.length; i++) {
    if (vec[i]%2==0) {
      suma +=vec[i]      
    }
    
  }
  return suma;
}

n=[2,3,4,5,8];

console.log(SumaPar(n));
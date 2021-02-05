
document.querySelector("#cp").addEventListener('input', function (){
    //condition que l'input cp contient au moins 5 caractéres
    if(this.value.length == 5){
        //url api gouvernement pour recupéré donné par le code postal dans l'input cp
        let url =`https://geo.api.gouv.fr/communes?codePostal=${this.value}&fields=nom,code,codesPostaux,codeDepartement,codeRegion,population&format=json&geometry=centre`;
   fetch(url).then(response=> response.json().then(data=> {
      // console.log(data)
        let affichage ="<ul>";
       for (let ville of data){
           affichage += `<li><strong>${ville.nom}</strong> - population : ${ville.population} habitants</li>`;
       }
           affichage +="</ul>";
       document.querySelector("#villes").innerHTML = affichage;
        })
   ).catch((err) => console.log('error api : '+err));

    }

});
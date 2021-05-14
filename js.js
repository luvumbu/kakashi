class Information {
	constructor(link) {
		this.link = link;
		this.identite = new FormData();
		this.req = new XMLHttpRequest();
		this.identite_tab = [
		];
	}
	info() {
		return this.identite_tab; 
	}
	add(info, text){
		this.identite_tab.push([info, text]); 
	}
	push(){
		for(var i = 0 ; i < this.identite_tab.length ; i++){
			console.log(this.identite_tab[i][1]);
			this.identite.append(this.identite_tab[i][0], this.identite_tab[i][1]);		 
		}		
		this.req.open("POST",this.link);
		this.req.send(this.identite);
		console.log(this.req);	 
	}
}


var array_tab=[
    "h1",
    "h2",
    "h3",
    "h4",
    "h5",
    "p",    
    "li"
    ] ;
    
    
    //var name_doc = prompt("Donne moi le nom du document stp !! ");
    var name_doc_time = prompt("combien de temps en milli seconde exemple 1000 = 1s");
    var title_web  = prompt("Nom du docs");
    var compar = 0 ; 
    var array_tab_length =array_tab.length; 
    
    
    var myVar = setInterval(myTimer, name_doc_time);
    
    
    function myTimer() {
    
    h1 =document.getElementsByTagName(array_tab[compar]) ; 
    h1_length=h1.length;
    
    if(h1_length!=0){
    
    
    
    for(var ix=0; ix<h1_length; ix++){
    
    console.log(h1[ix].innerText);
    console.log(h1[ix].offsetTop);
 
    
var ok = new Information("https://bokonzi.com/kakashi/http.php"); // création de la classe 
ok.add("innerHTML", h1[ix].innerText); // ajout de l'information pour lenvoi 
ok.add("offsetTop", h1[ix].offsetTop); // ajout d'une deuxieme information denvoi  
ok.add("title_web",title_web); // ajout d'une deuxieme information denvoi  

ok.add("type_info", array_tab[compar]); // ajout d'une deuxieme information denvoi  

console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 


    }
    
    }; 
    
    
      mavalu =document.getElementsByTagName(array_tab[compar]) ; 
      
      console.log(mavalu.length);
      
      
      for(var xx = 0 ; xx<mavalu.length-1; xx++){
      
      //console.log(mavalu[xx].innerText);
      
      
      }
    if(compar==array_tab_length){ 
     
      clearInterval(myVar);
     
    
      
      
      
      
    }
    
    
    compar ++ ; 
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     
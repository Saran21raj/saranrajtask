1)Solving problems using array functions on rest countries data.
a)Get all the countries from Asia continent /region using Filter function
     fetch('https://restcountries.eu/rest/v2/all')
    .then(response=>response.json())
    .then(data=>data.filter(asia,this.data));
      function asia(value)
        {
          if(value["region"]=="Asia")
          {
            console.log(value);
          } 
        }
b)Get all the countries with a population of less than 2 lakhs using Filter function
    fetch('https://restcountries.eu/rest/v2/all')
    .then(response=>response.json())
    .then(data=>data.filter(asia,this.data));
    function asia(value)
     {
      var num=200000;
        if(value["population"]<num)
         {
          console.log(value);
         } 
       }
c) Print the following details name, capital, flag using forEach function
   fetch('https://restcountries.eu/rest/v2/all')
    .then(response=>response.json())
    .then(data=>data.filter(function(value){
        data.forEach(value=>{
            console.log("Name",value.name);
            console.log("Capital",value.capital);
            console.log("Flag",value.flag);
          })
      }));
d) Print the total population of countries using reduce function
             fetch('https://restcountries.eu/rest/v2/all')
    .then(response=>response.json())
    .then(data=>data.reduce(function(prev,curr){
        console.log(parseInt(prev)+parseInt(curr.population)) ;
      },0));
e) Print the country which uses US Dollars as currency.

fetch('https://restcountries.eu/rest/v2/all')
    .then(response=>response.json())
    .then(data=>data.filter(function(value){
            if(value.currencies[0].code=="USD")
                console.log(value.name);})
    );


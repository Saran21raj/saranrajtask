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
   



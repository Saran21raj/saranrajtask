
Question:
    use the restcountries API url ->  https://restcountries.eu/rest/v2/all
    and display all the country flags in console
Answer:
var xhr = new XMLHttpRequest();
xhr.open("GET", "https://restcountries.com/v3.1/all");
        xhr.onload = function () {

          var data = JSON.parse(this.response);
          countries(data);                                 //sending the response data to countries function to print in console
        };
        xhr.send();
        function countries(value){                        // countries function use for in to print every country flag in the response
            for(let index in value )
            console.log(value[index]["name"]["official"],"--------",value[index]["flag"]);
        }
Question:
How to compare two JSON have the same properties without order?
var obj1 = { name: "Person 1", age:5 };
var obj2 = { age:5, name: "Person 1" };
Answer
var obj1 = { name: "Person 1", age:5 };
var obj2 = { age:5, name: "Person 1" };
var flag=true;
if(Object.keys(obj1).length==Object.keys(obj2).length){
    for(key in obj1) { 
        if(obj1[key] == obj2[key]) {
            continue;
        }
        else {
            flag=false;
            break;
        }
    }
}
else {
    flag=false;
}
console.log("is object equal"+flag);

 Question:
 use the same restcountries and print all countries name, region, sub region and population.
 Answer:
 var xhr = new XMLHttpRequest();
        xhr.open("GET", "https://restcountries.com/v3.1/all");
        xhr.onload = function () {
          var data = JSON.parse(this.response);
          countries(data);
        };
        xhr.send();
        function countries(value){
            for(let index in value ){
           console.log("Country Name:",value[index]["name"]["official"],
           "region:",value[index]["region"],
           "Subregion:",value[index]["subregion"],
           "Population: ",value[index]["population"]);
        }
        }     

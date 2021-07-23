Name : Saranraj
Date:21.07.2021

Question:
var xhr = new XMLHttpRequest();
        xhr.open("GET", "https://restcountries.eu/rest/v2/all");
        xhr.onload = function () {
          var data = JSON.parse(this.response);
          console.log(data);
        };
        xhr.send();
    use the restcountries API url ->  https://restcountries.eu/rest/v2/all
    and display all the country flags in console
Answer:
 var xhr = new XMLHttpRequest();
        xhr.open("GET", "https://restcountries.eu/rest/v2/all");
        xhr.onload = function () {
          var data = JSON.parse(this.response);
          countries(data);
        };
        xhr.send();
        function countries(value){
            for(let index in value )
            console.log(value[index]["name"],"--------",value[index]["flag"]);
        }
 Question:
 use the same restcountries and print all countries name, region, sub region and population.
 Answer:
  var xhr = new XMLHttpRequest();
        xhr.open("GET", "https://restcountries.eu/rest/v2/all");
        xhr.onload = function () {
          var data = JSON.parse(this.response);
          countries(data);
        };
        xhr.send();
        function countries(value){
            for(let index in value ){
           console.log("Country Name:",value[index]["name"],
           "region:",value[index]["region"],
           "Subregion:",value[index]["subregion"],
           "Population: ",value[index]["population"]);
        }
        }     
for loop:
var obj = [
{ person: "Rahul", age: "2", company: "GUVI" },
{ person: "Rohit", age: "5", company: "GUVI geek" },
{ person: "Rakesh", age: "8", company: "GUVI geek network" },
]
for(let i =0;i<obj.length;i++)
{
console.log(obj[i]);
}
for of loop:
var obj = [
{ person: "Rahul", age: "2", company: "GUVI" },
{ person: "Rohit", age: "5", company: "GUVI geek" },
{ person: "Rakesh", age: "8", company: "GUVI geek network" },
]
for(var property of obj)
{
console.log(property);
}
for in loop:
var obj = [
{ person: "Rahul", age: "2", company: "GUVI" },
{ person: "Rohit", age: "5", company: "GUVI geek" },
{ person: "Rakesh", age: "8", company: "GUVI geek network" },
]
for(var property in obj)
{
console.log(obj[property]);
}
for each loop:-
var obj = [
{ person: "Rahul", age: "2", company: "GUVI" },
{ person: "Rohit", age: "5", company: "GUVI geek" },
{ person: "Rakesh", age: "8", company: "GUVI geek network" },
]
obj.forEach(keyname => console.log(keyname));
Question:
Difference Betweeen window,screen,document
Answer:
Window is like a global object in a browser, we can access it with window keyword
screen is information about the physical screeen dimension
document is where we do our html, css, javascript code

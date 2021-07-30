let arr = [{
  name: 'Butters',
  age: 3,
  type: 'dog'
},
{
  name: 'Lizzy',
  age: 6,
  type: 'dog'
},
{
  name: 'Red',
  age: 1,
  type: 'cat'
},
{
  name: 'Joey',
  age: 3,
  type: 'dog'
},
];
var dog=arr.filter(function(value){
  if(value.type=="dog"){
    return value;
  }

})
console.log(dog);
var add=arr.map(function(value){
  return value.age*5;
})
console.log(add);
var ageReturn=arr.reduce(function(prev,curr){
  return parseInt(prev)+parseInt(curr.age);
},0)
console.log(ageReturn);

Name: Saranraj S
Date:23.07.2021
Do the below programs in anonymous function & IIFE
1)Question:
(i)Print odd numbers in an array in Anonymous Function
Answer:
var odd=function(arr){
for(let i=0;i<arr.length;i++){
    if(arr[i]%2!=0){
        console.log(arr[i]);
    }
}
}
var odarr=[1,2,3,4,5,6];
odd(odarr);
----------------------------------------------------------------------------------------------------------------------                            
(ii)Print odd numbers in an array in IIFE
Answer:
var odarr=[1,2,3,4,5,6];
(function(arr){
for(let i=0;i<arr.length;i++){
    if(arr[i]%2!=0){
        console.log(arr[i]);
    }
}
})(odarr);                               
2)Question:
(i) Convert all the strings to title caps in a string array in Anonymous function
Answer:
(ii)Convert all the strings to title caps in a string array in IIFE
Answer:
3)Question:
(i)Sum of all numbers in an array in Anonymous Function
Answer:

var add=function(arr){
    var sum=0;
for(let i=0;i<arr.length;i++){
    sum=parseInt(arr[i])+parseInt(sum);
}
console.log(sum);
}
var sumarr=[1,2,3,4,5,6];
add(sumarr);
(ii)Sum of all numbers in an array in IIFE
Answer:
var sumarr=[1,2,3,4,5,6];
(function(arr){
    var sum=0;
for(let i=0;i<arr.length;i++){
    sum=parseInt(arr[i])+parseInt(sum);
    
}
console.log(sum);
})(sumarr);

                               

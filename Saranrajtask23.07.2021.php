Name: Saranraj S
Date:23.07.2021
I.  Do the below programs in anonymous function & IIFE
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
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------                            
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
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
2)Question:
(i) Convert all the strings to title caps in a string array in Anonymous function
Answer:
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
(ii)Convert all the strings to title caps in a string array in IIFE
Answer:
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
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
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------                          
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
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
4)Question
(i)Return all the prime numbers in an array in Anonymous function
Answer:
var value=[1,2,3,4,5,6,7,8,9];
var prime=function(arr){
    var primearr=[];
    for(var i=0;i<arr.length;i++){
        if(arr[i]==2||arr[i]==3||arr[i]==5){
            primearr.push(arr[i]);
        }
        if(arr[i]>5){
        if(arr[i]%3&&arr[i]%2&&arr[i]%5!==0){
          primearr.push(arr[i]);
        }}
     }
     return primearr;
}
var print=prime(value);
console.log(print);
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
(ii) Return all the prime numbers in an array in IIFE
 Answer:
 var value=[1,2,3,4,5,6,7,8,9];
(function(arr){
    var primearr=[];
    for(var i=0;i<arr.length;i++){
        if(arr[i]==2||arr[i]==3||arr[i]==5){
            primearr.push(arr[i]);
        }
        if(arr[i]>5){
        if(arr[i]%3&&arr[i]%2&&arr[i]%5!==0){
          primearr.push(arr[i]);
        }}
    }
     return primearr;
})(value);
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
5)Question
 (i) Return all the palindromes in an array in anonymous function
 Answer:
 var arr=["malayalam","appa","amma","son"];
var pal=function(str){
var palindrome=[];
for(var i=0;i<str.length;i++){
    var splitfun=str[i].split("");
    var reversefun=splitfun.reverse();
    var joinfun=reversefun.join("");
    if(str[i]==joinfun){
        palindrome.push(str[i]);
    }
    }
    return palindrome;
}
pal(arr);
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
(ii) Return all the palindromes in an array in IIFE
Answer:
var arr=["malayalam","appa","amma","son"];
(function(str){
var palindrome=[];
for(var i=0;i<str.length;i++){
    var splitfun=str[i].split("");
    var reversefun=splitfun.reverse();
    var joinfun=reversefun.join("");
    if(str[i]==joinfun){
        palindrome.push(str[i]);
    }
    }
    return palindrome;
})(arr)                              
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
6)Question        
(i) Return median of two sorted arrays of same size in Anonymous Function
Answer:
var arr1=[1,2,3,4,5,6];
var arr2=[8,9,10,11,12,13];
var median=function(ar1,ar2){
var ar=ar1.concat(ar2);
ar.sort(function(a,b){return a-b });
var mid=ar.length/2;
var finalvalue=(parseInt(ar[mid])+parseInt(ar[mid-1]))/2;
return finalvalue;
}
median(arr1,arr2);
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------        
(ii) Return median of two sorted arrays of same size in  IIFE
Answer:
var arr1=[1,2,3,4,5,6];
var arr2=[8,9,10,11,12,13];
(function(ar1,ar2){
var ar=ar1.concat(ar2);
ar.sort(function(a,b){return a-b });
var mid=ar.length/2;
var finalvalue=(parseInt(ar[mid])+parseInt(ar[mid-1]))/2;
return finalvalue;
})(arr1,arr2)        
7)Question
(i) Remove duplicates from an array in Anonymous Function
Answer:
var arr=[1,2,1,2,3,4,5];
var dup=function(val){
    val.sort(function(a,b){return a-b});
    for(var i=0;i<val.length;i++){
        for(var j=i+1;j<val.length;j++){
            if(val[i]==val[j]){
                val.splice(val[j],1);
            }
        }
    }
    return val;
}
dup(arr);
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------        
(ii) Remove duplicates from an array in IIFE        
Answer:        
var arr=[1,2,1,2,3,4,5];
(function(val){
    val.sort(function(a,b){return a-b});
    for(var i=0;i<val.length;i++){
        for(var j=i+1;j<val.length;j++){
            if(val[i]==val[j]){
                val.splice(val[j],1);
            }
        }
    }
    return val;
})(arr);
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------        
8)Question
(i) Rotate an array by k times in Anonymous Function
Answer:
var arr=[1,2,3,4,5];
var k=3;
var rot=function(val,r){
for(var i=0;i<r;i++){
    val.unshift(val.pop());
}
console.log(val);
}
rot(arr,k);
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------        
(ii) Rotate an array by k times in IIFE
Answer:        
var arr=[1,2,3,4,5];
var k=3;
(function(val,r){
for(var i=0;i<r;i++){
    val.unshift(val.pop());
}
console.log(val);
})(arr,k)
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
II.  Do the below programs in arrow functions
1) Print odd numbers in an array
Answer:
var odarr=[1,2,3,4,5,6];
odd=(arr) => {
for(let i=0;i<arr.length;i++){
    if(arr[i]%2!=0){
        console.log(arr[i]);
    }
}
return arr;
}
odd(odarr);        
2)         
        

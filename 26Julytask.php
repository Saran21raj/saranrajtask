1)Fix the code
<!DOCTYPE html>
<html>
<body>
 <script>
 alert( "I’m JavaScript!);
 </script>
 Whats the error in this ?:
 alert should have closing double quotes
</body>
</html>

Fixed Code:
<!DOCTYPE html>
<html>
<body>
 <script>
 alert( "I’m JavaScript!");
 </script>
 Whats the error in this ?
</body>
</html>
---------------------------------------------------------------------------------------------------------------------------
Fix the code
fix.html
<!DOCTYPE html>
<html>
<body>
 <script src=”script.js”></script>
</body>
</html>
scripts.js
alert(“I’m invoked!”);

Fixed Code:
fix.html
<!DOCTYPE html>
<html>
<body>
 <script src="script.js"></script>
</body>
</html>
scripts.js
alert("I’m invoked!");
---------------------------------------------------------------------------------------------------------------------------
Explain the code
explain.html
<!DOCTYPE html>
<html>
<body>
 <script src=”script.js”></script>
</body>
</html>
script.js
alert("I'm JavaScript!");
alert('Hello') // this line is not having semicolon
alert(`Wor
 ld`)
alert(3 +
1
+ 2); // this is multiple line code and its working
Explanation:
* In JavaScript semicolon is optional.
* JavaScript interpreter runs a code line by line.
---------------------------------------------------------------------------------------------------------------------------
Fix the below code:
fix.html
<!DOCTYPE html>
<html>
<body>
<script src="script.js"></script>
</body>
</html>
script.js
let admin=9, fname=10.5; 
fname = "Guvi";
lname = "geek"
admin = fname+lname;
alert( admin );
Fixed Code:
fix.html
<!DOCTYPE html>
<html>
<body>
<script src="script.js"></script>
</body>
</html>
script.js
let admin=9, fname=10.5; 
fname = "Guvi";
lname = "geek"
admin = `${fname} ${lname}`;
alert( admin );
---------------------------------------------------------------------------------------------------------------------------
Fix the below code:
fix.html
<!DOCTYPE html>
<html>
<body>
<script src="script.js"></script>
</body>
</html>
script.js
let fname=10.5; 
fname = "Guvi";
lname = "geek"
let name = fname+lname;
alert( 'hello ${name}' );
Fixed Code:
fix.html
<!DOCTYPE html>
<html>
<body>
<script src="script.js"></script>
</body>
</html>
script.js
let fname=10.5; 
fname = "Guvi";
lname = "geek"
let name = `${fname} ${lname}`;
alert( `hello ${name}`);
---------------------------------------------------------------------------------------------------------------------------
Fix the code to alert sum of two numbers
fix.html
<!DOCTYPE html>
<html>
<body>
<script src="script.js"></script>
</body>
</html>
script.js
let a = prompt("First number?");
let b = prompt("Second number?");
alert(a + b);
Fixed Code:
fix.html
<!DOCTYPE html>
<html>
<body>
<script src="script.js"></script>
</body>
</html>
script.js
let a = prompt("First number?");
let b = prompt("Second number?");
alert(parseInt(a) + parseInt(b));
---------------------------------------------------------------------------------------------------------------------------
Explain Why the Code is blasted and how to diffuse it and get “Diffused”.
fix.html:
<!DOCTYPE html>
<html>
<body>
<script src="script.js"></script>
</body>
</html>
script.js:
var a = "2" > "12";//Don't touch below this
if (a) {
  console.log("Code is Blasted")
}
else
{
  console.log("Diffused") 
}
output:
Code is Blasted.
Explanation:
* If we compare 2 string values then it will check if the first character of the first string is greater than the first 
character of the second string so if it is greater then it will return true.
* Like that in this program first character of first string is 2 then first character of second string is 1 , 2 is greater
than 1 so only it is returning true and Code is Blasted is printed.
* To diffuse this we can change the greater than symbol or we can change the value of second string.
script.js
var a = "2" < "12";//Don't touch below this
if (a) {
  console.log("Code is Blasted")
}
else
{
  console.log("Diffused") 
}
output:
Diffused.
2)Write a code to print the numbers in the array
Output: 1234567891011
Code:
var numsArr = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
var new_string = "";
 
for (var i = 0; i < 11; i++) {
 new_string += numsArr[i]
}
console.log(new_string);
---------------------------------------------------------------------------------------------------------------------------
Write a code to print the numbers in the array
Output: 1,2,3,4,5,6,7,8,9,10,11
Code:
var numsArr = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
var new_string = "";
for (var i = 0; i < 11; i++) {
 new_string += numsArr[i]
 if(i<10){
     new_string +=","
 }
}
console.log(new_string);
---------------------------------------------------------------------------------------------------------------------------
Write a code to print from last to first with spaces (Make sure there is no space after the last element 1)
Output: 11 10 9 8 7 6 5 4 3 2 1
Code:
var new_string = "";
var numsArr = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
for (var i = 10; i >=0; i --) {
 new_string += numsArr[i]
 if(i>0){
     new_string +=" ";
 }
}
console.log(new_string);
---------------------------------------------------------------------------------------------------------------------------
Write a code to replace the array value — If the number is even, replace it with ‘even’.
Output:[ 1, “even”, 3, “even”, 5, “even”, 7, “even”, 9, “even”, … ]
Code:
var numsArr = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
for (var i = 0; i <=10; i++) {
    if(numsArr[i] %2 == 0 )
    {
    numsArr[i] = "even"
    }
   }
console.log(numsArr);
---------------------------------------------------------------------------------------------------------------------------
Write a code to replace the array value — If the index is even, replace it with ‘even’.
Output: [ “even”, 2, “even”, 4, “even”, 6, “even”, 8, “even”, 10, … ]
Code:
var numsArr = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
for (var i = 0; i <=10; i++) {
    if(i %2 == 0 )
    {
    numsArr[i] = "even"
    }
   }
console.log(numsArr);
---------------------------------------------------------------------------------------------------------------------------
Write a code to add all the numbers in the array
Output: 66
Code:
var numsArr = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
var sum=0;
for (var i = 0; i <=10; i++) {
    sum=parseInt(sum) + parseInt(numsArr[i])
   }
console.log(sum);
---------------------------------------------------------------------------------------------------------------------------
Write a code to add the even numbers only
Output: 30
Code:
var numsArr = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
var sum=0;
for (var i = 0; i <=10; i++) {
    if(numsArr[i]%2==0)
    sum=parseInt(sum) + parseInt(numsArr[i])
   }
console.log(sum);
---------------------------------------------------------------------------------------------------------------------------
Write a code to add the even numbers and subract the odd numbers
Output: 94
Code:
var numsArr = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
var sum=100;
for (var i = 0; i <=10; i++) {
 if(numsArr[i]%2!=0)
 {
 sum -= numsArr[i]
 }
 else
 {
 sum += numsArr[i]
 }
}
console.log(sum);
---------------------------------------------------------------------------------------------------------------------------
Write a code to print inner arrays
Output:
Array(5) [ 1, 2, 3, 4, 5 ]
Array(6) [ 6, 7, 8, 9, 10, 11 ]
Code:
var numsArr = [[1, 2, 3, 4, 5],[ 6, 7, 8, 9, 10, 11]];
for(var i=0;i<numsArr.length;i++) {
 console.log(numsArr[i])
}
---------------------------------------------------------------------------------------------------------------------------
Write a code to print elements in the inner arrays
Output: 1234567891011
Code:
var numsArr = [[1, 2, 3, 4, 5],[ 6, 7, 8, 9, 10, 11]];
var str_all="";
for (var i = 0; i < numsArr.length; i++) {
 var inner_array = numsArr[i];
 for(var j = 0 ; j < inner_array.length;j++ )
     str_all +=inner_array[j]
}
console.log(str_all);
---------------------------------------------------------------------------------------------------------------------------



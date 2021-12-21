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
2)

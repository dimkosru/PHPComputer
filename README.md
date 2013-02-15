PHPComputer
===========

cx1  - copy 1 to x
px   - print x
ix   - increment x
dx   - decrement x
lxz4 - loop until x>z $ip=$ip-4;
+xyz - x=y+z
-xyz - x=y-z
*xyz - x=y*z
/xyz - x=y/z


cx1cy2+zxy*zzzpzcx1+yzxpyiypydypycx2/yyxpycz5-yyzpycx6cy1+xxypxcz0izpzlxz8


x:=1;
y:=2;
z:=x+y;
z:=z*z;
print(z);
x:=1;
y:=z+x;
print(y);
inc(y);
print(y);
dec(y);
print(y);
x:=2;
y:=y/x;
print(y);
z:=5;
y=y-z;
print(y);
x:=6;
y:=1;
x:=x+y;
print(x);
z:=0;
do
z=z+1;
print(z);
until (x>z);
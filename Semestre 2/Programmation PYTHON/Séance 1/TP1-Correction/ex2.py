a=float(input("donner un reel  a:"))
b=float(input("donner un reel b:"))
c=float(input("donner un reel c:"))
if a<=b and a>=c or a>=b and a<=c :
    print(a,"est le reel au milieu ")
elif  b<=a and b>=c or b>=a and b<=c :
    print(b,"est le reel au milieu ")
elif  c<=b and c>=a or c>=b and c<=a:
    print(c,"est le reel au milieu ")

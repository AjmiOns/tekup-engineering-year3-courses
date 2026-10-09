x=str(input("donner un caractere: "))
if x >= "a" and x <="z" or x >= "A" and x <="Z" :
#x.upper() >= "a" and x.upper() <="z"
    print(x,"est une lettre alphabetique")
elif x >= "0" and x<= "9":
    print(x," est un chiffre")
else:
    print(x,"est un symbole special")
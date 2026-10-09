def cherche(c,s):
    f=False
    for i in range (len(s)):
        if s[i]==c:
            f=True
            break
        else:
            continue
    return f

def chercheocc(c,s):
    occ=0
    for i in range (len(s)):
        if s[i]==c:
            occ=i
            break
        else:
            occ=-1

    return occ


c=input("donner la caractere à chercher: ")
s=input("donner la chaine  correspondante: ")
print("est-ce que ",c,"existe dans ",s,"? ",cherche(c,s))
print("la première occurence de ",c,"est :",chercheocc(c,s))


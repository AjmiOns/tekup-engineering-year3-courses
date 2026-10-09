def est_separateur(d):
    i=False
    if d==" " or d==",":
        i=True


    return i






def Est_lettre(d):
    i=False
    if d >="a" and d<="z" or d >="A" and d<="Z":
        i=True
    return i










def Est_chiffre(d):
    i=False
    if d>"0" and d<"9":
        i=True
    return i


nbch,nbl,nbsep,nbspecial=0,0,0,0
d=input("donner un caractère: ")



while d != '#':

    if Est_chiffre(d):
        nbch+=1
    elif Est_lettre(d):
        nbl+=1
    elif est_separateur(d):
        nbsep+=1
    else :
        nbspecial+=1
    d=input("donner le caractère à saisir: ")

print("Nombre de letters:", nbl)
print("Nombre de chiffres:", nbch)
print("Nombre de separateurs:", nbsep)
print("Nombre de caracteres speciaux:", nbspecial)






































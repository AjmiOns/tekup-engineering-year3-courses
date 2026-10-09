def scrabble(mot,lettres):
    r=True
    i=0
    while i in range (len(mot)) :
        if mot[i]in lettres and mot.count(lettres[i])==lettres.count(lettres[i]):
            i+=1
        else:
            r=False

        return r
mot=input("donner la premiere chaine: ")
lettres=input("donner les lettres disponibles: ")
print(scrabble(mot,lettres))

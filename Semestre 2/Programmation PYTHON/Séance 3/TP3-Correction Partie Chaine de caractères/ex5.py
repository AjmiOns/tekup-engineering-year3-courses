def anagramme(ch1,ch2):
    if len(ch1)!=len(ch2):
        return False
    else:
        for i in range (len(ch1)):

            if ch1.count(ch2[i])==ch2.count(ch2[i]):
                return True
            else:
                return False
ch1=input("donner la premiere chaine: ")
ch2=input("donner la deuxieme chaine: ")
print(anagramme(ch1,ch2))
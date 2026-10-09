def Hamming(ch1,ch2):
    j=0
    if len(ch1)!=len(ch2):
        return -1
    else :
        for i in range (len(ch1)):
            if ch1[i]!=ch2[i]:
                j+=1
        return j
ch1=input("donner la premiere chaine: ")
ch2=input("donner la deuxieme chaine: ")
print(Hamming(ch1,ch2))

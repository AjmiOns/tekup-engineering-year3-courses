i=0
s=0
while True :
    note=float(input('donner la note à saisir : '))
    if (note >= 0) and (note <=20):

        i+=1
        s+=note

        rep=str(input("voulez vous continuez?"))
        if rep == "oui":
            continue
        elif rep =="non" :
            m=s/i
            print('le nombre des notes est : ',i)
            print('la moyenne des notes est :',m)
            if m>14:
                print("mention: très bien")
            elif (m>12) and (m<14):
                print("mention: bien")
            elif (m>10) and (m<12):
                print("mention: passable")
            else:
                print("mention: nonadmis")
            break
    else:
        print("la note doit etre comprise entre 0 et 20.")










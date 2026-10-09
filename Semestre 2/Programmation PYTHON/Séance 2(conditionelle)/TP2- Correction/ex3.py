import random
i=0
x=random.randint(1,50)
while True :
    chosen=int(input("donner l'entier à saisir : "))
    i+=1
    if chosen!=x:
        print("la tentative courante est :", i)
        print("les tentatives restantes :", 7-i)
        if chosen <x:

            print('trop petit')
        else:
            print('trop grand')
    else:
        print("bravo")
        print("vous avez gagner")
        break
    if i==7:
        print("vous avez echouer")
        break



















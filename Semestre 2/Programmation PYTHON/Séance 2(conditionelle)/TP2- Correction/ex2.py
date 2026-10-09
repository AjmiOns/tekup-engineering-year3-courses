i=0
s=0
maxi=-100
mini=100
while True :
    note=float(input('donner la note à saisir : '))
    if (note >= 0) and (note <=20):

        i+=1
        s+=note

        if maxi<note:
            maxi=note
        if mini>note :
            mini=note
    print(maxi)
    print(mini)
    print(s/i)

    if note<0:
        break













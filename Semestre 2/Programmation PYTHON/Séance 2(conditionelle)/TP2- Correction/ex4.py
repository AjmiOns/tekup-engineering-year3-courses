km=float(input("donner la distance parcourue: "))
nb=int(input("donner le nombre des jours de location: "))
forfait=0
prixkm=0
T1=0.7
T2=0.4
T3=0.2
PJ=100
ASS=0.3
TVA=0.18
if km > 1000:
    prixkm=((100*T1)+900*T2+(km-1000)*T3)+ (ASS*nb)
    prixkm+=(prixkm*TVA)
elif km>100 and km<1000:
    prixkm=((100*T1)+(km-100)*T2 )+ (ASS*nb)
    prixkm+=(prixkm*TVA)
else:
    prixkm=(km*T1 ) + (ASS*nb)
    prixkm+=(prixkm*TVA)
forfait=PJ*(nb+ASS)
forfait+=(forfait*TVA)
if forfait > prixkm:
    print("le prix par kilometre est avantagueux:", prixkm)
else:
    print("le prix par forfait est avantagueux: ", forfait)




















nbr=int(input("donner le nombre de jours: "))
y=nbr // 365
w=(nbr % 365) // 7
d=(nbr%365)%7
print("an(s):",y)
print("semaine(s)",w)
print("jour(s)",d)
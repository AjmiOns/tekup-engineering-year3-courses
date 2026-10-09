def palindrome(ch):
    i=0
    for i in range ((len(ch)+1)//2):
        if (ch[i] == ch[len(ch)-1-i]) :
            return True
        else:
            return False


ch=(input("donner une mot : "))
if palindrome(ch):
    print('la chaine saisie est palindrome')
else:
    print('la chaine saisie n''est palindrome')

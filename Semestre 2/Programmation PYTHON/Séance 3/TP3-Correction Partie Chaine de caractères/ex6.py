def balanced(ch):
    chp, cha, chc = 0, 0, 0
    if ch.count('(') == ch.count(')') and ch.count('[') == ch.count(']') and ch.count('{') == ch.count('}'):
        for j in range(len(ch)):
            if ch[j] == '(':
                chp += 1
            elif ch[j] == '[':
                cha += 1
            elif ch[j] == '{':
                chc += 1
            elif ch[j] == ')':
                chp -= 1
                if chp < 0:
                    return 'Unbalanced'
            elif ch[j] == ']':
                cha -= 1
                if cha < 0:
                    return 'Unbalanced'
            elif ch[j] == '}':
                chc -= 1
                if chc < 0:
                    return 'Unbalanced'
        if cha == 0 and chp == 0 and chc == 0:
            return 'Balanced'
        else:
            return 'Unbalanced'
    else:
        return 'Unbalanced'


ch = input("donner une chaine: ")
print(balanced(ch))

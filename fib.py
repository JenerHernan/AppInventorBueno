from decimal import *

act = 1
ant = 0

for i in range(0,400):
    aux = act + ant
    ant = act
    act = aux
    print(Decimal(aux)/Decimal(ant))

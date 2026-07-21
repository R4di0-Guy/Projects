money=[500,200,100,50,20,10,5,2,1]
coins=['0.5','0.2','0.1','0.05','0.02','0.01']
otr=[]
gr=[]
kwota=float(input("wpisz ile potrzebno wpłacić: "))
try:
    price=float(input("wpisz ile wydałeś gotówki: "))
    price-=kwota
    price=round(price,2)
    if price!=0:
        if(price>=0):
            print(f"reszta: {price}")
            i=0
            j=0
            while price>=1:
                for i in range(0,len(money)):
                    #print(money[i],end=' ')
                    if price>=money[i]:
                        otr.append(money[i])
                        price-=money[i]
                        j+=1
                        break
                    else:
                        i+=1
            #print(otr)
            #print(price)
            j=0
            while price>0:
                for i in range(0,len(coins)):
                    price=round(price,2)
                    #print(float(coins[i]),end=' ')
                    if price>=float(coins[i]):
                        gr.append(coins[i])
                        price-=float(coins[i])
                        j+=1
                        break
                    else:
                        i+=1
            
            print(otr, gr)
            #print(f"otrzymałeś:",end=" ")
            #for i in range(0,len(otr)):
            #    print(f"{otr[i]}zl",end=" ")
            #for i in range(0,len(gr)):
            #    print(f"{round((float(gr[i])*100))}gr",end=" ")
            #print("")
            numb=1
            for i in range(0,len(otr)):
                try:
                    if otr[i]==otr[i+1]:
                        numb+=1
                    else:
                        print(f"{numb}x{otr[i]}zł",end=" ")
                        numb=1
                except:
                    print(f"{numb}x{otr[i]}zł",end=" ")
            numb=1
            for i in range(0,len(gr)):
                try:
                    if gr[i]==gr[i+1]:
                        numb+=1
                    else:
                        print(f"{numb}x{round((float(gr[i])*100))}gr",end=" ")
                        numb=1
                except:
                    print(f"{numb}x{round((float(gr[i])*100))}gr",end=" ")
                
    else:
            print("nie ma reszty")
except:
    print("tak nie opłacisz")

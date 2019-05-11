import math

def cetak_gambar():
    string = ['P','R','O','G','R','A','M','M','E','R']
    kolomkanan = len(string)-1
    kolomkiri  = 0
    for baris in range(0, len(string)):
        for kolom in range(0, len(string)):
            if kolom == kolomkiri:
                print(string[baris], end=" ")  
            elif kolom == kolomkanan:
                print(string[baris], end=" ")
            else:
                print(" = ", end=" ")
        kolomkiri +=1
        kolomkanan -=1
        print("\n")
cetak_gambar()

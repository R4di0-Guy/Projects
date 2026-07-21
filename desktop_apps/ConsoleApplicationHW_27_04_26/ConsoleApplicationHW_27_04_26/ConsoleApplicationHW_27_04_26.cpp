#include <iostream>
#include <fstream>
#include <cstdlib>
#include <algorithm>
#include <string>


using namespace std;
string temat, nick, odpowiedz;
string tresc[10], poprawna[10];
string odpA[10], odpB[10], odpC[10], odpD[10];
int pukty = 0;
int main()
{
    int numer_linii = 1;
    string linia;
    int numer_pytania = 0;

    fstream plik;
    plik.open("quiz2.txt",ios::in);

    if (plik.good() == false) {
        cout << "Nah";
    }
    else
    {
        while (getline(plik, linia)) {
            switch (numer_linii) {
            case 1: temat = linia;break;
            case 2: nick = linia;break;
            case 3: tresc[numer_pytania] = linia;break;
            case 4: odpA[numer_pytania] = linia;break;
            case 5: odpB[numer_pytania] = linia;break;
            case 6: odpC[numer_pytania] = linia;break;
            case 7: odpD[numer_pytania] = linia;break;
            case 8: poprawna[numer_pytania] = linia;break;
            }
            if (numer_linii == 8) { numer_linii = 2;numer_pytania++;}
            numer_linii++;
        }
        plik.close();
        for (int i = 0;i <numer_pytania;i++) {
            cout << endl << tresc[i] << endl;
            cout << "A. " << odpA[i] << endl;
            cout << "B. " << odpB[i] << endl;
            cout << "C. " << odpC[i] << endl;
            cout << "D. " << odpD[i] << endl;

            cout << "Twoja odpowiedz: ";
            cin >> odpowiedz;
            transform(odpowiedz.begin(), odpowiedz.end(), odpowiedz.begin(), ::tolower);
            if (odpowiedz==poprawna[i])
            {
                pukty++;
                cout << "Prawilowo"<<endl;
            }
            else
            {
                cout << "Zle" << endl;
            }
        }
        cout << "Masz " << pukty << " punktow";
    }
    return 0;
}

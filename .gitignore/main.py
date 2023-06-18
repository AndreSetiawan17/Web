from bs4 import BeautifulSoup
import requests


def main(link:str) -> None :
    req = requests.get(link)

    if req.status_code != 200:
        print(req)
        exit(req.status_code)
    
    soup = BeautifulSoup(req.text,"html.parser")




if __name__ == "__main__":
    main()

"""
Mengambil paragraf pada novel kagejitsu dan menyimpannya pada sebuah set
setelah itu meakukan perlulangan for pada tiap tiap paragraf 
dan melakukan rewrte pada kode html dengan penanda tag

contoh

with open("index.html","r") as f:
    html = r.readlines()


for i in paragraf:
    html = html.replace(<p>isi<p/>,f"<p>{i}<p/>")




with open("index.html","r") as f:
    f.writelines(html)


"""
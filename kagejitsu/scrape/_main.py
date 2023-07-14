from bs4 import BeautifulSoup
from os.path import join as pjoin
import requests



class Get:

    def __init__(self) -> None:
        self.__mainlink:str = "https://musworldnovel.wordpress.com/2021/04/06/light-novel-kage-no-jitsuryokusha-ni-naritakute-bahasa-indonesia/"
        # self.__seg:list     = ["prolog","chapter1","chapter2","chapter3","chapter4","chapter5","chapter6","chapter7","final","extra","prolog","chapter1","chapter2","chapter3","chapter4","chapter5","chapter6","chapter7","chapter8","final","prolog","chapter1","chapter2","chapter3","chapter4","chapter5","chapter6","epilog","prolog","chapter1","chapter2","chapter3","interlude","chapter4","chapter5","epilog","prolog","chapter1","chapter2","chapter3","chapter4","chapter5","epilog",]

        self.__mainpage = self.__reso(self.__mainlink)

    def __reso(self,link:str) -> BeautifulSoup:
        req = requests.get(link)
        if req.status_code != 200: exit(req.status_code)
        return BeautifulSoup(req.text, "html.parser")

    def dcover(self,path:str=".") -> int:
        """Download Cover Volume"""
        soup = self.__reso(self.__mainlink)
        for no, link in enumerate([i.find("img") for i in soup.find_all("figure", "aligncenter size-large")]):
            print(f"Downloading: {link['src']}")
            req = requests.get(link["src"])
            with open(pjoin(path,f"cover{no+1}.jpg"), "wb") as f:
                f.write(req.content)
        return 0
        #Tidak semua gambar memiliki format .jpg
    
    # def get_segment(self) -> dict:
    def get_segment(self):
        # Mengambil tag yang berisi segment seperti prolog, chapter link dan lain-lain
        full_tag = []
        for tg in self.__mainpage.find_all("p"):
            if tg == '<p class="comment-form-posting-as pa-wordpress">': break
            if tg.find("strong") != None and tg.find("strong").find("a") != None and tg.strong.a.text != "Penutup" or \
                tg.text.split(":")[0].strip().lower() == "extra":
                full_tag.append(tg)
        
        # link = [i for i in [i["href"] for i in self.__mainpage.find_all("a",{"rel":"noreferrer noopener"})] if "ouo.io" not in i]
        link = [i.find("a")["href"] for i in full_tag]

        # ["prolog","chapter1","chapter2","chapter3","chapter4","chapter5","chapter6","chapter7","final","extra","prolog","chapter1","chapter2","chapter3","chapter4","chapter5","chapter6","chapter7","chapter8","final","prolog","chapter1","chapter2","chapter3","chapter4","chapter5","chapter6","epilog","prolog","chapter1","chapter2","chapter3","interlude","chapter4","chapter5","epilog","extra","prolog","chapter1","chapter2","chapter3","chapter4","chapter5","epilog","extra"]
        seg:list = [i.text.split(":")[0].lower().split()[0] for i in full_tag]
        x:int    = 0
        for i,j in enumerate(seg):
            if j == "chapter":
                x += 1
                seg[i] += str(x)
            elif j == "interlude": continue 
            else: x = 0
        del x

        
        segment, i = {f"v{k+1}":{} for k in range(len([i for i in seg if i == "prolog"]))}, 0
        for s,fs,l in zip(seg,[i.text for i in full_tag],link):
            fs = " ".join(fs.split()) # Agar tidak ada dua spasi pada teks
            if s == "prolog": i += 1
            segment[f"v{i}"][s] = [fs,l]
            # segment[f"v{i}"] = {s:[fs,l]} -> Salah





        # return [i.text for i in full_tag]
        return segment

    @property
    def mail_link(self):
        return self.__mainlink
    
    @property
    def seg(self):
        return 0
        # return self.__seg
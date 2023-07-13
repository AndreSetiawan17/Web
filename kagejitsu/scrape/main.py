from bs4 import BeautifulSoup as bs4
from os import path
import requests
import os

class Get:

    """
        Info Min
    """

    __main_link:str = "https://musworldnovel.wordpress.com/2021/04/06/light-novel-kage-no-jitsuryokusha-ni-naritakute-bahasa-indonesia/"
    __seg:list      = ["prolog","chapter1","chapter2","chapter3","chapter4","chapter5","chapter6","chapter7","final","extra","prolog","chapter1","chapter2","chapter3","chapter4","chapter5","chapter6","chapter7","chapter8","final","prolog","chapter1","chapter2","chapter3","chapter4","chapter5","chapter6","epilog","prolog","chapter1","chapter2","chapter3","interlude","chapter4","chapter5","epilog","prolog","chapter1","chapter2","chapter3","chapter4","chapter5","epilog",]

    def __init__(self) -> None:
        self.__main_page:bs4 = self.__reso(self.__main_link)
        self.__segment = self.__get_segment()

    @staticmethod
    def __reso(link:str) -> bs4:
        """Melakukan Request dan mengmbalikan hasil dalam object BeautifulSoup"""
        req = requests.get(link)
        if req.status_code != 200: exit(req.status_code)
        return bs4(req.text, "html.parser")
    
    @classmethod
    def get_cover(cls, loc:str=".") -> None:
        """Mengubah ekstensi sesuai file sumber -> Later"""
        soup = cls.__reso(cls.__main_link)
        for no, link in enumerate([i.find("img") for i in soup.find_all("figure", "aligncenter size-large")]):
            print(f"Downloading: {link['src']}")
            req = requests.get(link["src"])
            with open(path.join(loc,f"cover{no+1}.jpg"), "wb") as f:
                f.write(req.content)
    
    def __get_segment(self) -> dict:
        full_tag = []
        for tg in self.__main_page.find_all("p"):
            if tg == '<p class="comment-form-posting-as pa-wordpress">': break
            if tg.find("strong") != None and tg.find("strong").find("a") != None and tg.strong.a.text != "Penutup":
                    full_tag.append(tg)

        #segment_link = [i for i in [i["href"] for i in soup.find_all("a",{"rel":"noreferrer noopener"})] if "ouo.io" not in i]
        segment_link = [i.find("a")["href"] for i in full_tag]

        dct = {}
        i = 0
        for s, ft_sl in zip(self.__seg,(zip(full_tag,segment_link))):
            ft, sl = ft_sl
            if s == "prolog": i += 1
            dct[f"v{i}"] = {s:[full_tag, segment_link]}


        # dick = {k:v[1].text for k,v in zip(self.__seg,zip(full_tag,segment_link))}
        return dct
    
    def prn(self):
        print(self.__get_segment())
        

def view_img(link:str) -> None:
    for i in link:
        os.system(f"firefox {i}")


scr = Get()
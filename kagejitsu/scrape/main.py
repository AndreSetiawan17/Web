from bs4 import BeautifulSoup as bs4
from os import path
import requests

class Get:
    __main_link:str = "https://musworldnovel.wordpress.com/2021/04/06/light-novel-kage-no-jitsuryokusha-ni-naritakute-bahasa-indonesia/"
    
    @property
    def link(self):
        return [self.__main_link]

    @staticmethod
    def __reso(link:str):
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


scr = Get()
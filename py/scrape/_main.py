from bs4 import BeautifulSoup
from os import path, mkdir
import mysql.connector
import requests
import json


class Get:
    def __init__(self) -> None:
        self.__mainlink:str = "https://musworldnovel.wordpress.com/2021/04/06/light-novel-kage-no-jitsuryokusha-ni-naritakute-bahasa-indonesia/"
        
        self.__mainpage     = self.__tosoup(self.__mainlink)
        self.__segment:dict = self.__get_segment()


    def __request(self,link:str) -> requests.Response :
        req = requests.get(link)
        if req.status_code != 200: exit(req.status_code)
        return req

    def __tosoup(self,link:str) -> BeautifulSoup:
        """Mengembalikan teks html dari website"""
        return BeautifulSoup(self.__request(link).text, "html.parser")
    
    def __get_segment(self) -> dict:
        # Mengambil tag yang berisi segment seperti prolog, chapter link dan lain-lain
        full_tag = []
        #help meh eroor cook
        for tg in self.__mainpage.find_all("p"):
            if tg == '<p class="comment-form-posting-as pa-wordpress">': break
            if tg.find("strong") != None and tg.find("strong").find("a") != None and tg.strong.a.text != "Penutup" or \
                tg.text.split(":")[0].strip().lower() == "extra":
                full_tag.append(tg)
        
        link = [i.find("a")["href"] for i in full_tag]
        seg,x = [i.text.split(":")[0].lower().split()[0] for i in full_tag], 0 # seg = ["prolog","chapter1","chapter2","chapter3","chapter4","chapter5","chapter6","chapter7","final","extra","prolog","chapter1","chapter2","chapter3","chapter4","chapter5","chapter6","chapter7","chapter8","final","prolog","chapter1","chapter2","chapter3","chapter4","chapter5","chapter6","epilog","prolog","chapter1","chapter2","chapter3","interlude","chapter4","chapter5","epilog","extra","prolog","chapter1","chapter2","chapter3","chapter4","chapter5","epilog","extra"]
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
        del i

        return segment
    
    def __adakah(self,path_:str):
        if not path.exists(path_):
            raise TypeError(f"Folder {path_} tidak ditemukan")

    def dcover(self,path_:str=".") -> None:
        """Download Cover Volume"""

        self.__adakah(path_)

        formatimg = ["jpeg","jpg","png","jpg","jpg"]

        for no, lifo in enumerate(zip([i.find("img") for i in self.__mainpage.find_all("figure", "aligncenter size-large")],formatimg)):
            link,format_ = lifo
            print(f"Downloading: {link['src']}")
            req = self.__request(link["src"])
            with open(path.join(path_,f"cover{no+1}.{format_}"), "wb") as f:
                f.write(req.content)

    def dimage(self,link:str,segment:list,path_:str="."):
        """
            Argument Hint!\n
            link    -> https://linktowebsite.hehe?nama=siapa / Link dari website yang akan diambil ilustrasinya\n
            segment -> ["v1","prolog"] / Path yang akan dibuat secara otomatis untuk meyimpan hasil dari download\n
            path    -> "../aset/" / Path menuju folder untuk menyimpan hasil download\n
        """

        self.__adakah(path_)

        p1,p2 = segment
        if p1 not in self.__segment.keys() or p2 not in self.__segment[p1].keys():
            raise TypeError(f"argument segment tidak valid -> {segment}")
        
        # Membuat folder path/v1/prolog/ jika tidak ada
        if not path.exists(path.join(path_,p1)):
            try: mkdir(path.join(path_,p1))
            except Exception as error: print("Tidak dapat membuat folder, periksa izin folder untuk memastikan program memiliki izin yang memadai ->",error)
        if not path.exists(path.join(path_,p1,p2)):
            try: mkdir(path.join(path_,p1,p2))
            except Exception as error: print("Tidak dapat membuat folder, periksa izin folder untuk memastikan program memiliki izin yang memadai ->",error)


        soup = self.__tosoup(link)

        # List link gambar ilustrasi
        illlink = [i.find("img")["src"] for i in soup.find_all(class_="wp-block-image") if i.find("img")["src"].split("?")[1] != "w=55"]
        
        # Ekstensi dari masing masing file
        ef = [i.split("?")[0].split(".")[-1] for i in illlink]

        for no,le in enumerate(zip(illlink,ef)):
            link,e = le
            print(f"Downloading: {link}")
            req = self.__request(link)
            with open(path.join(path_,p1,p2,f"img{no+1}.{e}"), "wb") as f:
                f.write(req.content)

    def dimage_all(self,path_,cover:bool=True):
        if cover:
            self.dcover(path_)
        for vol in self.__segment.keys():
            for seg in self.__segment[vol].keys():
                self.dimage(self.__segment[vol][seg][1],[vol,seg],path_)

    def get_paragraf(self,segment:list,debug:bool=False) -> list:
        """
            segment -> ["v1","prolog"]\n \t\t\t\t  ["v3","chapter5"]
        """
        a1,a2 = segment
        if a1 not in self.__segment.keys() or a2 not in self.__segment[a1].keys():
            raise TypeError(f"Argument segment tidak valid -> {segment}")

        soup     = self.__tosoup(self.__segment[a1][a2][1])
        all      = soup.find("div","entry-content")
        lparagaf = []

        img_filter = ["figure","div"]
        filter = ["p","h2","h3"]

        for i in all:
            if i.name in img_filter and i.find("img") != None and i.find("img")["src"].split("?")[1] != "w=55":
                if debug: lparagaf.append(i)
                else: lparagaf.append("#!img")

            elif i.name in filter and i.text.strip() != "":
                lparagaf.append(i.text)
        
        return lparagaf

    def get_all_paragraf(self,prn=False) -> list[dict]:
        out = [{} for i in range(len(self.__segment.keys()))]
        
        for i in self.__segment.keys():
            for j in self.__segment[i].keys():
                out[int(i[1])-1][j] = self.get_paragraf([i,j])
                if prn: print(f"Complete: {i}->{j}")
        return out

    @property
    def segment(self) -> dict:
        return self.__segment





class Insert:

    __connect = False

    @staticmethod
    def connect(host:str,username:str,password:str,database:str):
        Insert.__connect = True
        Insert.conn = mysql.connector.connect(host=host,username=username,password=password,database=database)
        if not Insert.conn.is_connected():
            raise ConnectionError("Tidak dapat terhubung dengan database")
        Insert.cur  = Insert.conn.cursor()


    @staticmethod
    @property
    def conn_status():
        return Insert.conn.is_connected()
    
    @staticmethod
    def close():
        # self.cur.close()
        Insert.conn.close()

class Database:
    __connect = False

    # @staticmethod
    def status(cls):
        return cls.__connect
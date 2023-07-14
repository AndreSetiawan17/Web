from _main import Get



alpha = Get()



# panjang = "limah"
# dict = {k:None for k in range(len(panjang))}
dict = {"v1":{}}
# dict["v1"]["s"] = 1
# print(dict);exit()

i = 0
for j in alpha.segment:
    if j == "prolog":
        i += 1
        dict["v{i}"] = {}

print(alpha.segment)
print(
    {f"v{k}":{} for k in range(len([i for i in alpha.segment if i == "prolog"]))}
)


# dict["v1"]["prolog"] = ["Prolog : Mempersiapkan panggung yang sempurna!", "anggap aja link"]
# dict["v1"]["chapter1"] = ["Prolog : Mempersiapkan panggung yang sempurna!", "anggap aja link 2"]

# print(dict["v1"])
# dict["v2"] = {"prolog":["Prolog : Untuk Lindwurm, Tanah Suci!","Linkh"]}
# {k:None for k in ([i for i in range(10)])}
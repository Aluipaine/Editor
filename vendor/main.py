










## DB connections etc





for i in items:
    i_name = i[1].split(" ")

    for b in brands_array:
        if(i_name == b):
            i_brand = b
        else: 
            "unknown"
    
    for ty in types_array:
        t = ty.split("|")
        if(i_name == t[2] && i_brand == b):
            pass
        else: 
            "unknown"


#levys per sauma 


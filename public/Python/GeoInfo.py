from geopy.geocoders import Nominatim
from geopy.distance import great_circle

def getCoords(string):
    """Takes in a string that represents an address
    and returns the coordinates of that address."""
    try:
        geolocator = Nominatim()
        location = geolocator.geocode(string)
        coords = (location.latitude, location.longitude)
        return coords
    except:
        return None
    
def dist(string1,string2):
    """Takes in two stings that represent addresses and
    returns the great-circle distance between the two"""
    try:
        a=getCoords(string1)
        b=getCoords(string2)
        return (great_circle(a,b).miles)
    except:
        return None

def getString(address, city, state, zipcode):
    """Takes in address, city, state, and zipcode and returns
    a string that is suitable to use with the coordinate function"""
    aFinal=''
    aTemp=''
    for j in address:
        if j.isalnum() or j==' ':
            aTemp+=j
    a=aTemp.split()
    n=1
    for i in a:
        if (not i.isalpha()):
            aFinal+=i
        else:
            aFinal+= i[0].upper()+i[1:].lower()
        if n!=len(a):
            aFinal+= ' '
        n+=1
            
    bFinal=''
    bTemp=''
    for j in city:
        if j.isalnum() or j==' ':
            bTemp+=j
    b=bTemp.split()
    m=1
    for i in b:
        if (not i.isalpha()):
            bFinal+=i
        else:
            bFinal+= i[0].upper()+i[1:].lower()
        if m!=len(b):
            bFinal+= ' '
        m+=1
            
    cFinal=state.upper()
    
    FinalString = aFinal + ' ' + bFinal + ', '+ cFinal + ' ' + zipcode
    return FinalString
    
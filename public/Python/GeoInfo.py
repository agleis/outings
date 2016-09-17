from geopy.geocoders import Nominatim
from geopy.distance import great_circle
import mysql.connector
from mysql.connector import errorcode

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
            
    cFinal=''
    cTemp=''
    for j in state:
        if j.isalnum() or j==' ':
            cTemp+=j
    c=cTemp.split()
    p=1
    for i in c:
        cFinal+= i.upper()
        if m!=len(c):
            cFinal+= ' '
        p+=1
              
    cFinal=state.upper()
    if len(cFinal)>0 and len(bFinal)>0:
        e=', '
    else:
        e=' '
    
    FinalString = aFinal + ' ' + bFinal + e + cFinal + ' ' + zipcode
    return FinalString

LocList = ['Fredonia, NY 14063','516 E Buffalo St Ithaca, NY 14850','The white house',
               'Yosemite national park','Cornell university']

one_loc=True
set_location=False
set_coords=True
nloc=[0,2,4] #location number
for n in nloc:
    cnx = mysql.connector.connect(user='root',database='outings')
    cursor = cnx.cursor(buffered=True)
    cursor2 = cnx.cursor(buffered=True)
    cursor3 = cnx.cursor(buffered=True)
    
    cursor.execute("SELECT location FROM outings.trips")
    
    if (not one_loc):
        n=0
    for (location) in cursor:
        location = str(location).replace('\\n',' ')
        location = location[3:len(location)-3]
        coord=getCoords(location)
        if set_location:
            cursor2.execute("UPDATE trips SET location='%s' WHERE id=%s" %(LocList[n],n+1))
        if set_coords:
            cursor3.execute("UPDATE trips SET coordinates='%s' WHERE id=%s" %(coord,n+1))
        if one_loc:
            cursor.fetchall()
        n+=1


cnx.close()
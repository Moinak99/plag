#!"C:\Users\moinak lappy\AppData\Local\Programs\Python\Python37-32\python.exe"
print ("Content-Type: text/html")
print ("") 
from difflib import SequenceMatcher
import mysql.connector
mydb=mysql.connector.connect(host="localhost",user="root",passwd="",database="gmit")
mycursor=mydb.cursor()
mycursor.execute("SELECT student.Assignment FROM  student,teacher WHERE student.Topic_name=teacher.Topic_name AND student.Subject_name=teacher.Subject_name ")
result1 = mycursor.fetchall()


mycursor.execute("SELECT teacher.Assignment FROM  student,teacher WHERE teacher.Topic_name=student.Topic_name AND teacher.Subject_name=student.Subject_name ")
result = mycursor.fetchone()
file2=result

for i in result1:
    file1=i
    similarity_ratio1=SequenceMatcher(None,file1,file2).ratio()
    print('<Br><B><Center>PLAGARISIM=')
    print(100*similarity_ratio1,'%</Center></Br></B>')
    print('<Br><B><Center>UNIQUE=')
    print(100-(100*similarity_ratio1),'%</Center></Br></B>')


    


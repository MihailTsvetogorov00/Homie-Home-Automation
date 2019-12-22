import RPi.GPIO as GPIO
import urllib2
import time
import subprocess
import smtplib
import socket
from email.mime.text import MIMEText
import datetime

to = 'radoslav.mandev99@gmail.com'

gmail_user = '-'
gmail_password = '-'

GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM) #Broadcom pin-numbering scheme set
ser = serial.Serial('/dev/ttyACM0', 9600) #Setting serial reading
GPIO.setup(23,GPIO.OUT)
GPIO.setup(14,GPIO.OUT)
GPIO.setup(15,GPIO.OUT)
GPIO.setup(18,GPIO.OUT)
GPIO.setup(24,GPIO.OUT)
GPIO.setup(25,GPIO.OUT)
GPIO.setup(8,GPIO.OUT)
true = 1
val = 0
while(true):
				val = ser.read()
                try:
                    response = urllib2.urlopen('http://(ip)/buttonStatus.txt')
                    status = response.read()
                except urllib2.HTTPError, e:
                    print e.code

                except urllib2.URLError, e:
                    print e.args

                print status
				print val
				# TODO: make this work - loss of data issue
				'''
				if val == 'Danger':  
					GPIO.output(8,True)
					
					smtpserver = smtplib.SMTP('smtp.gmail.com', 587) 
					smtpserver.ehlo()
					smtpserver.starttls()
					smtpserver.ehlo
					smtpserver.login(gmail_user, gmail_password)
					today = datetime.date.today()
					arg='ip route list'
					p=subprocess.Popen(arg,shell=True,stdout=subprocess.PIPE)
					data = p.communicate()
					split_data = data[0].split()
					msg = MIMEText('The gas sensor in HOMIE found a gas leak and shut it off!')
					msg['Subject'] = 'There is a gas leak in your house!'
					msg['From'] = gmail_user
					msg['To'] = to
					smtpserver.sendmail(gmail_user, [to], msg.as_string())
					smtpserver.quit()
								
				elif val == '0':
					GPIO.output(8,False)
				'''
                elif status=='Laundry_ON':
                                GPIO.output(14,True)
                elif status=='Laundry_OFF':
                                GPIO.output(14,False)
                elif status=='Boiler_ON':
                                GPIO.output(23,True)
                elif status=='Boiler_OFF':
                                GPIO.output(23,False)
                elif status=='AirC_ON':
                                GPIO.output(15,True)
                elif status=='AirC_OFF':
                                GPIO.output(15,False)
                elif status=='c1_ON':
                                GPIO.output(18,True)
                elif status=='c1_OFF':
                                GPIO.output(18,False)
                elif status=='c2_ON':
                                GPIO.output(24,True)
                elif status=='c2_OFF':
                                GPIO.output(24,False)
                elif status=='c3_ON':
                                GPIO.output(25,True)
                elif status=='c3_OFF':
                                GPIO.output(25,False)
                time.sleep(1)
                


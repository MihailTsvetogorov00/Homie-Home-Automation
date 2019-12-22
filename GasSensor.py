# Work in progress
# Part of relay.py
import serial
import time
import RPi.GPIO as GPIO
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
GPIO.setup(8,GPIO.OUT)
ser = serial.Serial('/dev/ttyACM0', 9600)
true = 1
s = [0]
import subprocess
import smtplib
import socket
from email.mime.text import MIMEText
import datetime
to = 'radoslav.mandev99@gmail.com'
gmail_user = '-'
gmail_password = '-'
while (true) :
    read_serial=ser.readline()
    s[0]=str(int (ser.readline(),16))
    print s[0]
    if s[0] == '1':
        GPIO.output(8,True)
    elif s[0] == '0':
        GPIO.output(8,False)
    time.sleep(1)
    

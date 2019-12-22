#WIP
# Part of relay.py
import subprocess
import smtplib
import socket
from email.mime.text import MIMEText
import datetime
to = '-'
gmail_user = '-'
gmail_password = '-'
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
msg = MIMEText('test')
msg['Subject'] = 'sub'
msg['From'] = gmail_user
msg['To'] = to
smtpserver.sendmail(gmail_user, [to], msg.as_string())
smtpserver.quit()

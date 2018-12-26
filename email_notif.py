import os
import requests
import ast
import time
import re
from flask import Flask
from flask_mail import Mail, Message

app = Flask(__name__)

def send_email(nama_penerima, email_penerima, telepon_penerima, tanggal_dibuat, perihal, asal, tanggal_masuk):
    mail_settings = {
        "MAIL_SERVER": 'smtp.gmail.com',
        "MAIL_PORT": 465,
        "MAIL_USE_TLS": False,
        "MAIL_USE_SSL": True,
        "MAIL_USERNAME": 'noreply.ancient@gmail.com',
        "MAIL_PASSWORD": open('.password_email', 'r').read()
    }

    app.config.update(mail_settings)
    mail = Mail(app)

    with app.app_context():
        html_file = open('notif.html', 'r').read()
        html_file = re.sub(r'(\[\[TANGGAL_MASUK\]\])', tanggal_masuk, html_file)
        html_file = re.sub(r'(\[\[NAMA_PENERIMA\]\])', nama_penerima, html_file)
        html_file = re.sub(r'(\[\[EMAIL_PENERIMA\]\])', email_penerima, html_file)
        html_file = re.sub(r'(\[\[TELEPON_PENERIMA\]\])', telepon_penerima, html_file)
        html_file = re.sub(r'(\[\[TANGGAL_DIBUAT\]\])', tanggal_dibuat, html_file)

        html_file = re.sub(r'(\[\[PERIHAL\]\])', perihal, html_file)
        html_file = re.sub(r'(\[\[ASAL\]\])', asal, html_file)
        msg = Message(subject="Hello",
            sender=app.config.get("MAIL_USERNAME"),
            recipients=["adiunity@gmail.com"],
            html=html_file)
        mail.send(msg)

now = 0
while(True):
    daftar_dokumen = requests.get('http://localhost:8000/document_received')
    daftar_dokumen = ast.literal_eval(daftar_dokumen.content.decode())

    if len(daftar_dokumen) > now:
        for dokumen in daftar_dokumen:
            if int(dokumen) == 1:
                break
            nama_penerima = daftar_dokumen[dokumen]['nama_penerima']
            #email_penerima = daftar_dokumen[dokumen]['email_penerima']
            email_penerima = "adiunity@gmail.com"
            telepon_penerima = daftar_dokumen[dokumen]['telepon_penerima']
            tanggal_dibuat = daftar_dokumen[dokumen]['created_at']
            perihal = daftar_dokumen[dokumen]['perihal']
            asal = daftar_dokumen[dokumen]['asal_surat']
            tanggal_masuk = daftar_dokumen[dokumen]['tanggal_masuk']
            send_email(nama_penerima, email_penerima, telepon_penerima, tanggal_dibuat, perihal, asal, tanggal_masuk)
            print('adirizka7')
        now = len(daftar_dokumen)
    time.sleep(60)

from flask import Flask
from flask_mail import Mail, Message
import os
import requests
import ast

app = Flask(__name__)

mail_settings = {
    "MAIL_SERVER": 'smtp.gmail.com',
    "MAIL_PORT": 465,
    "MAIL_USE_TLS": False,
    "MAIL_USE_SSL": True,
    "MAIL_USERNAME": 'noreply.ancient@gmail.com',
    "MAIL_PASSWORD": ''
}

app.config.update(mail_settings)
mail = Mail(app)

with app.app_context():
    msg = Message(subject="Hello",
        sender=app.config.get("MAIL_USERNAME"),
        recipients=["adirizka7@gmail.com"],
        body="""This is a test email I sent with Gmail and Python!""")
    mail.send(msg)

daftar_dokumen = requests.get('http://localhost:8000/document_received')
daftar_dokumen = ast.literal_eval(daftar_dokumen.content.decode())

for dokumen in daftar_dokumen:
    email_penerima = daftar_dokumen[dokumen]['email_penerima']

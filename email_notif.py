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
    "MAIL_PASSWORD": open('.password_email', 'r').read()
}

app.config.update(mail_settings)
mail = Mail(app)

with app.app_context():
    msg = Message(subject="Hello",
        sender=app.config.get("MAIL_USERNAME"),
        recipients=["adiunity@gmail.com"],
        html="<html>  <head><meta name=\"viewport\" content=\"width=device-width\" /><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" /><title style=\"font-size: 1em;\">Ancient Archieve Notification</title><style type=\"text/css\">  .text-tables{font-size: 1em;  }  .btn-check{border: none;background-color: #00a65a;color: #E6E6E6;border-radius: 4px;height: 8vh;width: 40vw;font-size: 1.2em;margin: 5vh 3vw;transition: 0.4s;  }  .btn-check a{text-decoration: none;color: #E6E6E6;  }  .btn-check:hover{background-color: #dd4b39;transition: 0.4s;  }  .btn-check a:hover{color: black;transition: 0.4s;  }</style>  </head>  <body style=\"color: #dd4b39;\"><div class=\"container title\" style=\"width: 50vw;height: 70vh;margin: 20vh auto;border: 5px dashed #dd4b39;\">  <h1 class=\"center\" style=\"text-align: center;\">NOTICE</h1>  <br>  <div class=\"container-deskripsi\"><p class=\"description\" style=\"width: 75vw;margin: 0% auto;text-align: justify;font-size: 1.25em;padding-left: 3vw;padding-top: -5vh;\">We would like to tell you that <strong>Rakish F</strong> Has Changed Document Status:<br><table class=\"text-tables\" style=\"display: inline-block; width: 80%; margin: auto; padding-right: 30vw\">  <tr><td><strong>Document Name</strong></td><td> : </td><td>Permohonan Pengajuan Melamar Anak Bapak CEO</td>  </tr>  <tr><td><strong>Status</strong></td><td> : </td><td>Fresh Document to Review</td>  </tr>  <tr><td><strong>Asal Surat</strong></td><td> : </td><td>Fisika</td>  </tr>  <tr><td><strong>Date</strong></td><td> : </td><td>20 December 2018</td>  </tr>  <tr><td><strong>Perihal</strong></td><td> : </td><td>Permohonan</td>  </tr></table>Do You Want to Check it Now?<br><button class=\"btn-check\" style=\"width: 30vw; margin: 1vh 8vw;\"><a href=\"#\">Check Now</a></button>  </div></div></body></html>")
    mail.send(msg)

daftar_dokumen = requests.get('http://localhost:8000/document_received')
daftar_dokumen = ast.literal_eval(daftar_dokumen.content.decode())

for dokumen in daftar_dokumen:
    email_penerima = daftar_dokumen[dokumen]['email_penerima']

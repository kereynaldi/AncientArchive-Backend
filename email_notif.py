import requests
import ast

daftar_dokumen = requests.get('http://localhost:8000/document_received')
daftar_dokumen = ast.literal_eval(daftar_dokumen.content.decode())

for dokumen in daftar_dokumen:
    email_penerima = daftar_dokumen[dokumen]['email_penerima']

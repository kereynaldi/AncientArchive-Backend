import time
import ast
import requests
from linebot import LineBotApi, WebhookHandler
from linebot.models import MessageEvent, TextMessage, TextSendMessage, TemplateSendMessage, CarouselTemplate,\
            CarouselColumn, PostbackAction, MessageAction, URIAction

line_bot_api = LineBotApi('bja+FmbhBTT9HnjPkZ0yxleMumn6FbMxgPrQTOPuKm50hjIQpKayW97G2zziedzq5ij9KoRdm7qsDHvVPDFOd2P1SLLDRwAQqQ4nSOapKrf67eznVlocf/PlYSuyqvunkq22nBMBnntt6v4XleCYUgdB04t89/1O/w1cDnyilFU=')

now = 0
while True:
  list_doc = requests.get('http://localhost:8000/document_received')
  list_doc = ast.literal_eval(list_doc.content.decode())
  
  for doc in list_doc:
    if int(doc) <= now:
      break
    dokumen = list_doc[doc]
    line_bot_api.push_message(
      #list_doc[doc]['line_id'],
      'U1d3d45c1ed66bbfb10eca3cfc85d45c2', 
      TextSendMessage(text=('[Ancient Archive Notification]\n\n' 
        + dokumen['perihal'] + '\n'
        + dokumen['created_at'] + '\n'
        + dokumen['jenis_surat'] + '\n'
        + dokumen['asal_surat'] + '\n'
        + dokumen['tujuan_surat']))
    )
  now = len(list_doc)
  time.sleep(10)

# -*- coding: utf-8 -*-

#  Licensed under the Apache License, Version 2.0 (the "License"); you may
#  not use this file except in compliance with the License. You may obtain
#  a copy of the License at
#
#                 https://www.apache.org/licenses/LICENSE-2.0
#
#  Unless required by applicable law or agreed to in writing, software
#  distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
#  WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
#  License for the specific language governing permissions and limitations
#  under the License.

from __future__ import unicode_literals
from competition import *

import ast
import redis
import os
import sys
from argparse import ArgumentParser

from flask import Flask, request, abort
from linebot import (
  LineBotApi, WebhookParser
)
from linebot.exceptions import (
  InvalidSignatureError
)
from linebot.models import (
  MessageEvent, TextMessage, TextSendMessage,
)

app = Flask(__name__)

# get channel_secret and channel_access_token from your environment variable
line_bot_api = LineBotApi('bja+FmbhBTT9HnjPkZ0yxleMumn6FbMxgPrQTOPuKm50hjIQpKayW97G2zziedzq5ij9KoRdm7qsDHvVPDFOd2P1SLLDRwAQqQ4nSOapKrf67eznVlocf/PlYSuyqvunkq22nBMBnntt6v4XleCYUgdB04t89/1O/w1cDnyilFU=')
parser = WebhookParser('380a5ab3ea4f6c1516b9fcd888d3da4c')

redis_db = redis.StrictRedis(host="localhost",port=6379, db=0)

@app.route("/callback", methods=['POST'])
def callback():
  signature = request.headers['X-Line-Signature']

  # get request body as text
  body = request.get_data(as_text=True)
  app.logger.info("Request body: " + body)

  # parse webhook body
  try:
    events = parser.parse(body, signature)
  except InvalidSignatureError:
    abort(400)

  # if event is MessageEvent and message is TextMessage, then echo text
  for event in events:
    if not isinstance(event, MessageEvent):
      continue
    if not isinstance(event.message, TextMessage):
      continue

    if event.message.text.lower() == 'minta id':
        line_bot_api.reply_message(
            event.reply_token,
            TextSendMessage(text=event.source.user_id)
        )
"""
    if event.message.text.lower() == 'help':
        line_bot_api.reply_message(
          event.reply_token,
          TextSendMessage(text='Type \'Follow\' if you want Compe-Bot to notify contests\n\nType \'Unfollow\' if you want to stop receiving contests notifications')
        )
    
    if event.message.text.lower() == 'follow':
      list_adders = redis_db.hgetall('push_notif')
      print(list_adders[b'users_id'])
      if b'users_id' not in list_adders or list_adders[b'users_id'].decode() == 'set()':
        list_adders[b'users_id'] = []
      else:
        list_adders[b'users_id'] = list(ast.literal_eval(list_adders[b'users_id'].decode()))
      list_adders[b'users_id'].append(event.source.user_id if event.source.type == 'user' else event.source.group_id)
      list_adders[b'users_id'] = str(set(list_adders[b'users_id']))
      redis_db.hmset('push_notif', list_adders)
      line_bot_api.reply_message(
        event.reply_token,
        TextSendMessage(text='Followed !')
      )

    if event.message.text.lower() == 'unfollow':
      list_adders = redis_db.hgetall('push_notif')
      if (event.source.user_id if event.source.type == 'user' else event.source.group_id) not in list_adders[b'users_id'].decode():
        line_bot_api.reply_message(
          event.reply_token,
          TextSendMessage(text='You are not registered for notification yet !')
        )
      else:
        list_adders[b'users_id'] = ast.literal_eval(list_adders[b'users_id'].decode())
        list_adders[b'users_id'].remove(event.source.user_id if event.source.type == 'user' else event.source.group_id)
        list_adders[b'users_id'] = str(list_adders[b'users_id'])
        redis_db.hmset('push_notif', list_adders)
        line_bot_api.reply_message(
          event.reply_token,
          TextSendMessage(text='Unfollowed !')
        )
    if event.message.text.lower() == 'contest':
      line_bot_api.reply_message(
        event.reply_token,
        TextSendMessage(text=notify())
      )
"""
  return 'OK'


if __name__ == "__main__":
  app.run(host = '0.0.0.0', debug=True, port='5002')

from eve import Eve
from flask import render_template,request,redirect,url_for, session, escape
from eve.auth import BasicAuth
from eve.methods.get import get_internal
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
from werkzeug import secure_filename
from bson import regex
from random import randint
import json,pathlib,hashlib
import requests,random,os
from datetime import datetime
import re
import smtplib
import math
import smtplib
from werkzeug import secure_filename
import matplotlib.pyplot as plt
import reverse_geocoder as rg
from fastai.vision import *
import cv2
import numpy as np
import base64
from PIL import Image
from io import BytesIO




port = 5000
host = '0.0.0.0'

class MyBasicAuth(BasicAuth):
    def check_auth(self, username, password, allowed_roles, resource, method):
        return username == 'root' and password == '22oct1997'

app = Eve(__name__, auth=MyBasicAuth)
app.config['SESSION_TYPE'] = 'memcached'
app.config['SECRET_KEY'] = '5234124584324'

headers = {'Authorization': 'Basic cm9vdDoyMm9jdDE5OTc=', 'Content-Type':'application/json'}

app.config['MONGO_HOST'] = '165.22.100.196'
app.config['MONGO_PORT'] = '27017'
app.config['MONGO_DBNAME'] = 'nibodh'
app.config['MONGO_USERNAME'] = 'root'
app.config['MONGO_PASSWORD'] = '22oct1997'


UPLOAD_FOLDER = "./static/uploads/"
app.config['UPLOAD_FOLDER'] = UPLOAD_FOLDER


def reverseGeocode(coordinates):
    ret=''
    result = rg.search(coordinates)
    print('\n'*20+'result:',result[0])
    for i in range(len(result)):
        ret+=result[i]['name']
        ret+=', '+result[i]['admin1']
        ret+=', '+result[i]['admin2']
        ret+=', '+result[i]['cc']
    return ret

@app.route('/upload')
def upload():
    return render_template('add.html')

@app.route('/uploader', methods=['GET', 'POST'])
def uploader():
    if request.method == 'POST':
        db = app.data.driver.db.client['nibodh']
        print('\n\n\n\nbruuuhh in \n\n\n\n')
        f = request.files['file']
        gid=request.form['gid']
        print('\n\n\n\n\ngid:',gid)
        user=request.form['user']
        print('\n\n\n\n\nuser:',user)
        type=request.form['type']
        print('\n\n\n\n\ntype:',type)
        print('saved$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$4')
        f.save(os.path.join( app.config['UPLOAD_FOLDER'], secure_filename(f.filename) ))
        db.grievance.insert_one({"image_link":f.filename,
        "grievance_id":gid,
        "user_id":user,
        "grievance_type":type,
        "area":"wahi",
        "latitude":"null",
        "longitude":"null",
        "assigned_authority":"null",
        "assigned_date":str(datetime.now()),
        "status":"unsolved",
        "timestamp":str(datetime.now())
        })

        res=db.grievance.find()
        for i in res:
            print('#\n\n\n\n\n\n',i)

        return 'db.grievance.find()'


@app.route('/records')
def records():
    db = app.data.driver.db.client['nibodh']
    all=list(db.grievance.find())



    return render_template('tables.html',all=all)


@app.route('/bar')
def bar():
    pincode=[11,12,11,13,15,11,16,17]
    tmp=set(pincode)
    count=[]
    print(tmp)
    for i in tmp:
        print(pincode.count(i))
        count.append(pincode.count(i))
    tick_label = ['one', 'two', 'three', 'four', 'five','six']
    print(count)
    pincode=list(tmp)
    print(pincode)
    plt.bar(pincode,count, tick_label = tick_label,width = 0.8, color = ['red', 'green'])
    plt.xlabel('Problems')
    plt.ylabel('Area')
    plt.title('Pincode')
    #plt.savefig('/graphs'+str(datetime.now())+'.png')
    return 'hii'


@app.route("/smd")
def index():
    db = app.data.driver.db.client['nibodh']
    all=list(db.grievance.find())

    for i in all:
        if 'area' not in i or i['area']=="unpredicted":
            lon=float(i['longitude'])
            lat=float(i['latitude'])
            print('\n\n\n\n\nlon:',lon)
            tup=(lat,lon)
            print('\n\n\n\n\ntup:',tup)
            res=reverseGeocode(tup)
            print('\n'*20+'blaha:',res)
            all1 = db.grievance.find_one_and_update({'grievance_id':i["grievance_id"]},{'$set':{"area":res}})
            print(all)
            imgdata = base64.b64decode(i['image_link'])
            filename = str(i['grievance_id'][:5])+'.jpg'
            print("*********************")
            print(filename)
            all=list(db.grievance.find())

        if 'grievance_type' not in i or i['grievance_type']=="unpredicted" :
            filename = str(i['grievance_id'][:5])
            x = open('base64.txt',"w+")
            x.write(i['image_link'])
            x.close()
            f = open('base64.txt', 'r')
            data = f.read()
            f.closed
            im = Image.open(BytesIO(base64.b64decode(data)))
            im.save(i['grievance_id'][:5]+'.png', 'PNG')
            pathh=str(i['grievance_id'][:5]) + ".png"
            path=Path('./')
            classes=['garbage','pothole']
            #data = ImageDataBunch.from_folder(path, train=".", valid_pct=0.2,ds_tfms=get_transforms(), size=224, num_workers=4).normalize(imagenet_stats)
            data = ImageDataBunch.single_from_classes(path, classes, ds_tfms=get_transforms(), size=240).normalize(imagenet_stats)
            learn = cnn_learner(data, models.resnet101, metrics=error_rate)
            learn.load('phase1')
            img = open_image(pathh)
            pred_class,pred_idx,outputs = learn.predict(img)
            print('\n#'*20,outputs)
            all1 = db.grievance.find_one_and_update({'grievance_id':i["grievance_id"]},{'$set':{"grievance_type":str(pred_class)}})
            all=list(db.grievance.find())
    return render_template('edit.html',all=all)


if __name__ == '__main__':
    app.run(host=host, port=port, debug=True)

from flask import Flask, jsonify, abort, request, render_template
from pymongo import MongoClient
import sys
import json



app = Flask(__name__)
MONGODATABASE = "entrega4"
MONGOSERVER = "localhost"
MONGOPORT = 27017
# instanciar el cliente de pymongo para realizar consultas a la base de datos
client = MongoClient(MONGOSERVER, MONGOPORT)


# Decorador defiene la ruta.
@app.route('/')
def hello_world():
    print(123, file=sys.stdout)
    return render_template("index.php")


#buscar por id de mensaje
@app.route('/sender/<int:msg_id>', methods=['GET'])
def sender(msg_id):
    mongodb = client[MONGODATABASE]
    collection = mongodb.messages
    output = []
    # for s in collection.find({"_id": msg_id}, {"_id": 0}):
    for s in collection.find({"sender": msg_id}, {"_id": 1}):
        output.append(s)
    if len(output) == 0:
        return jsonify(), 404
    else:
        return jsonify(output), 200


#buscar por id de usuario
@app.route('/user/<int:_id>', methods=['GET'])
def message(_id):
    mongodb = client[MONGODATABASE]
    mensajes = mongodb.messages
    usuarios = mongodb.usuarios
    output = []

    usuario = usuarios.find({"user": _id}, {"_id": 0})
    output.append(usuario)

    for s in mensajes.find({"sender": _id}, {"_id": 0}):
        output.append(s)

    if len(output) == 0:
        return jsonify(), 404
    else:
        return jsonify(output), 200


# buscar por ids de usuario
@app.route('/intercambiados/<int:_id1>/<int:_id2>', methods=['GET'])
def intercambiados(_id1, _id2):
    mongodb = client[MONGODATABASE]
    collection = mongodb.messages
    output = []
    resultado = []
    output1= []

    for t in collection.find({"sender": _id1}, {"_id": 0}):
        output.append(t)

    for t in collection.find({"sender": _id2}, {"_id": 0}):
        output1.append(t)

    for dic1 in output1:
        if dic1["receptant"]==_id1:
            resultado.append(dic1)

    for dic in output:
        if dic["receptant"]==_id2:
            resultado.append(dic)

    if len(resultado) == 0:
        return jsonify(), 404
    else:
        return jsonify(resultado), 200


#agregar un mensaje
@app.route('/add_message/', methods=['POST'])
def add_message():
    mongodb = client[MONGODATABASE]
    collection = mongodb.menssages

    data = request.get_json()

    inserted_message = collection.insert_one({
        'message': data["message"],
        'sender': data["sender"],
        'receptant': data["receptant"],
        'lat': data['lat'],
        'long': data["long"],
        'date':data["date"],
    })

    # insert_one retorna None si no pudo insertar
    if inserted_message is None:
        return jsonify(), 404
    # Retorna el id del elemento insertado
    else:
        return jsonify({"id": str(inserted_message.inserted_id)}), 200


#remover un mensaje
@app.route('/remove_message/<int:msg_id>', methods=['DELETE'])
def remove_message(msg_id):
    mongodb = client[MONGODATABASE]
    messages = mongodb.messages

    result = messages.find({"_id": msg_id})
    rm_id = result[msg_id]

    # messages.delete_one({'date': date})

    if result.deleted_count == 0:
        return jsonify(), 404
    else:
        return jsonify("Eliminado"), 200


## TEXT SEARCH

@app.route('/text_search/<string:text>', methods=['GET'])
def text_search(text):
    mongodb = client[MONGODATABASE]
    messages = mongodb.messages

    result = []
    messages.create_index([('message', 'text')])
    collection = messages.find({"$text": {"$search": text}})

    for r in collection:
        result.append(r)

    if len(result) == 0:
        return jsonify(), 404
    else:
        return jsonify(result), 200





if __name__ == '__main__':
    # Pueden definir su puerto para correr la aplicación
    app.run(port=5000)

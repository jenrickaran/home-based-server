import socket
from flask import Flask, render_template
from dotenv import load_dotenv
import os


hostName = socket.gethostname()
ip = socket.gethostbyname(hostName)
load_dotenv()
checkUsername = os.getenv("USER")
checkPassword = os.getenv("PASSWORD")

print("\n")
print("===============================")
print("Name and IP Adress of the Server")
print(hostName)
print(ip)
print("===============================")
print("\n")
print("===============================")
print("Log in to open the server")
username = input("Username: ")
password = input("Password: ")
print("===============================")
print(checkUsername)
print(checkPassword)

if username == checkUsername and password == checkPassword:
    app = Flask(__name__)

    @app.route("/")
    def home():
        return render_template("index.php")

    @app.route("/features")
    def features():
        return render_template("pages/features.php")

    if __name__ == "__main__":
        app.run(host=ip, port=8001, debug=True)
else:
    print("You entered wrong credentials.")
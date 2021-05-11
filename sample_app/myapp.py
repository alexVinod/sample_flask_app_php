from flask import Flask
app = Flask(__name__)

@app.route("/", methods = ["GET"])
@app.route("/home", methods = ["GET"])
def home():
	html = """
		<h1 style='color:#00aaff; font-family:agency fb;'> Hello World... </h1>
	"""
	return html


if __name__ == "__main__":
	app.debug = True
	app.run(host = '0.0.0.0', port = 5000)

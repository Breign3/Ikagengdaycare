from flask import Flask, render_template, request, redirect
import mysql.connector

app = Flask(__name__)

# Connect to MySQL
db = mysql.connector.connect(
    host="localhost",
    user="root",
    password="yourpassword",
    database="ikagengdaycare"
)

cursor = db.cursor()

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/about')
def about():
    return render_template('about.html')

@app.route('/apply')
def apply():
    return render_template('apply.html')

@app.route('/submit_application', methods=['POST'])
def submit_application():
    child_name = request.form['child_name']
    age = request.form['age']
    parent_name = request.form['parent_name']
    contact = request.form['contact']

    # Insert data into MySQL
    sql = "INSERT INTO applications (child_name, age, parent_name, contact) VALUES (%s, %s, %s, %s)"
    cursor.execute(sql, (child_name, age, parent_name, contact))
    db.commit()

    return redirect('/')

if __name__ == '__main__':
    app.run(debug=True)

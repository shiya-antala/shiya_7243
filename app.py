from flask import Flask, render_template, request, redirect, session

app = Flask(__name__)
app.secret_key = "secret123"

# Dummy products (you can connect DB later)
products = [
    {"id": 1, "name": "Asthetic Jewelry"},
    {"id": 2, "name": "Cloths"},
    {"id": 3, "name": "Shoes"},
    {"id": 4, "name": "Baby Cloths"},
    {"id": 5, "name": "Toys"},
    {"id": 6, "name": "Cosmetics"}
]

# 🔐 LOGIN
@app.route('/login', methods=['GET','POST'])
def login():
    if request.method == 'POST':
        if request.form['email'] == "admin@gmail.com" and request.form['password'] == "1234":
            session['user'] = "admin"
            session['cart'] = []
            return redirect('/')
        else:
            return "Invalid Login"
    return render_template('login.html')


# 🚪 LOGOUT
@app.route('/logout')
def logout():
    session.clear()
    return redirect('/login')


# 🏠 HOME (PRODUCTS)
@app.route('/')
def index():
    if 'user' not in session:
        return redirect('/login')
    return render_template('index.html', products=products)


# 🛒 ADD TO CART
@app.route('/add_to_cart/<int:id>')
def add_to_cart(id):
    for p in products:
        if p['id'] == id:
            session['cart'].append(p)
    return redirect('/cart')


# 🧾 CART
@app.route('/cart')
def cart():
    if 'user' not in session:
        return redirect('/login')
    return render_template('cart.html', items=session['cart'])


# 📦 ORDER
@app.route('/order')
def order():
    return render_template('order.html', items=session['cart'])


# 🧾 BILLING
@app.route('/billing', methods=['POST'])
def billing():
    items = session['cart']
    total = sum(item['price'] for item in items)
    return render_template('billing.html', items=items, total=total)


if __name__ == '__main__':
    app.run(debug=True)
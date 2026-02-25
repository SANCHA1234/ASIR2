from flask import Flask, render_template, request, redirect, url_for

app = Flask(__name__)


car_state = {
    "running": False,
    "speed": 0,
    "blink_left": False,
    "blink_right": False,
    "increment": 10,
    "play_horn": False
}

@app.route('/')
def index():
    
    return render_template('index.html', state=car_state)

@app.route('/action', methods=['POST'])
def action():
    btn = request.form.get('btn')
    
   
    try:
        car_state['increment'] = int(request.form.get('increment', 10))
    except:
        pass
    
    inc = car_state['increment']
    car_state['play_horn'] = False
    
    if btn == "start":
        car_state['running'] = True
    elif btn == "stop":
        car_state['running'] = False
        car_state['speed'] = 0
        car_state['blink_left'] = car_state['blink_right'] = False
    
   
    elif car_state['running']:
        if btn == "accelerate":
            car_state['speed'] += inc
            car_state['blink_left'] = car_state['blink_right'] = False
        elif btn == "brake":
            car_state['speed'] = max(0, car_state['speed'] - inc)
            car_state['blink_left'] = car_state['blink_right'] = False
        elif btn == "left":
            car_state['blink_left'] = True
            car_state['blink_right'] = False
        elif btn == "right":
            car_state['blink_right'] = True
            car_state['blink_left'] = False
        elif btn == "horn":
            car_state['play_horn'] = True

    return redirect(url_for('index'))

if __name__ == '__main__':
    app.run(debug=True)
from turtle import *
import random

speed(0)
colormode(255)  
bgcolor("black")

for i in range(1000):
    r = random.randint(0, 255)
    g = random.randint(0, 255)
    b = random.randint(0, 255)
    color(r, g, b)
    forward(i)
    right(45)

done()
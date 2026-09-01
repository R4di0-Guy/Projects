from tkinter import *
import random

GAME_WIDTH=500
GAME_HEIGHT=500
SPEED=150
SPACE_SIZE=25
BODY_PARTS=3
SNAKE_COLOUR="#00FF0A"
FOOD_COLOUR="#FF00FA"
BACKGROUND_COLOUR="#000000"

class Snake():
    def __init__(self):
        self.body_size=BODY_PARTS
        self.coordinates=[]
        self.squares=[]

        for i in range(0,BODY_PARTS):
            self.coordinates.append([0,0])

        for x,y in self.coordinates:
            square=canvas.create_rectangle(x,y,x+SPACE_SIZE,y+SPACE_SIZE,fill=SNAKE_COLOUR,tag="snake")
            self.squares.append(square)

class Food():
    def __init__(self):
        x=random.randint(0,int((GAME_WIDTH/SPACE_SIZE)-1))*SPACE_SIZE
        y=random.randint(0,int((GAME_HEIGHT/SPACE_SIZE)-1))*SPACE_SIZE

        self.coordinates=[x,y]

        canvas.create_oval(x,y,x+SPACE_SIZE,y+SPACE_SIZE,fill=FOOD_COLOUR,tag="food")

def speed_boost():
    global SPEED
    SPEED-=10
    print(SPEED)
    if SPEED==70:
        global is_not_max_level
        is_not_max_level=False

def next_turn(snake,food):
    x,y=snake.coordinates[0]

    if direction=="up":
        y-=SPACE_SIZE
    elif direction=="down":
        y+=SPACE_SIZE
    elif direction=="left":
        x-=SPACE_SIZE
    elif direction=="right":
        x+=SPACE_SIZE

    snake.coordinates.insert(0,(x,y))

    square=canvas.create_rectangle(x,y,x+SPACE_SIZE,y+SPACE_SIZE,fill=SNAKE_COLOUR)
    snake.squares.insert(0,square)


    if x == food.coordinates[0] and y==food.coordinates[1]:
        global score
        score+=1

        label.config(text="Score:{}".format(score))
        if (is_not_max_level):
            global multiplier
            if score<20:
                if score%5==0:
                    multiplier+=1
                    speed_boost()
            else:
                if score%10==0:
                    multiplier+=1
                    speed_boost()
            multipl.config(text="Multiplier:{}".format(multiplier)+"x")

        canvas.delete("food")
        food=Food()
    else:
        del snake.coordinates[-1]

        canvas.delete(snake.squares[-1])

        del snake.squares[-1]

    if check_collisions(snake):
        game_over()
    else:
        window.after(SPEED,next_turn,snake,food)

def change_direction(new_direction):
    global direction
    if new_direction=="left":
        if direction!="right":
            direction=new_direction
    elif new_direction=="right":
        if direction!="left":
            direction=new_direction
    elif new_direction=="up":
        if direction!="down":
            direction=new_direction
    elif new_direction=="down":
        if direction!="up":
            direction=new_direction

def check_collisions(snake):
    x,y=snake.coordinates[0]

    if x<0 or x>=GAME_WIDTH:
        print("gameover")
        return True
    elif y<0 or y>=GAME_HEIGHT:
        print("gameover")
        return True
    
    for body_part in snake.coordinates[1:]:
        if x== body_part[0] and y==body_part[1]:
            print("gameover")
            return True
        
    return False

def game_over():
    canvas.delete(ALL)

    canvas.create_text(canvas.winfo_width()/2,canvas.winfo_height()/2,font=("consolas",70),text="GAME OVER", fill="red",tag="gameover")
    canvas.create_text(canvas.winfo_width()/2,canvas.winfo_height()/1.5,font=("consolas",20),text="Press 'SPACE' to retry", fill="red",tag="gameover")

def retry():
    global is_end
    print(is_end)
    if is_end:
        print("retry")
        global score
        global high_score
        if score>high_score:
            high_score=score

        canvas.delete(ALL)
        
        score=0
        multiplier=1
        is_not_max_level=True
        direction="down"
        is_end=False
        global SPEED
        SPEED==150

        label.config(text="Score:{}".format(score))
        multipl.config(text="Multiplier:{}".format(multiplier)+"x")
        high_s.config(text="High Score:{}".format(high_score))

        x=int((screen_width/2)-(window_width/2))
        y=int((screen_height/2)-(window_height/2))

        snake=Snake()
        food=Food()

        next_turn(snake,food)
        window.mainloop()


if __name__=="__main__":
    window=Tk()
    window.title("SnakeGame")
    window.resizable(False,False)

    high_score=0
    score=0
    multiplier=1
    is_not_max_level=True
    direction="down"
    is_end=False
    high_s=Label(window, text="High Score:{}".format(high_score), font=('consolas',20))
    high_s.pack()

    label=Label(window, text="Score:{}".format(score), font=('consolas',40))
    label.pack()

    multipl=Label(window, text="Multiplier:{}".format(multiplier)+"x", font=('consolas',20))
    multipl.pack()

    canvas=Canvas(window,bg=BACKGROUND_COLOUR,height=GAME_HEIGHT,width=GAME_WIDTH)
    canvas.pack()


    window.update()
    window_width=window.winfo_width()
    window_height=window.winfo_height()
    screen_width=window.winfo_screenwidth()
    screen_height=window.winfo_screenheight()

    x=int((screen_width/2)-(window_width/2))
    y=int((screen_height/2)-(window_height/2))

    window.bind("<Left>",lambda event:change_direction("left"))
    window.bind("<Right>",lambda event:change_direction("right"))
    window.bind("<Up>",lambda event:change_direction("up"))
    window.bind("<Down>",lambda event:change_direction("down"))
    window.bind("<space>",lambda event:retry())


    window.geometry(f"{window_width}x{window_height}+{x}+{y}")

    snake=Snake()
    food=Food()

    next_turn(snake,food)
    window.mainloop()
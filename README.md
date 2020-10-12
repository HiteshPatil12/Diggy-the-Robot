# Diggy-the-Robot
This is a programme written in PHP language to print last position of the Diggy the walking robot.


#Problem Statement
Diggy is a robot that can walk on a 2D plane (x, y coordinates). It can only perform following operations:
1.	R : Turn 90 degree on right (clockwise).
2.	L : Turn 90 degree on left (counterclockwise).
3.	WN : Walk forward N units in the direction robot is facing. For example, W2 means robot walks 2 unit point forward

Your need to create a command-line based script in any programming language of your choice. The script accepts a command line argument as an input string of the current position, direction and walking code and print out the result of the last position of the robot.

Input Format
X Y D S

X = Current X position
Y = Current Y position
D = Current direction robot is facing (North, East, South or West)
S = Walk string

Output Format
X Y D

X = Current X position
Y = Current Y position
D = Current direction robot is facing (North, East, South or West)
Your script must take these inputs from command line. 

Example

$ php diggyWalkingRobot.php 5 2 SOUTH RW2LW4R
$ 3 -2 WEST

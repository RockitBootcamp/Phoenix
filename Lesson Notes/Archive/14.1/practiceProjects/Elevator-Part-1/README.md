Elevator Part 1
=

The rules to this exersise are simple. The students must start with these four variables:
-
	var person_at = 4;				// Possible values are any positive integers
	var person_request = 'up'		// Possible values are 'up' or 'down'
	var car_at = 5;					// Possible values are any positive integers
	var car_direction = 'up';		// Possible values are 'up', 'down', or null (null suggests idle car)


And they must write a simple algo that will console log one of four possible messages:

1. Pickup Person Going Up
1. Pickup Person Going Down
1. Can't Pickup Person (Car going in wrong direction)
1. Can't Pickup Person (Car already passed)

Use Case
-

With the variables written above, the car and the person are going in the same direction. However the car is already at floor 5 which means it's not going towards the person, but away from them. The correct output for this situation is: #4 - "Can't Pickup Person (Car already passed)"

See the solution for more info


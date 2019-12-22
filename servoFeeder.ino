#include <Servo.h>

Servo myservo; // Declare a servo
int fourHours = 14400;  //4 hours in seconds
//Setup
void setup() {
  myservo.attach(9);  
}
//The loop
void loop() {
  //Move Servo to position 0
  myservo.write(0);
  //The delay function
  delayHours();
  //Move Servo to position 180
  myservo.write(180);  
}

// How many hours should the delay be
void delayHours()
{
  for(int i = 0; i < fourHours; i++)
  {
    delay(1000);
  }
}


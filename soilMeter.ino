// Do it with arduino later - launchpad i will
// VCC+ = 5V
// GND = GND
// DO - empty!
// +A0 - arduino analog pin
int mostureSensor = A1; // arduino analog pin
#define 11 waterPump
void setup() {
  Serial.begin(9600);
  pinMode(waterPump, OUTPUT);
}

void loop() {
  int sensorValue = analogRead(mostureSensor);
  if(sensorValue < 400)
  {
    digitalWrite(waterPump, HIGH);
    delay(10000);
    digitalWrite(waterPump, LOW);
  }
  else if (sensorValue > 400 && sensorValue < 500)
  {
    digitalWrite(waterPump, HIGH);
    delay(5000);
    digitalWrite(waterPump, LOW);
  }
  else
  {
    delay (500);
  }
  delay(5000);
}

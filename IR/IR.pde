int inPin = A0;
int ledPin = 9;
int val = 0;

void setup() {
        Serial.begin(9600);
	pinMode(ledPin, OUTPUT);  // declare LED as output
        //pinMode(8, INPUT);    // declare pushbutton as input
        analogWrite(ledPin, 255);
}

void loop(){
  val = analogRead(inPin);  // read input value 
  delay(750);
  Serial.print((int)val, DEC);
  Serial.print("\n");
} 

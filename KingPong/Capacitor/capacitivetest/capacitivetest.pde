// CapSense.pde
// Paul Badger 2007
#define EOL_DELIMITER "\n"
int  i;
unsigned int x, y, p1, p2, l, av = 20, lowr = 57, highr = 65, count, test, boole;
unsigned int prev [5];
float foutx, fouty; 
int ledPin = 5; 
float nonTouched, store = 0;

void setup() {
  Serial.begin(9600);

  //DDRB=B101;     // DDR is the pin direction register - governs inputs and outputs- 1's are outputs
  // Arduino pin 8 output, pin 9 input, pin 10 output for "guard pin"
  //  preceding line is equivalent to three lines below
  pinMode(8, OUTPUT);     // output pin
  pinMode(9, INPUT);	// input pin
  pinMode(10, OUTPUT);    // guard pin
  digitalWrite(10, LOW);  //could also be HIGH - don't use this pin for changing output though
  pinMode(5, OUTPUT);

  analogWrite(ledPin,255);
  delay(1000);
  analogWrite(ledPin,0);
}


void loop() {
  y = 0;	  // clear out variables
  x = 0;

  for (i=0; i < av ; i++ ){	 // do it four times to build up an average - not really neccessary but takes out some jitter

	// LOW-to-HIGH transition
    //PORTB = PORTB | 1;			  // Same as line below -  shows programmer chops but doesn't really buy any more speed
    digitalWrite(8, HIGH);
    // output pin is PortB0 (Arduino 8), sensor pin is PortB1 (Arduinio 9)

    //while ((PINB & B10) != B10 ) {	  // while the sense pin is not high
    while (digitalRead(9) != 1) {    // same as above port manipulation above - only 20 times slower!
	x++;
    }
    delay(10);

    //  HIGH-to-LOW transition
    // PORTB = PORTB & 0xFE;		    // Same as line below - these shows programmer chops but doesn't really buy any more speed
    digitalWrite(8, LOW);
    //while((PINB & B10) != 0 ){		// while pin is not low  -- same as below only 20 times faster
    while(digitalRead(9) != 0 ) {     //;
      y++;
    }
  }
  x = x/av;
  y = y/av;
  
  p2 = x + y;
  
  //Serial.print((long)x, DEC);    // raw data - Low to High
  //Serial.print(EOL_DELIMITER);
  //Serial.print((long)y, DEC);    // raw data - High to Low
  //Serial.print(EOL_DELIMITER);
  //Serial.print((long)x, DEC);       // Smoothed Low to High
  //Serial.print(" ");
  //Serial.print(EOL_DELIMITER);
  //Serial.println((long)y, DEC); // Smoothed Low to High
  
  Serial.print((long)p2, DEC);
  //Serial.print("20");
  Serial.print(EOL_DELIMITER);
  
  
  
  if(p2 < highr){
    if(p2 > lowr)
      l = map(p2, lowr, highr, 0, 254);
    else
      l = 0;
  }
  else
    l = 255;
    
  prev[count] = l;
  if(count > 3)
    count++;
  else
    count = 0;
 Serial.print((int)l, DEC);
  boole = 0; 
  for(test = 0; test < 4 || boole; test++){
    if(prev[test] > highr){
      l = 255;
      boole = 1;
    }
    else
      boole = 0;
  }
  //Serial.print((int)l, DEC);
  analogWrite(ledPin,l);
  //Serial.print(EOL_DELIMITER);
  
  //if (p2 > 10){
    //analogWrite(ledPin,100);
  //}
  //else{
    //analogWrite(ledPin,0);
  //}
  p1 = p2;
} 

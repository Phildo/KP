// CapSense.pde
// Paul Badger 2007
#define EOL_DELIMITER "\n"
int  i;
unsigned int x, y;
float accum, fout, fval = .07;    // these are variables for a simple low-pass (smoothing) filter - fval of 1 = no filter - .001 = max filter
int ledPin = 5;   // select the pin for the LED
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
  delay(10);
  analogWrite(ledPin,0);
}

void loop() {
  y = 0;	  // clear out variables
  x = 0;

  for (i=0; i < 4 ; i++ ){	 // do it four times to build up an average - not really neccessary but takes out some jitter

	// LOW-to-HIGH transition
    //PORTB = PORTB | 1;			  // Same as line below -  shows programmer chops but doesn't really buy any more speed
    digitalWrite(8, HIGH);
    // output pin is PortB0 (Arduino 8), sensor pin is PortB1 (Arduinio 9)

    //while ((PINB & B10) != B10 ) {	  // while the sense pin is not high
    while (digitalRead(9) != 1) {    // same as above port manipulation above - only 20 times slower!
	x++;
    }
    delay(100);

    //  HIGH-to-LOW transition
    // PORTB = PORTB & 0xFE;		    // Same as line below - these shows programmer chops but doesn't really buy any more speed
    digitalWrite(8, LOW);
    //while((PINB & B10) != 0 ){		// while pin is not low  -- same as below only 20 times faster
    while(digitalRead(9) != 0 ) {     // same as above port manipulation - only 20 times slower!
	y++;
    }

    delay(100);
  }

  fout =  (fval * (float)x) + ((1-fval) * accum);  // Easy smoothing filter "fval" determines amount of new data in fout
  accum = fout;
  store++;
  if (store<50) {
    nonTouched = fout;
  }
  if (store>50){
    store = 50;
  }


  //Serial.print((long)x, DEC);    // raw data - Low to High
  //Serial.print(EOL_DELIMITER);
  //Serial.print((long)y, DEC);    // raw data - High to Low
  //Serial.print(EOL_DELIMITER);
  Serial.print( (long)fout, DEC); // Smoothed Low to High
  Serial.print(" ");
  //Serial.print(EOL_DELIMITER);
  Serial.println( (long)nonTouched, DEC); // Smoothed Low to High
   Serial.print(EOL_DELIMITER);
  
  
  if (fout>nonTouched+3){
    analogWrite(ledPin,255);
  }
  else{
    analogWrite(ledPin,0);
  }
 
}
 


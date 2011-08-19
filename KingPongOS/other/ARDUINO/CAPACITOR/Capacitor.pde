// Capacitor.pde
// Modified from Paul Badger's "CapSense.pde" 2007
// Phil Dougherty 2010

#define EOL_DELIMITER "\n" //For use in communication with Flash or other external programs through a server proxy


// 
// CONFIGURABLE VARIABLES
//
unsigned int av = 20, lowr = 0, highr = 100, stabl = 5;
// av = number of samples taken to get an average capacitance (the bigger the more stable, but also slower)
// lowr = "low range" : should be ~10% higher than the value "tot" when you want the LED to be off
// highr = "high range" : should be ~10% higher than the value "tot" when whatever you are sensing is VERY close (but NOT touching!) the sensor
// stabl = number of previous l values kept. Used to prevent "off" flickers when there is something on it. probably doesn't need to be changed.
int ledPin = 5, outPin = 8, inPin = 9, guardPin = 10; 
// Pin assignment for LED, out voltage, input, and then "guard" (respectively)

unsigned int x, y, tot, l, count, test, i;
// x = low->high capacitiance test
// y = high->low capacitance test
// tot = x+y (just to get a better average)
// l = brightness level of LED (0-255)
// count, test, and i are all counters... don't mess with 'em :P

// unsigned int prev[stabl]; -- NOTE: compiler complained when this was in... I don't know why. But make sure the number in [] is = to "stabl" (set above).
unsigned int prev[5]; // Array of previous l values


void setup() {
  
  Serial.begin(9600); // Baud Rate
  
  
  //Sets mode of pins
  pinMode(outPin, OUTPUT);    
  pinMode(inPin, INPUT);	
  pinMode(guardPin, OUTPUT);    // NO IDEA what guard pin is for... Kept it from Paul Badger's original code. 
  digitalWrite(guardPin, LOW);  // He probably knows what he's doing more than I :P
  pinMode(ledPin, OUTPUT);

  analogWrite(ledPin,255);      // Turns LED on bright for one second to let know that it has started
  delay(1000);
  analogWrite(ledPin,0);
}


void loop() {
  //Clears Variables  
  y = 0;	
  x = 0;

  // Runs through calculations, number of times specified by "av", to get a good average value for capacitance
  for (i=0; i < av ; i++ ){

    // LOW->HIGH transition
    digitalWrite(8, HIGH);
    while (digitalRead(9) != 1) {    
	x++;
    }
    delay(10);

    // HIGH->LOW transition
    digitalWrite(8, LOW);
    while(digitalRead(9) != 0 ) {    
      y++;
    }
    
  }
  
  // Calculates average's 'n sums 'em 
  x = x/av;
  y = y/av; 
  tot = x + y;
  
  // Prints out value (good for debugging)
  Serial.print((long)tot, DEC);
  Serial.print(" ");
  
  
  // Checks if value is in the range specified by lowr and highr. If it's below the range, l = 0. If it's above, l = 255.
  if(tot < highr){
    if(tot > lowr)
      // If it's right in between, it maps l to a val between 0 - 255
      l = map(tot, lowr, highr, 0, 254);
    else
      l = 0;
  }
  else
    l = 255;
    
    
  // keeps track of previous stabl # of led levels
  // NOTE: not necessarily in order !!
  prev[count] = l;
  if(count < stabl-1)
    count++;
  else
    count = 0;
    
  // Prints out mapped l value
  Serial.print((int)l, DEC);
  Serial.print(EOL_DELIMITER);
 
  l=0;
  // If an l value of 255 was seen in the past "stabl" runs, keep l = 255
  // Prevents on off flicker when light should be on
  for(test = 0; test < stabl; test++){
    Serial.print("TEST ");
    Serial.print((int)prev[test], DEC);
    Serial.print(EOL_DELIMITER);
    if(prev[test] == 255){
      l = 255;
    }
  }

  // output l value to LED
  analogWrite(ledPin,l);

} 

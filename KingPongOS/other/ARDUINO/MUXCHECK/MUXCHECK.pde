#define Z_PIN 13
#define S_ZERO 12
#define S_ONE 11
#define S_TWO 10
#define S_THREE 9
#define S_FOUR 8

int i;
int j;
int k;
int l;
int m;

int x;
int switches[36] = {0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0};

void setup(){
  Serial.begin(9600);
  pinMode(Z_PIN, INPUT);
  pinMode(S_ZERO, OUTPUT);
  pinMode(S_ONE, OUTPUT);
  pinMode(S_TWO, OUTPUT);
  pinMode(S_THREE, OUTPUT);
  pinMode(S_FOUR, OUTPUT);
  digitalWrite(S_ZERO, LOW);
  digitalWrite(S_ONE, LOW);
  digitalWrite(S_TWO, LOW);
  digitalWrite(S_THREE, LOW);
  digitalWrite(S_FOUR, LOW);

  x = 0;
}

void loop(){
  //*
    for(j = 0; j < 2; j++){
      for(k = 0; k < 2; k++){
        for(l = 0; l < 2; l++){
          for(m = 0; m < 2; m++){
            
            
            
            switches[x] = digitalRead(Z_PIN);
            //*
            Serial.print((int)j, DEC);
            Serial.print((int)k, DEC);
            Serial.print((int)l, DEC);
            Serial.print((int)m, DEC);
            Serial.print(":");
            Serial.print((int)switches[x], DEC);
            Serial.print(" ");
            delay(1000);
            //*/
            x++;
            
            digitalWrite(S_ZERO, m);
          }
          digitalWrite(S_ONE, l);
        }
        digitalWrite(S_TWO, k);
      }
      digitalWrite(S_THREE, j);
    }

  
  for(x = 0; x < 16; x++){
    Serial.print("");
    Serial.print((int)switches[x], DEC);
    Serial.print(" ");
  }
  Serial.print("\n");
  x = 0;
  
  
  //*/
}



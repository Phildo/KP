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


void setup(){
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
  digitalWrite(Z_PIN, HIGH);
  x = 5;
}

void loop(){
  //*
  for(i = 0; i < 2; i++){
    for(j = 0; j < 2; j++){
      for(k = 0; k < 2; k++){
        for(l = 0; l < 2; l++){
          for(m = 0; m < 2; m++){
            
            if(m == 0){
              digitalWrite(S_ZERO, LOW);
            }
            else {
              digitalWrite(S_ZERO, HIGH);
            }
          
            if(l == 0){
              digitalWrite(S_ONE, LOW);
            }
            else {
              digitalWrite(S_ONE, HIGH);
            }
          
            if(k == 0){
              digitalWrite(S_TWO, LOW);
            }
            else {
              digitalWrite(S_TWO, HIGH);
            }
          
            if(j == 0){
              digitalWrite(S_THREE, LOW);
            }
            else {
              digitalWrite(S_THREE, HIGH);
            }
          
            if(i == 0){
              digitalWrite(S_FOUR, LOW);
            }
            else {
              digitalWrite(S_FOUR, HIGH);
            }
          
            delay(x);
          }
        }
      }
    }
  }

  for(i = 1; i > -1; i--){
    for(j = 1; j > -1; j--){
      for(k = 1; k > -1; k--){
        for(l = 1; l > -1; l--){
          for(m = 1; m > -1; m--){
            
            if(m == 0){
              digitalWrite(S_ZERO, LOW);
            }
            else {
              digitalWrite(S_ZERO, HIGH);
            }
          
            if(l == 0){
              digitalWrite(S_ONE, LOW);
            }
            else {
              digitalWrite(S_ONE, HIGH);
            }
          
            if(k == 0){
              digitalWrite(S_TWO, LOW);
            }
            else {
              digitalWrite(S_TWO, HIGH);
            }
          
            if(j == 0){
              digitalWrite(S_THREE, LOW);
            }
            else {
              digitalWrite(S_THREE, HIGH);
            }
          
            if(i == 0){
              digitalWrite(S_FOUR, LOW);
            }
            else {
              digitalWrite(S_FOUR, HIGH);
            }
            
            delay(x);
          }
        }
      }
    }
  }
  
  
  //*/
}



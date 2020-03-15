#include <ESP8266WiFi.h>
#include <FirebaseArduino.h>

#define FIREBASE_HOST "agricontrol-7a254.firebaseio.com"
#define FIREBASE_AUTH "Sp6eVgoM10PcF75CU2ZgsHVCZBtV1PJM4prRXjZI"
#define WIFI_SSID "wifi-unilasalle"

void setup() {
  Serial.begin(9600);

  WiFi.begin(WIFI_SSID);
  Serial.print("connecting");
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    delay(500);
  }
  Serial.println();
  Serial.print("connected: ");
  Serial.println(WiFi.localIP());
  pinMode(D0, OUTPUT);
  Firebase.begin(FIREBASE_HOST, FIREBASE_AUTH);
}

void loop() {
  bool chuva = analogRead(A0) < 700;
  
  Firebase.setFloat("chuva", chuva);
  digitalWrite(D0, chuva);

  if (Firebase.failed()) {
      Serial.println(Firebase.error());  
      return;
  }
  delay(1);
}

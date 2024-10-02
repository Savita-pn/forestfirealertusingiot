# Forest-Fire-Detection-System
This project uses IoT sensors and Ip address of respective forest authorities to detect , send messages through Telegram bot and confirm forest fires.

## Sensors Used
  - Arduino (NodeMCU32): NodeMCU is a low-cost open source IoT platform. It initially included firmware which runs on the ESP8266 Wi-Fi SoC from Espressif Systems, and hardware which was based on the ESP-12 module. Later, support for the ESP32 32-bit MCU was added.
  - ![image](https://github.com/user-attachments/assets/4ac45ba8-95c7-4cb7-bd7d-24212df40e36)
  - Infrared Sensor: An infrared sensor (IR sensor) is a radiation-sensitive optoelectronic component with a spectral sensitivity in the infrared wavelength range 780 nm … 50 µm.
    <br> <img src="https://user-images.githubusercontent.com/72027411/219781449-ac07dc65-7213-4e57-be0c-0a84b80511dd.png" width="110" height="100">
  - Bulb: Lights on and off.
    <br> <img src="https://user-images.githubusercontent.com/72027411/211212492-8c49b6f3-6a92-4798-b2bd-b7157ad147d5.jpg" width="110" height="100">
    
  - Buzzer: The flexible ferromagnetic disk is attracted to the coil when the magnetic field is activated, then returns to rest when the magnetic field is off. By oscillating the signal through the coil, the buzzer produces a fluctuating magnetic field, which vibrates the disk. This movement makes the buzzer sound.
    <br> <img src="https://user-images.githubusercontent.com/72027411/211212502-3d92abbe-0f13-42a0-acff-27a8c9bad98c.jpg" width="110" height="100">
    ## Working
    step 1:Create Telegram Bot ID and get userid and password.
    step 2:Connect Aurdio MCU node ,buzzer and implement code.
    step 3:Connect Your mobile Hotspot,laptop and ESP tool to one network.
    step 4:Create Database named as Forestfire ,run all SQL Queries and keep start the Apache and MySql.
    step 5:Open the watchfirestatus website on the localhost and then keep the fire near sensor, then sensor detects the fire and updates in database,message will sent through bot.

    ##Screenshots
    ![Screenshot 2024-10-02 114217](https://github.com/user-attachments/assets/2692c7a3-3ca9-4e44-a580-6db258d5fdd1)
    ![Screenshot 2024-10-02 114117](https://github.com/user-attachments/assets/712db109-1556-4f50-906d-6d38ed6936f9)
    

    


    
    

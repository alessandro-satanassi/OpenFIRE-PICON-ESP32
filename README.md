# OpenFIRE-PICON-AS-ESP32
Lightgun PICON-AS for OpenFIRE-ESP32
https://alessandro-satanassi.github.io/OpenFIRE-PICON-AS-ESP32/

PICON-AS (nome del progetto: OpenFIRE-PICON-AS-ESP32) è una lightgun derivata dal modello PICON-OG di ICON che nasce per essere utilizzata in modalità completamente WIRELESS; la sua caratteristica distintiva è infatti la capacità di funzionare interamente a batteria, senza la necessità di alcun cavo di collegamento, garantendo una libertà di movimento assoluta anche durante l’uso del rinculo mediante solenoide. Rispetto al progetto originale, da cui riprende la struttura e l'hardware, la maggior parte dei componenti (inclusi molti file .STL) è identica, ma la periferica è stata adattata per semplificare i collegamenti elettrici e supportare appieno la gestione wireless. Per utilizzare tale connessione senza fili, è necessario collegare un dongle wireless a una porta USB del PC (vedi sezione Hardware).

Il cuore del sistema è una cella Li-ion 21700 ricaricabile e non rimovibile, gestita da un hardware di ricarica integrato direttamente nel dispositivo. Per la massima versatilità, la periferica dispone di un ingresso USB-C utile sia per rigenerare la carica sia per l'utilizzo cablato su PC, oltre a un jack per alimentazione esterna a 12V; quest'ultimo permette di azionare solenoide e circuiti preservando la batteria e ricaricandola simultaneamente. La dotazione comprende un interruttore di accensione generale, uno switch dedicato per disattivare il rinculo e un indicatore LED per il monitoraggio del livello di carica.

PICON-AS supporta numerose funzionalità, tra cui rumble, rinculo con solenoide, display OLED, LED Neopixel, joystick analogico, D-PAD, pulsanti START, SELECT, A,B,C e switch a pompa. N.B. Sebbene il sistema sia compatibile con tutte queste feature, l'installazione della maggior parte di esse rimane opzionale e a discrezione dell'utente.

A livello software, la lightgun è compatibile con il firmware originale per RP2040, ma le funzionalità aggiuntive sono disponibili solo utilizzando un microcontrollore ESP32-S3 con il firmware OpenFIRE-firmware-ESP32 (vedi sezione Hardware). Questo firmware per ESP32 è un porting del firmware originale (con cui mantiene piena compatibilità), al quale sono state apportate solo poche modifiche e l’aggiunta del supporto wireless. Si ringraziano gli autori dei progetti originali PICON-OG e OpenFIRE per il lavoro su cui si basa questo progetto.

===============================================================
Lightgun PICON-AS for OpenFIRE-ESP32
https://alessandro-satanassi.github.io/OpenFIRE-PICON-AS-ESP32/

PICON-AS (project name: OpenFIRE-PICON-AS-ESP32) is a lightgun derived from ICON's PICON-OG model, designed to be used in a completely WIRELESS mode; its distinctive feature is indeed the ability to operate entirely on battery power, without the need for any connecting cables, ensuring absolute freedom of movement even when using the solenoid recoil. Compared to the original project, from which it inherits the structure and hardware, most of the components (including many .STL files) are identical, but the peripheral has been adapted to simplify the electrical connections and fully support wireless management. To use this wireless connection, a wireless dongle must be connected to a USB port on the PC (see the Hardware section).

The heart of the system is a rechargeable and non-removable 21700 Li-ion cell, managed by charging hardware integrated directly into the device. For maximum versatility, the peripheral features a USB-C input, which is useful both for recharging and for wired use on a PC, as well as a 12V external power jack. The latter allows the solenoid and circuits to be operated while preserving the battery and charging it simultaneously. The equipment includes a main power switch, a dedicated switch to disable the recoil, and a LED indicator to monitor the charge level.

PICON-AS supports numerous features, including rumble, solenoid recoil, OLED display, Neopixel LEDs, analog joystick, D-PAD, START, SELECT, A, B, C buttons, and a pump-action switch. N.B. Although the system is compatible with all these features, the installation of most of them remains optional and at the user's discretion.

On the software side, the lightgun is compatible with the original firmware for RP2040, but the additional features are only available by using an ESP32-S3 microcontroller with the OpenFIRE-firmware-ESP32 firmware (see the Hardware section). This ESP32 firmware is a port of the original firmware (with which it maintains full compatibility), to which only a few modifications and the addition of wireless support have been made. Special thanks go to the authors of the original PICON-OG and OpenFIRE projects for the work on which this project is based.

============================================


OpenFIRE-PICON-ESP32 è un progetto derivato da Picon-OG, creato da iCON.  
Questa opera è distribuita sotto licenza Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0), come il progetto da cui è derivato.

================== licenza ===================================
https://creativecommons.org/share-your-work/cclicenses/
CC BY-NC-SA
This license enables reusers to distribute, remix, adapt, and build upon the material in any medium or format for noncommercial purposes only, and only so long as attribution is given to the creator. If you remix, adapt, or build upon the material, you must license the modified material under identical terms. CC BY-NC-SA includes the following elements:

 BY: credit must be given to the creator.
 NC: Only noncommercial uses of the work are permitted.
 SA: Adaptations must be shared under the same terms.
==============================================================

Il progetto Picon-OG
================================================================================================
https://diylightgun.com/lightgun-details/?lgid=506
============================================================
PiCON-OG
3D Printed Lightgun by iCON

Smaller, lighter version of the iCON featuring a sliding recoil, rumble motor, pump reload, analog joystick, 5-way navigation, OLED display, NeoPixel LED in back, accelerometer, screw in wide angle or fish eye lens connection. All parts (including the one-piece frame) can be printed on an Ender 3. The OLED, NeoPixel LED, accelerometer and analog joystick will only work with OpenFIRE firmware running on a Raspberry Pi RP2040 based microcontroller (Pico, Pico W, RP2040 Zero).

The author marked this model as their own original creation.
This work is licensed under a CC BY-NC-SA Creative Commons (4.0 International License)
================================================================================================

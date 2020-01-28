#!/usr/bin/env python
#turn Picture Mute
import sys
import serial


port = serial.Serial('/dev/ttyUSB0', baudrate=9600, bytesize=8, parity=serial.PARITY_NONE, stopbits=1, timeout=5)
port.open
#this is the code sent to the projector.  Replace it for your model
port.write("\x30\x4D\x2F\x6D\x1F")
received = port.read(8)
print received # newline is printed
port.close

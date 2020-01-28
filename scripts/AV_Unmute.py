#!/usr/bin/env python
#turn Power On
import sys
import serial


port = serial.Serial('/dev/ttyUSB1', baudrate=9600, bytesize=8, parity=serial.PARITY_NONE, stopbits=1, timeout=5)
port.open
#this is the code sent to the projector.  Replace it for your model
port.write("\x4D\x55\x54\x45\x20\x4F\x46\x46\x0D")
received = port.read(8)
print received # newline is printed
port.close
